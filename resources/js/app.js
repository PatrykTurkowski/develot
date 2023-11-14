document.addEventListener("DOMContentLoaded", function () {
    const burgerBtn = document.querySelector(".burger-btn");
    const sideMenu = document.getElementById("sideMenu");
    const overlay = document.getElementById("overlay");
    const navLinks = document.querySelectorAll("#sideMenu a"); // Wszystkie linki w bocznym menu

    function toggleMenu() {
        if (sideMenu.style.width === "0px" || sideMenu.style.width === "") {
            sideMenu.style.width = "50%";
            overlay.style.display = "block";
        } else {
            sideMenu.style.width = "0";
            overlay.style.display = "none";
        }
    }

    burgerBtn.addEventListener("click", toggleMenu);

    // Zamykanie menu po kliknięciu poza nim lub na overlay
    document.addEventListener("click", function (event) {
        if (!sideMenu.contains(event.target) && !burgerBtn.contains(event.target) || overlay.contains(event.target)) {
            sideMenu.style.width = "0";
            overlay.style.display = "none";
        }
    });

    // Zamykanie menu po kliknięciu w link
    navLinks.forEach(link => link.addEventListener("click", toggleMenu));
});



const textarea = document.getElementById('message');

textarea.addEventListener('input', function () {
    this.style.height = 'auto';
    // Ustaw wysokość na większą wartość - albo scrollHeight albo 300px
    this.style.height = Math.max(this.scrollHeight, 200) + 'px';
});

// Aktualizacja roku w footerze
const currentYear = new Date().getFullYear();
document.getElementById("current-year").textContent = `Wszelkie prawa zastrzeżone © ${currentYear}`;



document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        let target = document.querySelector(this.getAttribute('href'));
        if (target) {
            window.scrollTo({
                top: target.offsetTop - 60, // 60px to wysokość Twojego paska nawigacji
                behavior: 'smooth'
            });
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.faq__box--item');
    items.forEach(item => {
        item.querySelector('.faq__box--header').addEventListener('click', function () {
            // Usuń klasę 'active' z innych elementów
            items.forEach(innerItem => {
                if (innerItem !== item) {
                    innerItem.classList.remove('active');
                }
            });

            // Dodaj lub usuń klasę 'active' dla klikniętego elementu
            item.classList.toggle('active');
        });
    });
});