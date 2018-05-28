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
        console.log('show up green!!');
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

//add entry-meta data to posts on search-page
if ($('body').hasClass('search')){
console.log('good days happy times');
    $('article').each(function(){
      
        if ($(this).hasClass('post')){
            // $this.('.entry-meta').append("<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>")
            // this.appendTo('entry-meta','YOU ARE AN ARTICLE YOU KNOW THAT??');
            this.append('I am a POST type of APPLES');
    }})
}

})(jQuery);