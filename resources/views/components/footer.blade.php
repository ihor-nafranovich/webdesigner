{{-- Footer компонент с социальными ссылками и копирайтом --}}
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            {{-- Социальные ссылки --}}
            <div class="social-links">
                <a href="#" class="social-link" aria-label="GitHub">
                    <i class="fab fa-github"></i>
                </a>
                <a href="#" class="social-link" aria-label="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="#" class="social-link" aria-label="Telegram">
                    <i class="fab fa-telegram"></i>
                </a>
            </div>
            
            {{-- Копирайт с динамическим годом --}}
            <p>&copy; {{ date('Y') }} Игорь Нафранович. Все права защищены.</p>
        </div>
    </div>
</footer>
