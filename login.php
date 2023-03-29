<main>
    <section>
        <div id="textolateral">
            <h1>Tenha acesso à nosso trabalho de maneira mais profunda</h5>
                <p>Através de um registro, você conseguirá ter um contato mais próximo conosco, além de ver novidades mais
                    rápido que os demais.</p>
        </div>
        <!-- Ínicio do formulário de login-->
        <form class="bg-neutral-200" action="/action_page.php" id="formLogin">
            <h1>Login</h1>
            <div class="mb-3 mt-3">
                <label for="emailLog" class="form-label">Email:</label>
                <input type="text" class="form-control" id="emailLog" placeholder="Coloque seu email" name="emailLog">
                <span id="emailLogSpan"></span>
            </div>
            <div class="mb-3 mt-3">
                <label for="pwd" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="pwd1" placeholder="Coloque sua senha" name="pswd">
                <label class="mostrarSenha form-check-label">
                    <input class="form-check-input" type="checkbox" name="showpwd" onclick="showPwd1()">
                    <span class="shPwd">Mostrar senha</span>
                    <br><span id="senhaLogSpan"></span>
                </label>
            </div>
            <button type="submit" id="btnlog" class="btn btn-primary">Logar</button>
            <p id="semConta">Não tem uma conta? <a id="irCad" class="cssNovo">Cadastre-se</a></p>
        </form>

        <!-- Ínicio do formulário de cadastro-->
        <form action="/action_page.php" id="formCadastro">
            <h1>Cadastro</h1>
            <div class="row">
                <div class="topnome col">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Coloque seu nome" name="nome">
                    <span id="nomeSpan"></span>
                    <!-- Energy_Neumann -->
                </div>
                <div class="topnome col">
                    <label for="sobrenome" class="form-label">Sobrenome:</label>
                    <input type="sobrenome" class="form-control" id="sobrenome" placeholder="Coloque seu sobrenome" name="sobrenome">
                    <span id="sobrenomeSpan"></span>
                </div>
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="emailCad" placeholder="Coloque seu email" name="email">
                <span id="emailSpan"></span>
            </div>
            <div class="row">
                <div class="col">
                    <label for="pwd" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Coloque sua senha" name="pswd">
                    <label class="mostrarSenha form-check-label">
                        <input class="form-check-input" type="checkbox" name="showpwd" onclick="showPwd()">
                        <span class="shPwd">Mostrar senha</span>
                        <br><span id="senhaSpan"></span>
                    </label>
                </div>
                <div class="col">
                    <label for="confirmPwd" class="form-label">Confirme sua senha:</label>
                    <input type="password" class="form-control" id="confirmPwd" placeholder="Enter password" name="pswd">
                    <label class="mostrarSenha form-check-label">
                        <input class="form-check-input" type="checkbox" name="showpwd" onclick="showPwd2()">
                        <span class="shPwd2">Mostrar senha</span>
                        <br><span id="senhaCoin"></span>
                    </label>
                </div>
            </div>
            <button type="submit" id="btncad" class="btn btn-primary">Cadastrar</button>
            <p id="semConta2">Já tem uma conta? <a id="irLog" class="cssNovo">Faça login</a></p>
        </form>
    </section>
</main>
<script src="assets/js/indexform.js"></script>