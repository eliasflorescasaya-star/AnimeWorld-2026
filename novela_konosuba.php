<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Novela Ligera - Konosuba</title>

<link rel="icon" href="imagenes/konosuba.jpg">

</head>

<body style="background: url('imagenes/kasuma.jpg') center/cover fixed;">

<div style="
background-color: rgba(0,0,0,0.7);
padding:20px;
text-align:center;
color:white;">

<h1>
💦📚 Novela Ligera - Konosuba 📚💦
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

<a href="konosuba1.html">

<button style="
padding:12px 20px;
border:none;
border-radius:20px;
background:linear-gradient(45deg,#38bdf8,#facc15);
color:white;
cursor:pointer;">
Leer Volumen 1
</button>

</a>

<hr>

<?php if(isset($_SESSION["usuario"])){ ?>

<h3>
🔓 Contenido exclusivo
</h3>

<a href="konosuba2.html">
<button>Volumen 2</button>
</a>

<br><br>

<a href="konosuba3.html">
<button>Volumen 3</button>
</a>

<br><br>

<a href="konosuba4.html">
<button>Volumen 4</button>
</a>

<br><br>

<a href="konosuba5.html">
<button>Volumen 5</button>
</a>

<br><br>

<a href="konosuba6.html">
<button>Volumen 6</button>
</a>

<?php }else{ ?>

<div style="
background-color:rgba(0,0,0,0.8);
padding:20px;
border-radius:20px;
box-shadow:0px 0px 15px #38bdf8;">

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
background:linear-gradient(45deg,#38bdf8,#facc15);
color:white;
cursor:pointer;">

👤 Iniciar sesión

</button>

</a>

</div>

<?php } ?>

<hr>

<a href="konosuba.php">

<button style="
padding:12px 20px;
border:none;
border-radius:20px;
background:linear-gradient(45deg,#38bdf8,#facc15);
color:white;
cursor:pointer;">

⬅ Volver

</button>

</a>

</div>

</body>

</html>