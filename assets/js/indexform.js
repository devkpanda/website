//JavaScript
const pwd = document.getElementById('pwd');
//função de mostrar senha btn1
function showPwd(){
    if (pwd.type == 'password'){
        pwd.type = 'text';
    }else{
        pwd.type = 'password';
    }
};

//função de mostrar senha btn2
function showPwd2(){
    const pwd2 = document.getElementById('confirmPwd');
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