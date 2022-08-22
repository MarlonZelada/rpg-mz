<?php require 'templates/header.php'; ?>
<?php require 'templates/body.php';
?>

<?php

if (!isset($_SESSION['id_usuario']) || !validar_estado()) {
    //echo "sesion expirada";
    terminar_sesion();
    header('Location: ./login');
}
?>
<p>Home</p>
<?php require 'templates/end-body.php';
?>
<?php require 'templates/footer.php'; ?>