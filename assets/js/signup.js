$(document).ready(function(){
  var scrollTopButton = document.getElementById("scrollToTopButton");
  window.onscroll = function () { scrollFunction() };

  function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollTopButton.style.display = "block";
  } else {
    scrollTopButton.style.display = "none";
  }
}

$("#scrollToTopButton").click(function(){
$('html ,body').animate({scrollTop : 0},800)
});
});

$(".toggle-password").click(function() {
 $(this).toggleClass("fa-eye fa-eye-slash");
 if ($("#pass_signup").attr("type") == "password") {
  $("#pass_signup").attr("type", "text");
 } else {
   $("#pass_signup").attr("type", "password");
 }
});

$(".toggle-password2").click(function() {
 $(this).toggleClass("fa-eye fa-eye-slash");
 if ($("#pass_signup2").attr("type") == "password") {
  $("#pass_signup2").attr("type", "text");
 } else {
   $("#pass_signup2").attr("type", "password");
 }
});


var namerror = false;
var emailerror = false;
var passworderror = false;
var confirmerror = false;
var code = Math.floor(1000 + Math.random() * 9000)
var strongPass = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{6,})");
var btnclicked = false
const mailformat = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;



function DisplayResults(e) {
  var name = document.forms["regform"]["name"].value;
  var email = document.forms["regform"]["email"].value;
  var password = document.forms["regform"]["password"].value;
  var confirmpassword = document.forms["regform"]["retypepassword"].value;
  var error = document.getElementById("errormessage");

  if (name.length == 0) {
    namerror = true;
    error.style.display = "block";
    error.innerHTML = `<p><i class="fa fa-user></i><span class="error">Name should not be empty</span></p>`;
  } else if (email.length == 0) {
    emailerror = true;
    error.style.display = "block";
    error.innerHTML = `<p><i class="fa-sharp fa-light fa-envelope"><span class="error">Email should not be empty</span></p>`;
  }else if(!mailformat.test(email)){
    error.style.display = "block";
    error.innerHTML = `<p><i class="fa-sharp fa-light fa-envelope"><span class="error">Email address is invalid</span></p>`;
  }
   else if (!strongPass.test(password)) {
    passworderror = true;
    error.style.display = "block";
    error.innerHTML = `<p><i class="fa-sharp fa-light fa-envelope"><span class="error">Password should be atleast 6 characters long,contain a special character,a lower case and upper case alphabet and a number.</span></p>`;
  } else if (password != confirmpassword) {
    confirmerror = true;
    error.style.display = "block";
    error.innerHTML = `<p><i class="fa-light fa-lock-hashtag"></i><span class="error">Passwords doesn't match</span></p>`;
  } else {
    Email.send({
      Host: "smtp.elasticemail.com",
      Username: "testpjmail@gmail.com",
      Password: "718EF135ADCE343669701C8B673A26D7B42C",
      To: email,
      From: "testpjmail@gmail.com",
      Subject: "Account Verification - Complete Your Registration",
      Body: `Dear ${name},<br>
<br>
Thank you for signing up on FilmFlix.! We are thrilled to have you join our community.

To complete your registration and access all the exciting features,<br>
 we require a quick verification step. Please use the following verification code to confirm your email address: <br>

Verification Code: ${code}
<br>
If you did not sign up for our platform, please ignore this email.

We take your privacy and security seriously. Rest assured that your personal information is protected and will only be used for account-related purposes.

If you encounter any issues or have any questions, feel free to reach out to our support team at [support@filmflix.com].
Welcome aboard, and thank you for choosing us! We look forward to providing you with an exceptional experience.

From Godak.co Team`,
    }).then((message) => console.log(message));
    swal("Please enter the code sent to your email");
    var x = document.getElementsByClassName("aftersubmit");
    x[0].style.opacity = "1";
    console.log(x[0]);
  }
  return false;
}

function FinalResults() {
  var usercode = document.forms["verificationform"]["code"].value;
  console.log("hii");
  if (code == usercode) {
    swal({
      title: "Registration Successful!",
      text: "Happy to have you aboard",
      type: "success",
    });

    window.location.href = "../home.html";
  } else {
    swal({
      title: "Invalid code",
      type: "warning",
      buttons: true,
      dangerMode: true,
    });
  }
  return false;
}

function change(e) {
  var name = document.forms["regform"]["name"].value;
  var error = document.getElementById("errormessage");
  var email = document.forms["regform"]["email"].value;
  var password = document.forms["regform"]["password"].value;
  var confirmpassword = document.forms["regform"]["retypepassword"].value;
  if (namerror == true) {
    if (name.length > 0) {
      namerror = false;
      error.style.display = "none";
    }
  } else if (emailerror == true) {
    if (email.length > 0) {
      emailerror = false;
      error.style.display = "none";
    }
  } else if (passworderror == true) {
    if (password.length > 0) {
      passworderror = true;
      error.style.display = "none";
    }
  } else if (confirmerror == true) {
    if (confirmpassword == password) {
      confirmerror = false;
      error.style.display = "none";
    }
  }
}
