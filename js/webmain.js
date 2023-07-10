var $ = jQuery;
$(window).on('scroll' , function(){
    if($(document).scrollTop() >= 100){
        $('.stickyHeader').addClass('showStickyHeader');        
    
    }
    else{
        $('.stickyHeader').removeClass('showStickyHeader');                        
    }
});
$(document).ready(function(){
    $('.mobileMenu>ul>.menu-item-has-children').append('<svg xmlns="http://www.w3.org/2000/svg" fill="#d5d5d5" width="10" height="10" viewBox="0 0 512 512"><path d="M338.9 504.1c-10.7 0-20.9-4.8-27.6-13.1L140.1 278.4c-10.7-13.1-10.7-31.9 0-45L317.2 20.7c12.5-15.1 34.9-17.1 50-4.6 15.1 12.5 17.1 34.9 4.6 50l-158.4 190 153.1 190c12.5 15 10.5 37.4-4.5 49.9-6.5 5.4-14.7 8.3-23.1 8.2Z"/></svg>')
    $('.mainSearchIcon').click(function(){
        $('.mainSiteOverlay').addClass('showSiteOverlay');
    });
    $('.mobileMenuIcon').click(function(){
        $('.mainSiteOverlay').addClass('showSiteOverlay');
        $('.mobileMenuParent').addClass('showMobileMenu');
    });
    $('.mainSiteOverlay span').click(function(){
        $('.mainSiteOverlay').removeClass('showSiteOverlay');
        $('.mobileMenuParent').removeClass('showMobileMenu');
    });
    $('.mobileMenu>ul>.menu-item-has-children>svg ').click(function(){
        $('.mobileMenu>ul>.menu-item-has-children>ul').slideUp(300);
        if($(this).siblings("ul").css('display') == 'block'){
            $(this).siblings('ul').slideUp(400);
        }
        else{
            $(this).siblings('ul').slideToggle(400);
        }        

    });
});