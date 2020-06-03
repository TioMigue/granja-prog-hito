<script>
    function noLogeado(){
        alert("Usted no ha iniciado sesion");
        window.location = "index.php";
    }

    function Logeado(){
        alert("Bienvenido: ".$_SESSION["usuario"]);
        window.location = "AnimalesUsuario.php";
    }
</script>

<?php
    session_start();

    if(isset($_SESSION["usuario"])){
        echo "<script>Logeado()</script>"; 
    }else{
        echo "<script>noLogeado()</script>";
    }
?>