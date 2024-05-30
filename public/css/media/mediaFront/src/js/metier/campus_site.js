/**
 * Created by ANIN TELECOM2 on 07/12/2016.
 */
$(document).ready(function () {

    $(".next-step").click(function (e) {

        var $active = $('.nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.nav-tabs li.active');
        prevTab($active);

    });
});

var url = document.location.toString();
if (url.match('#')) {
    $('.presentation a[href=#'+url.split('#')[1]+']').tab('show') ;
}

var url1 = document.location.toString();
if (url1.match('#')) {
    $('.inp_en_chiffre a[href=#'+url1.split('#')[1]+']').tab('show') ;
}