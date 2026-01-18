{{-- Секция "Контакты" - форма связи и контактная информация --}}
<section id="contact" class="contact">
    <div class="container">
        <h2 class="section-title">Свяжитесь со мной</h2>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h3>Email</h3>
                        <p>flat774@google.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h3>Телефон</h3>
                        <p>+375 (33) 386-65-56</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h3>Локация</h3>
                        <p>Минск</p>
                    </div>
                </div>
            </div>
            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    <ul style="list-style: none; margin: 10px 0; padding: 0;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="Ваше имя" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Ваш email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Ваше сообщение" rows="5" required>{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Отправить сообщение</button>
            </form>
        </div>
    </div>
</section>
