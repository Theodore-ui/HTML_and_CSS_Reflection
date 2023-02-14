
// alert('This website uses cookies');



//Header JS

const header = document.querySelector('.header');
let oldYPos = window.scrollY;
let savedYPos;

function toggleStickyHeader() {
    let currentYPos = window.scrollY;

    if(currentYPos === 0 || (oldYPos + 10) < currentYPos){
        header.removeAttribute('style');
    } else if ((oldYPos - 10) > currentYPos) {
        $('header').sticky();
    }

    oldYPos = currentYPos;
};

window.addEventListener('scroll', toggleStickyHeader);





const searchIconTwo = document.querySelector('.search_icon_2');
const searchTwo = $('.search_2');
const supportBtn = $('.btn_support');
const contactBtn = $('.btn_contact');

function showSearch () {
    if (window.innerWidth > 992 && window.innerWidth < 1260) {
        if (searchTwo.is(':visible')) {
            searchTwo.fadeOut();
            supportBtn.delay(400).fadeIn(); 
            contactBtn.delay(400).fadeIn();
        } else {
            searchTwo.delay(400).fadeIn();
            supportBtn.fadeOut(); 
            contactBtn.fadeOut();
        }
    }
}

searchIconTwo.addEventListener('click', showSearch);


 
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
        $('.cover').scrollTop(oldYPos);  
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



