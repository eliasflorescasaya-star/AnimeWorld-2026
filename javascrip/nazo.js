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

urabe:
"Mikoto Urabe es la protagonista femenina de Nazo no Kanojo X. Es una chica misteriosa, reservada y con una forma muy particular de expresar sus sentimientos.",

tsubaki:
"Akira Tsubaki es el protagonista masculino. Su relación con Urabe comienza de una manera extraña y poco a poco se convierte en un vínculo romántico muy importante.",

oka:
"Ayuko Oka es una amiga cercana de Urabe y una de las pocas personas con quien ella puede hablar abiertamente sobre su relación.",

ueno:
"Kōhei Ueno es amigo de Tsubaki y novio de Oka. Suele hablar con Akira sobre relaciones y situaciones escolares.",

youko:
"Yōko Tsubaki es la hermana mayor de Akira y una figura importante dentro de su vida familiar.",

hayakawa:
"Aika Hayakawa es una antigua compañera de Tsubaki y su aparición provoca situaciones que ponen a prueba los sentimientos entre Akira y Urabe.",

momoka:
"Momoka Imai es un personaje relacionado con el entorno de Urabe y aparece durante distintos momentos de la historia.",

matsuzawa:
"Masaki Matsuzawa es uno de los estudiantes del entorno escolar de los protagonistas.",

nakajima:
"Nakajima es un personaje secundario que aparece dentro del ambiente escolar de la serie.",

miyajima:
"Miyajima forma parte del grupo de personajes secundarios que rodean a los protagonistas."

};

titulo.textContent =
card.querySelector("h3").textContent;

descripcion.textContent =
datos[nombre]
|| "Personaje de Nazo no Kanojo X";

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