/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./assets/src/js/main.js ***!
  \*******************************/
var headerNav = document.querySelector('.nav__list');
var navbarHamburger = document.querySelector('.main-header__hamburger');
var navbarHamburgerLines = document.querySelectorAll('.line');
navbarHamburger.addEventListener('click', function () {
  headerNav.classList.toggle('nav__list-active');
  navbarHamburgerLines.forEach(function (i) {
    return i.classList.toggle('line-white');
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
/******/ })()
;
//# sourceMappingURL=main.js.map