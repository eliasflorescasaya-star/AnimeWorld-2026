<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Tate no Yuusha - Historia</title>

<link rel="icon" href="imagenes/naofumi.jpg">
<link rel="stylesheet" href="css/tatenoyuusha.css?v=1">
</head>

<body>

<div class="contenedor">

<header>

<h1 class="titulo">
🛡 BIENVENIDOS AL MUNDO DE TATE NO YUUSHA 🛡
</h1>

<p class="subtitulo">
Una historia de traición, escudos, crecimiento y redención
</p>

</header>

<hr>

<h2 class="titulo2">
📌 ¿Qué encontrarás aquí?
</h2>

<ul class="lista">
<li>Novela ligera</li>
<li>Personajes</li>
<li>Imágenes y GIFs</li>
<li>Historia</li>
<li>Valoraciones y favoritos</li>
</ul>

<hr>

<h2 class="titulo3">
📖 Resumen
</h2>

<p class="parrafo">
Tate no Yuusha no Nariagari cuenta la historia de Naofumi Iwatani, un joven invocado a otro mundo
como el Héroe del Escudo. Tras ser traicionado injustamente, debe aprender a sobrevivir,
proteger a sus aliados y demostrar su verdadero valor.
</p>

<hr>

<h2 class="titulo3">
⚔ Desarrollo
</h2>

<p class="parrafo">
Naofumi comienza siendo despreciado por muchos, pero poco a poco forma vínculos importantes
con Raphtalia, Filo y otros aliados. Su viaje se centra en enfrentar las Olas de Catástrofe,
enemigos peligrosos y la injusticia del reino.
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
<td>Naofumi Iwatani</td>
<td>Héroe del Escudo y protagonista principal</td>
</tr>

<tr>
<td>Raphtalia</td>
<td>Compañera leal de Naofumi y gran espadachina</td>
</tr>

<tr>
<td>Filo</td>
<td>Reina filolial con gran fuerza y velocidad</td>
</tr>

<tr>
<td>Melty Q Melromarc</td>
<td>Princesa de Melromarc y aliada de Naofumi</td>
</tr>

<tr>
<td>Glass</td>
<td>Guerrera poderosa proveniente de otro mundo</td>
</tr>

</table>

<hr>

<h2 class="titulo3">
🌙 Temas principales
</h2>

<p class="parrafo">
La historia trata temas como la traición, la confianza, la superación, la justicia,
la protección de los seres queridos y la reconstrucción personal después de una caída.
</p>

<hr>

<h2 class="menu">
⭐ Valora Tate no Yuusha ⭐
</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarvaloracion.php" method="POST">

<input type="hidden" name="anime" value="Tate no Yuusha">
<input type="hidden" name="pagina" value="../tatenoyuusha.php">

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

<h3>🔒 Debes iniciar sesión para valorar Tate no Yuusha</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>

<hr>

<h2 class="menu">
❤️ Añadir Tate no Yuusha a favoritos ❤️
</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarfavorito.php" method="POST">

<input type="hidden" name="anime" value="Tate no Yuusha">
<input type="hidden" name="pagina" value="../tatenoyuusha.php">

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
🛡 Menú de Tate no Yuusha 🛡
</h2>

<table border="1" align="center" class="tabla">

<tr>

<td>
<h3>📚 Novela ligera</h3>
<a href="novela_tatenoyuusha.php">
<img src="imagenes/naofumi.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>🖼 Imágenes y GIFs</h3>
<a href="imagenes_tatenoyuusha.html">
<img src="imagenes/raphtalia.jpg" width="250" height="180">
</a>
</td>

</tr>

<tr>

<td>
<h3>👥 Personajes</h3>
<a href="personajes_tatenoyuusha.html">
<img src="imagenes/filo.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>⬅ Volver</h3>
<a href="trabajo.php">
<img src="imagenes/tate.jpg" width="250" height="180">
</a>
</td>

</tr>

</table>

</div>

</body>
</html>