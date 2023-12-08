<?php

namespace App\Filament\Widgets;

use Flowframe\Trend\Trend;
use Illuminate\Support\Carbon;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;
use App\Models\TransactionsHistory;
use Filament\Forms\Components\DatePicker;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class RevenueYearsChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'revenueYearsChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Doanh thu theo năm';

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 3;


    protected function getOptions(): array
    {
        $data = Trend::query(TransactionsHistory::where('transaction_type', "LIKE",  '%mua gói%')
            ->orWhere('transaction_type', "LIKE", '%dịch vụ%'))
            ->between(
                start: Carbon::parse($this->filterFormData['date_start']),
                end: Carbon::parse($this->filterFormData['date_end']),
            )
            ->perYear()
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
                'categories' => $data->map(fn (TrendValue $value) => $value->date),
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

            'plotOptions' =>  [
                'bar' => [
                    'dataLabels' => [
                        'position' => 'top'
                    ]
                ],
                'dataLabels' => [
                    'enabled' => true,
                    'style' => [
                        'colors' => '#333'
                    ],
                    'offsetX' => 30
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
                ->label('Năm bắt đầu')
                ->default(now()->startOfDecade()),
            DatePicker::make('date_end')
                ->label('Năm kết thúc')
                ->default(now()->endOfDecade()),
        ];
    }

    public function getHeading(): string
    {
        return __('Doanh thu theo năm ');
    }
}
