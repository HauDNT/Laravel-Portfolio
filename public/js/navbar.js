document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('adminNavbar');
    if (!navbar) return;

    window.addEventListener('scroll', function () {
        if (window.scrollY > 10) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});

const navbarIcon = document.getElementById('adminNavbarIcon');
const othersMenu = document.getElementById('adminNavbarMenu');
navbarIcon.addEventListener('click', function () {
    othersMenu.classList.toggle('d-none');
});