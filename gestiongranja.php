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
      <div id="TituloAD">
        <div id="Titulo2">
        </div>
      </div>
      <div id="camposIniSesAD">
        <input id="inputIni" type="text" name="" value="" placeholder="Usuario">
        <input id="inputIni" type="text" name="" value="" placeholder="Contraseña">
        <img id="imgLogin" src="img/login.png" alt="" width="50px" height="50px">
        <a id="ARegistro" href="RegistroUsuario.html"> Registrarse</a>
      </div>
    </div>
    <div id="Centro">
      <div id="menuCentroAD">
        <table id="tableBtnMenu">
          <tr id="trBtnMenuAD">
            <td id="tdBtnMenuAD"><a href="homeadmi.html"><input id="btnMenuAD" type="submit" value="HOME"></a></td>
            <td id="tdBtnMenuAD"><a href="gestiongranja.html"><input id="btnMenuAD" type="submit" value="Gestionar granja"></a></td>
            <td id="tdBtnMenuAD"><a href="RegistrarAnimal.html"><input id="btnMenuAD" type="submit" value="Ingresar Animal" ></a></td>
            <td id="tdBtnMenuAD"><a href="registrarAlime.html"><input id="btnMenuAD" type="submit" value="Ingresar Alimento"></a></td>
            <td id="tdBtnMenuAD"><a href="RegistrarEmpleado.html"><input id="btnMenuAD" type="submit" value="Ingresar Granjas"></a></td>

            <td id="tdBtnMenuMiniGV"><a href="ChequeoAnimalAdmin.html"><img src="img/alert.png" alt="" width="50px" height="50px"></a></td>
          </tr>
        </table>
      </div>
    </div>
    <div id="abajoAD">
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
      <div id="menuAbajoAD">
        <div id="contenedorCentroAbajoAD">
          <div id="conteFormChequeoAD2">
            <table>
              <tr id="lan">
                <td id="las"><div id="formularioChequeoAD12"> Nombre granja: </div></td>
                <td id="las"><input id="formularioInputAD14" type="text">  </td>
                <td id="las"><div id="formularioChequeoAD12"> Direccion</div></td>
                <td id="las"><input id="formularioInputAD15" type="text"> </td>
              </tr>
              <tr>
                <td id="ls"><div id="formularioChequeoAD13"> RUN </div></td>
                <td id="ls"><input id="formularioInputAD14" type="text">  </td>
              </tr>
              <tr id="lan">
                <td id="ls"><div id="formularioChequeoAD12"> Granjeros </div></td>
                <td id="ls"><select name="" id="selectanimal2"><option value="1">juan</option><option value="2">Macarena</option><option value="3">Alexa</option></select> </td>
                <td id="ls"><div id="formularioChequeoAD12"> Veterinario </div></td>
                <td id="ls"><select name="" id="selectanimal2"><option value="1">Perro</option><option value="2">Gato</option><option value="3">Cerdo</option></select></td>
              </tr>

              <tr id="lan">
              <td id="las"><div ><div id="formularioChequeoAD"> Descripcion: </div></div></td>
              <td id="las"><input id="formularioInputDescripcionAD12" type="text" name="" value=""></td>
              <td id="las"><div id="formularioChequeoAD"> Imagen </div></td>
              <td id="las"><img src="img/upload.png" alt="" width="50px" height="50px"></td>
              </tr>
              <tr id="lan">
                <td id="las"><a href=""><input id="btnMenuAD2" type="submit" value="Ver granja"></td>
                <td id="las"><a href=""><input id="btnMenuAD2" type="submit" value="Ingresar"></td>
                <td id="las"><a href=""><input id="btnMenuAD2" type="submit" value="volver"></td>
              </tr>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
