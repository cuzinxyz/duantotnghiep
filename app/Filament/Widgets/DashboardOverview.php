<?php

namespace App\Filament\Widgets;

use App\Models\Car;
use App\Models\User;
use App\Models\TransactionsHistory;
use Filament\Forms\Components\DatePicker;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class DashboardOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Tổng số lượt tin', Car::where('status' , 1)->count())
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),

            Stat::make('Tổng doanh thu', number_format(TransactionsHistory::where('transaction_type', "LIKE", '%mua gói%')->sum('amount'), 0, '', ',') . ' VNĐ')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),

            Stat::make('Tổng số tài khoản đã đăng kí', User::count())
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            DatePicker::make('date_start')
            ->default(now()->subMonth()),
            DatePicker::make('date_end')
            ->default(now()),
        ];
    }
}
