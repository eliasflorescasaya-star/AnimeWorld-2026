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

kazuma:
"Kazuma Satou es el protagonista de Konosuba. Es inteligente, sarcástico y suele utilizar estrategias inesperadas para salir de situaciones difíciles.",

aqua:
"Aqua es la diosa del agua que acompaña a Kazuma. Posee grandes poderes divinos, aunque su personalidad suele provocar muchos problemas.",

megumin:
"Megumin pertenece al clan de los Demonios Carmesí y está completamente obsesionada con la magia Explosion, que solo puede utilizar una vez antes de quedar agotada.",

darkness:
"Darkness es una cruzada con una enorme resistencia física. Forma parte del grupo principal de Kazuma y tiene una personalidad bastante peculiar.",

yunyun:
"Yunyun es amiga y rival de Megumin. También pertenece al clan de los Demonios Carmesí y posee gran talento mágico.",

wiz:
"Wiz es una poderosa lich que antiguamente fue una famosa aventurera. Actualmente dirige una tienda de objetos mágicos.",

vanir:
"Vanir es un demonio extremadamente poderoso capaz de leer las emociones y pensamientos de otras personas.",

chris:
"Chris es una ladrona habilidosa y amiga de Darkness que enseña a Kazuma varias habilidades relacionadas con el robo.",

eris:
"Eris es una diosa muy respetada en el mundo de Konosuba y posee una personalidad amable y tranquila.",

iris:
"Iris es la joven princesa del Reino de Belzerg y desarrolla una relación cercana con Kazuma.",

luna:
"Luna trabaja como recepcionista en el gremio de aventureros y se encarga de entregar misiones y recompensas.",

dust:
"Dust es un aventurero conocido por Kazuma y participa en diferentes aventuras dentro del mundo de Konosuba.",

komekko:
"Komekko es la hermana menor de Megumin. A pesar de su corta edad, también pertenece al poderoso clan de los Demonios Carmesí.",

wolbach:
"Wolbach es una poderosa diosa relacionada con la violencia y la pereza, además de poseer una conexión importante con la magia Explosion."

};

titulo.textContent =
card.querySelector("h3").textContent;

descripcion.textContent =
datos[nombre]
|| "Personaje increíble de Konosuba";

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