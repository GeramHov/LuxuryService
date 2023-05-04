// SLIDE PROJECTS FUNCTION

const projectbox = document.getElementById('projectbox');

const leftArrow = projectbox.querySelector('#leftarrowbtn');
const rightArrow = projectbox.querySelector('#rightarrowbtn');

const cards = document.querySelectorAll('#cardbox');

let isLeftArrowClicked = false;
let isRightArrowClicked = false;

function inTheViewport() {
    for (let i = 0; i < cards.length; i++) {
        if (i >= 1 && i <= 5) {
          cards[i].style.display = 'block';
        } else {
          cards[i].style.display = 'none';
        }
      }
}

inTheViewport();

  
  
  leftArrow.addEventListener('click', function() {

    isLeftArrowClicked = true;

    for (let i = 0; i < cards.length; i++) {
        if (i >= 0 && i <= 4) {
            cards[i].style.display = 'block';
        } else {
            cards[i].style.display = 'none';
        }
    }

    if(isRightArrowClicked){
        inTheViewport();
        cards[2].classList.add('py-3')
        isRightArrowClicked = false;
        isLeftArrowClicked = false;
      }
  });
  
  rightArrow.addEventListener('click', function() {

    isRightArrowClicked = true; 

    for (let i = 0; i < cards.length; i++) {
        if (i >= 2 && i <= 6) {
            cards[i].style.display = 'block';
        } else {
            cards[i].style.display = 'none';
        } 
    }

    if(isLeftArrowClicked){
        inTheViewport();
        isLeftArrowClicked = false;
        isRightArrowClicked = false;
      }

  });

  // PHOTO BOX SLIDER FUNCTION

  const slide1 = document.querySelector("#slide1");
  const slide2 = document.querySelector("#slide2");
  const slide3 = document.querySelector("#slide3");
  const imageContainer = document.querySelector(".image-container");
  
  slide1.addEventListener("click", () => {
    imageContainer.style.left = "0px";
    slide1.classList.add('blackbtn');
  });
  
  slide2.addEventListener("click", () => {
    imageContainer.style.left = "-500px";
    slide2.classList.add('blackbtn');
  });
  
  slide3.addEventListener("click", () => {
    imageContainer.style.left = "-1000px";
    slide3.classList.add('blackbtn');
  });
