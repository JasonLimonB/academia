<!DOCTYPE html>

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="index2.php">PAGINA PRINCIPAL</a></li>
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:10px">
		
			</form>
		<ul class="nav pull-right">
					
<?php echo "Bienvenid@ <strong> ".$_SESSION['user']." </strog><img src='avatars/".$_SESSION['AVATAR']."'width='30' height='30'> </a></li>";?>
<br><li><a href="desconectar.php">      [Cerrar Cesión] </a></li>

 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>
</html>