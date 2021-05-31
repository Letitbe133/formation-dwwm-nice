// window.addEventListener("scroll", function (event) {
//   console.log(event);
// });
const btn = document.querySelector("button");
const listContainer = document.querySelector(".list");
const elementsContainer = document.querySelector(".elements");
const divHello = document.querySelector(".hello");

btn.addEventListener("click", function (event) {
  console.log(event);
});

// tableau d'éléments
const listElements = [
  "Element 1", // index 0
  "Element 2",
  "Element 3",
  "Element 4",
  "Element 5", // index 4
];

// boucle for usage basique
// for (let i = listElements.length - 1; i >= 0; i--) {
//   console.log(listElements[i]);
// }

// boucle forEach
// permet de parcourir un tableau et pour chaque élément exécuter une fonction
// on part du tableau listElements
// listElements.forEach(function (element, index) {
//   // on ajoute a l'élément parent un template html qui va afficher nos valeurs à chaque tour de boucle
//   elementsContainer.innerHTML += `
//     <p>La valeur de l'élément à la position ${index} est ${element}</p>
//   `;
// });

// for in usage basique
// for (element in listElements) {
//   console.log(element); // affiche l'index des éléments dans le tableau
//   console.log(listElements[element]); // on affiche les valeurs en utilisant l'index
// }

// boucle for
// for (let i = 0; i < listElements.length; i++) {
//   const li = document.createElement("li");
//   li.textContent = listElements[i];
//   listContainer.appendChild(li);
// }

// boucle forEach : permet d'itérer sur les éléments d'un tableau
// listElements.forEach(function (elem, index) {
//   const li = document.createElement("li");
//   li.textContent = elem;
//   listContainer.appendChild(li);
// });

// boucle for... in permet d'itérer sur les éléments d'un tableau ou les propriétés d'un objet
// for (elem in listElements) {
//   const li = document.createElement("li");
//   li.textContent = listElements[elem];
//   listContainer.appendChild(li);
// }

// boucle map
// retourne un nouveau tableau sans modifier le tableau initial
// const newListElements = listElements.map(function (elem, index) {
//   return (elem = elem + " modifié");
// });

// console.log(listElements);
// console.log(newListElements);

// les conditions
// if ("test") {
//   console.log("La condition est ok");
// } else {
//   console.log("La condition est pas ok");
// }

// fonctions fléchées vs fonctions classiques

// function sayHello(name) {
//   // console.log(`Hello ${name}`);
//   divHello.textContent = `Hello ${name}`;
// }

// sayHello("Souhir");

// const sayHello2 = (name) => {
//   console.log(`Hello ${name}`);
//   divHello.textContent = `Hello ${name}`;
// };

// sayHello2("Lionel");

// btn.addEventListener("click", () => {
//   // console.log("hello");
//   console.log(this);
// });

// btn.addEventListener("click", function () {
//   console.log(this);
//   // console.log("hello bis");
//   divHello.textContent = this;
// });

// tableaux javascript
const array = [];
// console.log(array.length);

const array2 = new Array(10);
// console.log(array2.length);
array2[0] = "Abdiel";
// console.log(array2[0]);
// console.log(array2);

const master = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9],
];

// pour ajouter un élément à un tableau
// master.push([6, 7, 8]);

// console.log(master[2][1]);

// boucles imbriquées
// master.forEach(function (elem) {
//   elem.forEach(function (item) {
//     console.log(item);
//   });
// });

// boucles imbriquées avec for
for (let i = 0; i < master.length; i++) {
  // ici on boucle sur le tableau parent
  // console.log(master[i]);
  for (let j = 0; j < master[i].length; j++) {
    // ici on boucle sur chaque tableau enfant
    // console.log(master[i][j]);
  }
}

const persons = [
  {
    name: "John",
    age: "25",
  },
  {
    name: "Jane",
    age: "27",
  },
];

// console.log(persons);

persons.forEach(function (person) {
  // console.log(person); // affiche chaque objet dans le tableau
  // console.log(person.name);

  // console.log(person.prop);

  let prop = "name";
  // console.log(person[prop]);
});

// console.log(persons[1].name);

// hoisting
test();

function test() {
  // console.log("Ceci est un test");
}

// attente chargement du dom
// window.addEventListener("DOMContentLoaded", () => {
//   console.log("DOM chargé");
//   const btn = document.querySelector("button");
//   btn.addEventListener("click", function (event) {
//     console.log(event);
//   });
// });

// portée des variables
// divHello.addEventListener("click", function (event) {
//   // console.log(this);
//   console.log(event.target);
// });

divHello.addEventListener("click", (event) => {
  // console.log(this);
  console.log(event.target);
});

const student = {
  name: "Bilhel",
  age: 23,
  sayHello: function () {
    console.log(`Hello ${this.name}`);
  },
};

console.log(student.sayHello());
