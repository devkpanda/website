$(document).ready(function () {
    $.get("sobre.php", function (data) {
        $("#sobre").html(data)
    })

    $.get("contato.php", function (data) {
      $("#contato").html(data)
    });


    $.get("produtos.php", function (data) {
        $("#produtos").html(data)
    })

    $.get("produtos.php", function (data) {
        $("#produtos").html(data)
    })

    $.get("login.php", function (data) {
        $("#login").html(data)
    })
});