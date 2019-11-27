<!DOCTYPE html>
<html>
<head>
<title>Cuestionario</title>
  <link href="estilo de temario.css" rel="stylesheet" type="text/css">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body{
      background: #868686;
    }
  </style>
  </head>
<body >
  <div>
      <ul>
           <li class="has-sub"><a  href="">Instala y configura aplicaciones</a>
             <ul>
               <li class="has-sub"><a title="" href="#">Parcial 1:Conceptos fundamentales de redes computacionales</a>
                   <ul>
                       <li><a  href="Red.html">1.1 Red</a></li>
                       <li><a  href="PacketTracer.html">1.2 Packet tracer</a></li>

                   </ul>
                </li>
                <li class="has-sub"><a title="" href="#">Parcial 2: Instala y configura servicios: DHCP, DNS y FTP</a>
                    <ul>
                        <li><a  href="">2.1 Conceptos fundamentales</a></li>
                        <li><a  href="">2.2 Conceptos de servicios DNS, DHCP y FTP</a></li>

                    </ul>
                 </li>
                 <li class="has-sub"><a title="" href="#">Parcial 3: Instala y configura servicios Correo eléctronico, Servidor web y base de datos</a>
                     <ul>
                         <li><a  href="">1.1 Caracteristicas y configuracion del servidor web</a></li>
                         <li><a  href="">1.2 Caracteristicas y configuracion del servidor de correos</a></li>
                         <li><a  href="">1.3 Caracteristicas y configuracion del servidor de base de datos</a></li>
                     </ul>
                  </li>
              </ul>
           </li>

      </ul>
  </div>
<center>
<embed src="Topologias de Red.mp4" autoplay width="640" height="480"></embed>
 

  <h1 style="color: #FFFFFF; font-size: 15px">CONTESTA LO QUE SE TE PIDE 
  <p>1.-¿Qué es un Switch?</p>
  <br>
  <input id="radios" type="radio" name="radioS" value="" >
  <label for="" style="font-size: 15px;">Te permite conectar otros dispositivos y compartir su información</label>
  <input id="radios" type="radio" name="radioS" value="">
  <label style="font-size: 15px;">Conecta diversos tipos de equipos entre si.</label>
  <input id="radios" type="radio" name="radioS" value="">
  <label style="font-size: 15px;" for="">Dispositivo que conecta diferentes equipos dentro de una misma RED.</label>
  <input id="radios" type="radio" name="radioS" value="">
  <label style="font-size: 15px;" for="">Se encarga de llear por una ruta adecuada el trafico de información.</label>


  <p style="font-size: 20px;">2.-¿cuales son los tipos de Redes sin contar la logica?</p>
  <input id="caja" type="checkbox" name="check[]" value="CAN"> DAN
  <input id="caja" type="checkbox" name="check[]" value="LAN">MAN
  <input id="caja" type="checkbox" name="check[]" value="SAM">SAM
  <input id="caja" type="checkbox" name="check[]" value="RAM">RAM 
  <br> <br>

  <p>3.-¿cual de las siguientes Redes tiene un alcance de 200m hasta 1km? </p>
  <select name="lista" id="lista" class="lista">
    <option value="##########"></option>
    <option value="PAN">PAN</option>
    <option value="LAN">LAN</option>
    <option value="CAN">CAN</option>
    <option value="WAM">WAM</option>
    <option value="GAN">GAN</option>
    <option value="VPN">VPN</option>
    <option value="SAM">SAM</option>
    <option value="VLAN">VLAN</option>
  </select> <br> <br>

  <p>4.-¿Cuantas topologias de RED hay?</p>
  <input id="caja" type="checkbox" name="check[]" value="">7
  <input id="caja" type="checkbox" name="check[]" value="">5
  <input id="caja" type="checkbox" name="check[]" value="">6
  <input id="caja" type="checkbox" name="check[]" value="">4 <br> <br>

    <p>5.-¿Cuales son medios no guiados?</p>
    <input id="caja" type="checkbox" name="check[]" value="">Infrarojos
    <input id="caja" type="checkbox" name="check[]" value="">Fibra optica
    <input id="caja" type="checkbox" name="check[]" value="">Wifi
    <input id="caja" type="checkbox" name="check[]" value="">Cable de par trenzado  <br>  </h1>

  <a class="btn btn-success " style="margin-bottom: 40px" type="reset" href="reporte.php" target="_blank">Imprimir PDF </a>

</html>
