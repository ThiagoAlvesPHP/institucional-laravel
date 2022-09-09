$(function(){
    // fechar navbar
    $(document).on('click', '.navbar .close', function(){
        $(this).parent().addClass('navbar-mobile-close');
        $(this).parent().removeClass('navbar-mobile-show');
    });

    // abrir navbar
    $(document).on('click', '.navbar .show', function(){
        $('.navbar ul.links').addClass('navbar-mobile-show');
        $('.navbar ul.links').removeClass('navbar-mobile-close');
    });
});
