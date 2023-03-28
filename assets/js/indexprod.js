// JavaScript

$(document).ready(function () {

    $("#Info1").hide();
    $("#Info2").hide();
    $("#Info3").hide();
    $("#Info4").hide();

    $("#buttonDetails1").click(function () {
        $("#Info1").toggle();
        $("#Info2").hide();
        $("#Info3").hide();
        $("#Info4").hide();

        // $("#textolateral").css('margin-top', '2%')
    });

    $("#buttonDetails2").click(function () {
        $("#Info2").toggle();
        $("#Info1").hide();
        $("#Info3").hide();
        $("#Info4").hide();
        // $("#textolateral").css('margin-top', '5%') 
    });

    $("#buttonDetails3").click(function () {
        $("#Info3").toggle();
        $("#Info2").hide();
        $("#Info1").hide();
        $("#Info4").hide();
        // $("#textolateral").css('margin-top', '2%')
    });

    $("#buttonDetails4").click(function () {
        $("#Info4").toggle();
        $("#Info2").hide();
        $("#Info1").hide();
        $("#Info3").hide();
        // $("#textolateral").css('margin-top', '2%')
    });


});


$(document).ready(function () {
    $("#produtos2").hide();
    $("#produtos3").hide();
    $("#produtos4").hide();


    $("#button1").click(function () {
        $("#produtos1").fadeIn("slow");
        $("#produtos2").hide();
        $("#produtos3").hide();
        $("#produtos4").hide();

        // $("#textolateral").css('margin-top', '2%')
    });

    $("#button2").click(function () {
        $("#produtos1").hide();
        $("#produtos3").hide();
        $("#produtos2").fadeIn("slow");
        $("#produtos4").hide();
        // $("#textolateral").css('margin-top', '5%') 
    });

    $("#button3").click(function () {
        $("#produtos3").fadeIn("slow");
        $("#produtos1").hide();
        $("#produtos2").hide();
        $("#produtos4").hide();
        // $("#textolateral").css('margin-top', '2%')
    });

    $("#button4").click(function () {
        $("#produtos4").fadeIn("slow");
        $("#produtos1").hide();
        $("#produtos2").hide();
        $("#produtos3").hide();
        // $("#textolateral").css('margin-top', '2%')
    });


});