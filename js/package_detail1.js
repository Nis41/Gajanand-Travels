
$(document).ready(function(){

    $('.tour-btn').click(function(){
        $('.tour-btn').removeClass('active-btn');
        $(this).addClass('active-btn');
    });

    $('.tour-guide-btn').click(function(){
        $('.tour-details').css('display','none');
        $('.hotel-info').css('display','none');
        $('.tour-guide').css('display','block');
    });

    $('.hotel-info-btn').click(function(){
        $('.tour-details').css('display','none');
        $('.tour-guide').css('display','none');
        $('.hotel-info').css('display','block');
    });

    $('.tour-info-btn').click(function(){
        $('.hotel-info').css('display','none');
        $('.tour-guide').css('display','none');
        $('.tour-details').css('display','block');
    });
});
