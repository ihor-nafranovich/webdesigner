<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique(); // URL-friendly версия названия
            $table->text('description')->nullable();
            $table->json('technologies')->nullable(); // Массив технологий
            $table->string('image')->nullable(); // Путь к изображению
            $table->string('demo_url')->nullable(); // Ссылка на демо
            $table->string('github_url')->nullable(); // Ссылка на GitHub
            $table->boolean('featured')->default(false); // Выделенный проект
            $table->integer('sort_order')->default(0); // Порядок сортировки
            $table->timestamps();
            
            // Индексы для оптимизации
            $table->index('featured');
            $table->index('sort_order');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
