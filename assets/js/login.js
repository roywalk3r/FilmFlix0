window.onload = function () {
  // JavaScript code to handle the CAPTCHA check on form submission
  document
    .getElementById("logform")
    .addEventListener("submit", function (event) {
      var response = grecaptcha.getResponse();

      if (response.length === 0) {
        // CAPTCHA not completed, show SweetAlert and prevent form submission
        Swal.fire({
          title: "Oops...",
          text: "Please complete the CAPTCHA!",
          width: "fit-content",
          height: "40px",
        });
        event.preventDefault();
      }
    });
};

// Login Form And Logout And User

document.addEventListener("DOMContentLoaded", function () {
  const loginButton = document.getElementById("loginButton");
  const logform = document.querySelector(".logform");

  loginButton.addEventListener("click", function () {
    logform.style.display = "flex";
  });

  const closeButton = document.getElementById("closeButton");
  closeButton.addEventListener("click", function () {
    logform.style.display = "none";
  });
});

const memberLink = document.querySelector(".member a");
const newMemberLink = document.querySelector(".newmember a");
const signupForm = document.querySelector(".signup-form");
const loginForm = document.querySelector(".login-form");

// Initially, hide the signup form and show the login form
signupForm.style.display = "none";

memberLink.addEventListener("click", function (event) {
  event.preventDefault();
  loginForm.style.display = "flex";
  signupForm.style.display = "none";
});

newMemberLink.addEventListener("click", function (event) {
  event.preventDefault();
  loginForm.style.display = "none";
  signupForm.style.display = "flex";
});

const axios = require("axios");

// Your server-side verification endpoint
app.post("/verify-captcha", async (req, res) => {
  const { captchaResponse } = req.body;

  const secretKey = "6LePOO8nAAAAAFzgyeRE1MVa4er7jDNRXDPgJpVu";
  const verificationURL = `https://www.google.com/recaptcha/api/siteverify?secret=${secretKey}&response=${captchaResponse}`;

  try {
    const response = await axios.post(verificationURL);
    if (response.data.success) {
      // CAPTCHA verification successful, proceed with form submission
      res.send("CAPTCHA verification successful");
    } else {
      // CAPTCHA verification failed
      res.status(400).send("CAPTCHA verification failed");
    }
  } catch (error) {
    console.error(error);
    res.status(500).send("Internal Server Error");
  }
});

const loginButton = document.getElementById("loginButton");
const logform = document.querySelector(".logform");

loginButton.addEventListener("click", function () {
  logform.style.display = "flex";
});

const closeButton = document.getElementById("closeButton");
closeButton.addEventListener("click", function () {
  logform.style.display = "none";
});

$(document).ready(function () {
  $("#logoutButton").click(function () {
    $.ajax({
      type: "POST",
      url: "../../logout.php", // Replace with the URL of your logout script
      success: function (response) {
        // Redirect the user to the login page after successful logout
        window.location.href = "index.php"; // Replace with your login page URL
      },
    });
  });
});

document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    var response = grecaptcha.getResponse();

    if (response.length === 0) {
      // CAPTCHA not completed, prevent form submission
      alert("Please complete the CAPTCHA.");
      event.preventDefault();
    }
  });
