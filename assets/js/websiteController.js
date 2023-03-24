$(document).ready(function () {
    $("#initialIndex").show()
    $("#sobre").hide()
    $("#navigationBar").hide()

    $("#indexButton").click(function () {
        $("#initialIndex").hide()
        $("#navigationBar").show()
        $("#sobre").fadeIn("slow")
    })

    
})