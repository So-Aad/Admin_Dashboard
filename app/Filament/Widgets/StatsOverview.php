<?php
 
namespace App\Filament\Widgets;

use App\Models\employee;
use App\Models\User;
use App\Models\country;
use App\Models\department;


use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
 
class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Department', department::query()->count())
            ->description('All the department from the database')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
        Stat::make('Employees', employee::query()->count())
            ->description('All the Employees from the database')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('danger'),
        Stat::make('Countries', country::query()->count())
            ->description('All the countries from the database')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),
        ];
    }
}