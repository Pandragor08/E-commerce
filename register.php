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
   <style type="text/css">
    	form{
			max-width: 460px;
			width: calc(100% - 40px);
			padding: 40px;
			background: #fff;
			border-radius: 5px;
			margin: auto;
		}
		form h3{
		   text-align: center;
			margin: 5px 0;
		}
		form input{
			padding: 7px 10px;
			width: calc(100%);
			margin-bottom: 25px;
		}
		form button{
			padding: 10px 15px;
			width: calc(100%);
			background: #02DBDB;
			border: none;
			color: black;
		}
		form p{
			margin:0;
			margin-bottom:5px;
			color: red;
		}
		
    </style>
  </head>
  <body background="img,/register.png">
      <header>
              <div class="logo"><a href="index.php">
                <img src="img,/pantalla-home.png"></a></div>
                </header>
                
               <div class="contenido-principal">
          <div >
           			<form action="servicioss/login.php" method="POST">


				<h3><b>Comienza Registro</b></h3>
				<br>
				<input type="text" name="nameusu" placeholder="Nombre(s)">
				<input type="text" name="apeidousu" placeholder="Apeidos">
				<input type="text" name="correousu" placeholder="Correo">
				<input type="password" name="passwordusu" placeholder="Contraseña">
				<input type="text" name="direccion" placeholder="Calle">
				<input type="text" name="delegacion" placeholder="Municipio">
				<button type="submit"><b>Registrarme</b></button>
						</form>						
              </div>
          </div>                                                               
  </body>
</html>