<div id="img">
    <h1>Confira Nossos Serviços</h1>
    <button type="button" onClick="document.getElementById('items').scrollIntoView();" class="btn btn-warning">Começar</button>
</div>

<div class="container justify-center mx-auto text-left">
    <div class="text-black text-left text-2xl font-bold pb-2">Recomendado Para Você</div>
    <div class="flex">
        <div class="flex-1 m-3 bg-white-200 text-left">
            <img class="rounded-md " src="assets/images/background.jpg" alt="">
            <h1 class="text-bold text-3xl text-black mx-3 mt-3">Produto 1</h1>
            <p class="text-xl mx-3 mt-2 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quos sapiente deleniti ab, inventore repellat hic non itaque! Amet voluptatum exercitationem
                dolorem modi, neque aut saepe quidem earum quam minima eveniet?</p>
        </div>
        <div class="flex-1 m-3">
            <img class="rounded-md " src="assets/images/background.jpg" alt="">
            <h1 class="text-bold text-3xl text-black mx-3 mt-3">Produto 2</h1>
            <p class="text-xl mx-3 mt-2 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quos sapiente deleniti ab, inventore repellat hic non itaque! Amet voluptatum exercitationem
                dolorem modi, neque aut saepe quidem earum quam minima eveniet?</p>
        </div>
        <div class="flex-1 m-3">
            <img class="rounded-md " src="assets/images/background.jpg" alt="">
            <h1 class="text-bold text-3xl text-black mx-3 mt-3">Produto 3</h1>
            <p class="text-xl mx-3 mt-2 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quos sapiente deleniti ab, inventore repellat hic non itaque! Amet voluptatum exercitationem
                dolorem modi, neque aut saepe quidem earum quam minima eveniet?</p>
        </div>
        <div class="flex-1 m-3">
            <img class="rounded-md " src="assets/images/background.jpg" alt="">
            <h1 class="text-bold text-3xl text-black mx-3 mt-3">Produto 4</h1>
            <p class="text-xl mx-3 mt-2 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quos sapiente deleniti ab, inventore repellat hic non itaque! Amet voluptatum exercitationem
                dolorem modi, neque aut saepe quidem earum quam minima eveniet?</p>
        </div>
    </div>
</div>



<!--- <div class="linha">
              <div class="coluna">
                  <div class="produto" id="1">
                      <img src="assets/images/code.png">
                      <h1>Desenvolvimento de Página Web</h1>
                      <button onclick="solicitar()">Solicitar</button>
                  </div>
              </div>
              <div class="coluna">
                  <div class="produto" id="2">
                      <img src="assets/images/code.png">
                      <h1>Desenvolvimento de Sistema</h1>
                      <button onclick="solicitar()">Solicitar</button>
                  </div>
              </div>
          </div>
          <div class="linha">
              <div class="coluna">
                  <div class="produto" id="3">
                      <img src="assets/images/code.png">
                      <h1>Hospedagem de Página Web - 6 Meses</h1>
                      <button onclick="solicitar()">Solicitar</button>
                  </div>
              </div>
              <div class="coluna">
                  <div class="produto" id="4">
                      <img src="assets/images/code.png">
                      <h1>Suporte Técnico em Manutenção Web</h1>
                      <button onclick="solicitar()">Solicitar</button>
                  </div>
              </div>
          </div>
      </div> -->
<div id="carrinhoUtils">
    <div class="popup3">
        <span id="carrinho" onclick="carrinho()">
        </span>
    </div>
    <div class="popup">
        <span id="msg">
            <p>Adicionado ao Carrinho!</p>
            <button onclick="ok()">Ok</button>
        </span>
    </div>
    <div class="popup2">
        <span id="listaCarrinho">
            <button id="cancel" onclick="cancelar()">Cancelar</button>
            <button id="continuar">Continuar</button>
        </span>
    </div>
</div>

<script>
    function solicitar() {
        var mostrar = document.getElementById("msg");
        mostrar.classList.toggle("show");
    }

    function ok() {
        var esconder = document.getElementById("msg");
        esconder.classList.toggle("show");
    }

    function carrinho() {
        var n = document.getElementById("listaCarrinho");
        n.classList.toggle("show2");
        var n = document.getElementById("carrinho");
        n.classList.toggle("show3");
    }

    function cancelar() {
        var n = document.getElementById("listaCarrinho");
        n.classList.toggle("show2");
        var n = document.getElementById("carrinho");
        n.classList.toggle("show3");
    }
</script>