<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title and Meta Description -->
    <meta
      name="description"
      content="Watch the latest and greatest movies on FilmFlix. Your ultimate destination for entertainment."
    />

    <!-- Meta Keywords (optional) -->
    <meta
      name="keywords"
      content="movies, film, entertainment, watch movies, film streaming, FilmFlix, filmflix,movie,streaming"
    />
    <link
      rel="canonical"
      href="https://rseann.helioho.st/assets/movieplay/extraction.html"
    />
    <title>Watch: Extraction (2020)</title>
    <!-- Local Links -->
    <link rel="stylesheet" href="../css/watch.css" />
    <link rel="stylesheet" href="../swiperjs/swiper-scrollbar-min.css" />
    <link rel="stylesheet" href="../boxicons-2.1.4/css/boxicons.min.css" />
    <link rel="stylesheet" href="../swiperjs/swiper-bundle.min.css" />
    <link
      rel="stylesheet"
      href="../fontawesome-free-6.4.0-web/css/fontawesome.min.css"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link rel="shortcut icon" href="../img/fav-icon.png" type="image/x-icon" />

    <!-- ====================font-awesome cdnjs link================= -->
    <script
      src="https://kit.fontawesome.com/00a449879e.js"
      crossorigin="anonymous"
    ></script>

    <style>
      .swiper {
        width: 240px;
        height: 320px;
      }

      .swiper-slide {
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 18px;
        font-size: 22px;
        font-weight: bold;
        color: #fff;
      }
    </style>
  </head>
  <body>
  <header>
      <!-- Nav  -->
      <div class="nav container">
        <!-- logo -->
        <a href="../../home.php" class="logo"> Film<span>Flix</span> </a>
        <!-- Search Box -->
        <div class="search-box">
          <input type="search" id="search-input" placeholder="Search movie" />
          <i class="bx bx-search" id="search-icon"></i>
          <div class="results-container container" id="resultsContainer">
            <!-- Search results will be displayed here -->
          </div>
        </div>
        <?php

        function generateAvatarUrl($username) {
  // Use a hashing algorithm (e.g., md5) to generate a unique identifier from the username
  $hash = md5($username);
  
  // Define the UI Avatars URL format with the generated hash
  $avatarUrl = "https://ui-avatars.com/api/?name=" . $username . "&background=random&color=ffffff&rounded=true&length=2";

  return $avatarUrl;
}
?>

<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']; // Set the $username variable

    // Set the display style for the user image link when the user is logged in
    $userImageDisplay = 'block';
} else {
    // User is not logged in, so set $username to an empty value
    $username = '';

    // Set the display style for the user image link when the user is not logged in
    $userImageDisplay = 'none';
}
?>

<?php if (!$username) { ?>
        <!-- Display the "Login" button if the user is not logged in -->
        <i   class="login fa-solid fa-right-to-bracket" id="loginButton"></i>
    <?php } ?>


<script>
// JavaScript to hide the login button if the user is logged in
document.addEventListener("DOMContentLoaded", function () {
    const loginButton = document.getElementById("loginButton");
    if (loginButton) {
        <?php if (isset($_SESSION['username'])) { ?>
            loginButton.style.display = "none";
        <?php } ?>
    }
});
</script>


<!-- User -->
<a href="#" class="user" style="display: <?php echo $userImageDisplay; ?>">
    <img
        src="<?php echo generateAvatarUrl($username); ?>"
        class="user-img"
        onclick="toggleMenu()"
        id="profilePic"
    />
</a>



        <!-- Nav Bar -->
        <div class="navbar">
          <a href="../../home.php#home" class="nav-link nav-active">
            <i class="bx bx-home"></i>
            <span class="nav-link-title">Home</span>
          </a>
          <a href="../../home.php#popular" class="nav-link">
            <i class="bx bxs-hot trending"></i>
            <span class="nav-link-title">Trending</span>
          </a>
          <a href="../../home.php#movies" class="nav-link">
            <i class="bx bx-compass"></i>
            <span class="nav-link-title">Explore</span>
          </a>
          <a href="../../home.php#movies" class="nav-link">
            <i class="bx bx-tv"></i>
            <span class="nav-link-title">Movies</span>
          </a>
          <a href="../../home.php#home" class="nav-link">
            <i class="bx bx-heart"></i>
            <span class="nav-link-title">Favourite</span>
          </a>
        </div>
        <!-- Submenu for User Settings -->
        <div class="sub-menu-wrap" id="subMenu">
          <div class="sub-menu">
            <div class="user-info">
          

            <img src="<?php echo generateAvatarUrl($username); ?>"
               alt="user" />
              <h3 id="userName"><?php echo $username; ?></h3>
              <p id="userEmail"></p>
            </div>
            <hr />
            <!-- Submenu Links -->
            <a href="../../profile.php" class="sub-menu-link">
              <img src="../img/profile.png" alt="profile" />
              <p>Edit Profile</p>
              <span>&gt;</span>
            </a>
            <a href="#" class="sub-menu-link">
              <img src="../img/setting.png" alt="setting" />
              <p>Settings & Privacy</p>
              <span>&gt;</span>
            </a>
            <a href="#" class="sub-menu-link">
              <img src="../img/help.png" alt="help" />
              <p>Help & Support</p>
              <span>&gt;</span>
            </a>
        <?php if (isset($_SESSION['username'])) { ?>
            <a href="logout.php" class="sub-menu-link logout">
                <img src="../img/logout.png" alt="logout" />
                <p id="logoutLink">Logout</p>
                <span>&gt;</span>
            </a>
        <?php } ?>
          </div>
        </div>
      </div>
      <div class="logform">
        <img src="../../tonny.png" id="tony" />
        <form class="login-form" id="logform" method="POST" action="../../login.php">          
          <h3>Login</h3>
          <p id="welcome">welcome back!</p>
          <input
            type="text"
            name="loginUsername"
            id="loginUsername"
            placeholder="email or username"
            required
          />
          <input
            type="password"
            name="loginPassword"
            id="loginPassword"
            placeholder="password"
            required
          />
          <a id="forgot">forgot password</a>
          <div
            class="g-recaptcha"
            data-sitekey="6LePOO8nAAAAAFzgyeRE1MVa4er7jDNRXDPgJpVu"
          ></div>
          <input type="submit" value="submit" />
          <div class="newmember"><a href="#">Not a member? Sign Up</a></div>
        </form>

        <div>
          <p class="acnot"></p>
        </div>
  <?php

$servername = "localhost";
$username = "root";
$password = ""; // Add your database password here
$dbname = "user_credentials";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to safely sanitize user input
function sanitizeInput($input) {
    return htmlspecialchars(stripslashes(trim($input)));
}

// Initialize variables to store form data and error messages
$username = $email = $password = $passwordConfirmation = "";
$usernameError = $emailError = $passwordError = $passwordConfirmationError = "";
// ...

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = sanitizeInput($_POST['username']);
  $email = sanitizeInput($_POST['email']);
  $password = $_POST['password'];
  $passwordConfirmation = $_POST['passwordConfirmation'];

  // Validate username, email, and password here

  // Check if username or email already exist
  $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // Handle existing user error here
  } else {
      // Hash the password
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      // Insert the user into the database with the current date and time
      $sql = "INSERT INTO users (username, email, password, signup_date) VALUES ('$username', '$email', '$hashed_password', NOW())";

      if ($conn->query($sql) === TRUE) {
          // Registration successful
          echo '<p  class="reg-com" style="color: green">Registration successful.</p>';
      } else {
          // Error while registering
          echo '<p class="reg-com" style="color: red">Error while registering.</p>';
      }
  }
}

// Retrieve user data
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $email = $row['email'];
    $signupDate = $row['signup_date'];
    $password = $row['password'];

    // Add more user data as needed
}


// Close the database connection
$conn->close();
?>



<!-- Your HTML form -->
<p id="errorText" style="display: none; color: red"></p>

<!-- Your HTML form -->
<form class="signup-form" id="regform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h3>Register</h3>
    <p id="welcome">create an account</p>

    <!-- Error messages for username -->
    <div class="error-container">
    <?php if (!empty($usernameError)): ?>
            <p class="error-text" style="color: red"><?php echo $usernameError; ?></p>
        <?php endif; ?>
        <input type="text" id="username" name="username" placeholder="Username" required pattern="[A-Za-z0-9]{3,}" title="Username must be at least 3 characters and can only contain letters and numbers." oninput="checkExistingUsername(this.value)" />
       
    </div>
    
    <!-- Error messages for email -->
    <div class="error-container">
    <?php if (!empty($emailError)): ?>
            <p class="error-text" style="color: red"><?php echo $emailError; ?></p>
        <?php endif; ?>
        <input type="email" name="email" id="email" placeholder="Email" required oninput="checkExistingEmail(this.value)" />       
    </div>

    <!-- Error messages for password -->
    <div class="error-container">
    <?php if (!empty($passwordError)): ?>
            <p class="error-text" style="color: red"><?php echo $passwordError; ?></p>
        <?php endif; ?>
        <input type="password" id="password" name="password" placeholder="Password" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{6,}$" title="Password must be at least 6 characters and include at least one uppercase letter, one lowercase letter, and one digit." />
      
    </div>

    <!-- Error messages for password confirmation -->
    <div class="error-container">
    <?php if (!empty($passwordConfirmationError)): ?>
            <p class="error-text" style="color: red"><?php echo $passwordConfirmationError; ?></p>
        <?php endif; ?>
        <input type="password" name="passwordConfirmation" id="passwordConfirmation" placeholder="Confirm Password" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{6,}$" title="Password must be at least 6 characters and include at least one uppercase letter, one lowercase letter, and one digit." />
       
    </div>

    <div class="g-recaptcha" data-sitekey="6LePOO8nAAAAAFzgyeRE1MVa4er7jDNRXDPgJpVu"></div>
    <input type="submit" value="Sign Up" />
    <div class="member"><a href="#">Already a member? Login</a></div>
</form>


        <button id="closeButton" class="close-button">
          <i class="fas fa-close"></i>
        </button>
      </div>
    </header>

    <!-- Play Movie Container -->
    <div class="section-container body-container">
      <div class="main-left">
        <div class="movie-play">
          <img
            src="https://moshfishreviews.files.wordpress.com/2020/04/extraction-1.png"
            alt="thumbnail"
            id="thumbnail"
          />
          <iframe
            src="https://vidsrc.to/embed/movie/tt8936646"
            allowfullscreen
            allowtransparency
            allow="autoplay"
            scrolling="no"
            frameborder="0"
            id="video-iframe"
          ></iframe>
          <i
            class="fa-solid fa-play play-movie-btn"
            style="color: #ffffff"
            id="play-button"
          ></i>
        </div>

        <!-- About  -->
        <div class="about-movie container">
          <div class="sypnosis">
            <img src="../img/extraction.jpeg" alt="" class="img" />
            <div class="content">
              <h2>Extraction</h2>
              <div class="req">
                <span><i class="bx bx-calendar-alt"></i> 2023</span>
                <span class="age-req"><i>PG 13</i></span>
                <span><i class="bx bx-time"></i> 1h 56min</span>
              </div>
              <p>
                Rake and Ovi flee to Dhaka, where they are pursued by Saju and
                his men. Rake takes Ovi to a safe house, where he meets Ovi's
                mother, Priya (Golshifteh Farahani). Priya tells Rake that Ovi
                is autistic and that he has a special connection with his
                father. Rake agrees to help Ovi find his father.
              </p>
              <span id="release"
                ><i class="fa fa-calendar"></i> Release date : 4<sup>th</sup>
                April 2020</span
              >
              <span id="writer"
                >Writer <span id="name">: Joe Russo </span></span
              >
              <div class="rating-card">
                <div class="rating-content">
                  <h2 class="card-heading">9.81/10</h2>
                  <span style="color: rgb(86, 39, 129)">4314 reviews</span>
                </div>
                <div class="stars">
                  <input type="radio" name="rating" id="star5" />
                  <label for="star5"><i class="fa fa-star"></i></label>
                  <input type="radio" name="rating" id="star4" />
                  <label for="star4"><i class="fa fa-star"></i></label>
                  <input type="radio" name="rating" id="star3" />
                  <label for="star3"><i class="fa fa-star"></i></label>
                  <input type="radio" name="rating" id="star2" />
                  <label for="star2"><i class="fa fa-star"></i></label>
                  <input type="radio" name="rating" id="star1" />
                  <label for="star1"><i class="fa fa-star"></i></label>
                </div>
                <p class="thought">what do you think about the movie?</p>
              </div>
            </div>
          </div>

          <!-- Movie Cast  -->
          <h2 class="cast-heading">Top Cast</h2>
          <div class="cast">
            <div class="cast-box">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Chris_Hemsworth_by_Gage_Skidmore_2_%28cropped%29.jpg/220px-Chris_Hemsworth_by_Gage_Skidmore_2_%28cropped%29.jpg"
                alt=""
                class="Chris Hemsworth"
              />
              <span class="cast-title">Chris Hemsworth</span>
            </div>
            <div class="cast-box">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/David_Harbour_by_Gage_Skidmore_2.jpg/220px-David_Harbour_by_Gage_Skidmore_2.jpg"
                alt=""
                class="David Harbour"
              />
              <span class="cast-title">David Harbour</span>
            </div>
            <div class="cast-box">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/e/eb/Randeep_Hooda_BIG_Star_Entertainment_Awards.jpg"
                alt=""
                class="Randeep Hooda"
              />
              <span class="cast-title"> Randeep Hooda</span>
            </div>
            <div class="cast-box">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT33vceZovQNyxFKFtt0DKbL50oQXHtiU4XWg&usqp=CAU"
                alt=""
                class="Golshifteh Farahani"
              />
              <span class="cast-title">Golshifteh Farahani</span>
            </div>
            <div class="cast-box">
              <img
                src="https://starsunfolded.com/wp-content/uploads/2020/10/Priyanshu-Painyuli-4.jpg"
                alt=""
                class="cast-img"
              />
              <span class="cast-title">Priyanshu Painyuli</span>
            </div>
            <div class="cast-box">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/7/75/Manoj_Bajpai_at_52nd_IFFI.jpg"
                alt=""
                class="cast-img"
              />
              <span class="cast-title"> Manoj Bajpayee</span>
            </div>
          </div>
        </div>
        <!-- Download -->
        <div class="download">
          <h2 class="download-title">Download Movie</h2>
          <div class="download-links">
            <a
              href="https://streamtape.com/v/agMZQp6aYgIxR66/%5BWaploaded_274%5DExtraction_2020.mp4#"
              target="_blank"
              download
              >720p</a
            >
            <a
              href="https://streamtape.com/v/agMZQp6aYgIxR66/%5BWaploaded_274%5DExtraction_2020.mp4#"
              target="_blank"
              download
              >480p</a
            >
            <a
              href="https://streamtape.com/v/agMZQp6aYgIxR66/%5BWaploaded_274%5DExtraction_2020.mp4#"
              target="_blank"
              download
              >1080p</a
            >
          </div>
        </div>
      </div>

      <div class="right-sidebar">
        <div class="sidebar-title">
          <h2>Related</h2>
        </div>
        <div class="related-movies">
          <a href="Spectre.html">
            <div class="movie">
              <img src="../img/movie-5.jpg" alt="" />
              <div class="movie-container">
                <small>Action</small>
                <h4>Spectre</h4>
                <span class="bottom-content">
                  <p>Movie</p>
                  <p>1 Eps</p>
                  <p class="fas fa-bookmark">&nbsp;57k</p>
                </span>
              </div>
            </div>
          </a>
          <a href="John-Wick-4.html">
            <div class="movie">
              <img src="../img/John_Wick_TeaserPoster.jpg" alt="" />
              <div class="movie-container">
                <small>Action</small>
                <h4>John Wick 4</h4>
                <span class="bottom-content">
                  <p>Movie</p>
                  <p>1 Eps</p>
                  <p class="fas fa-bookmark">&nbsp;87k</p>
                </span>
              </div>
            </div>
          </a>
          <a href="johnny-english.html">
            <div class="movie">
              <img src="../img/movie-8.jpg" alt="" />
              <div class="movie-container">
                <small>Action</small>
                <h4>Johnny English</h4>
                <span class="bottom-content">
                  <p>Movie</p>
                  <p>1 Eps</p>
                  <p class="fas fa-bookmark">&nbsp;61k</p>
                </span>
              </div>
            </div>
          </a>
        </div>
        <!-- Recommended Movies -->
        <h2 class="download-title">You Might Also Like...</h2>
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="../img/transporter.jpg" alt="" />
              <div class="box-text">
                <a
                  href="../movieplay/transporter.html"
                  class="watch-btn play-btn"
                >
                  <i class="bx bx-right-arrow"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../img/movie-2.jpg" alt="" />
              <div class="box-text">
                <a href="../movieplay/hitman.html" class="watch-btn play-btn">
                  <i class="bx bx-right-arrow"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../img/movie-3.jpg" alt="" />
              <div class="box-text">
                <a
                  href="../movieplay/Shang-chi.html"
                  class="watch-btn play-btn"
                >
                  <i class="bx bx-right-arrow"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../img/movie-4.jpg" alt="" />
              <div class="box-text">
                <a href="../movieplay/Eternals.html" class="watch-btn play-btn">
                  <i class="bx bx-right-arrow"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../img/crush-christmas.jpg" alt="" />
              <div class="box-text">
                <a
                  href="../movieplay/a-royal-christmas-crush.html"
                  class="watch-btn play-btn"
                >
                  <i class="bx bx-right-arrow"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../img/movie-5.jpg" alt="" />
              <div class="box-text">
                <a href="../movieplay/Spectre.html" class="watch-btn play-btn">
                  <i class="bx bx-right-arrow"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../img/movie-7.jpg" alt="" />
              <div class="box-text">
                <a
                  href="../movieplay/Wolverine.html"
                  class="watch-btn play-btn"
                >
                  <i class="bx bx-right-arrow"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../img/movie-8.jpg" alt="" />
              <div class="box-text">
                <a
                  href="../movieplay/johnny-english.html"
                  class="watch-btn play-btn"
                >
                  <i class="bx bx-right-arrow"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../img/A_Quiet_Place.jpg" alt="" />
              <div class="box-text">
                <a
                  href="../movieplay/quite-place.html"
                  class="watch-btn play-btn"
                >
                  <i class="bx bx-right-arrow"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <noscript
          >Please enable JavaScript to view the
          <a href="https://disqus.com/?ref_noscript"
            >comments powered by Disqus.</a
          ></noscript
        >

        <button id="scrollToTopButton" title="Go to top">
          <i class="fa fa-angles-up" style="font-weight: bolder"></i>
        </button>
      </div>
    </div>
    <!-- Adding Disqus -->

    <!-- Place the Disqus thread div at the bottom of the page -->
    <div class="comment-section container">
      <h2 class="comment-head">
        <i class="bx bxs-star star"></i>
        Comment Section
      </h2>
      <div id="disqus_thread"></div>
    </div>

    <!-- Copyright  -->
    <div class="copyright">&#169; Godak All rights Reserved</div>
    <!-- Link Swiper  Js -->
    <script src="../swiperjs/swiper-bundle.min.js"></script>
 
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="../js/login.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
        loop: true,
      });
    </script>
    <script
      id="dsq-count-scr"
      src="//fan2one.disqus.com/count.js"
      async
    ></script>
  </body>
</html>
