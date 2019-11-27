<!DOCTYPE html>
<html>

<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">


<title>Proyecto Plataforma Educativa </title>
</head>
<body background="images/f4.jpg" style="background-attachment: fixed"
 background-repeat: no-repeat;>




<!-- formulario registro -->



<form method="post" action="registro.php" >
  <fieldset>
   <center> <legend  style="font-size: 18pt;color:  #FF4000; "><b>REGISTRATE</b></legend>

    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;	color: #FFFFFF;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu Contraseña</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="Repite contraseña" />
    </div>
      
    </div>
   
<br> 
 <br> <br> 
<td> 
<pre style="font-size: 12pt; color:#FF4000";> <b>        ⚞¡ELIGE UN AVATAR!⚟ </b> </pre>


<style> 
      .circulo{
        width: 65px;
        height: 65px; 
        border-radius: 100px;
      }
    </style>

<input type=radio name="avatar" value="avatar1.jpg"><image class='circulo' src='avatars/avatar1.jpg' >
<input type=radio name="avatar" value="avatar2.jpg"><image class='circulo' src='avatars/avatar2.jpg' >
<input type=radio name="avatar" value="avatar3.jpg"><image class='circulo' src='avatars/avatar3.jpg' >
<input type=radio name="avatar" value="avatar7.jpg"><image class='circulo' src='avatars/avatar7.jpg' >
<input type=radio name="avatar" value="avatar8.jpg"><image class='circulo' src='avatars/avatar8.jpg' >
<input type=radio name="avatar" value="avatar8.jpg"><image class='circulo' src='avatars/avatar99.jpg' >

<p> <p>
<input type=radio name="avatar" value="avatar4.jpg"><image class='circulo' src='avatars/avatar4.jpg' >
<input type=radio name="avatar" value="avatar5.jpg"><image class='circulo' src='avatars/avatar5.jpg' >
<input type=radio name="avatar" value="avatar6.jpg"><image class='circulo' src='avatars/avatar6.jpg' >
<input type=radio name="avatar" value="avatar10.jpg"><image class='circulo' src='avatars/avatar10.jpg' >
<input type=radio name="avatar" value="avatar11.jpg"><image class='circulo' src='avatars/avatar11.jpg' >
<input type=radio name="avatar" value="avatar12.jpg"><image class='circulo' src='avatars/avatar12.jpg' >


  </fieldset>

  
  <a href="index.php" class="btn btn-success"> REGRESAR </a>   <center> <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse">


</form>

</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->
</html>