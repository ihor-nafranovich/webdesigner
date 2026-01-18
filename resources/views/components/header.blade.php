{{-- Header компонент с навигацией --}}
<nav class="navbar">
    <div class="nav-container">
        {{-- Логотип --}}
        <div class="logo">
            <span class="logo-text">ИН</span>
        </div>
        
        {{-- Основное меню навигации --}}
        <ul class="nav-menu">
            <li><a href="#home" class="nav-link">Главная</a></li>
            <li><a href="#about" class="nav-link">Обо мне</a></li>
            <li><a href="#skills" class="nav-link">Навыки</a></li>
            <li><a href="#projects" class="nav-link">Проекты</a></li>
            <li><a href="#contact" class="nav-link">Контакты</a></li>
            <li><a href="/admin" class="nav-link admin-link">
                <i class="fas fa-cog"></i> Adminpanel
            </a></li>
            <li><a href="{{ asset('portfolio.pdf') }}" target="_blank" class="nav-link print-link" title="Печать портфолио">
                <i class="fas fa-print"></i> Печать
            </a></li>
        </ul>
        
        {{-- Переключатель темы (темная/светлая) --}}
        <div class="theme-toggle">
            <i class="fas fa-moon"></i>
        </div>
        
        {{-- Мобильное меню (гамбургер) --}}
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>
