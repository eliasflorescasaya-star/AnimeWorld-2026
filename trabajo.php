<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>AnimeWorld</title>

<link rel="icon" href="imagenes/𖦹 ִ ۫ ⭒ kokomi.jfif">

<link rel="stylesheet" href="css/trabajo.css?v=20">

</head>

<body>

<div style="
position:fixed;
top:20px;
right:20px;
z-index:1000;
text-align:center;
">

<?php if(isset($_SESSION["usuario"])){ ?>

<h3 style="
color:white;
margin-bottom:10px;
">

👋 Bienvenido <?php echo $_SESSION["usuario"]; ?>

</h3>

<a href="php/cerrarsesion.php">

<button
onmouseover="this.style.transform='scale(1.1)'"
onmouseout="this.style.transform='scale(1)'"

style="
padding:12px 20px;
border:none;
border-radius:25px;
background:linear-gradient(45deg,#ff4d4d,#ff8080);
color:white;
font-size:16px;
cursor:pointer;
box-shadow:0px 0px 15px #ff4d4d;
transition:0.4s;
">

🚪 Cerrar sesión

</button>

</a>

<?php }else{ ?>

<a href="cuenta.html">

<button style="
padding:12px 20px;
border:none;
border-radius:25px;
background:linear-gradient(45deg,#ff4da6,#ff80bf);
color:white;
font-size:16px;
cursor:pointer;
box-shadow:0px 0px 10px #ff4da6;
">

👤 Mi cuenta

</button>

</a>

<?php } ?>

</div>

<div class="contenedor">

<h1 class="titulo">
🌸 ANIME WORLD 🌸
</h1>

<p class="subtitulo">
Explora mangas, personajes, fondos, imágenes y GIFs
</p>

<hr>

<h2 class="animes">
📌 Animes disponibles
</h2>

<input
type="text"
id="buscador"
class="buscador"
placeholder="🔎 Buscar anime...">

<hr>

<div style="
display:flex;
flex-wrap:wrap;
justify-content:center;
gap:20px;">

<div class="anime" data-name="rezero">
<a href="re_zero.php">
<img src="imagenes/rem.jpg" width="300" height="200">
<h3>Re:Zero</h3>
</a>
</div>

<div class="anime" data-name="naruto">
<a href="naruto.php">
<img src="imagenes/naruto.jpg" width="300" height="200">
<h3>Naruto</h3>
</a>
</div>

<div class="anime" data-name="darling">
<a href="darling in the franxx.php">
<img src="imagenes/Darling-in-the-FranXX.jpg" width="300" height="200">
<h3>Darling in the Franxx</h3>
</a>
</div>

<div class="anime" data-name="elfen">
<a href="alfenlieed.php">
<img src="imagenes/elfenlieed3.jpg" width="300" height="200">
<h3>Elfen Lied</h3>
</a>
</div>

<div class="anime" data-name="mushoku">
<a href="mushoku.php">
<img src="imagenes/rudeus1.jpg" width="300" height="200">
<h3>Mushoku Tensei</h3>
</a>
</div>

<div class="anime" data-name="sololeveling">
<a href="solo_leveling.php">
<img src="imagenes/solo.png" width="300" height="200">
<h3>Solo Leveling</h3>
</a>
</div>

<div class="anime" data-name="classroom">
<a href="classroom.php">
<img src="imagenes/classroom.jpg" width="300" height="200">
<h3>Classroom of the Elite</h3>
</a>
</div>

<div class="anime" data-name="blackclover">
<a href="blackclover.php">
<img src="imagenes/black.jpg" width="300" height="200">
<h3>Black Clover</h3>
</a>
</div>

<div class="anime" data-name="konosuba">
<a href="konosuba.php">
<img src="imagenes/konosuba.jpg" width="300" height="200">
<h3>Konosuba</h3>
</a>
</div>

<div class="anime" data-name="bleach">
<a href="bleach.php">
<img src="imagenes/bleach.jpg" width="300" height="200">
<h3>Bleach</h3>
</a>
</div>

<div class="anime" data-name="sao">
<a href="sao.php">
<img src="imagenes/sao.jpg" width="300" height="200">
<h3>Sword Art Online</h3>
</a>
</div>

<div class="anime" data-name="tatenoyuusha">
<a href="tatenoyuusha.php">
<img src="imagenes/tate.jpg" width="300" height="200">
<h3>Tate no Yuusha</h3>
</a>
</div>

<div class="anime" data-name="nazo no kanojo x">
<a href="Nazo.php">
<img src="imagenes/Nazo-no-Kanojo-X.jpg" width="300" height="200">
<h3>Nazo no Kanojo X</h3>
</a>
</div>

<div class="anime" data-name="akame ga kill">
<a href="akame.php">
<img src="imagenes/akame.jpg" width="300" height="200">
<h3>Akame ga Kill</h3>
</a>
</div>

<div class="anime" data-name="no game no life">
<a href="nogame.php">
<img src="imagenes/no-game-no-life.jpg" width="300" height="200">
<h3>No Game No Life</h3>
</a>
</div>

</div>

<hr>

<p class="descripcion">

Selecciona un anime para ver su historia, personajes, imágenes y GIFs.

</p>

<hr>

<h2>🌸 Recomienda un anime 🌸</h2>

<?php if(isset($_SESSION["usuario"])){ ?>

<form action="php/guardarcomentario.php" method="POST">

<label>Nombre:</label>
<br>

<input
type="text"
name="nombre"
value="<?php echo $_SESSION["usuario"]; ?>"
readonly>

<br><br>

<label>Anime favorito:</label>
<br>

<select name="anime" required>

<option value="">Seleccione</option>

<option>Re:Zero</option>
<option>Naruto</option>
<option>Darling in the Franxx</option>
<option>Elfen Lied</option>
<option>Mushoku Tensei</option>
<option>Solo Leveling</option>
<option>Classroom of the Elite</option>
<option>Black Clover</option>
<option>Konosuba</option>
<option>Bleach</option>
<option>Sword Art Online</option>
<option>Tate no Yuusha</option>
<option>Nazo no kanojo x</option>
<option>Akame ga Kill</option>
<option>No game no life</option>
</select>

<br><br>

<label>Personaje favorito:</label>
<br>

<input
type="text"
name="personaje"
placeholder="Ej: Roxy"
required>

<br><br>

<label>Comentario:</label>
<br>

<textarea
name="comentario"
placeholder="Escribe tu comentario..."
required>
</textarea>

<br><br>

<input type="submit" value="Enviar">

<input type="reset" value="Limpiar">

</form>

<?php }else{ ?>

<div style="
background:rgba(0,0,0,0.75);
padding:25px;
border-radius:20px;
text-align:center;
box-shadow:0px 0px 15px #ff4da6;
margin:20px auto;
width:80%;">

<h3>
🔒 Debes iniciar sesión para comentar
</h3>

<p>
Crea una cuenta o inicia sesión para dejar tu recomendación en Anime World.
</p>

<a href="cuenta.html">

<button style="
padding:12px 25px;
border:none;
border-radius:25px;
background:linear-gradient(45deg,#ff4da6,#ff80bf);
color:white;
font-size:16px;
cursor:pointer;
box-shadow:0px 0px 10px #ff4da6;">

👤 Ir a Mi cuenta

</button>

</a>

</div>

<?php } ?>

<hr>

<?php if(isset($_SESSION["usuario"])){ ?>

<div style="
display:flex;
justify-content:center;
gap:20px;
flex-wrap:wrap;
margin-top:25px;
margin-bottom:25px;">

<a href="misfavoritos.php">

<button style="
padding:15px 25px;
border:none;
border-radius:30px;
background:linear-gradient(45deg,#ff3366,#ff6699);
color:white;
font-size:16px;
cursor:pointer;
box-shadow:0px 0px 12px #ff3366;">

❤️ Mis favoritos

</button>

</a>

<a href="misvaloraciones.php">

<button style="
padding:15px 25px;
border:none;
border-radius:30px;
background:linear-gradient(45deg,#ffd700,#ffaa00);
color:white;
font-size:16px;
cursor:pointer;
box-shadow:0px 0px 12px #ffaa00;">

⭐ Mis valoraciones

</button>

</a>

<a href="ranking.php">

<button style="
padding:15px 25px;
border:none;
border-radius:30px;
background:linear-gradient(45deg,#00ccff,#0066ff);
color:white;
font-size:16px;
cursor:pointer;
box-shadow:0px 0px 12px #00ccff;">

🏆 Ranking

</button>

</a>

</div>

<hr>

<?php } ?>

</div>

<hr>

<div style="
background:rgba(0,0,0,0.75);
padding:25px;
border-radius:20px;
margin-top:30px;
color:white;
text-align:justify;
box-shadow:0px 0px 15px #4da6ff;">

<h2 style="text-align:center;">
🌸 ¿Qué es el anime?
</h2>

<p>

El anime es un estilo de animación originado en Japón que se caracteriza por sus historias,
personajes únicos y gran variedad de géneros. Existen animes de acción, aventura, romance,
fantasía, terror, ciencia ficción y muchos otros.

</p>

<br>

<h2 style="text-align:center;">
🇯🇵 ¿Por qué es tan popular en Japón?
</h2>

<p>

El anime forma parte de la cultura japonesa y muchas personas crecen viéndolo desde pequeños.
Su popularidad también se debe a que está relacionado con mangas, novelas ligeras,
videojuegos, películas y eventos.

Además, existen historias para todas las edades:
niños, jóvenes y adultos.

</p>

<br>

<h2 style="text-align:center;">
🌸 ¿Qué encontrarás en Anime World?
</h2>

<p>

✅ Información de animes  
✅ Personajes  
✅ Novelas ligeras  
✅ Mangas  
✅ Imágenes y GIFs  
✅ Favoritos ❤️  
✅ Valoraciones ⭐  
✅ Ranking 🏆  

</p>

</div>

<hr>

<script>

document.addEventListener("DOMContentLoaded", function(){

let buscador=document.getElementById("buscador");

let animes=document.querySelectorAll(".anime");

buscador.addEventListener("keyup",function(){

let texto=buscador.value.toLowerCase();

animes.forEach(anime=>{

let nombre=anime.dataset.name;

anime.style.display=
nombre.includes(texto)
? ""
: "none";

});

});

});

</script>

</body>
</html>