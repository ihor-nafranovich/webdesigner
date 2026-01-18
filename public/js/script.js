// Переключение темы
const themeToggle = document.querySelector('.theme-toggle');
const currentTheme = localStorage.getItem('theme') || 'dark';

document.documentElement.setAttribute('data-theme', currentTheme);

themeToggle.addEventListener('click', () => {
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
    
    // Обновляем иконку
    const icon = themeToggle.querySelector('i');
    icon.className = newTheme === 'dark' ? 'fas fa-moon' : 'fas fa-sun';
});

// Мобильное меню
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
});

// Закрытие меню при клике на ссылку
document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');
}));

// Плавная прокрутка
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        
        // Пропускаем пустые href (например, href="#")
        if (!href || href === '#' || anchor.classList.contains('print-link') || anchor.classList.contains('admin-link')) {
            return;
        }
        
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Анимация при скролле
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Наблюдаем за секциями
document.querySelectorAll('section').forEach(section => {
    section.style.opacity = '0';
    section.style.transform = 'translateY(20px)';
    section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(section);
});

// Обработка формы контактов
const contactForm = document.querySelector('.contact-form');
if (contactForm) {
    // Добавляем обработчик для показа индикатора загрузки
    contactForm.addEventListener('submit', function() {
        const submitButton = contactForm.querySelector('button[type="submit"]');
        if (submitButton) {
            // Показываем индикатор загрузки
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Отправка...';
            
            // Если есть alert с ошибками, прокручиваем к нему
            const alertError = contactForm.parentElement.querySelector('.alert-error');
            if (alertError) {
                alertError.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        }
    });
    
    // Автоматически скроллить к сообщению об успехе
    const alertSuccess = contactForm.parentElement.querySelector('.alert-success');
    if (alertSuccess) {
        setTimeout(() => {
            alertSuccess.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }, 100);
    }
    
    // Показывать ошибки валидации
    const alertError = contactForm.parentElement.querySelector('.alert-error');
    if (alertError) {
        setTimeout(() => {
            alertError.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }, 100);
    }
}

// Обновляем год в футере
document.querySelector('.footer p').textContent = 
    `© ${new Date().getFullYear()} Игорь Нафранович. Все права защищены.`;

// Установка правил печати CSS для корректного отображения цветов
document.addEventListener('DOMContentLoaded', function() {
    const style = document.createElement('style');
    style.innerHTML = `
        @media print {
            * {
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
        }
    `;
    document.head.appendChild(style);
});