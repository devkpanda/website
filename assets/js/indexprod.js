// JavaScript

$(document).ready(function () {
    $("#cont2").hide();
    $("#cont3").hide();

    $("#button").click(function () {
        $("#cont1").show(1000);
        $("#cont2").hide();
        $("#cont3").hide();

        // $("#textolateral").css('margin-top', '2%')
    });

    $("#button2").click(function () {
        $("#cont1").hide();
        $("#cont3").hide();
        $("#cont2").show(1000);
        // $("#textolateral").css('margin-top', '5%') 
    });

    $("#button3").click(function () {
        $("#cont3").show(1000);
        $("#cont1").hide();
        $("#cont2").hide();
        // $("#textolateral").css('margin-top', '2%')
    });

});