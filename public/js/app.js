
// Subscription Popup variables
const slide03 = document.getElementById("item03");
const slide02 = document.getElementById("item02");
const slide01 = document.getElementById("item01");
const popupWin = document.getElementById("contact-popup");
const navig03 = document.getElementById("indic3")
const navig02 = document.getElementById("indic2")
const navig01 = document.getElementById("indic1")

// Subscription Popup onclick openning
function openPopup(){

  slide01.classList.add("active");
  slide02.classList.remove("active");
  slide03.classList.remove("active");
  navig01.classList.add("active");
  navig02.classList.remove("active");
  navig03.classList.remove("active");

  popupWin.style.display = "flex";
}

// Subscription Popup onclick closing
function closePopup(){
  popupWin.style.display = "none";
}

// form validation
(function () {
  'use strict'

  // Fetch all the forms we want to validate
  var forms = document.querySelectorAll('#form')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {

        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        } else{
          // Prevent default submit behavior and slide to the last slider
          event.preventDefault()
          slide02.classList.remove("active");
          slide03.classList.add("active");
          navig03.classList.add("active");
          navig02.classList.remove("active");
        }
        form.classList.add('was-validated')
      }, false)
    })
})()
