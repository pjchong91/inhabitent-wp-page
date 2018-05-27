(function($){ //tells wordpress that we are taking '$' and it means 'jQuery

    $('body').append('Ohey');
    

var bannerHeight= $(".banner").height();

if($('body').hasClass('home') || $('body').hasClass('page-template-about')||$('body').hasClass('single-adventure')){

    

$(window).scroll(function(){
    var yPos=$(window).scrollTop();

    if (yPos<bannerHeight){
        console.log('woohoo');
        $('.site-header').addClass("light-header").removeClass("dark-header");
        $('.dark-logo').css('display','none');
        $('.logo').css('display','block');
        $('.nav-search-icon').css('color','white');
        $('.search-field').removeClass('dark-text');
    }
    else{
        console.log('show up green!!');
        $('.site-header').removeClass("light-header").addClass("dark-header");
        $('.dark-logo').css('display','block');
        $('.logo').css('display','none');
        $('.nav-search-icon').css('color','#248A83');
        $('.search-field').addClass('dark-text');
    }
});

}

else{
    $('.site-header').removeClass("light-header").addClass("dark-header");
    $('.dark-logo').css('display','block');
    $('.logo').css('display','none');
    $('.nav-search-icon').css('color','#248A83');
    $('.search-field').addClass('dark-text');
    $('.offset-placeholder').addClass('header-offset');
}


 //search-field" for input, search-submit for button

 $('.search-submit').on('click',function (e){
    e.preventDefault();
    // $('.search-field').hide();

    $('.search-field').addClass('search-field-focus');
    $('.search-field').focus();
    $('.search-field').on('blur', function(){
        $('.search-field').removeClass('search-field-focus');
        
    })
});
    // focus on the input field 


    // have an event for the enter key so we can search e.g. event keycodes check out css trcks for this

document.addEventListener('keydown', function(event) { 
    if(event.keyCode === 13) {
        $('.search-form').submit();
        }
    });

    // .search-field .focus 



})(jQuery);