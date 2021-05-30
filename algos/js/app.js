const target = document.querySelector(".message");
const algo = document.querySelector(".algo")

// algo 5

// algo.textContent = "Algo 5"

// const sentence = prompt("Entre une phrase, ce que tu veux mais magne !");

// const chars = sentence.length;

// let msg;

// if (chars < 10) {
//   msg = "Personnage 1 dit : " + sentence;
// } else if (chars < 50) {
//   msg = "Personnage 2 dit : " + sentence;
// } else {
//   msg = "Personnage 3 a dit : " + sentence;
// }

// oneliner
// msg =
//   chars < 10
//     ? "Personnage 1 dit : " + sentence
//     : chars < 50
//     ? "Personnage 2 dit : " + sentence
//     : "Personnage 3 dit : " + sentence;

// target.textContent = msg

// algo 6

// algo.textContent = "Algo 6"

// const number = prompt("Entre un nombre au hasard");
// const dividers = [];

// for (i = 1; i < number + 1; i++) {
//   if (number % i === 0) {
//     dividers.push(i);
//   }
// }

// if (dividers.length === 2) {
//   target.textContent = "Le nombre est premier";
// } else {
//   target.textContent = "Liste des diviseurs : " + dividers.join(",");
// }

// algo 7

// algo.textContent = "Algo 7"

const number = prompt("Choisis un nombre au hasard entre 0 et 100");
let guess = Math.floor(Math.random() * 100);
let answer = false;
let winStatus = false;
let min = 0;
let max = 100;
let range;
const guesses = [];

while (guesses.length < 6 && winStatus !== true) {
  // on vérifie si la réponse est bonne
  if (guess === parseInt(number)) {
    winStatus = true;
    break;
  }

  answer = confirm("Est-ce que " + guess + " est supérieur au nombre choisi ?");

  //   si guess > number
  if (answer) {
    //   on update max avec guess-1
    max = guess - 1;

    //   on génère un nombre aléatoire entre 0 et max
    range = max - min;
    guess = Math.floor(Math.random() * range) + min;
    console.log("Looking for number between " + min + " and " + max);
  } else {
    //   on update min avec guess+1
    min = guess + 1;

    //   on génère un nombre aléatoire entre min et max
    range = max - min;
    guess = Math.floor(Math.random() * range) + min;
    console.log("Looking for number between " + min + " and " + max);
  }

  //   on stocke les essais sans un tableau
  guesses.push(guess);
}

if (winStatus) {
  target.textContent = "L'algo a gagné !"
} else {
  target.textContent = "L'algo a perdu..."
}
