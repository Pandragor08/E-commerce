<!DOCTYPE html>
<?php
	session_start();
?>
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
              <div class="logo"><img src="img,/pantalla-home.png"></div>
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
<div class="item-opc" title="Registrate"><a href="register.php"><i class="fas fa-address-card"></i></a></div>
<div class="item-opc" title="Iniciar Sesion"><a href="login.php"><i class="fas fa-user"></i></a></div>
<?php
}
?>
</div>
    </header>


        <div class="contenido-principal">
                <div class="conten-page">
                    <div class="titulo-seccion">Productos mas Comprados</div>
                      <div class="producto-list" id="lista1">

                      </div>
                    </div>
                </div>
                <script type="text/javascript">
               $(document).ready(function(){
            $.ajax({
                url:'servicioss/producto/get_all_productos.php',
                type:'POST',
                data:{},
                success:function(data){
                    console.log(data);
                    let html='';
                    for (var i=0; i<data.datos.length; i++){
                    html+=
                    '<div class="product-box">'+
                            '<a href="producto.php?p='+data.datos[i].codigopro+'">'+
                              '<div class="producto">'+
                                '<img src="Productoss/'+data.datos[i].rutimapro+'">'+
                                '<div class="detalle-titulo">'+data.datos[i].nombrepro+'</div>'+
                                '<div class="detalle-description">'+data.datos[i].despro+'</div>'+
                                '<div class="detalle-price">'+precio_s(data.datos[i].prepo)+'</div>'+
                           '</div>'+
                         '</a>'+
                        '</div>';
                    }
                    document.getElementById("lista1").innerHTML=html;
                }
            });
        });
        function precio_s(valor) {
            let svalor=valor.toString();
            let array=svalor.split(".");
            return"$/"+array[0]+".<span>"+array[1]+"</span>";
        }
                </script>





  </body>
</html>