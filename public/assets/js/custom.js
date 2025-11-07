$(document).ready(function () {
    //Active menu
    const url = window.location + '';
    const pathname = window.location.pathname;
    const home_url = url.split('/', 3)[2];
    const base = url.split('/', 2)[0] + '//' + home_url;
    const active_url = pathname.split('/')[1];
    const sidebar = $('.nav-sidebar');
    const active_link = active_url ? sidebar.find('a[href="' + base + '/' + active_url + '"]') : sidebar.find('a[href="' + base + '"]');
    active_link.addClass('active');
});