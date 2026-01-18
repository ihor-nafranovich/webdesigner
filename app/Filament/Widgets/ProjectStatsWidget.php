<?php

namespace App\Filament\Widgets;

use App\Models\Project;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProjectStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $totalProjects = Project::count();
        $featuredProjects = Project::where('featured', true)->count();
        $recentProjects = Project::where('created_at', '>=', now()->subDays(30))->count();

        return [
            Stat::make('Всего проектов', $totalProjects)
                ->description('Общее количество проектов')
                ->descriptionIcon('heroicon-m-folder')
                ->color('primary'),

            Stat::make('Выделенные проекты', $featuredProjects)
                ->description('Проекты в топе портфолио')
                ->descriptionIcon('heroicon-m-star')
                ->color('warning'),

            Stat::make('За последний месяц', $recentProjects)
                ->description('Новые проекты')
                ->descriptionIcon('heroicon-m-clock')
                ->color('success'),
        ];
    }
}
