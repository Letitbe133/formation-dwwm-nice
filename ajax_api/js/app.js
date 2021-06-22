// Je stocke la référence de l'url de mon API
const baseUrl = "https://jsonplaceholder.typicode.com";

// je récupèe la rérence de mon bouton
const btn = document.querySelector("#getData");
const btnPost = document.querySelector("#postData");

// au clic sur le bouton on fait une requête GET pour récupérer la liste des users
btn.addEventListener("click", async function () {
  // quand je clique sur le bouton je vais interroger l'API et récupérer les informations

  // utilisation de fetch avec chaînage des then()
  // dans le cas d'une fonction classique (non async)
  //   let dataResponse = [];
  //   fetch(`${baseUrl}/users`)
  //     .then(function (response) {
  //       // console.log(response);
  //       return response.json();
  //     })
  //     .then(function (data) {
  //       data.forEach((element) => {
  //         dataResponse.push(element);
  //       });
  //       console.log(dataResponse);
  //     });

  //   utilisation du bloc try catch pour gérer les erreurs
  try {
    // on attend la réponse du serveur
    const response = await fetch(`${baseUrl}/users`);

    // en cas de pb on renvoie une erreur interceptée par le bloc catch()
    if (!response.ok) {
      throw new Error("Failed to fetch resource...");
    }

    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error(error);
  }
});

// au clic sur le bouton on crée une requête POST pour envoyer un nouveau post au serveur et l'ajouter dans la base de données
btnPost.addEventListener("click", async function () {
  try {
    const response = await fetch(`${baseUrl}/posts`, {
      method: "POST",
      headers: {
        "Content-type": "application/json; charset=UTF-8",
      },
      body: JSON.stringify({
        userId: 1,
        title: "New post",
        body: "New post content",
      }),
    });
    if (!response.ok) {
      throw new Error("Erreur dans la requête");
    }
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error(error);
  }
});
