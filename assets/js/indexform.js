//JavaScript
//função de mostrar senha
function showPwd(){
    const pwd = document.getElementById('pwd')
    const pwd2 = document.getElementById('confirmPwd')
    if (pwd.type == 'password'){
        pwd.type = 'text';
    }else{
        pwd.type = 'password';
    }
    if (pwd2.type == 'password'){
        pwd2.type = 'text';
    }else{
        pwd2.type = 'password';
    }
};

//jQuery
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
            $("#erro").text("As senhas não coincidem").delay(5000).fadeOut('slow');
            return false;
        };
    });
});