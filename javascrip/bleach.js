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

ichigo:
"Ichigo Kurosaki es el protagonista de Bleach. Obtiene poderes de shinigami y dedica gran parte de su vida a proteger a sus amigos y a las personas importantes para él.",

rukia:
"Rukia Kuchiki es una shinigami que entrega parte de sus poderes a Ichigo. Su encuentro marca el comienzo de toda la historia.",

orihime:
"Orihime Inoue es una amiga cercana de Ichigo. Posee habilidades especiales capaces de proteger, curar y rechazar determinados eventos.",

uryu:
"Uryū Ishida es un Quincy especializado en ataques espirituales a distancia. Aunque inicialmente rivaliza con Ichigo, termina convirtiéndose en un importante aliado.",

renji:
"Renji Abarai es teniente de la Sociedad de Almas y amigo de la infancia de Rukia. Utiliza su zanpakutō Zabimaru.",

byakuya:
"Byakuya Kuchiki es capitán de la Sociedad de Almas y líder de la familia Kuchiki. Es conocido por su disciplina y el poder de Senbonzakura.",

kenpachi:
"Kenpachi Zaraki es uno de los capitanes más fuertes de la Sociedad de Almas. Busca constantemente oponentes poderosos con quienes combatir.",

aizen:
"Sōsuke Aizen es uno de los personajes más inteligentes y manipuladores de Bleach. Sus planes afectan profundamente a la Sociedad de Almas y al mundo humano.",

hitsugaya:
"Tōshirō Hitsugaya es un joven prodigio que llegó a convertirse en capitán. Su zanpakutō, Hyōrinmaru, utiliza poderosas técnicas de hielo.",

yoruichi:
"Yoruichi Shihōin es una antigua comandante extremadamente veloz y una maestra del combate cuerpo a cuerpo.",

urahara:
"Kisuke Urahara es un antiguo capitán y científico brillante. Aunque parece despreocupado, posee enormes conocimientos sobre el mundo espiritual.",

grimmjow:
"Grimmjow Jaegerjaquez es un Arrancar poderoso, agresivo y orgulloso que desarrolla una intensa rivalidad con Ichigo.",

ulquiorra:
"Ulquiorra Cifer es uno de los Espada más peligrosos. Su personalidad fría contrasta con su enorme poder y su interés por comprender el corazón humano.",

yhwach:
"Yhwach es el líder de los Quincy y una de las amenazas más grandes de Bleach. Su poder y sus planes desencadenan una guerra decisiva."

};

titulo.textContent =
card.querySelector("h3").textContent;

descripcion.textContent =
datos[nombre]
|| "Personaje importante de Bleach";

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