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
        <form action="adres_serwera.php" method="post">
            <label for="email">Imię i Nazwisko</label>
            <input type="email" id="email" name="email" placeholder="" required>
            <label for="email">numer telefonu</label>
            <input type="email" id="email" name="email" placeholder="" required>
            <label for="email">Adres e-mail:</label>
            <input type="email" id="email" name="email" placeholder="" required>

            <label for="text">Treść wiadomości:</label>
            <textarea id="text" name="text" rows="4"
                placeholder="Panie Patryku, nie mogę się doczekać naszej współpracy! :)" required></textarea>
            {{--  --}}
            <button type="submit">Wyślij</button>
        </form>
    </div>
</section>
