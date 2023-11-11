<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Blade;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;

class Form2 extends Component implements HasForms
{

    use InteractsWithForms;

    public ?array $data = [
        'name' => '',
    ];
    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Nhập thông tin xe cần bán')
                        ->schema([
                            Section::make('Nhập thông tin xe của bạn')
                                ->schema([
                                    TextInput::make('name')
                                        ->label('Hãng xe')
                                        ->rules(['required', 'min:3'])
                                        ->placeholder('Nhập hãng xe')
                                        ->live(onBlur: true),
                                    TextInput::make('company')
                                        ->label('Dòng xe')
                                        ->required()
                                        ->placeholder('Nhập dòng xe'),
                                    TextInput::make('version')
                                        ->label('Phiên bản')
                                        ->required()
                                        ->placeholder('Nhập phiên bản'),

                                    TextInput::make('production_year')
                                        ->label('Năm sản xuất')
                                        ->required()
                                        ->placeholder('Nhập năm sản xuất')
                                        ->live(onBlur: true),
                                    Select::make('status')
                                        ->label('Loại xe')
                                        ->required()
                                        ->placeholder('Chọn loại xe')
                                        ->options([
                                            'old_car' => 'Xe cũ',
                                            'new_car' => 'Xe mới'
                                        ]),
                                    TextInput::make('km')
                                        ->required()
                                        ->placeholder('Nhập số km')
                                        ->label('Số KM'),

                                    TextInput::make('price')
                                        ->label('Giá muốn bán')
                                        ->required()
                                        ->placeholder('Nhập giá muốn bán')
                                ])
                                ->columns(2)
                        ]),
                    Wizard\Step::make('Chi tiết về xe')
                        ->schema([
                            Section::make('Nhập thông tin xe chi tiết xe của bạn')
                                ->schema([
                                    Select::make('gear')
                                        ->required()
                                        ->label('Hộp số')
                                        ->placeholder('Nhập hộp số')
                                        ->options([
                                            'floor_number' => 'Số sàn',
                                            'auto_number' => 'Tự động'
                                        ]),

                                    Select::make('fuel')
                                        ->required()
                                        ->label('Nhiên liệu')
                                        ->placeholder('Chọn loại nhiên liệu')
                                        ->options([
                                            'gasoline' => 'Xăng',
                                            'electricity' => 'Điện'
                                        ]),

                                    TextInput::make('origin')
                                        ->required()
                                        ->placeholder('Nhập nơi sản xuất')
                                        ->label('Xuất xứ'),

                                    TextInput::make('capacity')
                                        ->required()
                                        ->placeholder('Nhập dung tích động cơ')
                                        ->label('Dung tích động cơ (lít)'),

                                    Select::make('designs')
                                        ->placeholder('Chọn kiểu dáng ')
                                        ->label('Kiểu dáng')
                                        ->required()
                                        ->options([
                                            'old_car' => 'Xe cũ',
                                            'new_car' => 'Xe mới'
                                        ]),

                                    Select::make('seats')
                                        ->placeholder('Chọn số ghế')
                                        ->label('Số ghế')
                                        ->required()
                                        ->options([
                                            '1' => '4',
                                            '2' => '5',
                                            '3' => '6',
                                            '4' => '7',
                                        ]),

                                    Select::make('colors')
                                        ->label('Màu sắc')
                                        ->placeholder('Chọn màu sắc')
                                        ->required()
                                        ->options([
                                            '1' => 'Đỏ',
                                            '2' => 'Đen'
                                        ]),

                                    TextInput::make('title')
                                        ->label('Tiêu đề')
                                        ->required()
                                        ->placeholder('Nhập vào tiêu đề'),

                                    RichEditor::make('content')
                                        ->label('Mô tả')
                                        ->columnSpanFull()
                                ])
                                ->columns(2)
                        ]),
                    Wizard\Step::make('Hình ảnh xe')
                        ->schema([
                            Section::make('Tải lên hình ảnh xe của bạn')
                                ->schema([
                                    FileUpload::make('before_img')
                                        ->required()
                                        ->label('Ảnh trước xe'),

                                    FileUpload::make('after_img')
                                        ->required()
                                        ->label('Ảnh sau xe'),

                                    FileUpload::make('left_img')
                                        ->required()
                                        ->label('Ảnh bên trái xe'),

                                    FileUpload::make('right_img')
                                        ->required()
                                        ->label('Ảnh bên phải xe'),

                                    FileUpload::make('dashboard_img')
                                        ->required()
                                        ->label('Ảnh Dashboard')
                                        ->imageEditorEmptyFillColor('#000000'),

                                    FileUpload::make('registration')
                                        ->required()
                                        ->label('Ảnh đăng kiểm'),

                                    FileUpload::make('multi_img')
                                        ->label('Chọn thêm ảnh')
                                        ->placeholder('Tải thêm ảnh (tối đa 4 ảnh)')
                                        ->multiple()
                                        ->maxFiles(4)
                                        ->columnSpanFull(),

                                ])
                        ]),
                ])
                    ->submitAction(
                        new HtmlString(Blade::render(<<<BLADE
                    <x-filament::button
                        type="submit"
                        size="sm"
                    >
                        Submit
                    </x-filament::button>
                BLADE))
                    )
                    ->startOnStep(3)
                    ->previousAction(
                        fn (Action $action) => $action->label('Quay lại'),
                    )
                    ->nextAction(
                        fn (Action $action) => $action->label('Tiếp tục'),
                    )
            ])->statePath('data');
    }



    public function create(): void
    {
        dd($this->form->getState());
    }

    // #[Title('Đăng tin bán xe')]
    #[Layout("components.partials.layout-client")]
    public function render()
    {
        return view('livewire.form2');
    }
}
