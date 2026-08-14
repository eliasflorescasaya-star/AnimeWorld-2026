<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Novela Ligera - Tate no Yuusha</title>

<link rel="icon" href="imagenes/tate.jpg">

</head>

<body style="
background:url('imagenes/tate5.jpg')
center/cover fixed;">

<div style="
background-color:rgba(0,0,0,0.78);
padding:20px;
text-align:center;
color:white;
min-height:100vh;">

<h1>
🛡️📚 Novela Ligera - Tate no Yuusha 📚🛡️
</h1>

<p>
Selecciona un volumen para comenzar a leer
</p>

<hr>

<h2>
VOLÚMENES
</h2>

<h3>
📖 Volumen 1 (Gratis)
</h3>

<a href="#">

<button style="
padding:12px 20px;
border:none;
border-radius:20px;
background:linear-gradient(45deg,#16a34a,#fde047);
color:white;
font-size:16px;
cursor:pointer;">

Leer Volumen 1

</button>

</a>

<hr>

<?php if(isset($_SESSION["usuario"])){ ?>

<h3>
🔓 Contenido exclusivo
</h3>

<a href="#">
<button>Volumen 2</button>
</a>

<br><br>

<a href="#">
<button>Volumen 3</button>
</a>

<br><br>

<a href="#">
<button>Volumen 4</button>
</a>

<br><br>

<a href="#">
<button>Volumen 5</button>
</a>

<br><br>

<a href="#">
<button>Volumen 6</button>
</a>

<?php }else{ ?>

<div style="
background-color:rgba(0,0,0,0.85);
padding:20px;
border-radius:20px;
box-shadow:0px 0px 15px #16a34a;">

<h3>
🔒 Desde el Volumen 2 debes iniciar sesión
</h3>

<p>
El Volumen 1 es una prueba gratis.
</p>

<a href="cuenta.html">

<button style="
padding:12px 20px;
border:none;
border-radius:20px;
background:linear-gradient(45deg,#16a34a,#fde047);
color:white;
font-size:16px;
cursor:pointer;">

👤 Iniciar sesión

</button>

</a>

</div>

<?php } ?>

<hr>

<a href="tatenoyuusha.php">

<button style="
padding:12px 25px;
border:none;
border-radius:20px;
background:linear-gradient(45deg,#16a34a,#fde047);
color:white;
font-size:18px;
cursor:pointer;">

🛡️ ⬅ Volver

</button>

</a>

</div>

</body>

</html>