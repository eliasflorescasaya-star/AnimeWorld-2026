<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Novela Ligera - Mushoku Tensei</title>

<link rel="icon" href="imagenes/rudy.jpg">

</head>

<body style="background: url('imagenes/dudy.jpg') center/cover fixed;">

<div style="
background-color: rgba(0,0,0,0.6);
padding:20px;
text-align:center;
color:white;">

<h1>
📚 Novela Ligera - Mushoku Tensei
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

<a href="novela1.html">

<button>
Leer Volumen 1
</button>

</a>

<hr>

<?php if(isset($_SESSION["usuario"])){ ?>

<h3>
🔓 Contenido exclusivo
</h3>

<a href="novela2.html">
<button>Volumen 2</button>
</a>

<br><br>

<a href="novela3.html">
<button>Volumen 3</button>
</a>

<br><br>

<a href="novela4.html">
<button>Volumen 4</button>
</a>

<br><br>

<a href="novela5.html">
<button>Volumen 5</button>
</a>

<br><br>

<a href="novela6.html">
<button>Volumen 6</button>
</a>

<?php }else{ ?>

<div style="
background-color:rgba(0,0,0,0.8);
padding:20px;
border-radius:20px;">

<h3>
🔒 Desde el Volumen 2 debes iniciar sesión
</h3>

<p>
El Volumen 1 es una prueba gratis
</p>

<a href="cuenta.html">

<button>

👤 Iniciar sesión

</button>

</a>

</div>

<?php } ?>

<hr>

<a href="mushoku.php">

<button>

⬅ Volver

</button>

</a>

</div>

</body>
</html>