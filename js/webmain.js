var $ = jQuery;

let functionIsRan = false;
function stepCounter(elementSelector , currentNumber ,endNumber , stepNumber , totalTime){
    let theIntervals = Math.round(totalTime/(endNumber/stepNumber));
    let mainAction = setInterval(() => {
        if(currentNumber<endNumber){
            $(elementSelector).text(currentNumber);
            currentNumber+=stepNumber;
        }
        else{
            $(elementSelector).text(endNumber);
            clearInterval(mainAction);
        }
    }, theIntervals);
}


$(window).on('scroll' , function(){
    if($(document).scrollTop() >= 100){
        $('.stickyHeader').addClass('showStickyHeader');        
    
    }
    else{
        $('.stickyHeader').removeClass('showStickyHeader');                        
    }
    
    let windowBottom = $(window).scrollTop() + $(window).outerHeight(true);
    let objectCenter = $('.homePageCountNum').offset().top + ($('.homePageCountNum').outerHeight(true)/2);
    if(windowBottom > objectCenter && functionIsRan==false){
        stepCounter('#numb1', 1 , 68 , 1 , 600);
        stepCounter('#numb2', 1 , 82 , 1 , 800);
        stepCounter('#numb3', 1 , 59 , 1 , 600);
        stepCounter('#numb4', 1 , 48 , 1 , 900);
        functionIsRan = true;
    }
});

$(document).ready(function(){
    $('.mobileMenu>ul>.menu-item-has-children').append('<svg width="10" height="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 495.9 272.9"><path d="m25 25 222.9 222.9L470.9 25" style="fill:none;stroke:#6f8b74;stroke-linecap:round;stroke-linejoin:round;stroke-width:40px"/></svg>')
    $('.mainSearchIcon').click(function(){
        $('.mainSiteOverlay').addClass('showSiteOverlay');
    });
    $('.mobileMenuIcon').click(function(){
        $('.mainSiteOverlay').addClass('showSiteOverlay');
        $('.mobileMenuParent').addClass('showMobileMenu');
    });
    $('.mainSiteOverlay span , .mainSiteOverlay').click(function(){
        $('.mainSiteOverlay').removeClass('showSiteOverlay');
        $('.mobileMenuParent').removeClass('showMobileMenu');
        $('.searchParent').fadeOut(300);
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
    $('.mainSearchIcon').click(function(){
        $('.mainSiteOverlay').addClass('showSiteOverlay');
        $('.searchParent').fadeIn(300);
    });

});

