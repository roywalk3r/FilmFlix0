var emailerror = false;
var passworderror = false;
var strongPass = new RegExp(
  "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(?=.{6,})"
);
const mailformat =
  /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

function DisplayResults(e) {
  var email = document.forms["regform"]["email"].value;
  var password = document.forms["regform"]["password"].value;

  var error = document.getElementById("errormessage");
  if (email.length == 0) {
    emailerror = true;
    error.style.display = "block";
    error.innerHTML = `<p><i class="fa-sharp fa-light fa-envelope"></i><span class="error">Email should not be empty</span></p>`;
  } else if (!mailformat.test(email)) {
    error.style.display = "block";
    error.innerHTML = `<p><i class="fa-sharp fa-light fa-envelope"></i><span class="error">Email address is invalid</span></p>`;
  } else if (!strongPass.test(password)) {
    passworderror = true;
    error.style.display = "block";
    error.innerHTML = `<p><i class="fa-light fa-lock-hashtag"></i><span class="error">Password should be atleast 6 characters long,contain a special character,a lower case and upper case alphabet and a number.</span></p>`;
  } else {
    swal({
      title: "Welcome back!",
      text: "Let the binge watch begin!!",
      type: "success",
    });
    setTimeout(function () {
      document.location.href = "home.html";
    }, 1500);
  }
  return false;
}
gapi.load('auth2', function() {
  gapi.auth2.init({
    client_id: '60176433158-p6ggkfslnahh8tkccv7330n4bitk152o.apps.googleusercontent.com',
  });
});

function change(e) {
  var name = document.forms["regform"]["name"].value;
  var error = document.getElementById("errormessage");
  var email = document.forms["regform"]["email"].value;
  var password = document.forms["regform"]["password"].value;
  var confirmpassword = document.forms["regform"]["retypepassword"].value;
  if (emailerror == true) {
    if (email.length > 0) {
      emailerror = false;
      error.style.display = "none";
    }
  } else if (passworderror == true) {
    if (password.length > 0) {
      passworderror = true;
      error.style.display = "none";
    }
  }
}

// GO to top button

$(document).ready(function () {
  var scrollTopButton = document.getElementById("scrollToTopButton");
  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      scrollTopButton.style.display = "block";
    } else {
      scrollTopButton.style.display = "none";
    }
  }

  $("#scrollToTopButton").click(function () {
    $("html ,body").animate({ scrollTop: 0 }, 800);
  });
});

// Password eye slash open
$(".toggle-password").click(function () {
  $(this).toggleClass("fa-eye fa-eye-slash");
  if ($("#pass_signup").attr("type") == "password") {
    $("#pass_signup").attr("type", "text");
  } else {
    $("#pass_signup").attr("type", "password");
  }
});
