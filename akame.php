<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Akame ga Kill - Historia</title>

<link rel="icon" href="imagenes/akame.jpg">
<link rel="stylesheet" href="css/akame.css?v=1">
</head>

<body>

<div class="contenedor">

<header>

<h1 class="titulo">
🩸 BIENVENIDOS AL MUNDO DE AKAME GA KILL 🩸
</h1>

<p class="subtitulo">
Una historia de asesinos, revolución, tragedia y batallas intensas
</p>

</header>

<hr>

<h2 class="titulo2">📌 ¿Qué encontrarás aquí?</h2>

<ul class="lista">
<li>Manga</li>
<li>Personajes</li>
<li>Imágenes y GIFs</li>
<li>Historia</li>
<li>Valoraciones y favoritos</li>
</ul>

<hr>

<h2 class="titulo3">📖 Resumen</h2>

<p class="parrafo">
Akame ga Kill cuenta la historia de Tatsumi, un joven guerrero que viaja a la capital
con la esperanza de ayudar a su aldea. Sin embargo, descubre la corrupción del imperio
y termina uniéndose al grupo de asesinos Night Raid.
</p>

<hr>

<h2 class="titulo3">⚔ Desarrollo</h2>

<p class="parrafo">
Night Raid lucha contra el imperio usando armas especiales llamadas Teigu. Cada batalla
pone en riesgo la vida de sus miembros, mostrando un mundo cruel donde la justicia,
la venganza y el sacrificio tienen un precio muy alto.
</p>

<hr>

<h2 class="personajes">👥 Personajes principales</h2>

<table border="1" align="center" class="tabla">

<tr class="encabezado">
<th>Personaje</th>
<th>Descripción</th>
</tr>

<tr>
<td>Akame</td>
<td>Asesina experta y usuaria de la espada Murasame</td>
</tr>

<tr>
<td>Tatsumi</td>
<td>Protagonista que se une a Night Raid</td>
</tr>

<tr>
<td>Esdeath</td>
<td>General imperial extremadamente poderosa</td>
</tr>

<tr>
<td>Leone</td>
<td>Miembro de Night Raid con gran fuerza física</td>
</tr>

<tr>
<td>Mine</td>
<td>Francotiradora orgullosa y valiente</td>
</tr>

</table>

<hr>

<h2 class="titulo3">🌙 Temas principales</h2>

<p class="parrafo">
La historia trata temas como la corrupción, la revolución, la justicia, la pérdida,
el sacrificio, la amistad y el dolor de vivir en un mundo dominado por la violencia.
</p>

<hr>

<h2 class="menu">⭐ Valora Akame ga Kill ⭐</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarvaloracion.php" method="POST">

<input type="hidden" name="anime" value="Akame ga Kill">
<input type="hidden" name="pagina" value="../akame.php">

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

<h3>🔒 Debes iniciar sesión para valorar Akame ga Kill</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>

<hr>

<h2 class="menu">❤️ Añadir Akame ga Kill a favoritos ❤️</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarfavorito.php" method="POST">

<input type="hidden" name="anime" value="Akame ga Kill">
<input type="hidden" name="pagina" value="../akame.php">

<input type="submit" value="❤️ Guardar favorito">

</form>

<?php }else{ ?>

<h3>🔒 Debes iniciar sesión para guardar favoritos</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>

<hr>

<h2 class="menu">🩸 Menú de Akame ga Kill 🩸</h2>

<table border="1" align="center" class="tabla">

<tr>

<td>
<h3>📚 Manga</h3>
<a href="manga_akame.php">
<img src="imagenes/akame.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>🖼 Imágenes y GIFs</h3>
<a href="imagenes_akame.html">
<img src="imagenes/esdeath.jpg" width="250" height="180">
</a>
</td>

</tr>

<tr>

<td>
<h3>👥 Personajes</h3>
<a href="personajes_akame.html">
<img src="imagenes/tatsumi.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>⬅ Volver</h3>
<a href="trabajo.php">
<img src="imagenes/akame.jpg" width="250" height="180">
</a>
</td>

</tr>

</table>

</div>

</body>
</html>