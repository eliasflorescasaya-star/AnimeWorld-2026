<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>MANHWA DE SOLO LEVELING</title>

<link rel="icon" href="imagenes/solo.jpg">

</head>

<body style="background: url('imagenes/solofondo1.jpg') center/cover fixed;">

<div style="
background-color: rgba(0,0,0,0.7);
padding:20px;
text-align:center;
color:white;">

<h1>
📚 MANHWA DE SOLO LEVELING
</h1>

<p>
Selecciona un capítulo para comenzar a leer
</p>

<hr>

<h2>
MANHWA
</h2>

<h3>
📖 Capítulos 1 - 10 (Gratis)
</h3>

<a href="manhwa.html">

<button>
Leer gratis
</button>

</a>

<hr>

<?php if(isset($_SESSION["usuario"])){ ?>

<h3>
🔓 Contenido exclusivo
</h3>

<a href="manhwa1.html">
<button>Capítulos 11 - 30</button>
</a>

<br><br>

<a href="manhwa2.html">
<button>Capítulos 31 - 60</button>
</a>

<br><br>

<a href="manhwa3.html">
<button>Capítulos 61 - 100</button>
</a>

<br><br>

<a href="manhwa4.html">
<button>Capítulos 101 - Final</button>
</a>

<?php }else{ ?>

<div style="
background-color:rgba(0,0,0,0.8);
padding:20px;
border-radius:20px;">

<h3>
🔒 Desde el Capítulo 11 debes iniciar sesión
</h3>

<p>
Los capítulos 1 - 10 son una prueba gratis
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

<a href="solo_leveling.php">

<button>
⬅ Volver
</button>

</a>

</div>

</div>

</body>
</html>