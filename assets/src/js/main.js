const headerNav = document.querySelector('.nav__list');
const navbarHamburger = document.querySelector('.main-header__hamburger')
const navbarHamburgerLines = document.querySelectorAll('.line')

navbarHamburger.addEventListener('click',()=>{
    headerNav.classList.toggle('nav__list-active');
    navbarHamburgerLines.forEach(i=>i.classList.toggle('line-white'))

})

const navbar = document.querySelector('.main-header');
window.onscroll = () => {
    if (window.scrollY > 100) {
        navbar.classList.add('main-header-active');
    } else {
        navbar.classList.remove('main-header-active');
    }
};