<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Konosuba - Historia</title>

<link rel="icon" href="imagenes/konosuba.jpg">
<link rel="stylesheet" href="css/konosuba.css?v=1">
</head>

<body>

<div class="contenedor">

<header>
<h1 class="titulo">💦 BIENVENIDOS AL MUNDO DE KONOSUBA 💦</h1>

<p class="subtitulo">
Una historia de comedia, magia, aventuras y un grupo completamente desastroso
</p>
</header>

<hr>

<h2 class="titulo2">📌 ¿Qué encontrarás aquí?</h2>

<ul class="lista">
<li>Novela ligera</li>
<li>Personajes</li>
<li>Imágenes y GIFs</li>
<li>Historia</li>
<li>Valoraciones y favoritos</li>
</ul>

<hr>

<h2 class="titulo3">📖 Resumen</h2>

<p class="parrafo">
Konosuba cuenta la historia de Kazuma Satou, un joven que muere de forma inesperada
y recibe la oportunidad de renacer en un mundo de fantasía. Al elegir llevarse a la diosa Aqua,
termina formando un grupo lleno de problemas, comedia y aventuras absurdas.
</p>

<hr>

<h2 class="titulo3">⚔ Desarrollo</h2>

<p class="parrafo">
Kazuma, Aqua, Megumin y Darkness intentan vivir como aventureros mientras enfrentan monstruos,
deudas, explosiones, misiones extrañas y situaciones ridículas. A diferencia de otros isekai,
Konosuba se burla de muchos clichés del género.
</p>

<hr>

<h2 class="personajes">👥 Personajes principales</h2>

<table border="1" align="center" class="tabla">

<tr class="encabezado">
<th>Personaje</th>
<th>Descripción</th>
</tr>

<tr>
<td>Kazuma Satou</td>
<td>Protagonista astuto, sarcástico y con mucha suerte</td>
</tr>

<tr>
<td>Aqua</td>
<td>Diosa del agua, poderosa pero muy problemática</td>
</tr>

<tr>
<td>Megumin</td>
<td>Archimaga obsesionada con la magia Explosion</td>
</tr>

<tr>
<td>Darkness</td>
<td>Cruzada resistente con una personalidad muy peculiar</td>
</tr>

<tr>
<td>Yunyun</td>
<td>Rival y amiga de Megumin, poderosa pero solitaria</td>
</tr>

</table>

<hr>

<h2 class="titulo3">🌙 Temas principales</h2>

<p class="parrafo">
Konosuba trata temas como la amistad, la aventura, la comedia, el trabajo en equipo
y la parodia de los mundos de fantasía e isekai.
</p>

<hr>

<h2 class="menu">⭐ Valora Konosuba ⭐</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarvaloracion.php" method="POST">

<input type="hidden" name="anime" value="Konosuba">
<input type="hidden" name="pagina" value="../konosuba.php">

<label>Tu puntuación:</label>
<br><br>

<select name="puntuacion" required>
<option value="">Seleccione</option>
<option value="1">⭐</option>
<option value="2">⭐⭐</option>
<option value="3">⭐⭐⭐</option>
<option value="4">⭐⭐⭐⭐</option>
<option value="5">⭐⭐⭐⭐⭐</option>
</select>

<br><br>

<input type="submit" value="Guardar valoración">

</form>

<?php }else{ ?>

<h3>🔒 Debes iniciar sesión para valorar Konosuba</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>

<hr>

<h2 class="menu">❤️ Añadir Konosuba a favoritos ❤️</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarfavorito.php" method="POST">

<input type="hidden" name="anime" value="Konosuba">
<input type="hidden" name="pagina" value="../konosuba.php">

<input type="submit" value="❤️ Guardar favorito">

</form>

<?php }else{ ?>

<h3>🔒 Debes iniciar sesión para guardar favoritos</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>

<hr>

<h2 class="menu">💦 Menú de Konosuba 💦</h2>

<table border="1" align="center" class="tabla">

<tr>

<td>
<h3>📚 Novela ligera</h3>
<a href="novela_konosuba.php">
<img src="imagenes/kazuma.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>🖼 Imágenes y GIFs</h3>
<a href="imagenes_konosuba.html">
<img src="imagenes/megumin.jpg" width="250" height="180">
</a>
</td>

</tr>

<tr>

<td>
<h3>👥 Personajes</h3>
<a href="personajes_konosuba.html">
<img src="imagenes/aqua.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>⬅ Volver</h3>
<a href="trabajo.php">
<img src="imagenes/konosuba.jpg" width="250" height="180">
</a>
</td>

</tr>

</table>

</div>

</body>
</html>