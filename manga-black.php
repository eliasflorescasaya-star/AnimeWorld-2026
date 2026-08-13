<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">

<title>Manga - Black Clover</title>

<link rel="icon" href="imagenes/black.jpg">

</head>

<body style="background: url('imagenes/asta.jpg') center/cover fixed;">

<div style="
background-color: rgba(0,0,0,0.7);
padding:20px;
text-align:center;
color:white;">

<h1>
🍀📚 Manga - Black Clover 📚🍀
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

<a href="black1.html">

<button>
Leer Tomo 1
</button>

</a>

<hr>

<?php if(isset($_SESSION["usuario"])){ ?>

<h3>
🔓 Contenido exclusivo
</h3>

<a href="black2.html">
<button>Tomo 2</button>
</a>

<br><br>

<a href="black3.html">
<button>Tomo 3</button>
</a>

<br><br>

<a href="black4.html">
<button>Tomo 4</button>
</a>

<br><br>

<a href="black5.html">
<button>Tomo 5</button>
</a>

<?php }else{ ?>

<div style="
background-color:rgba(0,0,0,0.8);
padding:20px;
border-radius:20px;
box-shadow:0px 0px 15px #22c55e;">

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
background:linear-gradient(45deg,#16a34a,#facc15);
color:white;
cursor:pointer;">

👤 Iniciar sesión

</button>

</a>

</div>

<?php } ?>

<hr>

<a href="blackclover.php">

<button style="
padding:12px 20px;
border:none;
border-radius:20px;
background:linear-gradient(45deg,#16a34a,#facc15);
color:white;
cursor:pointer;">

⬅ Volver

</button>

</a>

</div>

</body>

</html>