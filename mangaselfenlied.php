<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>MANGAS DE ELFEN LIED</title>

<link rel="icon" href="imagenes/elfenlieed2.jpg">

</head>

<body style="background: url('imagenes/elfenlieed1.jpg') center/cover fixed;">

<div style="
background-color: rgba(0,0,0,0.6);
padding:20px;
text-align:center;
color:white;">

<h1>
📚 MANGAS DE ELFEN LIED
</h1>

<p>
Selecciona un tomo para comenzar a leer
</p>

<hr>

<h2>
MANGAS
</h2>

<h3>
📖 TOMO 1 (Gratis)
</h3>

<a href="mangas1.html">

<button>
Leer gratis
</button>

</a>

<hr>

<?php if(isset($_SESSION["usuario"])){ ?>

<h3>
🔓 Contenido exclusivo
</h3>

<a href="mangas2.html">
<button>TOMO 2</button>
</a>

<br><br>

<a href="mangas3.html">
<button>TOMO 3</button>
</a>

<br><br>

<a href="mangas4.html">
<button>TOMO 4</button>
</a>

<br><br>

<a href="mangas5.html">
<button>TOMO 5</button>
</a>

<?php }else{ ?>

<div style="
background-color:rgba(0,0,0,0.8);
padding:20px;
border-radius:20px;">

<h3>
🔒 Desde el Tomo 2 debes iniciar sesión
</h3>

<p>
El Tomo 1 es una prueba gratis
</p>

<a href="cuenta.html">

<button>
👤 Iniciar sesión
</button>

</a>

</div>

<?php } ?>

<hr>

<div>

<a href="alfenlieed.php">

<button>
⬅ Volver
</button>

</a>

</div>

</div>

</body>
</html>