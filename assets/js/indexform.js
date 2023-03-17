$(document).ready(function(){

    //deixar o submit como default (n enviar o form)
    $("#formCadastro").submit(function(event){
        event.preventDefault();

        const pwd = $("#pwd").val();
        const confirmPwd = $("#confirmPwd").val();
        if (pwd === confirmPwd){
            $("#erro").text("");
            return true;
        }else{
            $("#erro").text("As senhas não coincidem");
            return false;
        }
    });


});