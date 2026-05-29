<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Novela Ligera - Re:Zero</title>
<link rel="icon" href="imagenes/rem_ espero les guste, yo mismo lo hice.jfif">
</head>

<body style="background: url('imagenes/emilia.png') center/cover fixed;">

<div style="
background-color: rgba(0,0,0,0.6);
padding:20px;
text-align:center;
color:white;">

<h1>📚 Novela Ligera - Re:Zero</h1>

<p>Selecciona un arco para comenzar a leer</p>

<hr>

<h2>ARCOS</h2>

<h3>📖 Arco 1 (Gratis)</h3>

<a href="arco1.html">
<button>Leer Arco 1</button>
</a>

<hr>

<?php if(isset($_SESSION["usuario"])){ ?>

<h3>🔓 Contenido exclusivo</h3>

<a href="arco2.html"><button>Arco 2</button></a>
<br><br>

<a href="arco3.html"><button>Arco 3</button></a>
<br><br>

<a href="arco4.html"><button>Arco 4</button></a>
<br><br>

<a href="arco5.html"><button>Arco 5</button></a>

<?php }else{ ?>

<div style="
background-color:rgba(0,0,0,0.8);
padding:20px;
border-radius:20px;">

<h3>🔒 Desde el Arco 2 debes iniciar sesión</h3>

<p>El Arco 1 es una prueba gratis.</p>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

</div>

<?php } ?>

<hr>

<a href="re_zero.php">
<button>⬅ Volver</button>
</a>

</div>

</body>
</html>