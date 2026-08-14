<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Manga - Bleach</title>

<link rel="icon" href="imagenes/bleach.jpg">

</head>

<body style="background:url('imagenes/grinlog.jfif') center/cover fixed;">

<div style="
background-color:rgba(0,0,0,0.78);
padding:20px;
text-align:center;
color:white;
min-height:100vh;">

<h1>
⚔📚 Manga - Bleach 📚⚔
</h1>

<p>
Selecciona un tomo para comenzar a leer
</p>

<hr>

<h2>
TOMOS
</h2>

<h3>
📖 Tomo 1 (Gratis)
</h3>

<a href="#">

<button style="
padding:12px 20px;
border:none;
border-radius:20px;
background:linear-gradient(45deg,#ff7a00,#ffd000);
color:white;
font-size:16px;
cursor:pointer;">

Leer Tomo 1

</button>

</a>

<hr>

<?php if(isset($_SESSION["usuario"])){ ?>

<h3>
🔓 Contenido exclusivo
</h3>

<a href="#">
<button>Tomo 2</button>
</a>

<br><br>

<a href="#">
<button>Tomo 3</button>
</a>

<br><br>

<a href="#">
<button>Tomo 4</button>
</a>

<br><br>

<a href="#">
<button>Tomo 5</button>
</a>

<br><br>

<a href="#">
<button>Tomo 6</button>
</a>

<?php }else{ ?>

<div style="
background-color:rgba(0,0,0,0.85);
padding:20px;
border-radius:20px;
box-shadow:0px 0px 15px #ff7a00;">

<h3>
🔒 Desde el Tomo 2 debes iniciar sesión
</h3>

<p>
El Tomo 1 es una prueba gratis.
</p>

<a href="cuenta.html">

<button style="
padding:12px 20px;
border:none;
border-radius:20px;
background:linear-gradient(45deg,#ff7a00,#ffd000);
color:white;
font-size:16px;
cursor:pointer;">

👤 Iniciar sesión

</button>

</a>

</div>

<?php } ?>

<hr>

<a href="bleach.php">

<button style="
padding:12px 25px;
border:none;
border-radius:20px;
background:linear-gradient(45deg,#ff7a00,#ffd000);
color:white;
font-size:18px;
cursor:pointer;">

⚔ ⬅ Volver

</button>

</a>

</div>

</body>

</html>