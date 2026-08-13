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

asta:
"Asta nació sin magia, pero obtuvo un grimorio de cinco hojas que contiene el poder de la Anti-Magia. Su objetivo es convertirse en Rey Mago.",

yuno:
"Yuno es el rival y hermano adoptivo de Asta. Posee un enorme talento mágico y utiliza principalmente magia de viento.",

noelle:
"Noelle Silva pertenece a la familia real Silva. Es miembro de los Toros Negros y posee una enorme cantidad de poder mágico de agua.",

yami:
"Yami Sukehiro es el capitán de los Toros Negros. Utiliza Magia Oscura y es conocido por superar sus límites durante las batallas.",

julius:
"Julius Novachrono es el Rey Mago y posee una poderosa magia relacionada con el tiempo.",

mereoleona:
"Mereoleona Vermillion es una guerrera extremadamente poderosa especializada en magia de fuego y combate cuerpo a cuerpo.",

nozel:
"Nozel Silva es el capitán de las Águilas Plateadas y hermano mayor de Noelle. Utiliza una poderosa magia de mercurio.",

fuegoleon:
"Fuegoleon Vermillion es un poderoso Caballero Mágico conocido por su liderazgo, honor y dominio de la magia de fuego.",

luck:
"Luck Voltia pertenece a los Toros Negros y utiliza magia de relámpago. Disfruta enfrentarse a rivales poderosos.",

magna:
"Magna Swing es miembro de los Toros Negros y utiliza magia de fuego. Compensa sus limitaciones con esfuerzo y estrategia.",

finral:
"Finral Roulacase utiliza magia espacial y puede crear portales para transportar rápidamente a sus compañeros.",

vanessa:
"Vanessa Enoteca es una bruja de los Toros Negros. Su magia de hilos puede influir en el destino mediante Rouge.",

nacht:
"Nacht Faust es el vicecapitán de los Toros Negros. Posee contratos con demonios y utiliza magia de sombras.",

liebe:
"Liebe es el demonio asociado al grimorio de cinco hojas de Asta y la fuente de su Anti-Magia."

};

titulo.textContent =
card.querySelector("h3").textContent;

descripcion.textContent =
datos[nombre]
|| "Personaje increíble de Black Clover";

popup.style.display = "flex";

});

});


window.cerrarPopup = function(){

popup.style.display = "none";

};


// CERRAR POPUP AL HACER CLIC FUERA

popup.addEventListener("click", function(event){

if(event.target === popup){

popup.style.display = "none";

}

});


// CERRAR POPUP CON ESC

document.addEventListener("keydown", function(event){

if(event.key === "Escape"){

popup.style.display = "none";

}

});

});