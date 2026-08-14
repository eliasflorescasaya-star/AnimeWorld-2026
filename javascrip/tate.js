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

naofumi:
"Naofumi Iwatani es el Héroe del Escudo. Después de ser traicionado injustamente, aprende a sobrevivir por sí mismo y se convierte en un poderoso protector.",

raphtalia:
"Raphtalia es una semi-humana que se convierte en la compañera más importante de Naofumi. Destaca por su habilidad con la espada y su enorme lealtad.",

filo:
"Filo es una filolial especial criada por Naofumi. Posee gran velocidad, fuerza física y la capacidad de transformarse en una joven humana.",

melty:
"Melty Q Melromarc es una princesa de Melromarc y una importante aliada de Naofumi.",

glass:
"Glass es una poderosa guerrera proveniente de otro mundo. Inicialmente aparece como enemiga, aunque sus objetivos son más complejos de lo que parecen.",

lark:
"L'Arc Berg es un héroe de otro mundo que mantiene una relación amistosa con Naofumi a pesar de encontrarse en bandos diferentes.",

therese:
"Therese Alexanderite es compañera de L'Arc y posee habilidades mágicas relacionadas con gemas y joyas.",

ren:
"Ren Amaki es el Héroe de la Espada. Es serio y suele actuar de manera independiente.",

motoyasu:
"Motoyasu Kitamura es el Héroe de la Lanza. Su personalidad y decisiones suelen generar conflictos con Naofumi.",

itsuki:
"Itsuki Kawasumi es el Héroe del Arco y posee un fuerte sentido de justicia, aunque a veces interpreta las situaciones de manera equivocada.",

rishia:
"Rishia Ivyred comienza siendo insegura, pero desarrolla grandes habilidades y se convierte en una aliada importante de Naofumi.",

sadeena:
"Sadeena es una poderosa guerrera con experiencia en combate y una relación cercana con Raphtalia.",

atla:
"Atla es una joven guerrera con gran talento para el combate y una enorme admiración por Naofumi.",

ost:
"Ost Horai está profundamente relacionada con la Tortuga Espiritual y desempeña un papel importante durante ese arco de la historia."

};

titulo.textContent =
card.querySelector("h3").textContent;

descripcion.textContent =
datos[nombre]
|| "Personaje importante de Tate no Yuusha";

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