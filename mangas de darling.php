<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>MANGAS DE DARLING IN THE FRANXX</title>

<link rel="icon" href="imagenes/akatsuki2.jfif">

</head>

<body style="background: url('imagenes/zero1.jpg') center/cover fixed;">

<div style="
background-color: rgba(0,0,0,0.6);
padding:20px;
text-align:center;
color:white;">

<h1>
📚 MANGAS DE DARLING IN THE FRANXX
</h1>

<p>
Selecciona un manga para comenzar a leer
</p>

<hr>

<h2>MANGAS</h2>

<h3>
📖 TOMOS DEL 1 - 29 (Gratis)
</h3>

<a href="manga1.html">

<button>
Leer gratis
</button>

</a>

<hr>

<?php if(isset($_SESSION["usuario"])){ ?>

<h3>
🔓 Contenido exclusivo
</h3>

<a href="manga2.html">
<button>TOMOS DEL 30 - 38</button>
</a>

<br><br>

<a href="tomo3.html">
<button>TOMOS DEL 39 - 48</button>
</a>

<br><br>

<a href="tomo5.html">
<button>TOMOS DEL 49 - 50</button>
</a>

<?php }else{ ?>

<div style="
background-color:rgba(0,0,0,0.8);
padding:20px;
border-radius:20px;">

<h3>
🔒 Desde el Tomo 30 debes iniciar sesión
</h3>

<p>
Los tomos 1–29 son una prueba gratis
</p>

<a href="cuenta.html">

<button>
👤 Iniciar sesión
</button>

</a>

</div>

<?php } ?>

<hr>

<a href="darling in the franxx.php">

<button>
⬅ Volver
</button>

</a>

</div>

</body>
</html>