$( '.navbar-nav a' ).on( 'click', function () {
    $( '.navbar-nav' ).find( 'a.active' ).removeClass( 'active' );
    $( this ).addClass( 'active' );
});
