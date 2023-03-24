// JavaScript

$(document).ready(function () {
    $("#produtos2").hide();
    $("#produtos3").hide();

    $("#button1").click(function () {
        $("#produtos1").fadeIn("slow");
        $("#produtos2").hide();
        $("#produtos3").hide();

        // $("#textolateral").css('margin-top', '2%')
    });

    $("#button2").click(function () {
        $("#produtos1").hide();
        $("#produtos3").hide();
        $("#produtos2").fadeIn("slow");
        // $("#textolateral").css('margin-top', '5%') 
    });

    $("#button3").click(function () {
        $("#produtos3").fadeIn("slow");
        $("#produtos1").hide();
        $("#produtos2").hide();
        // $("#textolateral").css('margin-top', '2%')
    });

});