export function burgerMenu()
 {
    const burgerBtn = document.querySelector('#burger-btn');
    const navMenu   = document.querySelector('#nav-menu');

    function toggleMenu() {
        navMenu.classList.toggle('open');
        burgerBtn.classList.toggle('expanded');
    }

    burgerBtn.addEventListener('click', toggleMenu);
}