{include file="header.tpl" title="acupuncture.com"}

<body class="d-flex h-100 text-center text-white bg-image"
  style="background-image: url(../Images/acupuncture-process.jpg);">

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h1>Acupuncture.com</h1>
        <nav class="nav nav-masthead justify-content-center ">
          <a class="nav-link active" aria-current="page" href="Home.html">Home</a>
          <a class="nav-link" href="Pathologies.html">Pathologies</a>
          <a class="nav-link" href="Infos.html">Infos</a>
          <a class="nav-link" onclick="afficher()">Connexion</a>
        </nav>
        <div class="d-flex h-100 justify-content-center text-white">
          <div id="auth" class="text-center"></div>
        </div>
      </div>
    </header>

    <main class="px-3">
      <h1>Si vous avez des questions sur l'acupunture, nous somme le site qu'il vous faut.</h1>
      <p class="lead"></p>
      <p class="lead">
        <a href="./Pathologies.html" class="btn btn-lg btn-secondary fw-bold border-white bg-white text-black">Découvrir
        </a>
      </p>
    </main>

    {include file="footer.tpl"}
  </div>

</body>

</html>