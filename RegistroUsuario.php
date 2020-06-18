<?php
require 'conexion.php';
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
      <div id="Titulo">
          <div id="Titulo2">
          </div>
        </div>
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
          <div id="formulario">
            <form action="RegistroUsuario.php" method="POST">
              <table id="tableFormulario">
                <tr id="trFormulario">
                  <td id="tdFormulario"> <strong id="strongRegistro">Nombre</strong> <input id="Registro" name="txtNombre" type="text" required></td>
                  <td id="tdFormulario"> <strong id="strongRegistro">Apellido</strong> <input id="Registro" name="txtApellido" type="text" required></td>
                  <td id="tdFormulario"> <strong id="strongRegistro">Rut (Sin . ni -)</strong> <input id="Registro" name="txtRut" type="text" required></td>
                  <td id="tdFormulario"> <strong id="strongRegistro">Edad</strong> <input id="Registro" name="txtEdad" type="text" required></td> 
                  <td id="tdFormulario"> <strong id="strongRegistro">Telefono</strong> <input id="Registro" name="txtTelefono" type="text" required></td>                 
                </tr>
                <tr id="trFormulario">
                  <td id="tdFormulario"> <strong id="strongRegistro" name="StrCorreo">Correo</strong> <input id="Registro" name="txtCorreo" type="text" required></td>
                  <td id="tdFormulario"> <strong id="strongRegistro" name="StrCorreo">Confirmar Correo</strong> <input id="Registro" name="txtCorreo2" type="text" required></td>
                  <td id="tdFormulario"> <strong id="strongRegistro" name="StrCorreo">Contraseña</strong> <input id="Registro" name="txtContraseña" type="text" required></td>
                  <td id="tdFormulario"> <strong id="strongRegistro" name="StrCorreo">Confirmar Contraseña</strong> <input id="Registro" name="txtContraseña2" type="text" required></td>
                </tr>
                <tr id="trFormulario2">
                  <td id="tdFormulario2"> <input id="Registro2" type="submit" name="btn_Registrar" value="Registrar"></td>
                  <td id="tdFormulario2"> <input id="Registro2" type="submit" value="Volver"></td>
                </tr>
              </table>
            </form>
            <?php
              if(isset($_POST['btn_Registrar'])){
                $nombre = $_POST['txtNombre'];
                $apellido = $_POST['txtApellido'];
                $rut = $_POST['txtRut'];
                $edad = $_POST['txtEdad'];
                $telefono = $_POST['txtTelefono'];
                $correo = $_POST['txtCorreo'];
                $correo2 = $_POST['txtCorreo2'];
                $contrasena = $_POST['txtContraseña'];
                $contrasena2 = $_POST['txtContraseña2'];

                if($correo == $correo2){
                  if($contrasena == $contrasena2){
                    $sql = "INSERT INTO usuario VALUES ("."'".$rut."'".","."'".$nombre."'".","."'".$apellido."'".","."'".$edad."'".","."'".$contrasena."'".","."'".$correo."'".","."'".$telefono."')";
                    if (mysqli_query($conn, $sql)) {
                      echo '<script type="text/javascript">alert("Usuario registrado correctamente")</script>';
                      mysqli_close($conn);
                      }else{
                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                    }else{
                      echo '<script type="text/javascript">alert("Las contraseñas no coinciden")</script>';
                      mysqli_close($conn);
                    } 
                }else{
                  echo '<script type="text/javascript">alert("Los correos no coinciden")</script>';
                  mysqli_close($conn);
                }                               
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
