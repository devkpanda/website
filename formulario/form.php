<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <main>
        <section>
        <h1>Formulário de contato</h1>
        <form action="processa.php" method="POST" autocomplete="on">
        <p>
            <label for="inome">Nome</label>
            <input type="text" name="nome" id="inome" placeholder="Nome Completo" maxlength="50" autocomplete="off"> 
        </p>
        <p>
            <label for="iemail">Email</label>
            <input type="email" name="email" id="iemail" placeholder="Seu email" autocomplete="on" required maxlength="70">  
        </p>
        <p>
            <label for="imsg">Mensagem</label>
            <textarea name="msg" id="imsg" cols="50" rows="4" placeholder="Sua mensagem" autocomplete="off" required maxlength="1000"></textarea>  
        </p>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </p>
        </form>
        </section>
    </main>
</body>
</html>