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

const verifyRecaptcha = async (recaptchaResponse) => {
  const secretKey = "6LePOO8nAAAAAFzgyeRE1MVa4er7jDNRXDPgJpVu";
  const url = `https://www.google.com/recaptcha/api/siteverify?secret=${secretKey}&response=${recaptchaResponse}`;

  try {
    const response = await axios.post(url);
    const { success, score } = response.data;
    return success && score >= 0.5;
  } catch (error) {
    console.error("reCAPTCHA verification error:", error);
    return false;
  }
};

const loginButton = document.getElementById("loginButton");
const logform = document.querySelector(".logform");

loginButton.addEventListener("click", function () {
  logform.style.display = "flex";
});

const closeButton = document.getElementById("closeButton");
closeButton.addEventListener("click", function () {
  logform.style.display = "none";
});
