$(document).ready(function(){

    $('.first ol li a.active-1 span').css('color' , 'rgb(51, 0, 80)');
    $('.first ol li a').click(function() {
    $('.first ol li a.active-1').find('span').css('color' , 'white');
    $('.first ol li a.active-1').removeClass('active-1');
    $('.first ol li a.active-1').addClass('text-dark');
    $(this).closest('a').addClass('active-1');
    $('.first ol li a.active-1').find('span').css('color' , 'rgb(51, 0, 80)');
    });
 
    });