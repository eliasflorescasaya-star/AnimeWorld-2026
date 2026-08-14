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

kirito:
"Kirito, cuyo nombre real es Kazuto Kirigaya, es un habilidoso jugador de realidad virtual conocido por su estilo de combate con espada.",

asuna:
"Asuna Yuuki es una de las jugadoras más fuertes de Aincrad. Destaca por su velocidad, liderazgo y habilidad con el estoque.",

alice:
"Alice Zuberg es una poderosa Caballera de Integridad del Underworld con gran habilidad en combate y un fuerte sentido de justicia.",

sinon:
"Sinon es una excelente tiradora especializada en armas a distancia y una de las principales jugadoras de Gun Gale Online.",

eugeo:
"Eugeo es uno de los amigos más importantes de Kirito durante Alicization y posee gran talento como espadachín.",

leafa:
"Leafa es una habilidosa jugadora de Alfheim Online y la hermana adoptiva de Kirito en el mundo real.",

klein:
"Klein es uno de los primeros amigos que Kirito conoce en Sword Art Online y se caracteriza por su lealtad y buen humor.",

agil:
"Agil es un jugador veterano de Aincrad que también trabaja como comerciante y apoya constantemente a Kirito y sus amigos.",

silica:
"Silica es una domadora de bestias conocida por su vínculo con Pina y por su amistad con Kirito.",

lisbeth:
"Lisbeth es una talentosa herrera que fabrica y repara armas para los jugadores de Aincrad.",

yui:
"Yui es una inteligencia artificial avanzada que desarrolla una relación familiar muy cercana con Kirito y Asuna.",

yuuki:
"Yuuki Konno es una espadachina excepcional conocida como Zekken y una de las jugadoras más hábiles de Alfheim Online.",

administrator:
"Administrator es una poderosa figura del Underworld que posee un enorme control sobre su mundo y sus sistemas.",

heathcliff:
"Heathcliff es el líder de los Caballeros de la Sangre y uno de los personajes más importantes del arco de Aincrad."

};

titulo.textContent =
card.querySelector("h3").textContent;

descripcion.textContent =
datos[nombre]
|| "Personaje importante de Sword Art Online";

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