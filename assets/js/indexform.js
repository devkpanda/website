//JavaScript
const pwd = document.getElementById('pwd');
//função de mostrar senha btn1
function showPwd1(){
    const pwd1 = document.getElementById('pwd1');
    if (pwd1.type == 'password'){
        pwd1.type = 'text';
        $(".shPwd").text("Esconder senha");
    }else{
        pwd1.type = 'password';
        $(".shPwd").text("Mostrar senha");
    }
};

//função de mostrar senha btn
function showPwd(){
    if (pwd.type == 'password'){
        pwd.type = 'text';
        $(".shPwd").text("Esconder senha");
    }else{
        pwd.type = 'password';
        $(".shPwd").text("Mostrar senha");
    }
};

//função de mostrar senha btn2
function showPwd2(){
    const pwd2 = document.getElementById('confirmPwd');
    if (pwd2.type == 'password'){
        pwd2.type = 'text';
        $(".shPwd2").text("Esconder senha");
    }else{
        pwd2.type = 'password';
        $(".shPwd2").text("Mostrar senha");
    }
};




//jQuery
$(document).ready(function(){

    //esconder formulário de cadastro
    $("#formCadastro").hide();
    //mostrar formulário de cadastro ao clicar no botão
    $("#irCad").click(function(){
        $("#formCadastro").show();
        $("#formLogin").hide();
    });

    //mostrar formulário de login ao clicar no botão
    $("#irLog").click(function(){
        $("#formCadastro").hide();
        $("#formLogin").show();
    });

    //validação de número na string
    function semNumero(n){
        return n.match(/\d+/g);
    }

    //deixar o submit como default (n enviar o form cadastro)
    $("#formCadastro").submit(function(event){
        event.preventDefault();

        //se nome e sobrenome estiverem com número
        const nome = $("#nome").val();
        if (semNumero(nome) != null) {
            $("#nomeSpan").text("O nome não pode ter número").delay(4000).fadeOut('slow').show();
            return false;
        }else{
            $("#nomeSpan").text("");
        };

        const sobrenome = $("#sobrenome").val();
        if (semNumero(sobrenome) != null) {
            $("#sobrenomeSpan").text("O sobrenome não pode ter número").delay(4000).fadeOut('slow').show();
            return false;
        }else{
            $("#sobrenomeSpan").text("");
        };

        //confirmação de senha
        const pwd = $("#pwd").val();
        const confirmPwd = $("#confirmPwd").val();
        if (pwd === confirmPwd){
            $("#senhaCoin").text("");
        }else{
            $("#senhaCoin").text("As senhas não coincidem").delay(4000).fadeOut('slow').show(); //antes q venham me perguntar, o .show serve só para mostrar após o efeito de fadeout, pois qnd ele executa esse efeito, não é possível mostrar novamente sem o show
            return false;
        };
    });

    //deixar o submit como default (n enviar o form login)
    $("#formLogin").submit(function(event){
        event.preventDefault();
    });
});