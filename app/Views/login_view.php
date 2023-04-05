<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario de inicio de sesión con Bootstrap</title>
  <!-- Incluir Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
        .card {
            /* height: 100vh;
          display: flex;
            
             */
            justify-content: center;
            align-items: center;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .card-title {
        font-size: 1.5rem;
        }

        .form-check-label {
        font-size: 0.9rem;
        }

  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-8 col-lg-4">
        <div class="card mt-5">
          <div class="card-body">
            <h5 class="card-title text-center mb-4">Iniciar sesión</h5>
            <form action="<?= base_url() ?>login" method="post">
              <div class="form-group">
                <label for="username">Correo electrónico</label>
                <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Ingresa tu correo electrónico">
                <small id="emailHelp" class="form-text text-muted">No compartiremos tu correo electrónico con nadie más.</small>
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recordarme</label>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $error; ?>
  
  <!-- Incluir Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

