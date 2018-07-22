var pathname = window.location.href;
pathname = pathname.split('/')[3];
pathname = pathname.substring(1);
var left_text = pathname.substring(pathname.indexOf("=") + 1);

    $( '.navbar-nav' ).find( 'a.active' ).removeClass( 'active' );
    $( '.' + left_text ).addClass( 'active' );
