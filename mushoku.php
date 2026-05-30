<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Mushoku Tensei - Historia</title>

<link rel="icon" href="imagenes/rudy.jpg">

<link rel="stylesheet" href="css/mushoku.css?v=21">

</head>

<body>

<div class="contenedor">

<header>

<h1 class="titulo">
✨ BIENVENIDOS AL MUNDO DE MUSHOKU TENSEI ✨
</h1>

<p class="subtitulo">
Una historia de reencarnación, magia, crecimiento y segundas oportunidades
</p>

</header>

<hr>

<h2 class="titulo2">
📌 ¿Qué encontrarás aquí?
</h2>

<ul class="lista">

<li>Novela ligera</li>
<li>Información de personajes</li>
<li>Imágenes y GIFs</li>
<li>Historia y aventuras</li>

</ul>

<hr>

<h2 class="titulo3">
📖 Resumen
</h2>

<p class="parrafo">

Mushoku Tensei cuenta la historia de un hombre que, tras morir en su mundo original,
reencarna en un mundo de fantasía como Rudeus Greyrat. Conservando sus recuerdos,
decide aprovechar esta nueva vida para cambiar, aprender magia y convertirse en una mejor persona.

</p>

<hr>

<h2 class="titulo3">
⚔ Desarrollo
</h2>

<p class="parrafo">

A lo largo de la historia, Rudeus aprende magia, conoce nuevos compañeros y enfrenta situaciones
que lo hacen madurar. Su viaje está lleno de aventuras, errores, aprendizajes y momentos importantes
que marcan su crecimiento personal.

</p>

<hr>

<h2 class="personajes">
👥 Personajes principales
</h2>

<table border="1" align="center" class="tabla">

<tr class="encabezado">

<th>Personaje</th>
<th>Descripción</th>

</tr>

<tr>
<td>Rudeus Greyrat</td>
<td>Protagonista reencarnado</td>
</tr>

<tr>
<td>Roxy Migurdia</td>
<td>Maestra de magia de Rudeus</td>
</tr>

<tr>
<td>Eris Boreas Greyrat</td>
<td>Compañera de aventuras</td>
</tr>

<tr>
<td>Sylphiette</td>
<td>Amiga de la infancia de Rudeus</td>
</tr>

<tr>
<td>Ruijerd Supardia</td>
<td>Guerrero de la raza Supard</td>
</tr>

</table>

<hr>

<h2 class="titulo3">
🌙 Temas principales
</h2>

<p class="parrafo">

Mushoku Tensei trata temas como la superación personal, la familia, el arrepentimiento,
la magia, la aventura y la oportunidad de empezar de nuevo.

</p>

<hr>


<h2 class="menu">
⭐ Valora Darling in the Franxx ⭐
</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarvaloracion.php" method="POST">

<input
type="hidden"
name="anime"
value="Mushoku Tensei">
<input
type="hidden"
name="pagina"
value="../mushoku.php">

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

<input
type="submit"
value="Guardar valoración">

</form>

<?php }else{ ?>


<div style="
background-color:rgba(0,0,0,0.7);
padding:20px;
border-radius:20px;
text-align:center;">

<h3>
🔒 Debes iniciar sesión para valorar Mushoku tensei
</h3>

<a href="cuenta.html">

<button style="
padding:12px 20px;
border:none;
border-radius:25px;
background:linear-gradient(45deg,#ff4da6,#ff80bf);
color:white;
cursor:pointer;">

👤 Iniciar sesión

</button>

</a>

</div>

<?php } ?>
<hr>

<h2 class="menu">
❤️ Añadir Re:Zero a favoritos ❤️
</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarfavoritos.php" method="POST">

<input type="hidden" name="anime" value="mushoku tensei">

<input type="hidden" name="pagina" value="../mushoku.php">

<input type="submit" value="❤️ Guardar favorito">

</form>

<?php }else{ ?>

<h3>🔒 Debes iniciar sesión para guardar favoritos</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>


<hr>

<h2 class="menu">
✨ Menú de Mushoku Tensei ✨
</h2>

<table border="1" align="center" class="tabla">

<tr>

<td>

<h3>📚 Novela ligera</h3>

<a href="novela_mushoku.php">

<img src="imagenes/sylphi.jpg"
width="250"
height="180">

</a>

</td>

<td>

<h3>🖼 Imágenes y GIFs</h3>

<a href="imagenesmushoku.html">

<img src="imagenes/eris.jpg"
width="250"
height="180">

</a>

</td>

</tr>

<tr>

<td>

<h3>👥 Personajes</h3>

<a href="personajesmushoku.html">

<img src="imagenes/roxy.jpg"
width="250"
height="180">

</a>

</td>

<td>

<h3>⬅ Volver</h3>

<a href="trabajo.php">

<img src="imagenes/rudy.jpg"
width="250"
height="180">

</a>

</td>

</tr>

</table>

</div>

</body>

</html>