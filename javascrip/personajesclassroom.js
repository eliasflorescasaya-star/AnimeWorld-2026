
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

card.style.display = nombre.includes(texto)
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

ayanokoji:"Kiyotaka Ayanokōji es el protagonista de Classroom of the Elite. Posee una inteligencia extraordinaria y una gran capacidad de manipulación aprendida en la White Room.",

horikita:"Suzune Horikita es una estudiante seria y reservada que busca alcanzar la Clase A y demostrar su valor por sí misma.",

kei:"Kei Karuizawa es una compañera de clase de Ayanokōji que se convierte en una de las personas más importantes para él.",

ichinose:"Honami Ichinose es la líder de la Clase B. Destaca por su amabilidad, carisma y capacidad para unir a sus compañeros.",

ryuen:"Ryūen Kakeru es el líder de la Clase C. Utiliza el miedo, la presión y estrategias agresivas para controlar a los demás.",

sakayanagi:"Arisu Sakayanagi es una estudiante prodigio que rivaliza intelectualmente con Ayanokōji y conoce parte de su pasado.",

koenji:"Rokusuke Kōenji es un estudiante extremadamente talentoso, confiado y excéntrico que suele actuar por cuenta propia.",

kushida:"Kikyō Kushida aparenta ser amable y sociable, pero esconde una personalidad oscura y manipuladora.",

manabu:"Manabu Horikita es el hermano mayor de Suzune y uno de los presidentes más respetados del consejo estudiantil.",

hosen:"Kazuomi Hōsen es un estudiante de primer año conocido por su comportamiento violento y su enorme fuerza física.",

hirata:"Yōsuke Hirata es uno de los estudiantes más populares de la clase y suele actuar como mediador en los conflictos.",

hiyori:"Hiyori Shiina es una estudiante tranquila y amante de los libros que pertenece a la clase de Ryūen.",

yagami:"Takuya Yagami es un estudiante relacionado con la White Room y uno de los individuos más peligrosos de su generación.",

nanase:"Nanase Tsubasa es una estudiante de primer año que muestra gran habilidad física e inteligencia."

};

titulo.textContent =
nombre.charAt(0).toUpperCase()
+ nombre.slice(1);

descripcion.textContent =
datos[nombre]
|| "Personaje importante de Classroom of the Elite";

popup.style.display = "flex";

});

});

window.cerrarPopup = function(){

popup.style.display = "none";

}

});

