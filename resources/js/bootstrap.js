// CSRF token setup for ajax call
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Initialize theme js
$(document).ready(function () {
    App.init();
});

// Ajax loader config
topbar.config({
    barThickness: 4,
    barColors: {
        '0': 'rgba(27, 85, 226, .7)',
        '.1': 'rgba(33, 150, 243, .7)',
        '.2': 'rgba(141, 191, 66,  .7)',
        '.3': 'rgba(226, 160, 63,  .7)',
        '.4': 'rgba(231, 81, 90,  .7)',
        '.5': 'rgba(92, 26, 195,  .7)',
        '.6': 'rgba(233, 95, 43,  .7)',
        '.7': 'rgba(255,187,68,  .7)',
        '.8': 'rgba(0,150,136,  .7)',
        '.9': 'rgba(248,83,141,  .7)',
        '1.0': 'rgba(230,255,191,  .7)'
    }
});

// Start/stop ajax loader --- for jquery ajax
$(document).ajaxStart(function () {
    topbar.show();
});
$(document).ajaxComplete(function () {
    topbar.hide();
});

// Initialize google chart packages
google.charts.load('current', {packages: ['corechart', 'bar']});
