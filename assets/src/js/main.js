
const headerNav = document.querySelector('.nav__list');
const navbarHamburger = document.querySelector('.main-header__hamburger')
const navbarHamburgerLines = document.querySelectorAll('.line')
const navLink = document.querySelectorAll('.nav__link');



navbarHamburger.addEventListener('click',()=>{
    headerNav.classList.toggle('nav__list-active');

})
navLink.forEach((link)=>{
    link.addEventListener('click',()=>{
        headerNav.classList.toggle('nav__list-active');})
})

const navbar = document.querySelector('.main-header');
window.onscroll = () => {
    if (window.scrollY > 100) {
        navbar.classList.add('main-header-active');
    } else {
        navbar.classList.remove('main-header-active');
    }
};
const tiles = document.querySelectorAll('.service__tile');
const tileDescription = document.querySelectorAll('.detail__text');
const descriptionImages = document.querySelectorAll('.detail__image');
const tileImages = document.querySelectorAll('.tile__img')
const detailLink = document.querySelectorAll('.detail')

tiles.forEach(tile=>{
    tile.addEventListener('click',(e)=>{
        const id = e.target.dataset.id;
        console.log(id)
        console.log(e.currentTarget)
        if(id){
            tiles.forEach(tile=>{
                tile.classList.remove('active');
                e.currentTarget.classList.add('active');
            })
            tileDescription.forEach(description=>{
                description.classList.remove('active')
            })

            const element = document.getElementById(id);
            element.classList.add('active');
        }
    })
})
AOS.init();




