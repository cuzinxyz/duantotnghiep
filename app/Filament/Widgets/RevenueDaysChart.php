<?php

namespace App\Filament\Widgets;

use App\Models\TransactionsHistory;
use Filament\Forms\Components\DatePicker;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Carbon;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class RevenueDaysChart extends ApexChartWidget
{
    /**
     * Chart Id
     */
    protected static string $chartId = 'revenueDaysChart';

    /**
     * Widget Title
     */
    protected static ?string $heading = 'Doanh thu theo ngày';

    protected static ?string $pollingInterval = null;

    // protected static ?string $pollingInterval = '1000s';
    protected static ?int $sort = 1;

    protected function getOptions(): array
    {
        $data = Trend::query(TransactionsHistory::where('transaction_type', 'LIKE', '%mua gói%')
            ->orWhere('transaction_type', 'LIKE', '%dịch vụ%'))
            ->between(
                start: Carbon::parse($this->filterFormData['date_start']),
                end: Carbon::parse($this->filterFormData['date_end']),
            )
            ->perDay()
            ->sum('amount');

        return [
            'chart' => [
                'type' => 'line',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'Tổng tiền',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'xaxis' => [
                'categories' => $data->map(fn (TrendValue $value) => Carbon::parse($value->date)->format('d-m')),
                'labels' => [
                    'style' => [
                        'colors' => '#9ca3af',
                        'fontWeight' => 600,
                    ],
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'colors' => '#9ca3af',
                        'fontWeight' => 600,
                    ],
                ],
            ],
            'colors' => ['#6366f1'],
            'stroke' => [
                'curve' => 'smooth',
            ],
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            DatePicker::make('date_start')
                ->label('Ngày bắt đầu')
                ->default(now()->startOfMonth())
                ->reactive()
                ->afterStateUpdated(function () {
                    $this->updateOptions();
                }),
            DatePicker::make('date_end')
                ->label('Ngày kết thúc')
                ->default(now()->endOfMonth())
                ->reactive()
                ->afterStateUpdated(function () {
                    $this->updateOptions();
                }),
        ];
    }

    public function getHeading(): string
    {
        return __('Doanh thu theo ngày ');
    }
}
