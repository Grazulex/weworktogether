$(document).ready(function() {

    // Mobile trigger global navigation
    $('.header .icon-nav').click(function(){
        $('body').addClass('header-submenu-nav-opened');
    });
    $('.header .icon-close').click(function(){
        $('body').removeClass('header-submenu-nav-opened');
    });

    // Blog tabs
   // $(".blog-tabs .tab-link:first-child").addClass('active');
    //$(".blog-tabs .tab-content-item:first-child").addClass('active');
    $('.blog-tabs .tab-link').click( function() {
        var tabID = $(this).attr('data-tab');
        $(this).addClass('active').siblings().removeClass('active');
        $('#'+tabID).addClass('active').siblings().removeClass('active');
    });

    // About - FAQ Accordion
    $('.faq-header').click(function(e) {
        e.preventDefault();
        
        let $this = $(this);
        
        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.parent().removeClass('open');
            $this.addClass('close');
            $this.next().slideUp(350);
        } else {
            $this.parent().addClass('open');
            $this.removeClass('close');
            // $this.parent().parent().find('.around-content').removeClass('show');
            // $this.parent().parent().find('.around-content').slideUp(350);
            $this.next().toggleClass('show');
            $this.next().slideToggle(350);
        }
    });
    
});