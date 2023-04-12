<div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-8 col-lg-4">
        <div class="card mt-5">
          <div class="card-body">
            <h5 class="card-title text-center mb-4">Iniciar sesión</h5>
            <form action="<?=base_url()?>login" method="post">

                <div class="form-group" hidden>
                    <label for="origen">Origen</label>
                    <input type="text" class="form-control" id="origen" name="origen" aria-describedby="origen" placeholder="Origen" value="<?php echo $origen; ?>">
                </div>

                <div class="form-group">
                    <label for="username">Correo electrónico</label>
                    <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Ingresa tu correo electrónico">
                    <small id="emailHelp" class="form-text text-muted">No compartiremos tu correo electrónico con nadie más.</small>
                </div>


                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña">
                </div>

                <!-- <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                </div> -->

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                </div>

                <div class="form-group">
                    <div class="center"  style="text-align: center;">
                        <p style="color:red"><?php echo $error; ?></p>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
