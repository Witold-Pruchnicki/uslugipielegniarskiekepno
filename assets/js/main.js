/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./assets/src/js/main.js ***!
  \*******************************/
var headerNav = document.querySelector('.nav__list');
var navbarHamburger = document.querySelector('.main-header__hamburger');
var navbarHamburgerLines = document.querySelectorAll('.line');
var navLink = document.querySelectorAll('.nav__link');
navbarHamburger.addEventListener('click', function () {
  headerNav.classList.toggle('nav__list-active');
});
navLink.forEach(function (link) {
  link.addEventListener('click', function () {
    headerNav.classList.toggle('nav__list-active');
  });
});
var navbar = document.querySelector('.main-header');

window.onscroll = function () {
  if (window.scrollY > 100) {
    navbar.classList.add('main-header-active');
  } else {
    navbar.classList.remove('main-header-active');
  }
};

var tiles = document.querySelectorAll('.service__tile');
var tileDescription = document.querySelectorAll('.detail__text');
var descriptionImages = document.querySelectorAll('.detail__image');
var tileImages = document.querySelectorAll('.tile__img');
var detailLink = document.querySelectorAll('.detail');
tiles.forEach(function (tile) {
  tile.addEventListener('click', function (e) {
    var id = e.target.dataset.id;
    console.log(id);
    console.log(e.currentTarget);

    if (id) {
      tiles.forEach(function (tile) {
        tile.classList.remove('active');
        e.currentTarget.classList.add('active');
      });
      tileDescription.forEach(function (description) {
        description.classList.remove('active');
      });
      var element = document.getElementById(id);
      element.classList.add('active');
    }
  });
});
AOS.init();
/******/ })()
;
//# sourceMappingURL=main.js.map