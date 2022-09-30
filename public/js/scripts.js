$(document).ready(function() {

    // Mobile trigger global navigation
    $('.header .icon-nav').click(function(){
        $('body').addClass('header-submenu-nav-opened');
    });
    $('.header .icon-close').click(function(){
        $('body').removeClass('header-submenu-nav-opened');
    });
    
});