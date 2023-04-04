$(document).ready(function () {
    // makes the initial index
    $("#index").show()
    $("#sobre").hide()
    $("#contato").hide()
    $("#produtos").hide()
    $("#carrinhoUtils").hide()
    $("#login").hide()
    $("#navigationBar").hide()
    $("#footer").hide()

    $("#logoButton").click(function () {
        $("#navigationBar").hide()
        $("#index").fadeIn("slow")
        $("#sobre").hide()
        $("#contato").hide()
        $("#produtos").hide()
        $("#carrinhoUtils").hide()
        $("#login").hide()
        $("#footer").hide()
    })

    $("#entrarEmContatoButton").click(function () {
        $("navigationBar").show()
        $("#index").hide()
        $("#sobre").hide()
        $("#contato").fadeIn("slow")
        $("#produtos").hide()
        $("#carrinhoUtils").hide()
        $("#login").hide()
        $("#footer").show()
    })

    // when click indexButton, show About page
    $("#indexButton").click(function () {
        $("#navigationBar").show()
        $("#index").hide()
        $("#sobre").fadeIn("slow")
        $("#contato").hide()
        $("#produtos").hide()
        $("#carrinhoUtils").hide()
        $("#login").hide()
        $("#footer").show()
    })

    $("#contatoButton").click(function () {
        $("navigationBar").show()
        $("#index").hide()
        $("#sobre").hide()
        $("#contato").fadeIn("slow")
        $("#produtos").hide()
        $("#carrinhoUtils").hide()
        $("#login").hide()
        $("#footer").show()
    })

    $("#sobreButton").click(function () {
        $("navigationBar").show()
        $("#index").hide()
        $("#sobre").fadeIn("slow")
        $("#contato").hide()
        $("#produtos").hide()
        $("#carrinhoUtils").hide()
        $("#login").hide()
        $("#footer").show()

        $("#ceciliaInfo").hide()
        $("#luisInfo").hide()
        $("#richardInfo").hide()
        $("#jhonnataInfo").hide()
        $("#vitorInfo").hide()
    })

    $("#servicosButton").click(function () {
        $("navigationBar").show()
        $("#index").hide()
        $("#sobre").hide()
        $("#contato").hide()
        $("#produtos").fadeIn("slow")
        $("#carrinhoUtils").fadeIn("slow")
        $("#login").hide()
        $("#footer").show()
    })

    $("#loginButton").click(function () {
        $("navigationBar").show()
        $("#index").hide()
        $("#sobre").hide()
        $("#contato").hide()
        $("#produtos").hide()
        $("#carrinhoUtils").hide()
        $("#login").fadeIn("slow")
        $("#footer").show()
    })

})