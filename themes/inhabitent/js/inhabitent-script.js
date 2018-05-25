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


})(jQuery);