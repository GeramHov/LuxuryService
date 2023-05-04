const form = document.querySelector(".signup form");
continueBtn = form.querySelector(".button input");
errorText = form.querySelector(".error-txt");

form.onsubmit = (e) => {
  e.preventDefault(); // preventing form submitting
};

continueBtn.onclick = () => {
  // let's start AJAX
  let xhr = new XMLHttpRequest(); // creating XML object
  xhr.open("POST", "php/signup.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (data == "success") {
          location.href = "users.php";
        } else {
          errorText.style.display = "block";
          errorText.textContent = data;
        }
      }
    }
  };
  // need to send the form data through AJAX to PHP
  let formData = new FormData(form); // creating new FormData Object
  xhr.send(formData); // sending the form data to PHP
};
