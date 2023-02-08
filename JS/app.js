
// alert('This website uses cookies');



//Header JS

$('.header').sticky(); //sticky Header

const searchIconTwo = document.querySelector('.search_icon_2');
const searchTwo = $('.search_2');
const supportBtn = $('.btn_support');
const contactBtn = $('.btn_contact');


searchIconTwo.addEventListener('click', function () {
    if (searchTwo.is(':visible')) {
        searchTwo.fadeOut();
        supportBtn.delay(400).fadeIn(); 
        contactBtn.delay(400).fadeIn();
    } else {
        searchTwo.delay(400).fadeIn();
        supportBtn.fadeOut(); 
        contactBtn.fadeOut(); 
    }   
});


const mainColumn = document.querySelector('.main_column'); 
const sideMenu = $('.sidemenu');
const burgerBtn = document.querySelector('.burger_button');
const burger = document.querySelector('.burger'); 
const cross = document.querySelector('.cross');
const cover = $('.cover');

burgerBtn.addEventListener('click', function () {
    if (sideMenu.is(':visible')) {
        sideMenu.animate({width:'toggle'}, 400);
        mainColumn.classList.remove('shift_left');  
        cross.classList.remove('active');
        burger.classList.add('active');
        cover.classList.remove('greyed_out');
    } else {
        sideMenu.animate({width:'toggle'}, 400);
        mainColumn.classList.add('shift_left'); 
        cross.classList.add('active');
        burger.classList.remove('active');
        cover.classList.add('greyed_out');
        // mainColumn.scrollTop(0);
    }   
});

const cookiePop = $('.cookie_pop');
const cookieBnt = $('.cookie_btn');

cookieBnt.click(function () {
    cookiePop.animate({width:'toggle'}, 350);    
});



