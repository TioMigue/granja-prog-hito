<?php
require 'conexion.php';
session_start();

?>
<script>
  function login(){
    window.location = "AnimalesUsuario.php";
  }
  function error(){
    alert("Correo o contraseña incorrecta");
    window.location = "index.php";
  }

  function comprarAnimal(){
    window.location = "ComprarAnimal.php";
  }
</script>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/estilo.css">
  <title>Document</title>
</head>
<body>
  <div id="main">
    <div id="arriba">
      <div id="Titulo">
        <div id="Titulo2">
        </div>
      </div>
      <div id="camposIniSes">
        <form action="index.php" method="POST">
        <input id="inputIni" type="text" name="txtCorreo" placeholder="Correo" required>
        <input id="inputIni" type="text" name="txtPass" placeholder="Contraseña" required>
        <input type="submit" name="btn_login" value="login"></input>
        </form>
        <?php
            if(isset($_POST['btn_login'])){
                $correo = $_POST['txtCorreo'];
                $contrasena = $_POST['txtPass'];

                $sql = "SELECT * FROM usuario WHERE correo="."'".$correo."'";
                $result = $conn->query($sql);
                if($result ->num_rows > 0){
                  while($row = $result -> fetch_assoc()){
                      $correo1 = $row["correo"];
                      $contrasena1 = $row["contrasena"];
                      $usuario = $row["nombre"];
                  }
                  mysqli_close($conn);
                }

                if($correo == $correo1 && $contrasena == $contrasena1){
                  $_SESSION["usuario"] = $usuario;
                  echo "<script type='text/javascript'>login()</script>";
                }
            }
        ?>
        <img id="imgLogin" src="img/login.png" alt="" width="50px" height="50px">
        <a id="ARegistro" href="RegistroUsuario.php"> Registrarse</a>
      </div>
    </div>
    <div id="Centro">
      <div id="menuCentro">
        <table id="tableBtnMenu">
          <tr id="trBtnMenu">
            <td id="tdBtnMenu"><a href="index.php"><input id="btnMenu" type="submit" value="HOME"></a></td>
            <td id="tdBtnMenu"><a href="index.php"><input id="btnMenu" type="submit" value="CATALOGO"></a></td>
            <td id="tdBtnMenu"><a href="AnimalesUsuario.php"><input id="btnMenu" type="submit" value="TUS MASCOTAS" ></a></td>
            <td id="tdBtnMenu"><a href="multi.php"><input id="btnMenu" type="submit" value="MULTIMEDIA"></a></td>
            <td id="tdBtnMenu"><a href="historialCompra.php"><input id="btnMenu" type="submit" value="HISTORIAL COMPRAS"></a></td>
            <td id="tdBtnMenuMini"><a href="reportarErrorU.php"><img src="img/alert.png" alt="" width="50px" height="50px"></a></td>
          </tr>
        </table>
      </div>
    </div>
    <div id="abajo">
      <table id="tableAnunciosIzq">
        <tr>
          <td>
            <div id="AnuncioIzq"><img id="imgAnuncios"src="img/anuncio1.png" alt=""></div>
          </td>
        </tr>
        <tr>
          <td>
            <div id="AnuncioIzq"><img id="imgAnuncios"src="img/anuncio2.png" alt=""></div>
          </td>
        </tr>
      </table>
      <table id="tableAnunciosDer">
        <tr>
          <td>
            <div id="AnuncioDer"><img id="imgAnuncios"src="img/anuncio3.jpg" alt=""></div>
          </td>
        </tr>
        <tr>
          <td>
            <div id="AnuncioDer"><img id="imgAnuncios"src="img/anuncio4.jpg" alt=""></div>
          </td>
        </tr>
      </table>
      <div id="menuAbajo">
        <div id="contenedorCentroAbajo">
          <div id="buscar">
            <input id="inputBuscar" type="text">
            <input id="btnBuscar" type="submit" value="BUSCAR">
            <div id="imagenes">
              <form action="index.php" method="POST">
              <table id="tableImagenes">
                <tr id="trImaneges">
                  <td id="tdImagenes"><input type="submit" name="animal" value="gatofrente" style="background: url(img/gatofrente.jpg); background-size: 100% 100%; background-repeat: no-repeat; width: 200px; height: 100px; color: rgba(0,0,0,0)" ></td>
                  <td id="tdImagenes"><input type="submit" name="animal" value="cerdo" style="background: url(img/cerdo.jpg); background-size: 100% 100%; background-repeat: no-repeat; width: 200px; height: 100px; color: rgba(0,0,0,0)" ></td>
                  <td id="tdImagenes"><a href=""><img src="img/cerdo.jpg" width="200px" height="100px" alt=""></a></td>
                  <td id="tdImagenes"><a href=""><img src="img/dogchow.jpg" width="200px" height="100px" alt=""></a></td>
                </tr>
                <tr id="trImaneges">
                  <td id="tdImagenes"><a href="ComprarAnimal.html"><img src="img/conejo.jpg" width="200px" height="100px" alt=""></a></td>
                  <td id="tdImagenes"><a href=""><img src="img/golden.jpg" width="200px" height="100px" alt=""></a></td>
                  <td id="tdImagenes"><a href=""><img src="img/vaca.jpg" width="200px" height="100px" alt=""></a></td>
                  <td id="tdImagenes"><a href="ComprarComida.html"><img src="img/pedigree.jpg" width="200px" height="100px" alt=""></a></td>
                </tr>
                <tr id="trImaneges">
                  <td id="tdImagenes"><a href=""></a><img src="img/gallina.jpg" width="200px" height="100px" alt=""></td>
                  <td id="tdImagenes"><a href=""></a><img src="img/hamster.jpg" width="200px" height="100px" alt=""></td>
                  <td id="tdImagenes"><a href=""></a><img src="img/pato.jpg" width="200px" height="100px" alt=""></td>
                  <td id="tdImagenes"><a href=""></a><img src="img/comidaconejo.jpg" width="200px" height="100px" alt=""></td>
                </tr>
              </table>
              <?php
                if(isset($_POST["animal"])){
                  $animal = $_POST["animal"];
                  $_SESSION["animal"] = $animal;
                  echo "<script type='text/javascript'> window.location = 'ComprarAnimal.php '</script>";  
                                  
                }
              ?>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>