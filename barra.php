	<style type="text/css">
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
	left: 0px;
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
	display: block;
	padding: 15px 20px;
	color: black;
	font-family: Candara;
	text-decoration: none;
}

.menu li a:hover {
	font-size: 15px;
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
	color: black	;
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

</style>
</head>
<body>
<header>
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
			<li><a href="contacto.php">CONTACTO</a></li>
			<li><a href="">ACERCA DE</a></li>
			<li><a href="politicas.php">POLITICAS DE CAMBIO</a></li>
		</ul>
	</nav>
</header>

</body>
</html>