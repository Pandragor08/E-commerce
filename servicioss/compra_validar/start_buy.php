<?php
  session_start();
    $response=new stdClass();
      if (!isset($_SESSION['id_usu'])) {
    $response->state=false;
    $response->detail="No esta logeado";
    $response->open_login=true;
  }else {
  	include_once('../_conexion.php');  
  		$id_usu=$_SESSION['id_usu'];
  		$codigopro=$_POST['codigopro'];
  		$sql="INSERT INTO pedido
  		(id_usu,id,fecha,estado,direccion,telefono)
  		VALUES
  		($id_usu,$codigopro,'now()',1,'','')";
  		$result=mysqli_query($con,$sql);
  		if($result){
  		 $response->state=true;
    $response->detail="PRODUCTO AGREGADO";
  		}else{
			  		$response->state=false;
    $response->detail="NO SE AGREGO PRODUCTO";
  		}
    mysqli_close($con);
  }



 
  header('Content-Type: application/json');
  echo json_encode($response);
 