<?php
	session_start();
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
                  <section>
                    <div class="parte1">
                      <img src="img,/icono-loli.png" id="img-producto">
                    </div>
                    <div class="parte2">
                      <h1 id="id-titulo">Nombre del producto</h1>
                      <h2 id="id-precio">Precio </h2>
                      <h3 id="id-description">Descripcion</h3>
                      <button onclick="compra()">COMPRAME</button>
                    </div>
                  </section>
                    <div class="titulo-seccion">Productos mas Comprados</div>
                      <div class="producto-list" id="lista1">

                      </div>
                    </div>
                </div>
                <script type="text/javascript">
                var p='<?php  echo $_GET["p"]; ?>';
                </script>
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
                      if (data.datos[i].codigopro==p) {
                        document.getElementById("img-producto").src="Productoss/"+data.datos[i].rutimapro;
                        document.getElementById("id-titulo").innerHTML=data.datos[i].nombrepro;
                          document.getElementById("id-precio").innerHTML=precio_s(data.datos[i].prepo);
                            document.getElementById("id-description").innerHTML=data.datos[i].despro;
                      }
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
        
        function compra(){
                  $.ajax({
                      url:'servicioss/compra_validar/start_buy.php',
                      type:'POST',
                      data:{
                        codigopro:p
                      },
                      success:function(data){
                          console.log(data);
                          if (data.state) {
                          		alert(data.detail);
                          }else {
                            alert(data.detail);
                            if (data.open_login) {
                              open_login();
                            }
                          }
                      }
                  });

                }
                function open_login(){
                  window.location.href="login.php";

                }
                </script>
                




  </body>
</html>