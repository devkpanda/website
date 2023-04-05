<?php 
    session_start();
  ?>
<head>
<script src="assets/js/indexprod.js"></script>
<script async src="carrinho.js">

  </script>
</head>
<div id="servicos" class="bg-neutral h-40">
        <div class="titulo ms-10 d-flex justify-center">
        <h1 id="h1" class="text-white mt-10 d-flex justify-start">Confira Nossos Serviços</h1>
    </div>
  </div>
    
   

    <!--primeiro container-->
    <div class="container justify-center mx-auto">

      <div class="btn-group grid grid-cols-4 w-50 justify-start ms-10">
        <button id="button1" class="btn text-black mt-10">Front-end</button>
        <button id="button2" class="btn text-black">Back-end</button>
        <button id="button3" class="btn text-black">Diversos</button>
        <button id="button4" class="btn text-black">E-Commerce</button>
      </div>
      

      <div id="produtos1" class="container justify-center mx-auto">
        <div class="flex mt-4">
          <div class="card w-96 text-black shadow-xl h-full rounded-lg">
              <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
              <div class="card-body">
                <h2 class="card-title justify-center">Página Index (Em construção)</h2>
                <div class="row w-full h-5 d-flex justify-center">
                  <div class="col d-flex justify-center w-10 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="col w-15">
                    <p>
                      1d.
                    </p>
                  </div>
                  <div class="col mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                      </svg>
                      <i class="bi bi-cash"></i>
                  </div>
                  <div class="col w-20">
                    <p class="w-20 me-10">
                      R$200,00.
                    </p>
                  </div>
                </div>
                <p id="Info1">Apenas uma página com a mensagem (Em construção) do estilo que o cliente desejar.
                </p>
                <div class="card-actions justify-center mt-10">
                  <button id="buttonDetails1" class="btn btn-secondary">detalhes</button>
                  <button id="00001" class="btn btn-secondary sol">solicitar</button>
                </div>
              </div>
              <ul class="list-group list-group-flush w-full justify-center">
                <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                  <div class="avatar d-flex justify-start w-10 ">
                    <div class="w-12 d-inline rounded-full">
                      <img src="assets/images/logo.png" />
                    </div>
                  </div>
                  <div class="text ms-8">
                  <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
                </div>
                <div class="icon ms-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                    <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                    <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                  </svg>
                  <i class="bi bi-bookmarks "></i>
                </div>
                </li>
              </ul>
            </div>

            <div class="card w-96 text-black shadow-xl h-full rounded-lg">
              <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
              <div class="card-body">
                <h2 class="card-title justify-center">Página de Divulgação</h2>
                <div class="row w-full h-5 justify-center">
                  <div class="col justify-center w-10 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="col w-15">
                    <p>
                      1d.
                    </p>
                  </div>
                  <div class="col mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                      </svg>
                      <i class="bi bi-cash"></i>
                  </div>
                  <div class="col w-20">
                    <p class="w-20 me-10">
                      R$200,00.
                    </p>
                  </div>
                </div>
                <p id="Info2">Página de divulgação até 3 páginas, utilizando HTML, CSS e JS para a construção mesma.</p>
                <div class="card-actions justify-center mt-10">
                  <button id="buttonDetails2" class="btn btn-secondary">detalhes</button>
                  <button id="00002" class="btn btn-secondary sol">solicitar</button>
                </div>
              </div>
              <ul class="list-group list-group-flush w-full justify-center">
                <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                  <div class="avatar d-flex justify-start w-10 ">
                    <div class="w-12 d-inline rounded-full">
                      <img src="assets/images/logo.png" />
                    </div>
                  </div>
                  <div class="text ms-8">
                  <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
                </div>
                
                <div class="icon ms-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                    <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                    <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                  </svg>
                  <i class="bi bi-bookmarks "></i>
                </div>
                </li>
              </ul>
            </div>

            <div class="card w-96 text-black shadow-xl h-full rounded-lg">
              <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
              <div class="card-body">
                <h2 class="card-title justify-center ">Página de Divulgação (feedback)</h2>
                <div class="row w-full h-5 justify-center">
                  <div class="col justify-center w-10 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="col w-15">
                    <p>
                      1d.
                    </p>
                  </div>
                  <div class="col mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                      </svg>
                      <i class="bi bi-cash"></i>
                  </div>
                  <div class="col w-20">
                    <p class="w-20 me-10">
                      R$200,00.
                    </p>
                  </div>
                </div>
                <p id="Info3">Página de divulgação até 3 páginas, utilizando HTML, CSS e JS, porém, com feedback exclusivo para o cliente.</p>
                <div class="card-actions justify-center mt-10">
                  <button id="buttonDetails3" class="btn btn-secondary">detalhes</button>
                  <button id="00003" class="btn btn-secondary sol">solicitar</button>
                </div>
              </div>
              <ul class="list-group list-group-flush w-full justify-center">
                <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                  <div class="avatar d-flex justify-start w-10 ">
                    <div class="w-12 d-inline rounded-full">
                      <img src="assets/images/logo.png" />
                    </div>
                  </div>
                  <div class="text ms-8">
                  <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
                </div>
                
                <div class="icon ms-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                    <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                    <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                  </svg>
                  <i class="bi bi-bookmarks "></i>
                </div>
                </li>
              </ul>
            </div>

            <div class="card w-96 text-black shadow-xl h-full rounded-lg">
            <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
            <div class="card-body">
              <h2 class="card-title justify-center">Página All in One</h2>
              <div class="row w-full h-5 justify-center">
                <div class="col justify-center w-10 mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                  </svg>
                  <i class="bi bi-clock"></i>
                </div>
                <div class="col w-15">
                  <p>
                    1d.
                  </p>
                </div>
                <div class="col mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                      <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                      <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                    </svg>
                    <i class="bi bi-cash"></i>
                </div>
                <div class="col w-20">
                  <p class="w-20 me-10">
                    R$200,00.
                  </p>
                </div>
              </div>
              <p id="Info4">Página All in One, como o nome diz, Tudo em Um. Máximo de 5 sessões.</p>
              <div class="card-actions justify-center mt-10">
                <button id="buttonDetails4" class="btn btn-secondary">detalhes</button>
                <button id="00004" class="btn btn-secondary sol">solicitar</button>
              </div>
            </div>
            <ul class="list-group list-group-flush w-full justify-center">
              <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                <div class="avatar d-flex justify-start w-10 ">
                  <div class="w-12 d-inline rounded-full">
                    <img src="assets/images/logo.png" />
                  </div>
                </div>
                <div class="text ms-8">
                <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
              </div>
              
              <div class="icon ms-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                  <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                  <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                </svg>
                <i class="bi bi-bookmarks "></i>
              </div>
              </li>
            </ul>
          </div>

            </div>
          </div>
        </div>

      <!--segundo container-->
      <div id="produtos2" class="container justify-center mx-auto ">
        <div class="flex mt-4">
          <div class="card w-96 text-black shadow-xl h-full rounded-lg">
              <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
              <div class="card-body">
                <h2 class="card-title justify-center">Página com Sistema CRUD</h2>
                <div class="row w-full h-5 justify-center">
                  <div class="col justify-center w-10 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="col w-15">
                    <p>
                      1d.
                    </p>
                  </div>
                  <div class="col mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                      </svg>
                      <i class="bi bi-cash"></i>
                  </div>
                  <div class="col w-20">
                    <p class="w-20 me-10">
                      R$200,00.
                    </p>
                  </div>
                </div>
                <p id="Info5">Página com inclusão, consulta e Sistema CRUD (CREATE, READ, UPDATE, DELETE)
                </p>
                <div class="card-actions justify-center mt-10">
                  <button onclick="myFunction()" class="btn btn-secondary">detalhes</button>
                  <button id="00005" class="btn btn-secondary sol">solicitar</button>
                </div>
              </div>
              <ul class="list-group list-group-flush w-full justify-center">
                <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                  <div class="avatar d-flex justify-start w-10 ">
                    <div class="w-12 d-inline rounded-full">
                      <img src="assets/images/logo.png" />
                    </div>
                  </div>
                  <div class="text ms-8">
                  <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
                </div>
                
                <div class="icon ms-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                    <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                    <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                  </svg>
                  <i class="bi bi-bookmarks "></i>
                </div>
                </li>
              </ul>
            </div>

            <div class="card w-96 text-black shadow-xl h-full rounded-lg">
              <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
              <div class="card-body">
                <h2 class="card-title justify-center">Página de Login</h2>
                <div class="row w-full h-5 justify-center">
                  <div class="col justify-center w-10 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="col w-15">
                    <p>
                      1d.
                    </p>
                  </div>
                  <div class="col mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                      </svg>
                      <i class="bi bi-cash"></i>
                  </div>
                  <div class="col w-20">
                    <p class="w-20 me-10">
                      R$200,00.
                    </p>
                  </div>
                </div>
                <p id="Info6">Página de formulário para os usuários que utilizarem a página conseguirem
                  realizar seu login.
                </p>
                <div class="card-actions justify-center mt-10">
                  <button id="buttonDetails6" class="btn btn-secondary">detalhes</button>
                  <button id="00006" class="btn btn-secondary sol">solicitar</button>
                </div>
              </div>
              <ul class="list-group list-group-flush w-full justify-center">
                <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                  <div class="avatar d-flex justify-start w-10 ">
                    <div class="w-12 d-inline rounded-full">
                      <img src="assets/images/logo.png" />
                    </div>
                  </div>
                  <div class="text ms-8">
                  <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
                </div>
                
                <div class="icon ms-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                    <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                    <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                  </svg>
                  <i class="bi bi-bookmarks "></i>
                </div>
                </li>
              </ul>
            </div>

            <div class="card w-96 text-black shadow-xl h-full rounded-lg">
              <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
              <div class="card-body">
                <h2 class="card-title justify-center">Página de envio de e-mail</h2>
                <div class="row w-full h-5 justify-center">
                  <div class="col justify-center w-10 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="col w-15">
                    <p>
                      1d.
                    </p>
                  </div>
                  <div class="col mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                      </svg>
                      <i class="bi bi-cash"></i>
                  </div>
                  <div class="col w-20">
                    <p class="w-20 me-10">
                      R$200,00.
                    </p>
                  </div>
                </div>
                <p id="Info7">Página para o usuário realizar um envio de e-mail para você</p>
                <div class="card-actions justify-center mt-10">
                  <button id="buttonDetails7" class="btn btn-secondary">detalhes</button>
                  <button id="button" class="btn btn-secondary">solicitar</button>
                </div>
              </div>
              <ul class="list-group list-group-flush w-full justify-center">
                <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                  <div class="avatar d-flex justify-start w-10 ">
                    <div class="w-12 d-inline rounded-full">
                      <img src="assets/images/logo.png" />
                    </div>
                  </div>
                  <div class="text ms-8">
                  <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
                </div>
                
                <div class="icon ms-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                    <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                    <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                  </svg>
                  <i class="bi bi-bookmarks "></i>
                </div>
                </li>
              </ul>
            </div>

            <div class="card w-96 text-black shadow-xl h-full rounded-lg">
            <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
            <div class="card-body">
              <h2 class="card-title justify-center">Catálogo de produtos</h2>
              <div class="row w-full h-5 justify-center">
                <div class="col justify-center w-10 mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                  </svg>
                  <i class="bi bi-clock"></i>
                </div>
                <div class="col w-15">
                  <p>
                    1d.
                  </p>
                </div>
                <div class="col mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                      <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                      <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                    </svg>
                    <i class="bi bi-cash"></i>
                </div>
                <div class="col w-20">
                  <p class="w-20 me-10">
                    R$200,00.
                  </p>
                </div>
              </div>
              <p id="Info8">Catálogo de produtos para que você possa vender o que desejar em sua página</p>
              <div class="card-actions justify-center mt-10">
                <button id="buttonDetails8" class="btn btn-secondary">detalhes</button>
                  <button id="button" class="btn btn-secondary">solicitar</button>
              </div>
            </div>
            <ul class="list-group list-group-flush w-full justify-center">
              <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                <div class="avatar d-flex justify-start w-10 ">
                  <div class="w-12 d-inline rounded-full">
                    <img src="assets/images/logo.png" />
                  </div>
                </div>
                <div class="text ms-8">
                <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
              </div>
              
              <div class="icon ms-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                  <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                  <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                </svg>
                <i class="bi bi-bookmarks "></i>
              </div>
              </li>
            </ul>
          </div>
            </div>
          </div>
        </div>

      <!--terceiro container-->
      <div id="produtos3" class="container justify-center mx-auto">
        <div class="flex mt-4">
        <div class="card w-96 text-black shadow-xl rounded-lg">
            <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
            <div class="card-body">
              <h2 class="card-title justify-center">Página Facebook</h2>
              <div class="row w-full h-5 justify-center">
                <div class="col justify-center w-10 mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                  </svg>
                  <i class="bi bi-clock"></i>
                </div>
                <div class="col w-15">
                  <p>
                    1d.
                  </p>
                </div>
                <div class="col mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                      <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                      <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                    </svg>
                    <i class="bi bi-cash"></i>
                </div>
                <div class="col w-20">
                  <p class="w-20 me-10">
                    R$200,00.
                  </p>
                </div>
              </div>
              <p id="Info9">Página de Facebook realizada com total originalidade, seguindo suas preferências.</p>
              <div class="card-actions justify-center mt-10">
                <button id="buttonDetails9" class="btn btn-secondary">detalhes</button>
                  <button id="button" class="btn btn-secondary">solicitar</button>
              </div>
            </div>
            <ul class="list-group list-group-flush w-full justify-center">
              <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                <div class="avatar d-flex justify-start w-10 ">
                  <div class="w-12 d-inline rounded-full">
                    <img src="assets/images/logo.png" />
                  </div>
                </div>
                <div class="text ms-8">
                <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
              </div>
              <div class="icon ms-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                  <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                  <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                </svg>
                <i class="bi bi-bookmarks "></i>
              </div>
              </li>
            </ul>
          </div>

          <div class="card w-96 text-black shadow-xl rounded-lg">
                <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
                <div class="card-body">
                  <h2 class="card-title justify-center">Página Instagram</h2>
                  <div class="row w-full h-5 justify-center">
                    <div class="col justify-center w-10 mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                      </svg>
                      <i class="bi bi-clock"></i>
                    </div>
                    <div class="col w-15">
                      <p>
                        1d.
                      </p>
                    </div>
                    <div class="col mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                          <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                          <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                        </svg>
                        <i class="bi bi-cash"></i>
                    </div>
                    <div class="col w-20">
                      <p class="w-20 me-10">
                        R$200,00.
                      </p>
                    </div>
                  </div>
                  <p id="Info10">Página do Instagram realizada com total originalidade, seguindo suas preferências</p>
                  <div class="card-actions justify-center mt-10">
                    <button id="buttonDetails10" class="btn btn-secondary">detalhes</button>
                  <button id="button" class="btn btn-secondary">solicitar</button>
                  </div>
                </div>
                <ul class="list-group list-group-flush w-full justify-center">
                  <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                    <div class="avatar d-flex justify-start w-10 ">
                      <div class="w-12 d-inline rounded-full">
                        <img src="assets/images/logo.png" />
                      </div>
                    </div>
                    <div class="text ms-8">
                    <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
                  </div>
                  <div class="icon ms-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                      <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                      <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                    </svg>
                    <i class="bi bi-bookmarks "></i>
                  </div>
                  </li>
                </ul>
              </div>

              <div class="card w-96 text-black shadow-xl rounded-lg">
              <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
              <div class="card-body">
                <h2 class="card-title justify-center">Tratamento de imagens</h2>
                <div class="row w-full h-5 justify-center">
                  <div class="col justify-center w-10 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="col w-15">
                    <p>
                      1d.
                    </p>
                  </div>
                  <div class="col mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                      </svg>
                      <i class="bi bi-cash"></i>
                  </div>
                  <div class="col w-20">
                    <p class="w-20 me-10">
                      R$200,00.
                    </p>
                  </div>
                </div>
                <p id="Info11">Edição de imagens para que possam ficar mais condizentes com o que o que você deseja (Até 10 imagens)</p>
                <div class="card-actions justify-center mt-10">
                  <button id="buttonDetails11" class="btn btn-secondary">detalhes</button>
                  <button id="button" class="btn btn-secondary">solicitar</button>
                </div>
              </div>
              <ul class="list-group list-group-flush w-full justify-center">
                <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                  <div class="avatar d-flex justify-start w-10 ">
                    <div class="w-12 d-inline rounded-full">
                      <img src="assets/images/logo.png" />
                    </div>
                  </div>
                  <div class="text ms-8">
                  <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
                </div>
                
                <div class="icon ms-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                    <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                    <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                  </svg>
                  <i class="bi bi-bookmarks "></i>
                </div>
                </li>
              </ul>
            </div>



            <div class="card w-96 text-black shadow-xl rounded-lg">
              <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
              <div class="card-body">
                <h2 class="card-title justify-center">Página de Gerenciamento</h2>
                <div class="row w-full h-5 justify-center">
                  <div class="col justify-center w-10 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="col w-15">
                    <p>
                      1d.
                    </p>
                  </div>
                  <div class="col mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                      </svg>
                      <i class="bi bi-cash"></i>
                  </div>
                  <div class="col w-20">
                    <p class="w-20 me-10">
                      R$200,00.
                    </p>
                  </div>
                </div>
                <p id="Info12">Página para realizar o gerenciamento do que você desejar</p>
                <div class="card-actions justify-center mt-10">
                  <button id="buttonDetails12" class="btn btn-secondary">detalhes</button>
                  <button id="button" class="btn btn-secondary">solicitar</button>
                </div>
              </div>
              <ul class="list-group list-group-flush w-full justify-center">
                <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                  <div class="avatar d-flex justify-start w-10 ">
                    <div class="w-12 d-inline rounded-full">
                      <img src="assets/images/logo.png" />
                    </div>
                  </div>
                  <div class="text ms-8">
                  <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
                </div>
                
                <div class="icon ms-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                    <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                    <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                  </svg>
                  <i class="bi bi-bookmarks "></i>
                </div>
                </li>
              </ul>
            </div>

            </div>
          </div>
        </div>

        <!--quarto container-->
        <div id="produtos4" class="container justify-center mx-auto">
          <div class="flex mt-3 justify-center ">
          <div class="card w-96 text-black shadow-xl rounded-lg">
              <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
              <div class="card-body">
                <h2 class="card-title justify-center">Landing Page</h2>
                <div class="row w-full h-5 justify-center">
                  <div class="col justify-center w-10 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="col w-15">
                    <p>
                      1d.
                    </p>
                  </div>
                  <div class="col mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                      </svg>
                      <i class="bi bi-cash"></i>
                  </div>
                  <div class="col w-20">
                    <p class="w-20 me-10">
                      R$200,00.
                    </p>
                  </div>
                </div>
                <p id="Info13">Página que conta com todos os elementos voltados à conversão, do visitante ao Lead ou da sua oportunidade.</p>
                <div class="card-actions justify-center mt-10">
                  <button id="buttonDetails13" class="btn btn-secondary">detalhes</button>
                  <button id="button" class="btn btn-secondary">solicitar</button>
                </div>
              </div>
              <ul class="list-group list-group-flush w-full justify-center">
                <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                  <div class="avatar d-flex justify-start w-10 ">
                    <div class="w-12 d-inline rounded-full">
                      <img src="assets/images/logo.png" />
                    </div>
                  </div>
                  <div class="text ms-8">
                  <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
                </div>
                
                <div class="icon ms-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                    <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                    <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                  </svg>
                  <i class="bi bi-bookmarks "></i>
                </div>
                </li>
              </ul>
            </div>
              <div class="card w-96 text-black shadow-xl rounded-lg">
                <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
                <div class="card-body">
                  <h2 class="card-title justify-center">E-commerce wordpress + elementor + API de pagamento</h2>
                  <div class="row w-full h-5 justify-center">
                    <div class="col justify-center w-10 mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                      </svg>
                      <i class="bi bi-clock"></i>
                    </div>
                    <div class="col w-15">
                      <p>
                        1d.
                      </p>
                    </div>
                    <div class="col mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                          <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                          <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                        </svg>
                        <i class="bi bi-cash"></i>
                    </div>
                    <div class="col w-20">
                      <p class="w-20 me-10">
                        R$200,00.
                      </p>
                    </div>
                  </div>
                  <p id="Info14">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                    sunt explicabo. Nemo enim ipsam voluptatem.</p>
                  <div class="card-actions justify-center mt-10">
                    <button id="buttonDetails14" class="btn btn-secondary">detalhes</button>
                  <button id="button" class="btn btn-secondary">solicitar</button>
                  </div>
                </div>
                <ul class="list-group list-group-flush w-full justify-center">
                  <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                    <div class="avatar d-flex justify-start w-10 ">
                      <div class="w-12 d-inline rounded-full">
                        <img src="assets/images/logo.png" />
                      </div>
                    </div>
                    <div class="text ms-8">
                    <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
                  </div>
                  
                  <div class="icon ms-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                      <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                      <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                    </svg>
                    <i class="bi bi-bookmarks "></i>
                  </div>
                  </li>
                </ul>
              </div>
  
              <div class="card w-96 text-black shadow-xl rounded-lg">
                <figure><img src="assets/images/indexImg.png" alt="Shoes" /></figure>
                <div class="card-body">
                  <h2 class="card-title justify-center">E-commerce personalizada com API de pagamento</h2>
                  <div class="row w-full h-5 justify-center">
                    <div class="col justify-center w-10 mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                      </svg>
                      <i class="bi bi-clock"></i>
                    </div>
                    <div class="col w-15">
                      <p>
                        1d.
                      </p>
                    </div>
                    <div class="col mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                          <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                          <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                        </svg>
                        <i class="bi bi-cash"></i>
                    </div>
                    <div class="col w-20">
                      <p class="w-20 me-10">
                        R$200,00.
                      </p>
                    </div>
                  </div>
                  <p id="Info15">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                    sunt explicabo. Nemo enim ipsam voluptatem.</p>
                  <div class="card-actions justify-center mt-10">
                    <button id="buttonDetails15" class="btn btn-secondary">detalhes</button>
                  <button id="button" class="btn btn-secondary">solicitar</button>
                  </div>
                </div>
                <ul class="list-group list-group-flush w-full justify-center">
                  <li class="list-group-item grid grid-cols-3 w-full d-flex h-20 justify-center">
                    <div class="avatar d-flex justify-start w-10 ">
                      <div class="w-12 d-inline rounded-full">
                        <img src="assets/images/logo.png" />
                      </div>
                    </div>
                    <div class="text ms-8">
                    <h2 class=" d-flex justify-center mt-4 font-medium">DevkPanda</h2>
                  </div>
                  
                  <div class="icon ms-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="65" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                      <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                      <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                    </svg>
                    <i class="bi bi-bookmarks "></i>
                  </div>
                  </li>
                </ul>
              </div>
  
              </div>
            </div>
          </div>
<div class="avatar">
  <div class="w-24 rounded-full bg-neutral-200">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
<i class="bi bi-cart3"></i>
  </div>
</div>
  

    <div class="popup3">
      <span id="carrinho2" onclick="carrinhoAbrir()">
      </span>
      <!-- ALTERAÇÔES JHONNATA ACIMA: Esse é do icone flutuante no canto inferior direito, precisei mudar
     o nome dele pra carrinho2 pra fazer um experimento, e nomear a div da tabela como 'carrinho'. Precisei
    alterar o nome pra carrinho2 no css também, mas vocês vão tirar ele mesmo né?-->
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
        <div id="carrinhoTabela">
          <?php
            if(isset($_SESSION["carrinho"])){
              echo "<table id='tabela-carrinho'>";
              echo "<tr><th>Produto</th><th>Quantidade</th></tr>";
              foreach($_SESSION["carrinho"] as $prod => $qtd){
                echo "<tr><td>$prod</td><td>$qtd</td><td><button id=$prod class = 'remv'>add-1</button><button id=$prod class = 'sol'>add+1</button><button id=$prod class = 'tirar'>Remover</button></td></tr>";
                # O botão de remover -1 e de tirar tudo se encontram somente aqui, com as respectivas classes -> 'remv' e 'tirar'.
              }
              echo "</table>";
            }else{
              echo "Carrinho vazio.";
            }
          ?>
        </div>
            <!--ALTERAÇÕES JHONNATA ACIMA: Tabela do carrinho, o isset checka pra ver se tem algo
          dentro da variável da sessio "carrinho", se não tiver ela dá o echo "carrinho vazio"
        caso tenha, o foreach funciona de maneira que a cada codProduto na variável carrinho, é adicionado duas
      5 colunas à tabela, uma de codProduto, uma de quantidade, um botão de adicionar mais 1 , um botão
    de remover -1 , e um botão de tirar todos, que remove todos de  uma vez independente de quantidade. -->
      </span>
    </div>

  </div>