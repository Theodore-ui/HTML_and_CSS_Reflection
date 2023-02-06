
// alert('This website uses cookies');



//Header JS

$('.header').sticky(); //sticky Header

const searchIconTwo = document.querySelector('.search_icon_2');
const searchTwo = document.querySelector('.search_2');

searchIconTwo.addEventListener('click', function () {
    if (searchTwo.classList.contains('active')) {
        searchTwo.classList.remove('active');
    } else {
        searchTwo.classList.add('active');  
    }   
});

const mainColumn = document.querySelector('.main_column'); 
const sideMenu = document.querySelector('.sidemenu');
const burgerBtn = document.querySelector('.burger_button');

burgerBtn.addEventListener('click', function () {
    if (sideMenu.classList.contains('active')) {
        sideMenu.classList.remove('active');
        mainColumn.classList.remove('shift_left');
    } else {
        sideMenu.classList.add('active');
        mainColumn.classList.add('shift_left'); 
    }   
});

// const sidemenuItem = document.querySelector('.sidemenu_service_item'); 
// const sidemenuBtn =  document.querySelector('.sidemenu_service_btn'); 

// sidemenuItem.addEventListener('mouseover', function (e) {
//     e > sidemenuBtn.classList.add('targeted')    
// });
