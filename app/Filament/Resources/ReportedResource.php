<?php

namespace App\Filament\Resources;

use App\Models\Car;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Support;
use App\Models\Comments;
use App\Models\Reported;
use App\Models\WithDraw;
use Filament\Forms\Form;
use App\Models\ChMessage;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use App\Mail\AccountDeleteNotice;
use Filament\Tables\Filters\Filter;
use Illuminate\Support\Facades\Mail;
use Filament\Infolists\Components\Grid;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Tables\Actions\ReplicateAction;
use App\Filament\Resources\ReportedResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action as ActionsAction;
use Filament\Notifications\Actions\Action as NotificationsAction;

class ReportedResource extends Resource
{
    protected static ?string $navigationGroup = 'Tương tác';

    protected static ?string $model = Reported::class;

    

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fromUsers.name')
                    ->label('Người tố cáo')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('toUsers.name')
                    ->label('Người bị tố cáo')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian')
                    ->dateTime()
                    ->sortable()
                    ->since(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Trạng thái')
                    ->badge()
                    ->state(function (Model $record) {
                        if ($record->status == 0) return 'Chờ xử lý';
                        if ($record->status == 1) return 'Đã xử lý';
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('collaborator.name')
                    ->label('Người kiểm duyệt')
                    ->default(function (Model $model) {
                        if (
                            $model->collaborator_id == null
                            && $model->status == 1
                        )
                            return 'Quản trị viên';

                        if ($model->collaborator_id == null && $model->status == 0) return 'Chưa có người kiểm duyệt';
                    }),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                Filter::make('unactive')
                    ->label('Tố cáo cần xử')
                    ->query(fn (Builder $query): Builder => $query->where('status', 0))
                    ->default()
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                ActionGroup::make([
                    ActionsAction::make('viewCar')
                        ->label('Xem bài đăng')
                        ->url(fn (Model $report): string => route('car-detail', [
                            'slug' => $report->cars->slug,
                        ]))
                        ->openUrlInNewTab()
                        ->icon('heroicon-o-eye'),

                    ActionsAction::make('waring')
                        ->label('Cảnh cáo người bị tố cáo')
                        ->action(function (Model $report) {

                            $collaborator = User::find($report->collaborator_id);
                            if($collaborator) {
                                $total_assign = $collaborator->total_assign - 1;
                                if ($collaborator->total_assign <= 0) {
                                    $total_assign = 0;
                                }
    
                                User::where('id', $report->collaborator_id)->update([
                                    'total_assign' => $total_assign
                                ]);
                            }

                            $report->status = 1;
                            $report->collaborator_id = null;
                            $report->save();
                            $bot = User::where('name', 'BOT')->first();
                            $user = User::where('id', $report->to_user_id)->first();

                            $reason = 'Chào bạn ' . $user->name . ',
                                        Bài đăng tin mua xe của bạn có tiêu đề:' . $report->cars->title . '
                                        đã bị tố cáo với nội dụng:' . $report->content . '
                                        . Qua xác minh chúng tôi nhận thấy rằng tố cáo này là hoàn toàn đúng sự thật,Vì vậy chúng tôi sẽ xóa bài đăng này và cảnh báo bạn về lỗi vi phạm trên,nếu còn tiếp tục vi phạm chúng tôi sẽ tiến hành khóa tài khoản của bạn.
                                        Trân trọng cảm ơn!';

                            ChMessage::create([
                                'from_id' => $bot->id,
                                'to_id' => $report->to_user_id,
                                'body' => $reason
                            ]);
                            Car::where('id', $report->car_id)->delete();
                            Notification::make()
                                ->title('Cảnh báo thành công')
                                ->success()
                                ->send();
                        })
                        ->icon('heroicon-o-exclamation-circle'),

                    ActionsAction::make('delete_user')
                        ->label('Xóa tài khoản bị tố cáo')
                        ->action(function (Model $report) {

                            $collaborator = User::find($report->collaborator_id);

                            if ($collaborator) {
                                $total_assign = $collaborator->total_assign - 1;
                                if ($collaborator->total_assign <= 0) {
                                    $total_assign = 0;
                                }


                                User::where('id', $report->collaborator_id)->update([
                                    'total_assign' => $total_assign
                                ]);
                            }

                            $report->status = 1;
                            $report->collaborator_id = null;
                            $report->save();

                            $bot = User::where('name', 'BOT')->first();

                            $user = User::where('id', $report->to_user_id)->first();

                            $reason = 'Chúng tôi đã nhận được rất nhiều tố cáo về những tin đăng xe của bạn.
                                        Qua xác minh chúng tôi nhận thấy rằng những tố cáo này là hoàn toàn đúng sự thật.
                                        Điều này đã vi phạm đến các quy định của chúng tôi về bài đăng tin,
                                        vì vậy chúng tôi buộc lòng tiến hành khóa tài khoản
                                        cùng với tất cả bài đăng của bạn.
                                        Nếu có thắc mắc bạn vui lòng liên hệ: 0999999999.
                                        Trân trọng cảm ơn!';

                            Mail::to($user)->later(now()->addSeconds(5), new AccountDeleteNotice($user, $reason));

                            User::destroy($report->to_user_id);
                            Reported::where('to_user_id', $report->to_user_id)->delete();
                            Reported::where('from_user_id', $report->to_user_id)->delete();
                            Car::where('user_id', $report->to_user_id)->delete();


                            Comments::where('user_id', $report->to_user_id)->delete();
                            WithDraw::where('user_id', $report->to_user_id)->delete();
                            Support::where('user_id', $report->to_user_id)->delete();

                            Notification::make()
                                ->title('Xóa tài khoản thành công')
                                ->success()
                                ->send();
                        })
                        ->icon('heroicon-o-user-minus'),
                    Tables\Actions\DeleteAction::make()
                        ->action(function (Model $report) {
                            $collaborator = User::find($report->collaborator_id);
                            if ($collaborator) {
                                $total_assign = $collaborator->total_assign - 1;
                                if ($collaborator->total_assign <= 0) {
                                    $total_assign = 0;
                                }


                                User::where('id', $report->collaborator_id)->update([
                                    'total_assign' => $total_assign
                                ]);
                            }

                            Reported::where('id', $report->id)->delete();
                            $report->collaborator_id = null;
                            $report->save();
                        })
                        ->label('Xóa tố cáo'),
                ])
                    ->button()
                    ->label('Hành động')
            ])

            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([])
            ->emptyStateHeading('Không có tố cáo xử lý');
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Grid::make()
                    ->schema([
                        Section::make('Thông tin người tố cáo')
                            ->schema([
                                TextEntry::make('fromUsers.name')
                                    ->label('Tên người tố cáo')
                                    ->icon('heroicon-o-user-circle'),

                                TextEntry::make('fromUsers.email')
                                    ->label('Email')
                                    ->icon('heroicon-m-envelope'),

                                TextEntry::make('fromUsers.phone_number')
                                    ->label('Số điện thoại')
                                    ->icon('heroicon-o-phone'),

                                TextEntry::make('created_at')
                                    ->label('Thời gian tạo')
                                    ->icon('heroicon-o-calendar-days'),
                            ])
                            ->columns([
                                'xl' => 2,
                                '2xl' => 2,
                            ]),

                        Section::make('Nội dung')
                            ->schema([
                                Section::make('')
                                    ->schema([
                                        TextEntry::make('toUsers.name')
                                            ->label('Người bị tố cáo'),

                                        TextEntry::make('cars.title')
                                            ->label('Xe bị tố cáo'),

                                        TextEntry::make('content')
                                            ->label('Nội dung tố cáo'),
                                    ])
                                    ->columns([
                                        'xl' => 2,
                                        '2xl' => 2,
                                    ]),
                            ]),
                    ])->columns([
                        'xl' => 4,
                        '2xl' => 5,
                    ]),

            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReporteds::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getModelLabel(): string
    {
        return __('Report');
    }

    public static function getNavigationBadge(): ?string
    {
        return static::$model::where('status', 0)->count();
    }

    public function redirectToFrontend()
    {
        return redirect()->route('/');
    }
}
