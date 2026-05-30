<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Classroom of the Elite - Historia</title>

<link rel="icon" href="imagenes/ayanokoji.jpg">

<link rel="stylesheet" href="css/classroom.css">

</head>

<body>

<div class="contenedor">

<header>

<h1 class="titulo">
🧠 BIENVENIDOS A CLASSROOM OF THE ELITE 🧠
</h1>

<p class="subtitulo">
Una historia de estrategia, inteligencia, manipulación y supervivencia escolar
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
<li>Historia y análisis</li>
<li>Valoración y favoritos</li>

</ul>

<hr>

<h2 class="titulo3">
📖 Resumen
</h2>

<p class="parrafo">
Classroom of the Elite se desarrolla en la Academia Metropolitana de Educación Avanzada,
una escuela prestigiosa donde los estudiantes compiten mediante exámenes, estrategias y puntos.
Kiyotaka Ayanokōji, un alumno aparentemente tranquilo y normal, oculta una inteligencia
y capacidad de manipulación muy superior a la de sus compañeros.
</p>

<hr>

<h2 class="titulo3">
⚔ Desarrollo
</h2>

<p class="parrafo">
A lo largo de la historia, las clases compiten para ascender de categoría. Cada examen pone a prueba
la inteligencia, la cooperación, la traición y la capacidad de leer a los demás. Ayanokōji actúa desde
las sombras, moviendo situaciones a su favor sin revelar completamente su verdadero potencial.
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
<td>Kiyotaka Ayanokōji</td>
<td>Protagonista misterioso y extremadamente inteligente</td>
</tr>

<tr>
<td>Suzune Horikita</td>
<td>Estudiante seria que busca llegar a la Clase A</td>
</tr>

<tr>
<td>Kei Karuizawa</td>
<td>Compañera importante para Ayanokōji</td>
</tr>

<tr>
<td>Honami Ichinose</td>
<td>Líder amable y carismática de otra clase</td>
</tr>

<tr>
<td>Ryūen Kakeru</td>
<td>Estratega agresivo y peligroso</td>
</tr>

</table>

<hr>

<h2 class="titulo3">
🌙 Temas principales
</h2>

<p class="parrafo">
La historia trata temas como la inteligencia, la manipulación, la competencia, la desigualdad,
la confianza, la traición y la lucha por alcanzar la cima dentro de un sistema escolar muy exigente.
</p>

<hr>

<h2 class="menu">
⭐ Valora Classroom of the Elite ⭐
</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarvaloracion.php" method="POST">

<input type="hidden" name="anime" value="Classroom of the Elite">

<input type="hidden" name="pagina" value="../classroom.php">

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

<div style="
background-color:rgba(0,0,0,0.7);
padding:20px;
border-radius:20px;
text-align:center;">

<h3>
🔒 Debes iniciar sesión para valorar Classroom of the Elite
</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

</div>

<?php } ?>

<hr>

<h2 class="menu">
❤️ Añadir Classroom of the Elite a favoritos ❤️
</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarfavorito.php" method="POST">

<input type="hidden" name="anime" value="Classroom of the Elite">

<input type="hidden" name="pagina" value="../classroom.php">

<input type="submit" value="❤️ Guardar favorito">

</form>

<?php }else{ ?>

<h3>
🔒 Debes iniciar sesión para guardar favoritos
</h3>

<a href="cuenta.html">
<button>👤 Iniciar sesión</button>
</a>

<?php } ?>

<hr>

<h2 class="menu">
🧠 Menú de Classroom of the Elite 🧠
</h2>

<table border="1" align="center" class="tabla">

<tr>

<td>
<h3>📚 Novela ligera</h3>

<a href="novela_classroom.php">

<img src="imagenes/ayanokoji.jpg"
width="250"
height="180">

</a>

</td>

<td>
<h3>🖼 Imágenes y GIFs</h3>

<a href="imagenesclassroom.php">

<img src="imagenes/horikita.jpg"
width="250"
height="180">

</a>

</td>

</tr>

<tr>

<td>
<h3>👥 Personajes</h3>

<a href="personajesclassroom.php">

<img src="imagenes/kei.jpg"
width="250"
height="180">

</a>

</td>

<td>
<h3>⬅ Volver</h3>

<a href="trabajo.php">

<img src="imagenes/classroom.jpg"
width="250"
height="180">

</a>

</td>

</tr>

</table>

</div>

</body>

</html>