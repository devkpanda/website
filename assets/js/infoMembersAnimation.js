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