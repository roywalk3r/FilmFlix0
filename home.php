<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Title and Meta Description -->
  <title>FilmFlix | Home Of Movies</title>
  <meta name="description" content="Watch the latest and greatest movies on FilmFlix. Your ultimate destination for entertainment." />

  <!-- Meta Keywords  -->
  <meta name="keywords" content="movies, rseann, film, entertainment, watch movies,watch movies on filmflix, film streaming, FilmFlix, filmflix,movie,streaming ,filmflix streaming" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


  <!-- Structured Data using Schema.org -->
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "url": "https://rseann.helioho.st/",
      "name": "FilmFlix",
      "description": "Watch the latest and greatest movies on FilmFlix. Your ultimate destination for entertainment."
    }
  </script>

  <!-- Local Links -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/swiperjs/swiper-scrollbar-min.css" />
  <link rel="stylesheet" href="assets/boxicons-2.1.4/css/boxicons.min.css" />
  <link rel="stylesheet" href="assets/swiperjs/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/fontawesome-free-6.4.0-web/css/fontawesome.min.css" />

  <!-- External Links -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

  <!-- Netlify Identity Widget -->
  <script src="https://identity.netlify.com/v1/netlify-identity-widget.js"></script>
  <link rel="shortcut icon" href="assets/img/fav-icon.png" type="image/x-icon" />

  <!-- ====================font-awesome cdnjs link================= -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <style>
    .home-text span {
      padding: 0 10px;
      border-right: 1px solid rgba(255, 255, 255, 0.5);
    }

    .home-text span:first-child {
      padding-left: 0;
    }

    .home-text span:last-child {
      border-right: none;
    }

    .home-text span i {
      background: #de0611;
      color: #fff;
      padding: 0 8px;
      display: inline-block;
      font-style: normal;
      border-radius: 2px;
    }

    .play-movie {
      position: absolute !important;
      bottom: 0.8rem !important;
      right: 11.4rem !important;
    }

    .login {
      background-color: transparent !important;
      cursor: pointer;
      font-size: 20px;
    }
  </style>
  <style>
    .user {
      display: none;
    }
  </style>

</head>

<body>
  <!-- Header -->
  <header>
    <!-- Nav  -->
    <div class="nav container">
      <!-- logo -->
      <a href="home.php" class="logo"> Film<span>Flix</span> </a>
      <!-- Search Box -->
      <div class="search-box">
        <input type="search" id="search-input" placeholder="Search movie" />
        <i class="bx bx-search" id="search-icon"></i>
        <div class="results-container container" id="resultsContainer">
          <!-- Search results will be displayed here -->
        </div>
      </div>
      <?php

      function generateAvatarUrl($username)
      {
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
        <i class="login fa-solid fa-right-to-bracket" id="loginButton"></i>
      <?php } ?>


      <script>
        // JavaScript to hide the login button if the user is logged in
        document.addEventListener("DOMContentLoaded", function() {
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
        <img src="<?php echo generateAvatarUrl($username); ?>" class="user-img" onclick="toggleMenu()" id="profilePic" />
      </a>



      <!-- Nav Bar -->
      <div class="navbar">
        <a href="#home" class="nav-link nav-active">
          <i class="bx bx-home"></i>
          <span class="nav-link-title">Home</span>
        </a>
        <a href="#popular" class="nav-link">
          <i class="bx bxs-hot trending"></i>
          <span class="nav-link-title">Trending</span>
        </a>
        <a href="#movies" class="nav-link">
          <i class="bx bx-compass"></i>
          <span class="nav-link-title">Explore</span>
        </a>
        <a href="#movies" class="nav-link">
          <i class="bx bx-tv"></i>
          <span class="nav-link-title">Movies</span>
        </a>
        <a href="#home" class="nav-link">
          <i class="bx bx-heart"></i>
          <span class="nav-link-title">Favourite</span>
        </a>
      </div>
      <!-- Submenu for User Settings -->
      <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
          <div class="user-info">


            <img src="<?php echo generateAvatarUrl($username); ?>" alt="user" />
            <h3 id="userName"><?php echo $username; ?></h3>
            <p id="userEmail"></p>
          </div>
          <hr />
          <!-- Submenu Links -->
          <a href="profile.php" class="sub-menu-link">
            <img src="assets/img/profile.png" alt="profile" />
            <p>Edit Profile</p>
            <span>&gt;</span>
          </a>
          <a href="#" class="sub-menu-link">
            <img src="assets/img/setting.png" alt="setting" />
            <p>Settings & Privacy</p>
            <span>&gt;</span>
          </a>
          <a href="#" class="sub-menu-link">
            <img src="assets/img/help.png" alt="help" />
            <p>Help & Support</p>
            <span>&gt;</span>
          </a>
          <?php if (isset($_SESSION['username'])) { ?>
            <a href="logout.php" class="sub-menu-link logout">
              <img src="assets/img/logout.png" alt="logout" />
              <p id="logoutLink">Logout</p>
              <span>&gt;</span>
            </a>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="logform">
      <img src="tonny.png" id="tony" />
      <form class="login-form" id="logform" method="POST" action="login.php">
        <h3>Login</h3>
        <p id="welcome">welcome back!</p>
        <input type="text" name="loginUsername" id="loginUsername" placeholder="email or username" required />
        <input type="password" name="loginPassword" id="loginPassword" placeholder="password" required />
        <a id="forgot">forgot password</a>
        <div class="g-recaptcha" data-sitekey="6LePOO8nAAAAAFzgyeRE1MVa4er7jDNRXDPgJpVu"></div>
        <input type="submit" value="submit" />
        <div class="newmember"><a href="#">Not a member? Sign Up</a></div>
      </form>

      <script>
        window.onload = function() {
          // JavaScript code to handle the CAPTCHA check on form submission
          document.getElementById('logform').addEventListener('submit', function(event) {
            var response = grecaptcha.getResponse();

            if (response.length === 0) {
              // CAPTCHA not completed, show SweetAlert and prevent form submission
              Swal.fire({

                title: 'Oops...',
                text: 'Please complete the CAPTCHA!',
                width: 'fit-content',
                height: '40px'
              });
              event.preventDefault();
            }
          });
        };
      </script>
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
      function sanitizeInput($input)
      {
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
      <form class="signup-form" id="regform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h3>Register</h3>
        <p id="welcome">create an account</p>

        <!-- Error messages for username -->
        <div class="error-container">
          <?php if (!empty($usernameError)) : ?>
            <p class="error-text" style="color: red"><?php echo $usernameError; ?></p>
          <?php endif; ?>
          <input type="text" id="username" name="username" placeholder="Username" required pattern="[A-Za-z0-9]{3,}" title="Username must be at least 3 characters and can only contain letters and numbers." oninput="checkExistingUsername(this.value)" />

        </div>

        <!-- Error messages for email -->
        <div class="error-container">
          <?php if (!empty($emailError)) : ?>
            <p class="error-text" style="color: red"><?php echo $emailError; ?></p>
          <?php endif; ?>
          <input type="email" name="email" id="email" placeholder="Email" required oninput="checkExistingEmail(this.value)" />
        </div>

        <!-- Error messages for password -->
        <div class="error-container">
          <?php if (!empty($passwordError)) : ?>
            <p class="error-text" style="color: red"><?php echo $passwordError; ?></p>
          <?php endif; ?>
          <input type="password" id="password" name="password" placeholder="Password" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{6,}$" title="Password must be at least 6 characters and include at least one uppercase letter, one lowercase letter, and one digit." />

        </div>

        <!-- Error messages for password confirmation -->
        <div class="error-container">
          <?php if (!empty($passwordConfirmationError)) : ?>
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
  <!-- Home -->
  <section class="home container" id="home">
    <!-- Home Image -->
    <img src="assets/img/kraven.png" alt="" class="home-img" />
    <!-- Home Text  -->
    <div class="home-text">
      <h1 class="home-title">
        Kraven The <br />
        Hunter
      </h1>
      <p>Releasing 24 October</p>
      <span>2023</span>
      <span><i>17+</i></span>
      <span>2h 30min</span>
      <a href="" class="watch-btn play-btn">
        <span>Watch The Trailer</span>
      </a>
    </div>

    <!-- Play btn -->
    <i class="bx bx-right-arrow play-movie"></i>
    <!-- Video Container -->
    <div class="video-container">
      <!-- Video-Box  -->
      <div class="video-box">
        <video src="assets/play-page/KRAVEN THE HUNTER.mp4" controls id="myvideo"></video>

        <!-- Close Video Icon  -->
        <i class="bx bx-x close-video"></i>
      </div>
    </div>
  </section>
  <!-- Add this section where you want to display the latest movies -->
  <section class="popular container" id="popular">
    <!-- Heading -->
    <div class="heading">
      <h2 class="heading-title">Recently Added</h2>
      <div class="swiper-btn">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <!-- Content -->
    <div class="popular-content swiper">
      <div class="swiper-wrapper" id="latestMoviesContainer"></div>
    </div>
  </section>

  <!-- Add this script at the end of your home.php file -->
  <script>
    // Fetch latest movies from the server
    fetch('get_movies.php')
      .then(response => response.json())
      .then(movies => {
        const latestMoviesContainer = document.getElementById('latestMoviesContainer');

        // Create movie cards dynamically
        movies.forEach(movie => {
          const movieCard = `
                    <div class="swiper-slide">
                        <div class="movie-box">
                            <img src="${movie.thumbnail_url}" alt="${movie.title}" class="movie-box-img"/>
                            <div class="box-text latest">
                                <h2 class="movie-title">${movie.title}</h2>
                                <span class="movie-type">${movie.genre}</span>
                                <a href="assets/movieplay/${sanitizeFileName(movie.title)}.php" class="watch-btn play-btn">
                                    <i class="bx bx-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                `;

          latestMoviesContainer.innerHTML += movieCard;
        });
      })
      .catch(error => console.error('Error fetching latest movies:', error));

    // Function to sanitize a string for use as a file name
    function sanitizeFileName(filename) {
      return filename.replace(/[^a-zA-Z0-9]+/g, '-').toLowerCase();
    }
  </script>

  <!-- Latest Movies -->
  <section class="popular container" id="popular">
    <!-- Heading  -->
    <div class="heading">
      <h2 class="heading-title">Lates Movies</h2>
      <div class="swiper-btn">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <!-- content -->
    <div class="popular-content swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/blue-beetle.jpg" alt="spiderman" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Blue Beetle</h2>
              <span class="movie-type">SCI-FI</span>
              <a href="./assets/movieplay/The_Tomorrow_Job.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 1 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/tomorrow_job.jpg" alt="spiderman" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">The Tomorrow Job</h2>
              <span class="movie-type">Action</span>
              <a href="./assets/movieplay/The_Tomorrow_Job.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Movie box 2 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/no-hard-feelings.jpg" alt="jungle Cruise" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">No Hard Feelinga</h2>
              <span class="movie-type">Comedy/Drama</span>
              <a href="assets/movieplay/nohardfeelings.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 3 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/Farmhouse.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Trapped in the Farm House</h2>
              <span class="movie-type">Horror/Mystery</span>
              <a href="assets/movieplay/trappedinthefarmhouse.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 4 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/hitmen.jpg" alt="HitmansBodyguard" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Hitmen</h2>
              <span class="movie-type">Action/Adeventure</span>
              <a href="assets/movieplay/Hitmen.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 5 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/spiderverse.jpg" alt="Across The Spiderverse" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Spider-Man: Across the Spider-Verse</h2>
              <span class="movie-type">Action/Animation</span>
              <a href="assets/movieplay/acrosstheverse.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 6 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/insidius.jpg" alt="Insidious Red Door" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Insidious: The Red Door</h2>
              <span class="movie-type">Action/Horror</span>
              <a href="assets/movieplay/red-door.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 7 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/transformers.jpg" alt="extraction" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Transformers</h2>
              <span class="movie-type">Action/Sci-fi</span>
              <a href="assets/movieplay/transformers.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 8 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/John_Wick_TeaserPoster.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">John Wick: Chapter 4</h2>
              <span class="movie-type">Action/Thriller</span>
              <a href="assets/movieplay/John-Wick-4.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Latest Movies End -->

  <!-- Popular Section Start -->
  <section class="movies container" id="movies">
    <!-- Heading  -->
    <div class="heading">
      <h2 class="heading-title">Popular Movies</h2>
    </div>
    <!-- Movies Content  -->
    <div class="movies-content">
      <!-- Movies Box 1 -->
      <div class="movie-box">
        <img src="assets/img/movie-1.jpg" alt="" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">Jumanji: Welcome to The jungle</h2>
          <span class="movie-type">Action</span>
          <a href="assets/movieplay/jumanji.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
      <!-- Movies Box 2 -->
      <div class="movie-box">
        <img src="assets/img/movie-2.jpg" alt="" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">Hitman's Wife Bodyguard</h2>
          <span class="movie-type">Action/Comedy</span>
          <a href="assets/movieplay/hitman2.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
      <!-- Movies Box 3 -->
      <div class="movie-box">
        <img src="assets/img/movie-3.jpg" alt="" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">Shang-Chi</h2>
          <span class="movie-type">Action</span>
          <a href="assets/movieplay/Shang-chi.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
      <!-- Movies Box 4 -->
      <div class="movie-box">
        <img src="assets/img/movie-4.jpg" alt="" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">Eternals</h2>
          <span class="movie-type">Action/Sci-Fi</span>
          <a href="assets/movieplay/Eternals.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
      <!-- Movies Box 5 -->
      <div class="movie-box">
        <img src="assets/img/movie-5.jpg" alt="" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">Spectre</h2>
          <span class="movie-type">Action</span>
          <a href="assets/movieplay/Spectre.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
      <!-- Movies Box 6 -->
      <div class="movie-box">
        <img src="assets/img/the-old-gurd.jpg" alt="" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">The old Guard</h2>
          <span class="movie-type">Action/Historical</span>
          <a href="assets/movieplay/Old-Guard.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
      <!-- Movies Box 7 -->
      <div class="movie-box">
        <img src="assets/img/movie-7.jpg" alt="" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">The Wolverine</h2>
          <span class="movie-type">Action/Sci-Fi</span>
          <a href="assets/movieplay/Wolverine.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
      <!-- Movies Box 8 -->
      <div class="movie-box">
        <img src="assets/img/movie-8.jpg" alt="Movie Image" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">Johnny English</h2>
          <span class="movie-type">Action/Comedy</span>
          <a href="assets/movieplay/johnny-english.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Popular Section End -->
  <!-- Just For You Section Start -->
  <section class="popular container" id="popular">
    <!-- Heading  -->
    <div class="heading">
      <h2 class="heading-title">Just For You</h2>
      <div class="swiper-btn">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <!-- content -->
    <div class="popular-content swiper">
      <div class="swiper-wrapper">
        <!-- Movie box 1 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/popular-movie-1.jpg" alt="spiderman" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Spider Man: No Way Home</h2>
              <span class="movie-type">Action</span>
              <a href="./assets/movieplay/spiderman.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Movie box 2 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/popular-movie-2.jpg" alt="jungle Cruise" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Jungle Cruise</h2>
              <span class="movie-type">Action/Adventure</span>
              <a href="assets/movieplay/Jungle-Cruise.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 3 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/Black_Panther_Wakanda_Forever_poster.jpg" alt="Black_Panther_Wakanda_Forever_poster" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Black Panther: Wakanda Forever</h2>
              <span class="movie-type">Action/Sci-Fi</span>
              <a href="assets/movieplay/Wakanda.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 4 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/HitmansBodyguard.jpg" alt="HitmansBodyguard" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Hitman Bodyguard</h2>
              <span class="movie-type">Action/Drama</span>
              <a href="assets/movieplay/hitman.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 5 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/Lucy.jpg" alt="Lucy" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Lucy</h2>
              <span class="movie-type">Action/Sci-Fi</span>
              <a href="assets/movieplay/Lucy.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 6 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/gretel_hansel.jpg" alt="gretel_hansel" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Gretel And Hansel</h2>
              <span class="movie-type">Action/Horror</span>
              <a href="assets/movieplay/gretel_hansel.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 7 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/extraction.jpeg" alt="extraction" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Extraction</h2>
              <span class="movie-type">Action</span>
              <a href="assets/movieplay/extraction.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 8 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/david_beckham.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">
                David Beckham For The Love Of The Game
              </h2>
              <span class="movie-type">Sports</span>
              <a href="assets/movieplay/love-of-game.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Just For You Section End -->
  <!-- Recommende Movies Section Start -->
  <section class="movies container" id="movies">
    <!-- Heading  -->
    <div class="heading">
      <h2 class="heading-title">Recommend Movies</h2>
    </div>
    <!-- Movies Content  -->
    <div class="movies-content">
      <!-- Movies Box 1 -->
      <div class="movie-box">
        <img src="assets/img/IB71.jpg" alt="" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">IB71</h2>
          <span class="movie-type">Action/Politics</span>
          <a href="assets/movieplay/IB71.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
      <!-- Movies Box 2 -->
      <div class="movie-box">
        <img src="assets/img/the-viking-war.jpg" alt="" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">The Viking War</h2>
          <span class="movie-type">Action</span>
          <a href="assets/movieplay/the-viking-war.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
      <!-- Movies Box 3 -->
      <div class="movie-box">
        <img src="assets/img/transporter.jpg" alt="" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">Transporter 2002</h2>
          <span class="movie-type">Action</span>
          <a href="assets/movieplay/transporter.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
      <!-- Movies Box 4 -->
      <div class="movie-box">
        <img src="assets/img/quiteplace.jpg" alt="" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">A quite Place</h2>
          <span class="movie-type">Action/Horror</span>
          <a href="assets/movieplay/quite-place.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
      <!-- Movies Box 5 -->
      <div class="movie-box">
        <img src="assets/img/crush-christmas.jpg" alt="Movie Image" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">A Royal Christmas Crush</h2>
          <span class="movie-type">Romance/Comedy</span>
          <a href="assets/movieplay/a-royal-christmas-crush.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
      <!-- Movies Box 6 -->
      <div class="movie-box">
        <img src="assets/img/iron-mask.jpg" alt="movie title" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">Iron Mask</h2>
          <span class="movie-type">Action/Kun-Fu</span>
          <a href="assets/movieplay/iron-mask.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
      <!-- Movies Box 7 -->
      <div class="movie-box">
        <img src="assets/img/far-from-home.jpg" alt="" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">Spiderman Far From Home</h2>
          <span class="movie-type">Action/Sci-Fi</span>
          <a href="assets/movieplay/spiderman-far.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
      <!-- Movies Box 8 -->
      <div class="movie-box">
        <img src="assets/img/Shanghai_Fortress_chinese_film_2018_poster.jpg" alt="" class="movie-box-img" />
        <div class="box-text">
          <h2 class="movie-title">Shanghai Fortress</h2>
          <span class="movie-type">Action/Sci-Fi</span>
          <a href="assets/movieplay/shanghai-fortress.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Recommende Movies Section End -->

  <!-- Horror Section Start -->
  <section class="popular container" id="horror">
    <!-- Heading  -->
    <div class="heading">
      <h2 class="heading-title">Horror</h2>
      <div class="swiper-btn">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <!-- content -->
    <div class="popular-content swiper">
      <div class="swiper-wrapper">
        <!-- Movie box 1 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/i-spit-grave-2.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">I Spit on Your Grave 2</h2>
              <span class="movie-type">Horror/Action</span>
              <a href="assets\movieplay\ispitonyourgrave.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Movie box 2 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/wrong-turn-6.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Wrong Turn</h2>
              <span class="movie-type">Horro/Adventure</span>
              <a href="assets/movieplay/Wrongturn.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 3 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/the_punisher.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">The Punisher</h2>
              <span class="movie-type">Action/Horror</span>
              <a href="assets/movieplay/punisher.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 4 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/it-follows.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">It Follows</h2>
              <span class="movie-type">Horror/Action</span>
              <a href="assets/movieplay/It_Follows.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 5 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/childsplay.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Childs Play3</h2>
              <span class="movie-type">Horror</span>
              <a href="assets/movieplay/Childsplay3.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 6 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/resident-evil.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Resident Evil</h2>
              <span class="movie-type">Horror/Action</span>
              <a href="assets/movieplay/resident-evil.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 7 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/halloween.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Halloween</h2>
              <span class="movie-type">Horror</span>
              <a href="assets/movieplay/Halloween.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 8 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/Farmhouse.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Trapped in the Farm House</h2>
              <span class="movie-type">Horror/Mystery</span>
              <a href="assets/movieplay/trappedinthefarmhouse.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Comedy Section Start -->
  <section class="popular container" id="Commedy">
    <!-- Heading  -->
    <div class="heading">
      <h2 class="heading-title">Commedy Movies</h2>
      <div class="swiper-btn">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <!-- content -->
    <div class="popular-content swiper">
      <div class="swiper-wrapper">
        <!-- Movie box 1 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/little.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Little</h2>
              <span class="movie-type">Comedy/Drama</span>
              <a href="assets\movieplay/little.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Movie box 2 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/deadpool.jpg" alt="wrong turn poster" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Deadpool</h2>
              <span class="movie-type">Comedy/Action</span>
              <a href="assets/movieplay/Deadpool.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 3 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/suicide_squad.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Suicide Squad</h2>
              <span class="movie-type">Commedy/Action</span>
              <a href="assets/movieplay/suicide-squad.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 4 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/horriblebosses1.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Horrible Bosses</h2>
              <span class="movie-type">Comedy/Drama</span>
              <a href="assets/movieplay/horriblebosses1.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 5 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/horriblebosses.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Horrible Bosses 2</h2>
              <span class="movie-type">Comedy/Drama</span>
              <a href="assets/movieplay/horriblebosses.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 6 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/no-hard-feelings.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">No Hard Feelings</h2>
              <span class="movie-type">Comedy/Drama</span>
              <a href="assets/movieplay/nohardfeelings.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 7 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/mall_cop.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Paul Blat Mall Cop 2</h2>
              <span class="movie-type">Comedy/Drama</span>
              <a href="assets/movieplay/mall_cop2.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie box 8 -->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="assets/img/ride-along-2.jpg" alt="" class="movie-box-img" />
            <div class="box-text">
              <h2 class="movie-title">Ride Along 2</h2>
              <span class="movie-type">Action/Comedy</span>
              <a href="assets/movieplay/ridealong.php" class="watch-btn play-btn">
                <i class="bx bx-right-arrow"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Placing the Disqus thread div at the bottom of the page -->
  <div id="disqus_thread"></div>

  <noscript>Please enable JavaScript to view the
    <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

  <script>
    // Show Video

    let playButton = document.querySelector(".play-movie");
    let video = document.querySelector(".video-container");
    let myvideo = document.querySelector("#myvideo");
    let closebtn = document.querySelector(".close-video");

    playButton.onclick = () => {
      video.classList.add("show-video");
      //Auto play When Clicked on Button
      myvideo.play();
    };

    closebtn.onclick = () => {
      video.classList.remove("show-video");
      //Pause  On close Video
      myvideo.pause();
    };
  </script>
  <!-- Copyright  -->
  <div class="copyright">&#169; Godak All rights Reserved</div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const loginButton = document.getElementById("loginButton");
      const logform = document.querySelector(".logform");

      loginButton.addEventListener("click", function() {
        logform.style.display = "flex";
      });

      const closeButton = document.getElementById("closeButton");
      closeButton.addEventListener("click", function() {
        logform.style.display = "none";
      });
    });
  </script>
  <script>
    const memberLink = document.querySelector(".member a");
    const newMemberLink = document.querySelector(".newmember a");
    const signupForm = document.querySelector(".signup-form");
    const loginForm = document.querySelector(".login-form");

    // Initially, hide the signup form and show the login form
    signupForm.style.display = "none";

    memberLink.addEventListener("click", function(event) {
      event.preventDefault();
      loginForm.style.display = "flex";
      signupForm.style.display = "none";
    });

    newMemberLink.addEventListener("click", function(event) {
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
        const {
          success,
          score
        } = response.data;
        return success && score >= 0.5;
      } catch (error) {
        console.error("reCAPTCHA verification error:", error);
        return false;
      }
    };

    const loginButton = document.getElementById("loginButton");
    const logform = document.querySelector(".logform");

    loginButton.addEventListener("click", function() {
      logform.style.display = "flex";
    });

    const closeButton = document.getElementById("closeButton");
    closeButton.addEventListener("click", function() {
      logform.style.display = "none";
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#logoutButton").click(function() {
        $.ajax({
          type: "POST",
          url: "logout.php", // Replace with the URL of your logout script
          success: function(response) {
            // Redirect the user to the login page after successful logout
            window.location.href = "index.php"; // Replace with your login page URL
          }
        });
      });
    });
  </script>


  <!-- Go To Top Button-->
  <!-- <a href="#" id="scrollToTopButton" title="scroll to top"></a> -->
  <button id="scrollToTopButton" title="Go to top" class="ml-5">
    <i class="bx bx-arrow-to-top" style="font-weight: bolder"></i>
  </button>
  <!-- Link Swiper  Js -->
  <script src="assets/swiperjs/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- custom script -->
  <script src="https://kit.fontawesome.com/00a449879e.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <script src="assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>



  <!-- <script src="assets/js/login.js"></script> -->
  <!-- fontawesome -->
  <script src="assets/fontawesome-free-6.4.0-web/js/fontawesome.min.js"></script>
</body>

</html>