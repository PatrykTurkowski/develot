<section id="contact" class="contact">
    <div class="contact__info">
        <div class="contact__info--title">

            <h1>Czas to pieniądz,</h1>
            <h1>więc skontaktuj się czym prędzej :)</h1>
        </div>

        <div class="contact__info--box">
            <i class="fa-solid fa-phone"></i>
            <h2>Zadzwoń</h2>
            <p>504 132 162</p>
        </div>

        <div class="contact__info--box">
            <i class="fa-solid fa-at"></i>
            <h2>Napisz</h2>
            <p>patryk.turkowski21@gmail.com</p>
        </div>
        {{-- <div class="contact__info--box">
            <i class="fa-solid fa-house"></i>
            <h2>Dane firmy</h2>
            <p>Patryk Turkowski</p>
            <p>NIP 1182262975</p>
        </div> --}}
    </div>
    <div class="contact__form">
        <h1>Formularz Kontaktowy</h1>
        <form action="{{ route('send.email') }}" method="post">
            @csrf <!-- Token CSRF -->
            <label for="name">Imię i Nazwisko</label>
            <input type="text" id="name" name="name" placeholder="" required>
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror

            <label for="phone">Numer telefonu</label>
            <input type="text" id="phone" name="phone" placeholder="" required>
            @error('phone')
                <span class="error">{{ $message }}</span>
            @enderror

            <label for="email">Adres e-mail:</label>
            <input type="email" id="email" name="email" placeholder="" required>
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror

            <label for="message">Treść wiadomości:</label>
            <textarea id="message" name="message" rows="4"
                placeholder="Panie Patryku, nie mogę się doczekać naszej współpracy! :)" required></textarea>
            @error('message')
                <span class="error">{{ $message }}</span>
            @enderror

            <input type="hidden" name="to"
                value="{{ config('mail.from_address', 'pytania@patrykturkowski.pl') }}">
            <button type="submit">Wyślij</button>
        </form>
    </div>

</section>
