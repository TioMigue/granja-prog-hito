<?php
//require 'conexion.php';
session_start();
?>

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
      <div id="camposIniSes">
        <form action="AnimalesUsuario.php" method="POST">
        <?php
          if(isset($_SESSION["usuario"])){
            echo "<strong> Bienvenido".$_SESSION["usuario"]."</strong>";
            echo '<input type="submit" name="btn_logOut" value="LogOut"></input>';
            if(isset($_POST['btn_logOut'])){
              session_destroy();
              echo '<script> window.location = "index.php"</script>';
            }
          }else{
            echo '<input id="inputIni" type="text" name="" value="" placeholder="Usuario">';
            echo '<input id="inputIni" type="text" name="" value="" placeholder="Contraseña">';
          }
          //echo '<input id="inputIni" type="text" name="" value="" placeholder="Usuario">';
        ?>        
        </form>        
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
          <div id="animalesUsuario">
            <input id="inputBuscar1" type="text"></input>
            <input id="btnBuscar1" type="submit" value="BUSCAR"></input>
            <div id="btnUpload">
              <img id="upload" src="img/upload.png" alt=""></img>
              <a href="multi.html"> <input id="btnMultimedia" type="submit" value="MULTIMEDIA"></input></a>
            </div>
            <div id="imagenesUsuario">
              
              <table id="tableImagenesUsuario">
                <tr id="trImanegesUsuario">
                  <td id="tdImagenesUsuario"><a href=""><img src="img/gatofrente.jpg" width="200px" height="100px" alt=""></a></td>
                  <td id="tdImagenesUsuario"><a href=""><img src="img/gatofrente.jpg" width="200px" height="100px" alt=""></a></td>
                  <td id="tdImagenesUsuario"><a href=""><img src="img/cerdo.jpg" width="200px" height="100px" alt=""></a></td>
                  <td id="tdImagenesUsuario"><a href=""><img src="" width="200px" height="100px" alt=""></a></td>
                </tr>
                <tr id="trImanegesUsuario">
                  <td id="tdImagenesUsuario"><a href=""><img src="img/conejo.jpg" width="200px" height="100px" alt=""></a></td>
                  <td id="tdImagenesUsuario"><a href="EstadoAnimal-Alimento.html"><img src="img/golden.jpg" width="200px" height="100px" alt=""></a></td>
                  <td id="tdImagenesUsuario"><a href=""><img src="img/vaca.jpg" width="200px" height="100px" alt=""></a></td>
                  <td id="tdImagenesUsuario"><a href=""><img src="" width="200px" height="100px" alt=""></a></td>
                </tr>
                <tr id="trImanegesUsuario">
                  <td id="tdImagenesUsuario"><a href=""></a><img src="img/gallina.jpg" width="200px" height="100px" alt=""></td>
                  <td id="tdImagenesUsuario"><a href=""></a><img src="img/hamster.jpg" width="200px" height="100px" alt=""></td>
                  <td id="tdImagenesUsuario"><a href=""></a><img src="img/pato.jpg" width="200px" height="100px" alt=""></td>
                  <td id="tdImagenesUsuario"><a href=""></a><img src="" width="200px" height="100px" alt=""></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
