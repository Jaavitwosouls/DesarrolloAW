<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    


<div class="modal-dialog text-center bg-secondary " style="margin: 100px;">
	<div class="col-12">
        <div class="col-12 bg-black">
            <img src="/" alt="" style="width: 15%;">
        </div>
		<div class="modal-content" style="width: 40%; margin: 30px auto;">
		<h3 style="text-align: center;">Inicio de Sesión</h3>
		<form action="<?php echo base_url('/login') ?>" method="POST" class="g-3 bg-white needs-validation" style="margin: 30px" novalidate>
			<div class="form-group" style="width: 60%; margin: 30px auto;">
				<label for="usuario">Usuario</label>
                <input type="text" name="usuario" class="form-control text-center" required="" placeholder="Ingrese usuario">
                <div class="invalid-feedback">
                    Por favor ingrese nombre de usuario.
                </div>
			</div>
			<div class="form-group" style="width: 60%; margin: 30px auto;">
				<label for="password">Contraseña</label>
                <input type="password" name="password" class="form-control text-center" required="" placeholder="Ingrese contraseña">
                <div class="invalid-feedback">
                    Por favor ingrese contraseña.
                </div>
              </div>
			<div class="form-group">
				<button class="btn btn-lg btn-warning btn-block">Entrar</button>
			</div>
		</form>

	</div>
</div>
</div>




<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>