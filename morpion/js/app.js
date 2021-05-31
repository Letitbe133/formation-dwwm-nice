// DOM refs
const gameContainer = document.querySelector(".game-container");
const gameCases = document.querySelectorAll(".case");
const display = document.querySelector(".display");

// set turns Array
const cases = [];

// set game variables
let gameStarted = true; // game starts when page loads
let msg = "C'est au tour du joueur 1";

//  set current user
let playerOneIsActive = true;

// set victory cases
const victoryCases = [
  [0, 1, 2],
  [3, 4, 5],
  [6, 7, 8],
  [0, 3, 6],
  [1, 4, 7],
  [2, 5, 8],
  [0, 4, 8],
  [2, 4, 6],
];

//  when player clicks on case
gameContainer.addEventListener("click", function (e) {
  // check game status
  if (!gameStarted) return;

  // store case id
  const index = e.target.dataset.id;

  //   check if case already played
  if (cases[index]) return;

  updateGame(index);

  displayMessage(msg);

  //   oneliner
  // cases[index] = 1 ? "x" : "o"

  //   change player
  playerOneIsActive = !playerOneIsActive;

  checkVictory();
});

function displayMessage(msg) {
  display.textContent = msg;
}

function updateGame(index) {
  //   check if player is active
  if (playerOneIsActive) {
    cases[index] = "x";
    gameCases[index].textContent = "X";
    gameCases[index].style.background = "lightgrey";
    msg = "C'est au tour du joueur 2";
  } else {
    cases[index] = "o";
    gameCases[index].textContent = "O";
    msg = "C'est au tour du joueur 1";
  }
}

function checkVictory() {
  if (cases.length >= 9 && !cases.includes(undefined)) {
    msg = "Match nul !";
  }
  // check if victory
  victoryCases.forEach((resultArray) => {
    const first = resultArray[0];
    const second = resultArray[1];
    const third = resultArray[2];

    if (
      cases[first] !== undefined &&
      cases[second] !== undefined &&
      cases[third] !== undefined
    ) {
      if (cases[first] === cases[second] && cases[second] === cases[third]) {
        gameStarted = false;
        msg = playerOneIsActive
          ? "Le joueur 2 a gagné !"
          : "Le joueur 1 a gagné !";
        return;
      }
    }
  });
  displayMessage(msg);
}
