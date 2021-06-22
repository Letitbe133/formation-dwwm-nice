const images = document.querySelectorAll("img");

window.addEventListener("scroll", () => {
  // get window height
  const windowHeight = window.innerHeight;

  // get document height
  const documentHeight = document.body.clientHeight;

  //   get document scroll
  const yScroll = window.scrollY;

  images.forEach((image, index) => {
    const imageOffset = image.offsetTop;
    const imageMiddle = yScroll + windowHeight - image.height / 2;

    if (imageMiddle > imageOffset) {
      // (this.scrollY + this.innerHeight) > item.offsetTop
      console.log(`Image ${index} in viewport`);
      //   image.src = "./assets/Below_the_surface.png";
    } else {
      console.log("no good");
    }
  });
});

function displayImage(image) {
  // get image offset top
  images.forEach((image, index) => {
    // check if image in viewport
  });
}

displayImage();
