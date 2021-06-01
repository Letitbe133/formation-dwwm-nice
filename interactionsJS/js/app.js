// récupérer la références des éléments du DOM

// querySelector et querySelectorAll prennent en paramètre un sélecteur CSS (p, .classe, #ID)
const btn = document.querySelector("#btn");
const title = document.querySelector("h1");
const userInput = document.querySelector("#user-entry");
const display = document.querySelector("p");

// getElementById prend en paramètre le nom de l'ID qu'on cible
// document.getElementById("btn")

// utilisation d'un event listener sur le clic d'un bouton
// lorsqu'on clique on modifie les propriétés CSS d'un élément

// on ajoute un écouteur pour le clic sur le bouton
btn.addEventListener("click", function (event) {
  //   console.log("Button clicked");
  // si le h1 a la classe active on l'enlève, sinon on l'applique

  // méthode classique if...else
  //   if (title.classList.contains("active")) {
  //     // console.log("Title a la classe active");
  //     title.classList.remove("active");
  //   } else {
  //     // console.log("Title n'a pas la classe active");
  //     title.classList.add("active");
  //   }

  //   méthode toggle our ajouter ou enlever une classe
  title.classList.toggle("active");
});

// ici on écoute l'événement input sur un tag de type input

userInput.addEventListener("input", function (event) {
  //   console.log(event.target.value);
  display.textContent = event.target.value; // à chaque fois que l'utilisateur tape, la valeur de l'input est modifiée et on l'affiche dans un paragraphe en temps réel
});
