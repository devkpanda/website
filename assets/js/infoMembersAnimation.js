$(document).ready(function () {
    $("#ceciliaInfo").hide();
    $("#luisInfo").hide();
    $("#richardInfo").hide();
    $("#jhonnataInfo").hide();
    $("#vitorInfo").hide();

    $("#ceciliaFoto").click(function () {
      $("#ceciliaInfo").fadeIn("slow");
      $("#luisInfo").hide();
      $("#richardInfo").hide();
      $("#jhonnataInfo").hide();
      $("#vitorInfo").hide();
    });

    $("#luisFoto").click(function () {
      $("#ceciliaInfo").hide();
      $("#luisInfo").fadeIn("slow");
      $("#richardInfo").hide();
      $("#jhonnataInfo").hide();
      $("#vitorInfo").hide();
    });

    $("#jhonnataFoto").click(function () {
      $("#ceciliaInfo").hide();
      $("#luisInfo").hide();
      $("#richardInfo").hide();
      $("#jhonnataInfo").fadeIn("slow");
      $("#vitorInfo").hide();
    });

    $("#richardFoto").click(function () {
      $("#ceciliaInfo").hide();
      $("#luisInfo").hide();
      $("#richardInfo").fadeIn("slow");
      $("#jhonnataInfo").hide();
      $("#vitorInfo").hide();
    });

    $("#vitorFoto").click(function () {
      $("#ceciliaInfo").hide();
      $("#luisInfo").hide();
      $("#richardInfo").hide();
      $("#jhonnataInfo").hide();
      $("#vitorInfo").fadeIn("slow");
    });
  });


  $(document).ready(function () {

    // hide e show nos cards da primeira pag
    $("#Info1").hide();
    $("#Info2").hide();
    $("#Info3").hide();
    $("#Info4").hide();

    $("#buttonDetails1").click(function () {
        $("#Info1").toggle();
        $("#Info2").hide();
        $("#Info3").hide();
        $("#Info4").hide();
    });

    $("#buttonDetails2").click(function () {
        $("#Info2").toggle();
        $("#Info1").hide();
        $("#Info3").hide();
        $("#Info4").hide();
    });

    $("#buttonDetails3").click(function () {
        $("#Info3").toggle();
        $("#Info2").hide();
        $("#Info1").hide();
        $("#Info4").hide();
    });

    $("#buttonDetails4").click(function () {
        $("#Info4").toggle();
        $("#Info2").hide();
        $("#Info1").hide();
        $("#Info3").hide();
    });


});