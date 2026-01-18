<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-commerce Platform',
                'description' => 'Современная платформа для интернет-магазина с использованием React и Node.js. Включает систему управления товарами, корзину покупок, интеграцию с платежными системами.',
                'technologies' => ['React', 'Node.js', 'MongoDB', 'Express', 'Stripe'],
                'demo_url' => 'https://demo.example.com',
                'github_url' => 'https://github.com/example/ecommerce',
                'featured' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Task Management App',
                'description' => 'Приложение для управления задачами с drag-and-drop функциональностью. Позволяет создавать проекты, назначать задачи, отслеживать прогресс.',
                'technologies' => ['Vue.js', 'Firebase', 'SCSS', 'Vuex'],
                'demo_url' => 'https://tasks.example.com',
                'github_url' => 'https://github.com/example/taskmanager',
                'featured' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Analytics Dashboard',
                'description' => 'Панель аналитики с интерактивными графиками и реальными метриками. Включает различные типы диаграмм, экспорт данных, настраиваемые виджеты.',
                'technologies' => ['TypeScript', 'D3.js', 'Express', 'PostgreSQL'],
                'demo_url' => 'https://analytics.example.com',
                'github_url' => 'https://github.com/example/analytics',
                'featured' => false,
                'sort_order' => 3,
            ],
            [
                'title' => 'Portfolio Website',
                'description' => 'Персональный сайт-портфолио с адаптивным дизайном и темной/светлой темой. Создан с использованием Laravel и Filament для управления контентом.',
                'technologies' => ['Laravel', 'Filament', 'Tailwind CSS', 'JavaScript'],
                'demo_url' => 'https://portfolio.example.com',
                'github_url' => 'https://github.com/example/portfolio',
                'featured' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Weather App',
                'description' => 'Мобильное приложение для прогноза погоды с красивым интерфейсом и уведомлениями. Использует API погодных данных и геолокацию.',
                'technologies' => ['React Native', 'API', 'JavaScript', 'AsyncStorage'],
                'demo_url' => 'https://weather.example.com',
                'github_url' => 'https://github.com/example/weather',
                'featured' => false,
                'sort_order' => 5,
            ],
        ];

        foreach ($projects as $project) {
            Project::firstOrCreate(
                ['title' => $project['title']],
                $project
            );
        }
    }
}
