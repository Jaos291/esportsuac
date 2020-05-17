// pop up terms and conditions
$(document).ready(function(){
    $('#terms-and-conditions').on('click', function(){
        $('#popup').fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        return false;
    });

    $('#close').on('click', function(){
        $('#popup').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });
    $('.btn-accept').on('click', function(){
        $('.terms-and-conditions').click();
        $('#popup').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });
});
