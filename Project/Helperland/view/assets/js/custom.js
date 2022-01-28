document.getElementById('faq').click(function()
{
    if ( $(this).hasClass('active') ) {
        $(this).removeClass('active');
    } else {
        $('div a.active').removeClass('active');
        $(this).addClass('active');    
    }
});