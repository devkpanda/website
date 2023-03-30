// JavaScript
    
//const button = document.getElementById('buttonDetails1');
//let msg = document.querySelector('#Info1');

// teste do caralho nao funcioa buceta cu

//$(document).ready(function () {
//    $("#Info1").hide();
//    $("#Info2").hide();
//    $("#Info3").hide();
//    $("#Info4").hide();

//button.addEventListener('click', ()=>{
//  msg.classList.toggle('reveal');
//})

//});


$(document).ready(function () {

    $('#button2, #button3, #button4').click(function () {
        if (this.id == 'button2') {
            $("#Info5").hide();
            $("#Info6").hide();
            $("#Info7").hide();
            $("#Info8").hide();

            $("#buttonDetails5").click(function () {
                $("#Info5").toggle();
                $("#Info2").hide();
                $("#Info3").hide();
                $("#Info8").hide();
            });
        
            $("#buttonDetails6").click(function () {
                $("#Info6").toggle();
                $("#Info5").hide();
                $("#Info3").hide();
                $("#Info8").hide();
            });
        
            $("#buttonDetails7").click(function () {
                $("#Info7").toggle();
                $("#Info5").hide();
                $("#Info6").hide();
                $("#Info8").hide();
            });
        
            $("#buttonDetails8").click(function () {
                $("#Info8").toggle();
                $("#Info5").hide();
                $("#Info6").hide();
                $("#Info7").hide();
            });
        } if (this.id == 'button3') {
            $("#Info9").hide();
            $("#Info10").hide();
            $("#Info11").hide();
            $("#Info12").hide();

            $("#buttonDetails9").click(function () {
                $("#Info9").toggle();
                $("#Info10").hide();
                $("#Info11").hide();
                $("#Info12").hide();
            });
        
            $("#buttonDetails10").click(function () {
                $("#Info10").toggle();
                $("#Info9").hide();
                $("#Info11").hide();
                $("#Info12").hide();
            });
        
            $("#buttonDetails11").click(function () {
                $("#Info11").toggle();
                $("#Info9").hide();
                $("#Info10").hide();
                $("#Info12").hide();
            });
        
            $("#buttonDetails12").click(function () {
                $("#Info12").toggle();
                $("#Info9").hide();
                $("#Info10").hide();
                $("#Info11").hide();
            });
            
        } if (this.id == 'button4') {
            $("#Info13").hide();
            $("#Info14").hide();
            $("#Info15").hide();

            $("#buttonDetails13").click(function () {
                $("#Info13").toggle();
                $("#Info14").hide();
                $("#Info15").hide();
            });
        
            $("#buttonDetails14").click(function () {
                $("#Info14").toggle();
                $("#Info13").hide();
                $("#Info15").hide();
                
            });
        
            $("#buttonDetails15").click(function () {
                $("#Info15").toggle();
                $("#Info13").hide();
                $("#Info14").hide();
                
            });
        }
     });




    $("#Info5").hide();
    $("#Info6").hide();
    $("#Info7").hide();
    $("#Info8").hide();

    $('#button2').click(function () {
            $("#Info5").hide();
            $("#Info6").hide();
            $("#Info7").hide();
            $("#Info8").hide();

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


$(document).ready(function () {
    
    $("#produtos2").hide();
    $("#produtos3").hide();
    $("#produtos4").hide();

    // hide e show nos cards
    $("#button1").click(function () {
        $("#produtos1").fadeIn("slow");
        $("#produtos2").hide();
        $("#produtos3").hide();
        $("#produtos4").hide();

    });

    $("#button2").click(function () {
        $("#produtos1").hide();
        $("#produtos3").hide();
        $("#produtos2").fadeIn("slow");
        $("#produtos4").hide();

    });

    $("#button3").click(function () {
        $("#produtos3").fadeIn("slow");
        $("#produtos1").hide();
        $("#produtos2").hide();
        $("#produtos4").hide();
        
    });

    $("#button4").click(function () {
        $("#produtos4").fadeIn("slow");
        $("#produtos1").hide();
        $("#produtos2").hide();
        $("#produtos3").hide();
        
    });

    var carrinho = [];

    $(".sol").click(function(event){
        var dataPost = { "acao": 1, "prod":event.target.id, "qtd":1 };
        $.post("carrinho.php", dataPost , function(data){
            console.table(data);
        })			
    });
// quando um button com id='sol' é clicado, acao = 1

    $(".remv").click(function( event ){
        var dataPost = { "acao": 0, "prod":event.target.id, "qtd":0 };
        $.post( "carrinho.php", dataPost , function(data){
            console.table(data);
        })
    });
// quando um button com id='remv' é clicado, acao = 0
    $(".tirar").click(function( event ){
        var dataPost = { "acao": 2, "prod":event.target.id, "qtd":0 };
        $.post( "carrinho.php", dataPost , function(data){
            console.table(data);
        })
    });
// quando um button com id='tirar' é clicado, acao = 2 ps: esse é o que remove completamente todos os produtos de uma vez.

});

function enviarPHP(){

}

// essa function é coisa do cleber, não sei se faz alguma coisa.
