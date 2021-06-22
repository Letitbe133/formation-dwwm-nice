// on récupère l'URL de base de l'API
// pour récupérer un cocktail au hasard
// const baseUrl = "https://www.thecocktaildb.com/api/json/v1/1/random.php";

// pour réuprérer la liste des cocktails en fonction d'un ingrédient
const baseUrl = "https://www.thecocktaildb.com/api/json/v1/1/filter.php";

// je récupère les ref de mes éléments HTML
const btnCocktail = document.querySelector("#getCocktail");
const divCocktails = document.querySelector(".cocktails");
const choice = document.querySelector("#user-choice");

// on crée une fonction qui sera appelée à chaque événement "change" sur l'input
const getCocktailsByIngredient = async function () {
  try {
    // on récupère la valeur de l'input
    const inputValue = this.value;

    // on construit l'URL ( url de base + nom du paramètre=choix_de_l'utilisateur)
    const fetchUrl = `${baseUrl}?i=${inputValue}`;

    // on envoie la requête et on attend la réponse
    const response = await fetch(fetchUrl);

    // si la réponse n'est pas ok (erreur dans la requête) on renvoie une erreur qui sera interceptée par le bloc catch()
    if (!response.ok) throw new Error("Unable to retrieve data");
    const data = await response.json();

    // on affiche les données dans la console mais on peut maintenant travailler avec et les afficher dans le HTML
    console.log(data);
  } catch (error) {
    // en cas d'erreur dans le bloc try() on l'affiche dans la console
    console.error(error);
  }
};

const getRandomCocktail = async function () {
  try {
    const response = await fetch(baseUrl);
    if (!response.ok) throw new Error("Unable to retrieve data");
    const data = await response.json();

    console.log(data);

    const html = `
        <h2>${data.drinks[0].strDrink}</h2>
        <img src="${data.drinks[0].strDrinkThumb}"/>
        <h3>${data.drinks[0].strCategory}</h3>
        <p>${data.drinks[0].strInstructions}</p>
    `;

    divCocktails.innerHTML = html;
  } catch (error) {
    console.error(error);
  }
};

btnCocktail.addEventListener("click", getRandomCocktail);

choice.addEventListener("change", getCocktailsByIngredient);
