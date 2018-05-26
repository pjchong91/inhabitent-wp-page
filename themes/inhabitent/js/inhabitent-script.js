(function($){ //tells wordpress that we are taking '$' and it means 'jQuery

    $('body').append('Ohey');
    

var bannerHeight= $(".banner").height();

if($('body').hasClass('home')){


$(window).scroll(function(){
    var yPos=$(window).scrollTop();

    if (yPos>bannerHeight){
        console.log('woohoo');
        $('banner').addClass('banner-dark');
    }
    else{
        $('banner').removeClass('banner-dark');
    }
});

}



 //search-field" for input, search-submit for button

 $('.search-submit').on('click',function (e){
    e.preventDefault();
    console.log('blurred lines')
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
        console.log('you pressed maaaay');
        $('.search-form').submit();
        }
    });

    // .search-field .focus 



})(jQuery);