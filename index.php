<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.2/dist/full.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.2/dist/full.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/styleform.css">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="assets/js/pageControllerAjax.js"></script>
  <title>DevKPanda</title>
</head>

<body class="bg-neutral-200">

  <div id="index">
    <div class="bg-neutral-200 hero min-h-screen mx-auto">
      <div class="hero-content text-center text-neutral-content">
        <div class="">
          <img class="pl-7 ml-24" width="150px" src="assets/images/pandinha-logo.png">
          <h1 class="mb-2 text-5xl font-bold text-black">DevKPanda</h1>
          <p class="mb-2 text-black text-xl">+ Tecnologia e + Idéias para + Qualidade.</p>
          <button id="indexButton" class="btn btn-warning text-black max-h-2 max-w-sm"> Get Started </button>
        </div>
      </div>
    </div>
  </div>

  <div id="navigationBar">
    <div class="bg-neutral-200 py-12 text-black">
      <div class="flex max-w-7xl mx-auto w-full">
        <div class="flex-1">
          <a class="btn btn-ghost normal-case text-xl font-medium" id="logoButton"><img class="h-full"
              src="assets/images/logoenome.png" alt=""></a>
        </div>
        <div class="flex-none">
          <ul class="menu menu-horizontal px-1">
            <li><a id="sobreButton" class="font-sans text-black font-semibold">Sobre</a></li>
            <li><a id="contatoButton" class="font-sans text-black font-semibold">Contato</a></li>
            <li><a id="servicosButton" class="font-sans text-black font-semibold ">Serviços</a></li>
            <li><a id="loginButton" class="font-sans text-black font-semibold ">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div id="sobre">
    <!-- it s here only to referrer where to send the data from .html(data) in pageController Ajax.js file -->
  </div>

  <div id="contato" class="bg-neutral-200">
    <!-- it s here only to referrer where to send the data from .html(data) in pageController Ajax.js file -->
  </div>

  <div id="produtos">
    
  </div>

  <div id="login">
    
  </div>

  <div id="footer">
    <footer class="footer bg-neutral text-neutral-content mx-auto ">
      <div>
        <span class="footer-title">Services</span>
        <a class="link link-hover">Branding</a>
        <a class="link link-hover">Design</a>
        <a class="link link-hover">Marketing</a>
        <a class="link link-hover">Advertisement</a>
      </div>
      <div>
        <span class="footer-title">Company</span>
        <a class="link link-hover">About us</a>
        <a class="link link-hover">Contact</a>
        <a class="link link-hover">Jobs</a>
        <a class="link link-hover">Press kit</a>
      </div>
      <div>
        <span class="footer-title">Legal</span>
        <a class="link link-hover">Terms of use</a>
        <a class="link link-hover">Privacy policy</a>
        <a class="link link-hover">Cookie policy</a>
      </div>
    </footer>
  </div>

  <script src="assets/js/websiteController.js"></script>
</body>

</html>