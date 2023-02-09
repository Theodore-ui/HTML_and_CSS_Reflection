
// alert('This website uses cookies');



//Header JS

const body = document.querySelector('body');
const header = document.querySelector('.header');
let oldYPos = window.scrollY;
let savedYPos;

function toggleStickyHeader() {
    // Grab the current y position and window width:
    let currentYPos = window.scrollY;

    // Run checks and toggle sticky rules:
    if(currentYPos === 0 || (oldYPos + 10) < currentYPos){
        // $($heroSection).removeAttr($style);
        $($headerWrapper).removeClass('sticky()');
    } else if ((oldYPos - 10) > currentYPos) {
        $('.header').sticky();
        // adjustHeroSection();
    }
}

window.addEventListener('scroll', toggleStickyHeader);

// window.addEventListener('scroll', function () {
//     $('.header').sticky();
// });




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

const cover = document.querySelector('.cover');
const mainColumn = document.querySelector('.main_column'); 
const sideMenu = $('.sidemenu');
const burger = document.querySelector('.burger'); 
const cross = document.querySelector('.cross');
const burgerBtn = document.querySelector('.burger_button');
const greyCover = document.querySelector('.greyed_out')

function toggleSidemenu () {
    if (sideMenu.is(':hidden')) {
        sideMenu.animate({width:'toggle'}, 400); 
        mainColumn.classList.add('shift_left'); 
        mainColumn.style.height = '100vh';
        mainColumn.style.overflow = 'auto';
        cross.classList.add('active');
        burger.classList.remove('active');
        cover.style.display = 'block';   
    } else {
        sideMenu.animate({width:'toggle'}, 400);
        mainColumn.classList.remove('shift_left');
        mainColumn.removeAttribute('style');  
        cross.classList.remove('active');
        burger.classList.add('active'); 
        cover.removeAttribute('style');   
    }
}

cover.addEventListener('click', toggleSidemenu);

burgerBtn.addEventListener('click', toggleSidemenu);


const cookiePop = $('.cookie_pop');
const cookieBnt = $('.cookie_btn');

cookieBnt.click(function () {
    cookiePop.animate({width:'toggle'}, 350);    
});



