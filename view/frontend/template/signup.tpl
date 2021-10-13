{include file="header.tpl" title="signup"}

<body class="d-flex h-100 text-center text-white bg-dark">

  <div class="container text-center">
  {include file="navbar.tpl" $active="signup"}

    <main>

      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column"></div>


      <form class="needs-validation text-center" novalidate>
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="formlabel">Prénom</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="formlabel">Nom</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

          <div class="col-12">
            <label for="username" class="formlabel">Nom d'utilisateur</label>
            <div class="input-group has-validation">
              <input type="text" class="form-control" id="username" placeholder="" required>
              <div class="invalid-feedback">
                Your username is required.
              </div>
            </div>
          </div>


          <div class="col-12">
            <label for="Password" class="formlabel">Mot de passe</label>
            <input type="text" class="form-control" id="password" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

          <div class="col-12">
            <label for="email" class="formlabel">Email <span class="text-muted">(Facultatif)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

        </div>

        <hr class="my-4">

        <button class="w-100 btn btn-primary btn-lg" type="submit">Créer le compte</button>
      </form>
  </div>

  </main>

  </div>


  <script src="../../../public/assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="../Javascript/Signup.js"></script>
</body>

</html>