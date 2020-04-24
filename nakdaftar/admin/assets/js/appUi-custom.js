$(function () {
    "use strict";
    /**tooltips and popovers**/
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();
    $(".sidenav-btn").on('click', function () {
        $("#page-aside").toggleClass("aside-folded");
    });
    $(".sidenav-btn").on('click', function () {
        $(".sidenav-btn").toggleClass("toggler-folded");
    });
    /**multilevel**/
    $('.dropdown-menu a.dropdown-toggle').on('click', function () {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');


        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-submenu .show').removeClass("show");
        });
        return false;
    });
    /**offcanvas**/
    $('[data-toggle="offcanvas"],.offcanvas-overlay,.sidenav-mini-btn,.aside-close').on('click', function () {
        $('.offcanvas-wrapper,.aside-icon-o').toggleClass('show');
    });
    $(".right-bar-btn").on('click', function () {
        $(".right-sidebar").toggleClass("visible");
    });
    /**metis menu**/
    $("#metisMenu").metisMenu({
    });
    $("#metisMenu-demo,#metisMenu-demo2").metisMenu({
    });
    /**carousel**/
     $('.interval-1s').carousel({
        interval:1000
    });
    $('.interval-2s').carousel({
        interval:2000
    });
     $('.interval-3s').carousel({
        interval:3000
    });
     $('.interval-4s').carousel({
        interval:4000
    });
//slim scroll
    $('.slim-scroll').slimScroll({
        height: '100%'
    });
    $('#page-aside,.sidebar').on('click', function (event) {
        // The event won't be propagated up to the document NODE and 
        // therefore delegated events won't be fired
        event.stopPropagation();
    });
    $(window).on("resize", function () {
        var t = $(window).width();
        t > 992 && ($("#page-aside").removeClass("show"), $(".sidebar-md, .sidebar-sm").removeClass("show")), t > 768 && $(".sidebar-sm").removeClass("Show");
    });
    /**dialogue card**/
    $(".dialogue-card-btn").click(function () {
        $("#dialogue-card").toggleClass('is-show');
    });
    /**layout setting demos script**/

    $('#layout-box').change(function () {
        $("body").toggleClass("layout-boxed");
    });
    $('#aside-light').on('change', function () {
        if ($(this).is(':checked'))
        {
            $('.page-aside>.sidenav').addClass('whiteNav').removeClass('darkNav');
        } else {
            $('.page-aside>.sidenav').addClass('darkNav').removeClass('whiteNav');
        }
    });
    $('#header-skin').on('change', function () {
        if ($(this).is(':checked'))
        {
            $('.page-header').addClass('darkHeader').addClass('bg-primary').removeClass('whiteHeader').removeClass('bg-white');
        } else {
            $('.page-header').addClass('whiteHeader').addClass('bg-white').removeClass('darkHeader').removeClass('bg-primary');
        }
    });

});
