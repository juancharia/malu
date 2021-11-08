
<?php
include 'dbConfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>𝐌𝐀𝐋𝐔 | Productos</title>
  <link rel="shortcut icon" href="img/icono.png">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

    .container{padding: 50px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;t}
    .cart-link i {
      position: absolute;
      top: 90px;
      right: 190px;
      color: black  ;

    }
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.navegacion {
  width: 1000px;
  margin: 0px auto;
  background: ;
  position: relative;
  left: -10px;
  top: 20px;
  border-top: #D1D1D1 2px solid;
  text-align: center;
}

.navegacion ul{
  list-style: none;

}

.menu > li {
display: inline-block;
}

.menu > li > a {
  font-size: 16px;
  display: block;
  padding: 15px 20px;
  color: black;
  font-family: Candara;
  text-decoration: none;
}

.menu li a:hover {
  font-size:15px ;
  color: #B27CC4;
  transition: all .5s;
}

.submenu {
  position: absolute;
  background: #FFFFFF;
  width: 13.5%;
  text-align: center;
  visibility: hidden;
  opacity: 0;
  transition: opacity 1.5s;

}

.submenu li a {
  display: block;
  padding: 15px;
  color: black  ;
  font-family: arial;
  text-decoration: none;
  font-size:  13.5px;
}

.menu li:hover .submenu {
  visibility: visible;
  opacity: 1;

}

.hola  {
  color:#B27CC4 ;
}

.logo img {
  width: 150px;
  position: relative;
  left: 600px;
}

.container p {
  font-size: 20px;
  font-family: fantasy;
}

.carrito img {
  width: 25px;
  position: absolute;
  right: 180px;
  top:70px;
  color: black;

}

.container {
	position: absolute;
	
}

    </style>
</head>
</head>
<body>
<div class="logo">
    <img src="img/logoandes.png">


  </div>
  <nav class="navegacion">
    <ul class="menu">
      <li><a href="inicio.php"><p class="hola">INICIO</p></a></li>
      <li><a href="index.php">PRODUCTOS <b>▼</b></a>
      <ul class="submenu">
        <li><a href="">CAMPERAS</a></li>
        <li><a href="">PANTALONES</a></li>
        <li><a href="">ZAPATILLAS</a></li>
        <li><a href="">ACCESORIOS</a></li>
      </ul>
  </li>
      <li><a href="">CONTACTO</a></li>
      <li><a href="">ACERCA DE</a></li>
      <li><a href="">POLITICAS DE CAMBIO</a></li>
    </ul>
  </nav>
</header>

</body>
</html>
<div class="container">
    <h1>PRODUCTS</h1>
  
  <!-- Cart basket -->
  <div class="carrito">
    <a href="viewCart.php" title="View Cart"><img src= "img/carrito.png"></i> </a>
  </div>
    
  <!-- Product list -->
    <div class="row col-lg-12">
            <div class="card col-lg-4">
      <div class="card-body">
        <img src="http://d3ugyf2ht6aenh.cloudfront.net/stores/239/344/products/remera-manga-corta-lila-hombre1-d9f5c476f3cc47e0be16274081488607-640-0.jpg" width="300px">
        <h5 class="card-title">CAMISETA FACHA</h5>
        <h6 class="card-subtitle mb-2 text-muted">$1.599</h6>
        <p class="card-text">camiseta</p>
        <a href="cartAction.php?action=addToCart&amp;id=2" class="btn btn-primary">Add to Cart</a>
   </div>
  </div>
 </div>
</div>

</div>
</div>
</body>
</html>