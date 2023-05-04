// SCROLL TO UP FUNCTION

const upArrow = document.querySelector(".uparrow");

function handleScroll() {
  if (window.pageYOffset > 20) {
    upArrow.style.display = "block";

  } else {
    upArrow.style.display = "none";
  }
}

function handleClick() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

window.addEventListener("scroll", handleScroll);
upArrow.addEventListener("click", handleClick);