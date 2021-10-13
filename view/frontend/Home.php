<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">

  <title>Acupuncture.com</title>
  <script src="../../../public/Javascript/Home.js"></script>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">
  <link rel="stylesheet" href="../css/global.css">
  <link href="../../../public/assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <link href="cover.css" rel="stylesheet">
</head>

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

    <footer class="mt-auto text-white">
      <p>by CPE for TIDAL</p>
    </footer>
  </div>

</body>

</html>