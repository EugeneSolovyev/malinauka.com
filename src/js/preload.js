$(window).on('load', function () {
    var $preloader = $('#page-preloader'),
        $spinner   = $preloader.find('.spinner'),
        $container = $('.container-fluid');
    $spinner.delay(350).fadeOut('slow');
    $preloader.delay(350).fadeOut('slow');
    $container.hide().fadeIn('fast');
});