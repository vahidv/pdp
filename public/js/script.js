var pathname = window.location.href;
$('.navbar-nav').find('a.active').removeClass('active');
if (pathname.split('/')[3] === '') {
    $('.home').addClass('active');
} else {
    pathname = pathname.split('/')[3];
    pathname = pathname.split('&')[1];
    pathname = pathname.substring(8);

    var left_text = pathname.substring(pathname.indexOf("=") + 1);
    $('.' + left_text).addClass('active');
}
