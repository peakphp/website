$(function() {

    var menu = $('header .navbar-collapse');
    $('header .navbar-toggler').on('click', function () {
        menu.toggleClass('show');
    });

});