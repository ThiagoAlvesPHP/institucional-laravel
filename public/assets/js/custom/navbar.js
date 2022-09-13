$(function(){
    // fechar navbar
    $(document).on('click', '.navbar .links .close', function(){
        $(this).parent().addClass('navbar-mobile-close');
        $(this).parent().removeClass('navbar-mobile-show');
    });
    $(document).on('click', '.navbar .link-menu', function(e) {
        e.preventDefault();
        let id = $(this).attr('href').split('#'),
            targetOffset = $(`#${id[1]}`).offset().top;

        $('html, body').animate({
            scrollTop: targetOffset
        }, 800);

        $('.navbar ul.links').addClass('navbar-mobile-close');
        $('.navbar ul.links').removeClass('navbar-mobile-show');
    });

    // abrir navbar
    $(document).on('click', '.navbar .show', function(){
        $('.navbar ul.links').addClass('navbar-mobile-show');
        $('.navbar ul.links').removeClass('navbar-mobile-close');
    });
});
