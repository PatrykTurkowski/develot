<section id="contact" class="contact">
    <div class="wrapper row">

        <div class="contact__info">
            <div class="contact__info--box">
                <i class="fa-solid fa-phone"></i>
                <h2>Zadzwoń</h2>
                <a href="tel:+48504132162">
                    504 132 162
                </a>
            </div>
            <div class="contact__info--box">
                <i class="fa-solid fa-at"></i>
                <h2>Napisz</h2>
                <a href="mailto:biuro@patrykturkowski.pl">biuro@patrykturkowski.pl</a>
            </div>

        </div>
        <div class="contact__form">
            <h1>Formularz Kontaktowy</h1>
            <form action="{{ route('send.email') }}" method="post">
                @csrf <!-- Token CSRF -->
                <label for="name">Imię i Nazwisko</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror

                <label for="phone">Numer telefonu</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required>
                @error('phone')
                    <span class="error">{{ $message }}</span>
                @enderror

                <label for="email">Adres e-mail:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror

                <label for="message">Treść wiadomości:</label>
                <textarea id="message" name="message" rows="4"
                    placeholder="Panie Patryku, nie mogę się doczekać naszej współpracy! :)" required>{{ old('message') }}</textarea>
                @error('message')
                    <span class="error">{{ $message }}</span>
                @enderror

                <input type="hidden" name="to"
                    value="{{ config('mail.from_address', 'pytania@patrykturkowski.pl') }}">
                <button type="submit">Wyślij</button>
            </form>
        </div>
    </div>


</section>
