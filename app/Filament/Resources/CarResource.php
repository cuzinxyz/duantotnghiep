<?php

namespace App\Filament\Resources;

use App\Models\Car;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\CheckboxList;
use App\Filament\Resources\CarResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CarResource\RelationManagers;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Grid::make()
                    ->schema([

                        Section::make('Thông tin xe')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Tiêu đề')
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                    ->required(),

                                TextInput::make('slug')
                                    ->label('Đường dẫn')
                                    ->required()
                                    ->disabled()
                                    ->dehydrated(),

                                TextInput::make('price')
                                    ->label('Giá muốn bán')
                                    ->required()
                                    ->numeric(),

                                Select::make('brand_id')
                                    ->label('Hãng xe')
                                    ->relationship(name: 'brand', titleAttribute: 'brand_name')
                                    ->required()
                                    ->placeholder('Chọn loại xe'),

                                TextInput::make('car_info.mileage')
                                    ->label('Số KM đã đi')
                                    ->required()
                                    ->numeric(),

                                Select::make('car_info.engine')
                                    ->label('Loại động cơ')
                                    ->required()
                                    ->options([
                                        'tubo' => 'Turbo',
                                        'haha' => 'haha'
                                    ]),

                                Select::make('car_info.fuelType')
                                    ->label('Loại nhiên liệu')
                                    ->options([
                                        'Petrol' => 'Petrol',
                                        'Gas' => 'Gas'
                                    ]),

                                Select::make('car_info.color')
                                    ->label('Màu sắc')
                                    ->options([
                                        'red' => 'Đỏ',
                                        'black' => 'Đen',
                                        'white' => 'Trắng',
                                        'yellow' => 'Vàng',
                                        'silver' => 'Bạc'
                                    ]),

                                Select::make('car_info.manufactured')
                                    ->label('Năm sản xuất')
                                    ->options([
                                        '2010' => '2010',
                                        '2011' => '2011',
                                        '2012' => '2012',
                                        '2013' => '2013',
                                        '2014' => '2014',
                                        '2015' => '2015',
                                        '2016' => '2016',
                                        '2017' => '2017',
                                        '2018' => '2018',
                                        '2019' => '2019',
                                        '2020' => '2020',
                                        '2021' => '2021',
                                        '2022' => '2022',
                                        '2023' => '2023',


                                    ]),

                                Select::make('car_info.condition')
                                    ->options([
                                        'used' => 'Đã qua sử dụng',
                                    ]),

                            ])
                            ->columns([
                                'default' => 1,
                                'xl' => 2,
                                '2xl' => 2
                            ])
                            ->columnSpan([
                                'default' => 1,
                                'xl' => 4,
                                '2xl' => 5
                            ]),

                        Grid::make('')
                            ->schema([
                                Section::make()
                                    ->schema([
                                        Toggle::make('recommended')
                                            ->label('Xu hướng')
                                            ->onColor('success')
                                            ->offColor('danger'),
                                    ]),

                                Section::make('')
                                    ->schema([
                                        CheckboxList::make('car_info.features')
                                            ->label('Tính năng')
                                            ->required()
                                            ->options([
                                                'PremiumWheel' => 'Premium Wheel',
                                                'Moonroof' => 'Moonroof',
                                                'PremiumAudio' => 'Premium Audio',
                                                'Navigation' => 'Navigation',
                                                'FrontHeatedSeats' => 'Front Heated Seats',
                                                'PremiumSeatMaterial' => 'Premium Seat Material',
                                                'Bluetooth' => 'Bluetooth',
                                                'PremiumSeatMaterial' => 'Premium Seat Material',
                                                'FrontHeatedSeats' => 'Front Heated Seats',
                                                'RemoteEngineStart' => 'Remote Engine Start',
                                                'BlindSpotSystem' => 'Blind Spot System',
                                                'Multi_ZoneClimateControl' => 'Multi-Zone Climate Control'
                                            ])->columns([
                                                'default' => 1,
                                                'xl' => 2,
                                                '2xl' => 2
                                            ]),
                                    ]),

                            ])->columnSpan([
                                'default' => 1,
                                'xl' => 2,
                                '2xl' => 3
                            ]),


                        Section::make('Thông tin liên hệ')
                            ->schema([
                                Select::make('user_id')
                                    ->relationship(name: 'user', titleAttribute: 'name')
                                    ->label('Người đăng')
                                    ->required()
                                    ->placeholder('Chọn người đăng'),

                                Select::make('city')
                                    ->label('Thành phố')
                                    ->options([
                                        'Hà Nội' => 'Hà Nội',
                                        'Tp Hồ Chí Minh' => 'Tp Hồ Chí Minh'
                                    ])
                                    ->required()
                                    ->placeholder('Chọn thành phố'),

                                TextInput::make('full_address')
                                    ->label('Địa chỉ cụ thể')
                                    ->required()
                                    ->placeholder('Quận, Huyện, Thị xã'),

                                TextInput::make('contact.email')
                                    ->email()
                                    ->required(),

                                TextInput::make('contact.phone_number')
                                    ->label('Số điện thoại')
                                    ->numeric()
                                    ->required(),

                                TextInput::make('contact.facebook'),

                                TextInput::make('contact.twitter'),

                            ])
                            ->columns([
                                'default' => 1,
                                'xl' => 2,
                                '2xl' => 2
                            ])
                            ->columnSpan([
                                'default' => 1,
                                'xl' => 4,
                                '2xl' => 5
                            ]),

                        Section::make(' Hình ảnh & video')
                            ->schema([
                                FileUpload::make('verhicle_image_library')
                                    ->label('Hình ảnh')
                                    ->required()
                                    ->multiple()
                                    ->image(),

                                FileUpload::make('verhicle_videos')
                                    ->label('video')
                                    ->required()
                                    ->acceptedFileTypes(['video/mp4', 'video/avi', 'video/mov', 'video/wmv', 'video/flv', 'video/mkv', 'video/webm'])
                                    ->directory('video_car')
                                    ->maxSize(551200),
                            ])
                            ->columnSpan([
                                'default' => 1,
                                'xl' => 2,
                                '2xl' => 3
                            ]),
                    ])
                    ->columns([
                        'default' => 1,
                        'xl' => 6,
                        '2xl' => 8
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('brand_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('full_address')
                    ->searchable(),
                Tables\Columns\IconColumn::make('recommended')
                    ->boolean(),
                Tables\Columns\IconColumn::make('car_info.mileage')
                    ->label('Số KM đã đi'),
                Tables\Columns\ImageColumn::make('verhicle_image_library'),

                Tables\Columns\ImageColumn::make('verhicle_videos'),
                // Tables\Columns\ViewColumn::make('verhicle_image_library')->view('tables.columns.images-car'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('deleted_at')
                //     ->dateTime()
                //     ->sortable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                // 
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'view' => Pages\ViewCar::route('/{record}'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
