// on récupère la ref des images
const images = document.querySelectorAll("img");

const imageOptions = {
  // root est l'élément sur lequel on va observer les Intersections
  // par défaut c'est le viewport
  root: null,
  // la portion de l'élément qui doit entrer dans le viewport
  // c'est une valeur entre 0 et 1
  threshold: 0.5,
  // uniquement px ou %
  // permet d'étendre ou de réduire la zone de détection des collisions
  rootMargin: "0px",
};

// const imageObserver = new IntersectionObserver(function (entries, observer) {
//   entries.forEach(function (entry) {
//     if (entry.isIntersecting) {
//       //   console.log("Entering viewport");
//       //   console.log(entry.target);
//       entry.target.src = entry.target.getAttribute("data-src");
//     } else {
//       console.log("Leaving viewport");
//     }
//   });
// }, imageOptions);

// images.forEach(function (image) {
//   imageObserver.observe(image);
// });

// version ES6 avec arrow functions
const imageObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    const { isIntersecting, target } = entry;
    if (isIntersecting) {
      target.src = target.getAttribute("data-src");
    } else {
      console.log("Leaving viewport");
    }
  });
}, imageOptions);

images.forEach((image) => {
  imageObserver.observe(image);
});

// destructuring d'un objet en js
// const obj = {
//   prop1: "prop1",
//   prop2: "prop2",
//   prop3: "prop3",
// };

// const { prop1, prop2 } = obj;
// console.log(prop1, prop2);
