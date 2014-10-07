$(document).ready(function () {
    $('.form-signin').submit(function (e) {
        var loader = new gifLoader('.form-signin-mainLoader', {
            bgColor: 'none',
            top: 0,
            marginTop: '-4px'
        });
    });
});