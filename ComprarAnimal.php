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
        <input id="inputIni" type="text" name="" value="" placeholder="Usuario">
        <input id="inputIni" type="text" name="" value="" placeholder="Contraseña">
        <img id="imgLogin" src="img/login.png" alt="" width="50px" height="50px">
        <a id="ARegistro" href="RegistroUsuario.html"> Registrarse</a>
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
          <div id="compraAnimal">
            <?php
              if(isset($_SESSION["animal"]))
                echo "<strong> Animal: ".$_SESSION["animal"]."</strong>";
            ?>
            
            <form action="ComprarAnimal.php" method="POST">
            <table id="tableComprarAnimal">
              <tr id="trComprarAnimal">
                <img src="$_SESSION['animal'].jpg"  width="450px" height="280px" alt="">
                <td id="tdComprarAnimal1"><?php echo '<img src="img/'.$_SESSION["animal"].'.jpg" width="450px" height="280px" alt="" >';?></td>
                <td id="tdComprarAnimalTipo"><strong id="strongTipo">Tipo/Nombre/Edad/Tamaño/Color/Peso</strong></td>
                <td id="tdComprarAnimalPrecio"><strong id="strongPrecio">Precios/Añadidos</strong></td>
                <td id="tdComprarAnimalPago"><strong id="strongPago">Metodo de pago</strong> <select name="" id="selectPago"><option value="1">Efectivo</option><option value="2">PayPal</option><option value="3">WebPay</option></select></menu></td>
              </tr>
              <tr id="trComprarAnimal2">
                <td id="tdComprarAnimal12"><strong id="strongDesc">Descripcion del animal</strong></td>
                <td id="tdComprarAnimal"><input id="btnCompraAnimal" type="submit" value="Comprar"><input id="btnCompraAnimal" type="submit" value="Volver"></td>
              </tr>
            </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
