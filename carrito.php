<?php
	session_start();
	if(!isset($_SESSION['id_usu'])){
		header('location:index.php');	
	}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Es una E-commerce desarollada por alumnos del iti3">
    <title>Kyra-shop</title>
    <link rel="icon" href="img,/iconito.gif">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b2436191c0.js" crossorigin="anonymous"></script>
  <link href="css/index.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  </head>
  <body>

      <header>
              <div class="logo"><a href="index.php">
                <img src="img,/pantalla-home.png"></a></div>
                <div class="search">
                      <input type="text" id="idbusqueda" placeholder="BUSCAR Y ENCUENTRA EN KYRA">
                            <button class="btn-mensaje btn-search"><i class="fas fa-search"></i>
                                      </button>
                                          </div>

<div class="opc">
<?php
if(isset($_SESSION['id_usu'])){
echo '<div class="item-opc"><i class="fas fa-user"></i>'.$_SESSION['nombre'].'</div>';
echo '<div class="item-opc" title="Mis compras"><a href="carrito.php"><i class="fas fa-shopping-cart"></i></a></div>';
echo '<div class="item-opc" title="Salir"><a href="servicioss/logout.php"><i class="fas fa-sign-out-alt"></i></a></div>';
}else{
?>
<div class="item-opc" title="Registrate"><i class="fas fa-address-card"></i></div>
<div class="item-opc" title="Iniciar Sesion"><a href="login.php"><i class="fas fa-user"></i></a></div>
<?php
}
?>

</div>
    </header>


        <div class="contenido-principal">
                <div class="conten-page">
                  
                    </div>
                </div>
                <script type="text/javascript">
   
                </script>
                
  </body>
</html>