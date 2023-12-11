<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Support;
use Filament\Forms\Form;
use App\Models\ChMessage;
use Filament\Tables\Table;
use PhpParser\Node\Stmt\Label;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use App\Models\TransactionsHistory;
use Illuminate\Support\Facades\Mail;
use Filament\Support\Enums\FontFamily;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use App\Filament\Resources\SupportResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SupportResource\RelationManagers;
use App\Mail\SendSupportEmail;
use Filament\Forms\Components\Textarea;

class SupportResource extends Resource
{
    protected static ?string $navigationGroup = 'Tương tác';

    protected static ?string $model = Support::class;
    

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Hỗ trợ';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->fontFamily(FontFamily::Mono)
                    ->searchable()
                    ->label('Tên người dùng'),
                Tables\Columns\TextColumn::make('title')
                    ->fontFamily(FontFamily::Mono)
                    ->searchable()
                    ->label('Tiêu đề')
                    ->words(5),
                Tables\Columns\TextColumn::make('category')
                    ->fontFamily(FontFamily::Mono)
                    ->searchable()
                    ->label('Chuyên mục')
                    ->words(5),
                Tables\Columns\TextColumn::make('status')
                    ->label('Phê duyệt')
                    ->state(function (Model $model) {
                        if ($model->status == 0) return 'Chưa phản hồi';
                        if ($model->status == 1) return 'Đã phản hồi';
                        if ($model->status == 2) return 'Đã xóa';
                    }),
                Tables\Columns\TextColumn::make('collaborator.name')
                    ->label('Người kiểm duyệt')
                    ->default(function (Model $model) {
                        if (
                            $model->collaborator_id == null
                            && $model->status == 1
                            || $model->status == 2
                        )
                            return 'Quản trị viên';

                        if ($model->collaborator_id == null && $model->status == 0) return 'Chưa có người kiểm duyệt';
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                ActionGroup::make([
                    \Filament\Tables\Actions\Action::make('active')
                        ->label('Phản hồi')
                        ->form([
                            Textarea::make('response')
                                ->label('Vui lòng điền phản hồi ?')
                                ->required(),
                        ])
                        ->action(function (array $data, Model $support) {
                            if ($support->status == 1) return true;

                            $collaborator = User::find($support->collaborator_id);
                            if ($collaborator) {
                                $total_assign = $collaborator->total_assign - 1;
                                if ($collaborator->total_assign <= 0) {
                                    $total_assign = 0;
                                }
                                User::where('id', $support->collaborator_id)->update([
                                    'total_assign' => $total_assign
                                ]);
                            }

                            $bot = User::where('name', 'BOT')->first();
                            $user = User::where('id', $support->user_id)->first();

                            $reason = 'Chào bạn ' . $user->name . ',
                                    Giải đáp thắc mắc của bạn về vấn đề: ' . $support->title . '
                                    Về vấn đề này chúng tôi phản hồi với bạn rằng: ' . $data['response'] . '
                                    Cảm ơn bạn đã đóng góp ý kiến với chúng tôi, góp phần giúp chúng tôi phục vụ khách hàng một cách tốt nhất';

                            ChMessage::create([
                                'from_id' => $bot->id,
                                'to_id' => $support->user_id,
                                'body' => $reason
                            ]);

                            Mail::to($user)->later(now()->addSeconds(10), new SendSupportEmail($support, $user));
                            Notification::make()
                                ->title('Đã phản hồi tới khách hàng!')
                                ->success()
                                ->send();
                            $support->status = 1;
                            $support->response = $data['response'];
                            $support->collaborator_id = null;
                            $support->save();
                        })
                        ->icon('heroicon-o-check-circle'),
                    Tables\Actions\DeleteAction::make()
                        ->action(function (Model $support) {
                            if ($support->status == 1) return true;

                            $collaborator = User::find($support->collaborator_id);
                            if ($collaborator) {
                                $total_assign = $collaborator->total_assign - 1;
                                if ($collaborator->total_assign <= 0) {
                                    $total_assign = 0;
                                }
                                User::where('id', $support->collaborator_id)->update([
                                    'total_assign' => $total_assign
                                ]);
                            }

                            User::where('id', $support->collaborator_id)->update([
                                'total_assign' => $total_assign
                            ]);

                            Notification::make()
                                ->title('Đã xóa phản hồi!')
                                ->success()
                                ->send();
                        }),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function infolist(Infolist $infolist): infolist
    {
        return $infolist
            ->schema([
                Section::make('Thông tin chi tiết')
                    ->schema([
                        TextEntry::make('user.name')
                            ->label('Tên khách hàng')
                            ->icon('heroicon-o-user-circle'),
                        TextEntry::make('user.email')
                            ->label('Email khách hàng')
                            ->icon('heroicon-m-envelope'),
                        TextEntry::make('user.phone_number')
                            ->label('SĐT cửa hàng')
                            ->default('Không có số điện thoại')
                            ->icon('heroicon-o-phone'),
                        TextEntry::make('title')
                            ->label('Tiêu đề'),
                        TextEntry::make('category')
                            ->label('Chuyên mục'),
                        TextEntry::make('body')
                            ->label('Nội dung cần hỗ trợ'),
                    ])
                    ->columns([
                        'default' => 0,
                        'lg' => 2,
                        'xl' => 2
                    ])
            ]);
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSupports::route('/'),
        ];
    }
    public static function getModelLabel(): string
    {
        return __('Hỗ trợ');
    }

    public static function getNavigationBadge(): ?string
    {
        return static::$model::where('status', 0)->count();
    }
}
