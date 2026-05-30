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

jinwoo:"Sung Jin-Woo comenzó siendo el cazador más débil del mundo y terminó convirtiéndose en el poderoso Monarca de las Sombras.",

cha:"Cha Hae-In es una cazadora rango S famosa por su increíble habilidad con la espada y su gran sensibilidad al maná.",

beru:"Beru fue originalmente el Rey Hormiga de la Isla Jeju y después se convirtió en una de las sombras más fuertes y leales de Jin-Woo.",

igris:"Igris es un caballero sombra de élite conocido por su honor, disciplina y extraordinaria habilidad con la espada.",

thomas:"Thomas Andre es uno de los cazadores de rango nacional más poderosos del mundo.",

gunghee:"Go Gun-Hee fue el presidente de la Asociación de Cazadores de Corea y uno de los humanos más respetados.",

jinchul:"Woo Jin-Chul es un inspector de cazadores que siempre apoyó a Jin-Woo durante su crecimiento.",

ashborn:"Ashborn fue el primer Monarca de las Sombras y el verdadero origen del inmenso poder de Jin-Woo.",

bellion:"Bellion es el comandante supremo del ejército de sombras y una de las criaturas más poderosas al servicio de Jin-Woo.",

tusk:"Tusk es un poderoso mago sombra especializado en hechizos destructivos de gran alcance.",

iron:"Iron es una sombra tanque extremadamente resistente que protege a sus aliados en combate.",

kaisel:"Kaisel es un dragón sombra utilizado por Jin-Woo para desplazarse y combatir desde el aire."

};

titulo.textContent =
nombre.charAt(0).toUpperCase()
+ nombre.slice(1);

descripcion.textContent =
datos[nombre]
|| "Personaje increíble de Solo Leveling";

popup.style.display = "flex";

});

});


window.cerrarPopup = function(){

popup.style.display = "none";

}

});