(function($){ //tells wordpress that we are taking '$' and it means 'jQuery

//Function to add dark-banner once user has scrolled past hero-banner
var bannerHeight= $('.banner').height();

if($('body').hasClass('home') || $('body').hasClass('page-template-about')||$('body').hasClass('single-adventure')){

$(window).scroll(function(){
    var yPos=$(window).scrollTop();

    if (yPos<bannerHeight){
        $('.site-header').addClass('light-header').removeClass('dark-header');
        $('.dark-logo').css('display','none');
        $('.logo').css('display','block');
        $('.nav-search-icon').css('color','white');
        $('.search-field-nav').removeClass('dark-text');
    }
    else{
        $('.site-header').removeClass('light-header').addClass('dark-header');
        $('.dark-logo').css('display','block');
        $('.logo').css('display','none');
        $('.nav-search-icon').css('color','#248A83');
        $('.search-field-nav').addClass('dark-text');
    }
});

}

//this will default load the dark-banner on pages that are not 'about.php' or 'front-page'.php
else{
    $('.site-header').removeClass('light-header').addClass('dark-header');
    $('.dark-logo').css('display','block');
    $('.logo').css('display','none');
    $('.nav-search-icon').css('color','#248A83');
    $('.search-field-nav').addClass('dark-text');
    $('.offset-placeholder').addClass('header-offset');
}


 //function for search-field animation

 $('.search-submit').on('click',function (e){
    e.preventDefault();

    $('.search-field-nav').addClass('search-field-nav-focus');
    $('.search-field-nav').focus();
    $('.search-field-nav').on('blur', function(){
        $('.search-field-nav').removeClass('search-field-nav-focus');
        
    })
});

document.addEventListener('keydown', function(event) { 
    if(event.keyCode === 13) {
        $('.search-form').submit();
        }
    });


})(jQuery);