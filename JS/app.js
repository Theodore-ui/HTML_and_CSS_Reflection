
alert('This website uses cookies');



//Header JS

$('.header').sticky(); //sticky Header


search_icon_2.addEventListener('click', function() {
    if (search_2.classList.contains('active')) {
        search_2.classList.remove('active');
    } else {
        search_2.classList.add('active');  
    }   
});
