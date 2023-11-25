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
use Filament\Forms\Components\MarkdownEditor;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CarResource\RelationManagers;
use Filament\Forms\Components\Radio;

class CarResource extends Resource
{
    protected static ?string $navigationGroup = 'Quản lý nội dung';

    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Xe';

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
                                    ->reactive()
                                    ->afterStateUpdated(fn (callable $set) => $set('model_car_id', null))
                                    ->placeholder('Chọn loại xe'),

                                Select::make('model_car_id')
                                    ->label('Model xe')
                                    ->required()
                                    ->options(function (callable $get) {
                                        $modelCar = \App\Models\ModelCar::where('brand_id', $get('brand_id'))->select('id', 'model_name')->get();

                                        $output = [];

                                        foreach ($modelCar as $car) {
                                            $carData = $car->toArray();
                                            $output[$car['id']] = $car['model_name'];
                                        }

                                        return $output;
                                    })
                                    ->placeholder('Chọn loại xe'),

                                TextInput::make('car_info.mileage')
                                    ->label('Số KM đã đi')
                                    ->required()
                                    ->numeric(),

                                TextInput::make('car_info.engine')
                                    ->label('Mã lực')
                                    ->required()
                                    ->numeric(),

                                Select::make('car_info.fuelType')
                                    ->label('Loại nhiên liệu')
                                    ->options([
                                        'Petrol' => 'Petrol',
                                        'Gas' => 'Gas'
                                    ]),

                                Radio::make('car_info.color')
                                    ->label('Màu sắc')
                                    ->options([
                                        'red' => 'Đỏ',
                                        'black' => 'Đen',
                                        'white' => 'Trắng',
                                        'yellow' => 'Vàng',
                                        'silver' => 'Bạc'
                                    ])
                                    ->columns([
                                        'default' => 1,
                                        'xl' => 2,
                                        '2xl' => 2
                                    ]),

                                Select::make('car_info.number_of_seats')
                                    ->label('Số chỗ ngồi')
                                    ->options([
                                        '4' => '4',
                                        '5' => '5',
                                        '6' => '6',
                                        '7' => '7',
                                        '8' => '8',


                                    ]),

                                Radio::make('car_info.transmission')
                                    ->required()
                                    ->label('Hộp số')
                                    ->options([
                                        'sotay' => 'Số tay',
                                        'sotudong' => 'Tự động'
                                    ])
                                    ->columns([
                                        'default' => 1,
                                        'xl' => 2,
                                        '2xl' => 2
                                    ]),

                                Select::make('car_info.year_of_manufacture')
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

                                MarkdownEditor::make('description')
                                    ->toolbarButtons([
                                        'attachFiles',
                                        'blockquote',
                                        'bold',
                                        'bulletList',
                                        'codeBlock',
                                        'heading',
                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'table',
                                        'undo',
                                    ])
                                    ->columnSpanFull()

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
                                            ->inline(false)
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

                                Section::make(' Hình ảnh & video')
                                    ->schema([
                                        FileUpload::make('verhicle_image_library')
                                            ->label('Hình ảnh')
                                            ->required()
                                            ->multiple()
                                            ->image()
                                            ->directory('car_photos'),

                                        FileUpload::make('verhicle_videos')
                                            ->label('video')
                                            ->required()
                                            ->acceptedFileTypes(['video/mp4', 'video/avi', 'video/mov', 'video/wmv', 'video/flv', 'video/mkv', 'video/webm'])
                                            ->directory('video_car')
                                            ->maxSize(551200),
                                    ])

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

                                Select::make('city_id')
                                    ->label('Thành phố')
                                    ->options(\Kjmtrue\VietnamZone\Models\Province::all()->pluck('name', 'id'))
                                    ->required()
                                    ->reactive()
                                    ->afterStateUpdated(fn (callable $set) => $set('district_id', null))
                                    ->placeholder('Chọn thành phố'),

                                Select::make('district_id')
                                    ->label('Quận, Huyện, Thị xã')

                                    ->options(function (callable $get) {
                                        $districts = \Kjmtrue\VietnamZone\Models\District::whereProvinceId($get('city_id'))->get()->pluck('name');

                                        if (!$districts) {
                                            return \Kjmtrue\VietnamZone\Models\District::all()->pluck('name');
                                        }

                                        return $districts;
                                    })
                                    ->required()
                                    ->placeholder('Quận, Huyện, Thị xã'),

                                TextInput::make('full_address')
                                    ->label('Địa chỉ cụ thể')
                                    ->string()
                                    ->required(),

                                TextInput::make('contact.email')
                                    ->email()
                                    ->required(),

                                TextInput::make('contact.phone_number')
                                    ->label('Số điện thoại')
                                    ->required()
                                    ->rule('regex:/^(84|0[3|5|7|8|9])+([0-9]{8})$/'),

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
                    ->label('Tiêu đề')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Tác giả')
                    ->sortable(),


                Tables\Columns\TextColumn::make('user.service.service_name')
                    ->label('Gói tin')
                    ->sortable(),


                Tables\Columns\IconColumn::make('recommended')
                    ->label('Xu hướng')
                    ->boolean(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                //
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
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
    public static function getModelLabel(): string
    {
        return __('Xe  ');
    }
}
