document.addEventListener("DOMContentLoaded", function(){

let cards = document.querySelectorAll(".card");
let buscador = document.getElementById("buscador");
let popup = document.getElementById("popup");
let titulo = document.getElementById("titulo");
let descripcion = document.getElementById("descripcion");
let sonido = document.getElementById("clickSound");


buscador.addEventListener("keyup", function(){

let texto = buscador.value.toLowerCase();

cards.forEach(card => {

let nombre = card.dataset.name;

card.style.display =
nombre.includes(texto)
? "block"
: "none";

});

});


cards.forEach(card => {

card.addEventListener("click", function(){

sonido.currentTime = 0;

sonido.play().catch(error => console.log(error));

let nombre = card.dataset.name;

let datos = {

sora:
"Sora es uno de los dos integrantes de Blank. Destaca por su capacidad para leer a las personas, manipular situaciones y crear estrategias complejas.",

shiro:
"Shiro es la hermana menor de Sora y la segunda integrante de Blank. Posee una inteligencia extraordinaria para matemáticas, lógica y cálculo.",

stephanie:
"Stephanie Dola pertenece a la familia real de Elkia y acompaña a Sora y Shiro durante gran parte de sus aventuras en Disboard.",

jibril:
"Jibril es una Flügel extremadamente poderosa que siente una enorme fascinación por el conocimiento, los libros y los desafíos intelectuales.",

izuna:
"Izuna Hatsuse pertenece a la raza Werebeast y posee enormes habilidades físicas y mentales durante los juegos.",

tet:
"Tet es el Dios Único de Disboard y creador de las reglas que obligan a resolver todos los conflictos mediante juegos.",

kurami:
"Kurami Zell es una jugadora inteligente que inicialmente rivaliza con Sora y Shiro por el control de Elkia.",

feel:
"Feel Nilvalen es una elfa poderosa y muy inteligente que mantiene una relación cercana con Kurami Zell.",

plum:
"Plum pertenece a la raza Dhampir y posee conocimientos útiles sobre varias de las razas y reglas de Disboard.",

chlammy:
"Chlammy Zell es una estratega que busca proteger a la humanidad utilizando métodos distintos a los de Blank.",

miko:
"Miko es una figura importante entre los Werebeasts y representa una de las principales autoridades de su raza.",

azriel:
"Azriel es una poderosa Flügel y una figura importante dentro de su raza.",

laila:
"Laila Lorelei pertenece a la raza de las Sirenas y desempeña un papel importante dentro de uno de los desafíos de Disboard.",

foxy:
"Foxy es un personaje vinculado al mundo de los Werebeasts dentro de Disboard."

};

titulo.textContent =
card.querySelector("h3").textContent;

descripcion.textContent =
datos[nombre]
|| "Personaje importante de No Game No Life";

popup.style.display = "flex";

});

});


window.cerrarPopup = function(){

popup.style.display = "none";

}


popup.addEventListener("click", function(event){

if(event.target === popup){

popup.style.display = "none";

}

});


document.addEventListener("keydown", function(event){

if(event.key === "Escape"){

popup.style.display = "none";

}

});

});