<?php
include('../_conexion.php');
$response=new stdClass();


$datos=[];
$i=0;
$sql="select * from producto where estado=1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
    $obj=new stdClass();
    $obj->codigopro=$row['id'];
    $obj->nombrepro=$row['nombrepro'];
    $obj->despro=$row['despro'];
    $obj->prepo=$row['prepo'];
    $obj->rutimapro=$row['rutimapro'];
    $datos[$i]=$obj;
    $i++;
}
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);
?>