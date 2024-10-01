<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page de Connexion</title>
  <link rel="stylesheet" href="../src/assets/css/styles.min.css">
</head>

<body>
  <!-- Wrapper -->
  <div class="page-wrapper" data-layout="vertical" data-navbarbg="skin6">
    <div class="position-relative overflow-hidden text-bg-light d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center">
        <div class="card mb-0">
          <div class="card-body">
            <a class="d-block py-3">
              <img src="../src/assets/images/logos/logo.svg" alt="Logo">
            </a>
            <p class="text-center">Connectez-vous à votre compte</p>
            <form action="/auth/login" method="post">
              <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="password" required>
              </div>
              <button type="submit" class="btn btn-primary w-100">Se connecter</button>
              <div class="d-flex align-items-center justify-content-center mt-3">
                <a href="/auth/forgot-password" class="text-primary">Mot de passe oublié ?</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>