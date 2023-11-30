<?php

namespace App\Filament\Resources;

use App\Models\Car;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Reported;
use Filament\Forms\Form;
use App\Models\ChMessage;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use App\Mail\AccountDeleteNotice;
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
use App\Models\Comments;
use App\Models\Support;
use App\Models\WithDraw;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action as ActionsAction;
use Filament\Notifications\Actions\Action as NotificationsAction;

class ReportedResource extends Resource
{
    protected static ?string $navigationGroup = 'Hành động khách hàng';

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
                    ->since()
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                ActionGroup::make([
                    ReplicateAction::make()
                        ->label('Xem bài đăng')
                        ->successRedirectUrl(fn (Model $report): string => route('car-detail', [
                            'slug' => $report->cars->slug,
                        ]))
                        ->openUrlInNewTab(),

                    ActionsAction::make('waring')
                        ->label('Cảnh cáo người bị tố cáo')
                        ->action(function (Model $report) {
                            $bot = User::where('name', 'BOT')->first();
                            $car = Car::find($report->car_id);
                            $user = User::where('id', $report->to_user_id)->first();

                            $reason = 'Chào bạn ' . $user->name . ', 
                                        Bài đăng tin mua xe của bạn có tiêu đề:' . $car->title . '
                                        đã bị tố cáo với nội dụng:' . $report->content . '
                                        . Qua xác minh chúng tôi nhận thấy rằng tố cáo này là hoàn toàn đúng sự thật,Vì vậy chúng tôi sẽ xóa bài đăng này và cảnh báo bạn về lỗi vi phạm trên,nếu còn tiếp tục vi phạm chúng tôi sẽ tiến hành khóa tài khoản của bạn.
                                        Trân trọng cảm ơn!';

                            ChMessage::create([
                                'from_id' => $bot->id,
                                'to_id' => $report->to_user_id,
                                'body' => $reason
                            ]);

                            Notification::make()
                                ->title('Cảnh báo thành công')
                                ->success()
                                ->send();
                        })
                        ->icon('heroicon-o-exclamation-circle'),

                    ActionsAction::make('delete_user')
                        ->label('Xóa tài khoản bị tố cáo')
                        ->action(function (Model $report) {
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
            ->emptyStateActions([]);
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

    public function redirectToFrontend()
    {
        return redirect()->route('/');
    }
}
