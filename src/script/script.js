window.addEventListener('DOMContentLoaded', function() {
    // burger-menu

    let burger = document.querySelector('.header-mobile__box--burger');
    let menu = document.querySelector('.header-mobile__box--menu');
    let box = document.querySelector('.header-mobile__box');
    let links = document.querySelectorAll('.links');
    
    burger.onclick = function() {
        burger.classList.toggle('active');
        menu.classList.toggle('active');
        box.classList.toggle('hide');
    };


    links.forEach((item) => {
        item.onclick = function() {
            burger.classList.remove('active');
            menu.classList.remove('active');
            box.classList.remove('hide');
        }
    })
});