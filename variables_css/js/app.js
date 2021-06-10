// Comment récupérer et modifier les valeurs des variables CSS en Javascript

// on va utiliser les méthodes js : getComputedStyle(), getPropertyValue() et SetProperty()

// pour les variables globales on fait référence à l'élément body
const body = document.body;
// on récupère la valeur de la variable CSS --bg-main
const bgBody = getComputedStyle(body).getPropertyValue("--bg-main");
// ici on modifie la valeur de la variable CSS --bg-main
body.style.setProperty("--bg-main", "orange");

// variables locales
// on récupère la ref de l'élément dans le DOM
const title = document.querySelector("h1");

// on récupère la valeur de la variable --text-color
const textColor = getComputedStyle(title).getPropertyValue("--text-color");

// on modifie la valeur de la variable --text-color
title.style.setProperty("--text-color", "blue");

// on a du code qui se répète et qu'on peut rendre plus modulaire grâce à une fonction
// Elle va prendre en paramètres le nom de l'élément HTML et le nom de la variable CSS dont on veut récupérer la valeur
function getVariableValue(elem, property) {
  return getComputedStyle(elem).getPropertyValue(property);
}

// de la même manière, cette fonction attribue une nouvelle valeur à une variable CSS pour un élément donné
function setVariableValue(elem, property, value) {
  elem.style.setProperty(property, value);
}

// exemples d'utilisation
const bodyBg = getVariableValue(body, "--bg-main");
console.log(bodyBg);

console.log(getVariableValue(title, "--text-color"));

setVariableValue(title, "--text-color", "green");

// exemple de fonctionnement d'une fonction
// lors de l'appel (invocation) de la fonction, on affecte au paramètre name (variable) une valeur qui sera utilisée par la fonction
function sayHello(name) {
  console.log("Hello " + name);
}

// je récupère la valeur de l'élément HTML
const paragContent = document.querySelector("#username").textContent;

// je passe cette valeur à la fonction
sayHello(paragContent);
