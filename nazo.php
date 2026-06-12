<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Nazo no Kanojo X - Historia</title>

<link rel="icon" href="imagenes/nazo.jpg">
<link rel="stylesheet" href="css/nazo.css?v=1">
</head>

<body>

<div class="contenedor">

<header>

<h1 class="titulo">
💜 BIENVENIDOS A NAZO NO KANOJO X 💜
</h1>

<p class="subtitulo">
Una historia de romance, misterio y una conexión muy extraña
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
Nazo no Kanojo X cuenta la historia de Akira Tsubaki, un estudiante común que conoce a Mikoto Urabe,
una chica misteriosa y silenciosa. Entre ambos nace una relación extraña, única y diferente a otros romances escolares.
</p>

<hr>

<h2 class="titulo3">⚔ Desarrollo</h2>

<p class="parrafo">
A través de situaciones misteriosas, momentos incómodos y sentimientos nuevos, Tsubaki y Urabe van construyendo
una relación basada en confianza, curiosidad y una conexión muy particular.
</p>

<hr>

<h2 class="personajes">👥 Personajes principales</h2>

<table border="1" align="center" class="tabla">

<tr class="encabezado">
<th>Personaje</th>
<th>Descripción</th>
</tr>

<tr>
<td>Mikoto Urabe</td>
<td>Chica misteriosa con una personalidad única</td>
</tr>

<tr>
<td>Akira Tsubaki</td>
<td>Protagonista que se enamora de Urabe</td>
</tr>

<tr>
<td>Ayuko Oka</td>
<td>Amiga de Urabe y novia de Ueno</td>
</tr>

<tr>
<td>Kōhei Ueno</td>
<td>Amigo de Tsubaki</td>
</tr>

<tr>
<td>Yōko Tsubaki</td>
<td>Hermana mayor de Akira</td>
</tr>

</table>

<hr>

<h2 class="titulo3">🌙 Temas principales</h2>

<p class="parrafo">
La historia trata temas como el primer amor, la confianza, la curiosidad, la adolescencia,
el romance escolar y las formas diferentes de expresar sentimientos.
</p>

<hr>

<h2 class="menu">⭐ Valora Nazo no Kanojo X ⭐</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarvaloracion.php" method="POST">

<input type="hidden" name="anime" value="Nazo no Kanojo X">
<input type="hidden" name="pagina" value="../nazo.php">

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

<h3>🔒 Debes iniciar sesión para valorar Nazo no Kanojo X</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>

<hr>

<h2 class="menu">❤️ Añadir Nazo no Kanojo X a favoritos ❤️</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarfavorito.php" method="POST">

<input type="hidden" name="anime" value="Nazo no Kanojo X">
<input type="hidden" name="pagina" value="../nazo.php">

<input type="submit" value="❤️ Guardar favorito">

</form>

<?php }else{ ?>

<h3>🔒 Debes iniciar sesión para guardar favoritos</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>

<hr>

<h2 class="menu">💜 Menú de Nazo no Kanojo X 💜</h2>

<table border="1" align="center" class="tabla">

<tr>

<td>
<h3>📚 Manga</h3>
<a href="manga_nazo.php">
<img src="imagenes/urabe.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>🖼 Imágenes y GIFs</h3>
<a href="imagenes_nazo.html">
<img src="imagenes/nazo.jpg" width="250" height="180">
</a>
</td>

</tr>

<tr>

<td>
<h3>👥 Personajes</h3>
<a href="personajes_nazo.html">
<img src="imagenes/tsubaki.jpg" width="250" height="180">
</a>
</td>

<td>
<h3>⬅ Volver</h3>
<a href="trabajo.php">
<img src="imagenes/nazo.jpg" width="250" height="180">
</a>
</td>

</tr>

</table>

</div>

</body>
</html>