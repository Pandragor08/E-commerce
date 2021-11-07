<?php
include('_conexion.php');
$correo=$_POST['correousu'];
$sql="SELECT * FROM usuario where correo='$correo'";
$result=mysqli_query($con,$sql);
if($result){
	$row=mysqli_fetch_array($result);
	$count=mysqli_num_rows($result);
	if($count!=0){
		$pass=$_POST['passwordusu'];
		if($row['pass']!=$pass){
		//error 3 contraseña incorrecta
	header('Location: ../login.php?e=3');
		}else{
				session_start();
				$_SESSION['id_usu']=$row['id_usu'];
				$_SESSION['correo']=$row['correo'];	
				$_SESSION['nombre']=$row['nombre'];	
				header('Location: ../');		
		}
	}else{
	//error 2 correo invalido
	header('Location: ../login.php?e=2');
}
}else{
	//error 1 es de conexion
	header('Location: ../login.php?e=1');
}
 