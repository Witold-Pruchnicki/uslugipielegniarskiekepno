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
const tiles = document.querySelectorAll('.service__tile');
const tileContainer= document.querySelector('.services__tiles')
const tileDescription = document.querySelectorAll('.detail__text');
const descriptionImages = document.querySelectorAll('.detail__image')

tiles.forEach(tile=>{
    tile.addEventListener('click',(e)=>{
        const id = e.target.dataset.id;
        if(id){
            tiles.forEach(tile=>{
                tile.classList.remove('active');
                e.currentTarget.classList.add('active')
            })
            tileDescription.forEach(description=>{
                description.classList.remove('active')
            })
            const element = document.getElementById(id);
            console.log(id)
            element.classList.add('active');
        }
    })
})
