$(document).ready(function() {

    // Mobile trigger global navigation
    $('.header .icon-nav').click(function(){
        $('body').addClass('header-submenu-nav-opened');
    });
    $('.header .icon-close').click(function(){
        $('body').removeClass('header-submenu-nav-opened');
    });

    // Blog tabs
    $(".blog-tabs .tab-link:first-child").addClass('active');
    $(".blog-tabs .tab-content-item:first-child").addClass('active');
    $('.blog-tabs .tab-link').click( function() {
        var tabID = $(this).attr('data-tab');
        $(this).addClass('active').siblings().removeClass('active');
        $('#'+tabID).addClass('active').siblings().removeClass('active');
    });
    
});