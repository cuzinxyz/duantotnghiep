<?php

namespace App\Filament\Widgets;

use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class ServicesOverViewChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'servicesOverViewChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Thống kê dịch vụ';

    protected static ?int $sort = 5;
    /**
     *
     * @return array
     */
    protected function getOptions(): array
    {
        $services = Service::leftJoin('purchased_service', 'services.id', '=', 'purchased_service.service_id')
        ->select('services.service_name', DB::raw('COUNT(purchased_service.service_id) AS aggregate'))
        ->groupBy('services.service_name')
        ->get();
        

        $data['name'] = $services->pluck('service_name')->toArray();
        $data['count'] = $services->pluck('aggregate')->toArray();

        return [
            'chart' => [
                'type' => 'donut',
                'height' => 300,
            ],
            'series' => $data['count'],
            'labels' => $data['name'],
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }

}
