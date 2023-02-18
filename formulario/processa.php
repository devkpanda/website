<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$msg = $_POST['msg'];
		
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "richardklaoss@gmail.com");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "richard.neumann@aluno.ifsp.edu.br");
        $content = new SendGrid\Content("text/html", "Olá Richard, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $msg");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso";
		
        ?>
    </body>
</html>
