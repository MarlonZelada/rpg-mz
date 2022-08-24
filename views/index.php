<?php
if (!isset($_SESSION['id_usuario'])/* || !validar_estado()*/) {
    //echo "no hay session";
    header('Location: ./login');
} ?>


<?php require 'templates/header.php'; ?>
<?php require 'templates/body.php';
?>


<p>Home</p>
<?php require 'templates/end-body.php';
?>
<?php require 'templates/footer.php'; ?>