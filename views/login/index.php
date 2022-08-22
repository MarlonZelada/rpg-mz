<?php require 'templates/header.php'; ?>

<div class="container-fluid container-login">

    <input type="hidden" name="url" value="<?php echo URL; ?>" id="url">

    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-sm-6 col-md-4 text-center align-items-center">
            <div class="login">
                <form method="POST" action="">
                    <div class="imagen-login">
                        <img src="<?php echo URL; ?>img/kiss.png" alt="">
                    </div>
                    <br>
                    <div class="datos-login">
                        <div class="mb-2">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="" aria-describedby="helpId">
                            <br>
                            <label for="password" class="form-label">Password</label>
                            <input type="text" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>

                    <label for="guardar_sesion" class="guardar_sesion">Mantener abierta la sesión</label>
                    <input type="checkbox" name="guardar_sesion" id="guardar_sesion">
                    <br>
                    <div class="msj">
                        <div class="mensaje-login" role="alert">
                            <p id="mensaje"></p>
                        </div>


                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-outline-success" id="btn-login">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>





</div>

<?php //} 
?>
<script src="<?php echo URL; ?>js/login.js">

</script>





<?php require 'templates/footer.php'; ?>