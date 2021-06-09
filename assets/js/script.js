"use strict";

const gamburger = document.querySelector('.gamburger'),
      gamburgerSticks = document.querySelectorAll('.gamburger__stick'),
      header = document.querySelector('.header'),
      headerList = document.querySelector('.header__links'),
      headerLinks = document.querySelectorAll('.header__link');

gamburger.addEventListener('click', (e) => {
    headerList.classList.toggle('header__links_active');
    
    gamburgerSticks.forEach((elem) => {
        elem.classList.toggle('gamburger__stick_close');
    });
})

window.addEventListener(`resize`, event => {
    if (document.body.clientWidth < 770) {
        headerLinks.forEach((item) => {
            item.classList.remove('header__link_black');
        })
    }
    if (document.body.clientWidth > 770 && header.classList.contains('header_white')) {
        headerLinks.forEach((item) => {
            item.classList.add('header__link_black');
        })
    }
});