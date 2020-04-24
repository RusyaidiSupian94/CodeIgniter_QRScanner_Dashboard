$(function () {
    "use strict";
    /**info**/
    $(".notify-info").click(function () {
        $.notify({
            /* title and message*/
            title: 'Title here', message: 'Notification message here'
        }, /*settings*/{
            type: 'info', allow_dismiss: false, newest_on_top: true
        });
    });
    /**warning**/
    $(".notify-warning").click(function () {
        $.notify({
            /* title and message*/
            title: 'Title here', message: 'Notification message here'
        }, /*settings*/{
            type: 'warning', allow_dismiss: false, newest_on_top: true
        });
    });
    /**success**/
    $(".notify-success").click(function () {
        $.notify({
            /* title and message*/
            title: 'Title here', message: 'Notification message here'
        }, /*settings*/{
            type: 'success', allow_dismiss: false, newest_on_top: true
        });
    });
    /**danger**/
    $(".notify-danger").click(function () {
        $.notify({
            /* title and message*/
            title: 'Title here', message: 'Notification message here'
        }, /*settings*/{
            type: 'danger', allow_dismiss: false, newest_on_top: true
        });
    });
    /**primary**/
    $(".notify-primary").click(function () {
        $.notify({
            /* title and message*/
            title: 'Title here', message: 'Notification message here'
        }, /*settings*/{
            type: 'primary', allow_dismiss: false, newest_on_top: true
        });
    });
    /**light**/
    $(".notify-light").click(function () {
        $.notify({
            /* title and message*/
            title: 'Title here', message: 'Notification message here'
        }, /*settings*/{
            type: 'light', allow_dismiss: false, newest_on_top: true
        });
    });
    /**teal**/
    $(".notify-teal").click(function () {
        $.notify({
            /* title and message*/
            title: 'Title here', message: 'Notification message here'
        }, /*settings*/{
            type: 'teal', allow_dismiss: false, newest_on_top: true
        });
    });
    /**pink**/
    $(".notify-pink").click(function () {
        $.notify({
            /* title and message*/
            title: 'Title here', message: 'Notification message here'
        }, /*settings*/{
            type: 'pink', allow_dismiss: false, newest_on_top: true
        });
    });
    /**purple**/
    $(".notify-purple").click(function () {
        $.notify({
            /* title and message*/
            title: 'Title here', message: 'Notification message here'
        }, /*settings*/{
            type: 'purple', allow_dismiss: false, newest_on_top: true
        });
    });
    /**dark**/
    $(".notify-dark").click(function () {
        $.notify({
            /* title and message*/
            title: 'Title here', message: 'Notification message here'
        }, /*settings*/{
            type: 'dark', allow_dismiss: false, newest_on_top: true
        });
    });

    /**positions**/
    $(".notify-top-left").click(function () {
        $.notify({/*message*/message: 'Notification message here'}, /*settings*/{type: 'info', allow_dismiss: false, placement: {from: "top", align: "left"}});
    });
    $(".notify-top-center").click(function () {
        $.notify({/*message*/message: 'Notification message here'}, /*settings*/{type: 'info', allow_dismiss: false, placement: {from: "top", align: "center"}});
    });
    $(".notify-top-right").click(function () {
        $.notify({/*message*/message: 'Notification message here'}, /*settings*/{type: 'info', allow_dismiss: false, placement: {from: "top", align: "right"}});
    });
    $(".notify-bottom-left").click(function () {
        $.notify({/*message*/message: 'Notification message here'}, /*settings*/{type: 'info', allow_dismiss: false, placement: {from: "bottom", align: "left"}});
    });
    $(".notify-bottom-center").click(function () {
        $.notify({/*message*/message: 'Notification message here'}, /*settings*/{type: 'info', allow_dismiss: false, placement: {from: "bottom", align: "center"}});
    });
    $(".notify-bottom-right").click(function () {
        $.notify({/*message*/message: 'Notification message here'}, /*settings*/{type: 'info', allow_dismiss: false, placement: {from: "bottom", align: "right"}});
    });

    /**animations
     * Few examples into Demo
     * Full list of animations -  https://raw.githubusercontent.com/daneden/animate.css/master/animate.css
     * **/
    $(".notify-fade-right").click(function () {
        $.notify({/*message*/message: 'Notification message here'}, /*settings*/{type: 'info', allow_dismiss: false, animate: {enter: "animated fadeInRight", exit: "animated fadeOutRight"}});
    });
    $(".notify-zoomin").click(function () {
        $.notify({/*message*/message: 'Notification message here'}, /*settings*/{type: 'info', allow_dismiss: false, animate: {enter: "animated zoomIn", exit: "animated zoomOut"}});
    });
    $(".notify-flipx").click(function () {
        $.notify({/*message*/message: 'Notification message here'}, /*settings*/{type: 'danger', allow_dismiss: false, animate: {enter: "animated flipInX", exit: "animated flipOutX"}});
    });
    $(".notify-bounce").click(function () {
        $.notify({/*message*/message: 'Notification message here'}, /*settings*/{type: 'warning', allow_dismiss: false, animate: {enter: "animated bounceIn", exit: "animated bounceOut"}});
    });
    $(".notify-shake").click(function () {
        $.notify({/*message*/message: 'Invalid Username'}, /*settings*/{type: 'danger', allow_dismiss: false, animate: {enter: "animated shake", exit: "animated zoomOut"}});
    });
    $(".notify-slidein").click(function () {
        $.notify({/*Options*/icon: 'alert-thumb fa fa-user-plus d-inline-block mr-2', message: 'New Contact Request <a class="text-primary ml-2 font400" href="notifications.html">Accept</a> <a class="text-danger ml-2 font400" href="notifications.html">Delete</a>'}, /*settings*/{type: 'light', allow_dismiss: false, animate: {enter: "animated slideInUp", exit: "animated slideOutUp"}});
    });
    $(".notify-light-speed").click(function () {
        $.notify({/*Options*/icon: 'alert-thumb fa fa-lock d-inline-block mr-2', message: 'Password Updated Successfully '}, /*settings*/{type: 'primary', allow_dismiss: false, animate: {enter: "animated lightSpeedIn", exit: "animated lightSpeedOut"}});
    });
    $(".notify-fadein").click(function () {
        $.notify({/*Options*/icon: 'alert-thumb fa fa-shopping-cart d-inline-block mr-2', message: '3 Items Pending into Cart <a class="btn btn-warning btn-sm ml-2" href="notifications.html">Checkout</a> '}, /*settings*/{type: 'warning', allow_dismiss: false, animate: {enter: "animated fadeIn", exit: "animated fadeOut"}});
    });
    $(".notify-flash").click(function () {
        $.notify({/*Options*/icon: 'alert-thumb fa fa-trash-alt d-inline-block mr-2', message: 'Are you sure? <a class="btn btn-danger text-white btn-sm ml-2" href="notifications.html">Yes</a>  <a class="btn btn-info text-white btn-sm ml-2" href="notifications.html">No</a>'}, /*settings*/{type: 'danger', allow_dismiss: false, animate: {enter: "animated flash", exit: "animated zoomOut"}});
    });
    $(".notify-progress").click(function () {
        $.notify({
            // title
            title: '<strong>Progress bar</strong>',
            // message
            message: 'Notification with progress bar timeout'
        }, {
            // settings
            type: 'danger',
            showProgressbar: true,
            newest_on_top: true,
            allow_dismiss: false,
            placement: {
                from: "top",
                align: "right"
            }
        });
    });
    /**notify dismiss button*/
    $(".notify-dismiss").click(function () {
        $.notify({
            // message
            message: 'Click on right close button to dismiss notification'
        }, {
            // settings
            type: 'danger',
            allow_dismiss: true,
            placement: {
                from: "top",
                align: "right"
            }
        });
    });
    /**notify custom timeout*/
    $(".notify-timeout").click(function () {
       $.notify('<strong>Uploading...</strong>', {
            allow_dismiss: false,
            showProgressbar: true,
            type: 'success'
        });
        setTimeout(function () {
            $.notify({'progress': 25});
        }, 4500);

    });
    /**notify cusstom timeout*/
    $(".notify-multitypes").click(function () {
        var notify = $.notify('<strong>Matching username...</strong>', {
            allow_dismiss: false,
            showProgressbar: true,
            type: 'info'
        });
        setTimeout(function () {
            notify.update({'type': 'warning', 'message': '<strong>Matching</strong> Password!', 'progress': 25});
        }, 2000);
        setTimeout(function () {
            notify.update({'type': 'danger', 'message': '<strong>Sending</strong> Password to your Email Id!', 'progress': 25});
        }, 3100);
        setTimeout(function () {
            notify.update({'type': 'success', 'message': '<strong>Success</strong> Password sent on your email id!', 'progress': 25});
        }, 4500);
    });
    /**notify cusstom icon*/
    $(".notify-icon").click(function () {
        $.notify({
            // message
            message: '<strong>Icon Successfully</strong> added',
            icon: 'fa fa-check mr-2 alert-thumb'
        }, {
            // settings
            type: 'success',
            showProgressbar: false,
            newest_on_top: true,
            allow_dismiss: true
        });
    });
    /**custom position**/
    $(".notify-custom-pos").click(function () {
        $.notify({
            // title
            title: 'Title',
            // message
            message: '<strong>Cutom postion</strong> using offset X,Y'
        }, {
            // settings
            type: 'success',
            showProgressbar: false,
            newest_on_top: true,
            placement: {
                from: "top",
                align: "center"
            },
            offset: {
                x: 0,
                y: 50
            }
        });
    });
       /**notify cusstom image*/
    $(".notify-image").click(function () {
        $.notify({
            // message
             title: '<strong>Sarah Taylor</strong>',
            message: 'Added a comment of you on his post',
            icon: './images/avatar1.jpg'
        }, {
            // settings
            type: 'info alert-thumb',
            icon_type:'image',
            showProgressbar: false,
            newest_on_top: true,
            allow_dismiss: true
        });
    });
});

