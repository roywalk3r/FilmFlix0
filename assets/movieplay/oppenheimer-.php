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
   
    <title>Watch: Oppenheimer </title>
   <!-- Local Links -->
   <link rel="stylesheet" href="../css/watch.css" />
    <link rel="stylesheet" href="../swiperjs/swiper-scrollbar-min.css" />
    <link rel="stylesheet" href="../boxicons-2.1.4/css/boxicons.min.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../swiperjs/swiper-bundle.min.css" />
    <link
      rel="stylesheet"
      href="../fontawesome-free-6.4.0-web/css/fontawesome.min.css"
    />
    <link rel="shortcut icon" href="../img/fav-icon.png" type="image/x-icon" />

    <!-- ====================font-awesome cdnjs link================= -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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
      }
    </style>
  </head>

  <body>
     <!-- Header -->
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
        

        <!-- Display the "Login" button if the user is not logged in -->
        <i   class="login fa-solid fa-right-to-bracket" id="loginButton"></i>
    

<script>
// JavaScript to hide the login button if the user is logged in
document.addEventListener("DOMContentLoaded", function () {
    const loginButton = document.getElementById("loginButton");
    if (loginButton) {
            }
});
</script>


<!-- User -->
<a href="#" class="user" style="display: none">
    <img
        src="https://ui-avatars.com/api/?name=&background=random&color=ffffff&rounded=true&length=2"
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
          

            <img src="https://ui-avatars.com/api/?name=&background=random&color=ffffff&rounded=true&length=2"
               alt="user" />
              <h3 id="userName"></h3>
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
  <br />
<b>Warning</b>:  Undefined array key "username" in <b>C:\xampp\htdocs\FilmFlix\template.php</b> on line <b>353</b><br />
<br />
<b>Warning</b>:  Undefined array key "email" in <b>C:\xampp\htdocs\FilmFlix\template.php</b> on line <b>354</b><br />
<br />
<b>Warning</b>:  Undefined array key "password" in <b>C:\xampp\htdocs\FilmFlix\template.php</b> on line <b>355</b><br />
<br />
<b>Warning</b>:  Undefined array key "passwordConfirmation" in <b>C:\xampp\htdocs\FilmFlix\template.php</b> on line <b>356</b><br />



<!-- Your HTML form -->
<p id="errorText" style="display: none; color: red"></p>

<!-- Your HTML form -->
<form class="signup-form" id="regform" method="post" action="/FilmFlix/process_movie.php">
    <h3>Register</h3>
    <p id="welcome">create an account</p>

    <!-- Error messages for username -->
    <div class="error-container">
            <input type="text" id="username" name="username" placeholder="Username" required pattern="[A-Za-z0-9]{3,}" title="Username must be at least 3 characters and can only contain letters and numbers." oninput="checkExistingUsername(this.value)" />
       
    </div>
    
    <!-- Error messages for email -->
    <div class="error-container">
            <input type="email" name="email" id="email" placeholder="Email" required oninput="checkExistingEmail(this.value)" />       
    </div>

    <!-- Error messages for password -->
    <div class="error-container">
            <input type="password" id="password" name="password" placeholder="Password" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{6,}$" title="Password must be at least 6 characters and include at least one uppercase letter, one lowercase letter, and one digit." />
      
    </div>

    <!-- Error messages for password confirmation -->
    <div class="error-container">
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
            src="https://www.themoviedb.org/t/p/original/rLb2cwF3Pazuxaj0sRXQ037tGI1.jpg"
            alt="thumbnail"
            id="thumbnail"
          />
          <iframe
            src="https://vidsrc.to/embed/movie/872585"
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
        <div class="about-movie body-container">
          <div class="sypnosis">
            <img src="../img/oppenheimer.jpg" alt="" class="img" />
            <div class="content">
              <h2>Oppenheimer </h2>
        <!-- <p>Genre: Drama, History</p> -->

              <div class="req">
                <span><i class="bx bx-calendar-alt"></i> 2023</span>
                <span class="age-req"><i>17+</i></span>
                <span><i class="bx bx-time"></i> 1h 24min</span>
              </div>
              <p>
              The story of J. Robert Oppenheimers role in the development of the atomic bomb during World War II.

              </p>
              <span id="release"
                ><i class="fa fa-calendar"></i> Release date :2023-07-21<sup>th</sup>
                July 2023</span
              >
              <span id="writer"
                >Writer <span id="name">: Christopher Nolan </span></span
              >
              <div class="rating-card">
                <div class="rating-content">
                  <h2 class="card-heading">7.81/10</h2>
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
    <div class="cast-box"><a target="_blank" title="Read about actor on MovieDB"><img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/llkbyWKwpfowZ6C8peBjIV9jj99.jpg" alt="Cillian Murphy" class="cast-img" /></a><span class="cast-title">Cillian Murphy</span></div><div class="cast-box"><a target="_blank" title="Read about actor on MovieDB"><img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/xDc01ud6ZtaJFQWg8YfffFlUBdY.jpg" alt="Emily Blunt" class="cast-img" /></a><span class="cast-title">Emily Blunt</span></div><div class="cast-box"><a target="_blank" title="Read about actor on MovieDB"><img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/At3JgvaNeEN4Z4ESKlhhes85Xo3.jpg" alt="Matt Damon" class="cast-img" /></a><span class="cast-title">Matt Damon</span></div><div class="cast-box"><a target="_blank" title="Read about actor on MovieDB"><img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/im9SAqJPZKEbVZGmjXuLI4O7RvM.jpg" alt="Robert Downey Jr." class="cast-img" /></a><span class="cast-title">Robert Downey Jr.</span></div><div class="cast-box"><a target="_blank" title="Read about actor on MovieDB"><img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ogoAeJyLzam5m3JvBFg6vwI8p0I.jpg" alt="Florence Pugh" class="cast-img" /></a><span class="cast-title">Florence Pugh</span></div><div class="cast-box"><a target="_blank" title="Read about actor on MovieDB"><img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/dCfu2EN7FjISACcjilaJu7evwEc.jpg" alt="Josh Hartnett" class="cast-img" /></a><span class="cast-title">Josh Hartnett</span></div></div>


        </div>

     <!-- Download -->
<div class="download">
    <h2 class="download-title">Download Movie</h2>
    <div class="download-links">
      <a href=" https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#" target="_blank" download="Jumanji">480p</a>
      <a href=" https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#" target="_blank" download>720p</a>
      <a href=" https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#" target="_blank" download>1080p</a>
  </div>
</div>
      </div>

      <div class="right-sidebar">
        <div class="sidebar-title">
          <h2>Related</h2>
        </div>
        <div class="related-movies">
          <a href="spiderman.php">
    <div class="movie">
      <img src="../img/popular-movie-1.jpg" alt="Spiderman: No Way Home" />
      <div class="movie-container">
        <small>similar</small>
        <h4>Spiderman: No Way Home</h4>
        <span class="bottom-content">
          <p>action</p>
          <p>1 Eps</p>
          <p class="fas fa-bookmark">&nbsp; 57k</p>
        </span>
      </div>
    </div>
  </a>


  <a href="acrosstheverse.php">
    <div class="movie">
      <img src="../img/spiderverse.jpg" alt="Spiderman: Across The Spider Verse" />
      <div class="movie-container">
        <small>similar</small>
        <h4>Spiderman: Across The Spider Verse</h4>
        <span class="bottom-content">
          <p>action</p>
          <p>1 Eps</p>
          <p class="fas fa-bookmark">&nbsp; 67k</p>
        </span>
      </div>
    </div>
  </a>

  <a href="transformers.php">
    <div class="movie">
      <img src="../img/transformers.jpg" alt="Trnasformers Rise Of The Beast" />
      <div class="movie-container">
        <small>similar</small>
        <h4>Trnasformers Rise Of The Beast</h4>
        <span class="bottom-content">
          <p>Action</p>
          <p>1 Eps</p>
          <p class="fas fa-bookmark">&nbsp; 87k</p>
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
        <img src="../img/movie-1.jpg" alt="" />
        <div class="box-text">
          <a href="../movieplay/jumanji.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    
          <div class="swiper-slide">
        <img src="../img/movie-2.jpg" alt="" />
        <div class="box-text">
          <a href="../movieplay/hitman.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    
          <div class="swiper-slide">
        <img src="../img/movie-3.jpg" alt="" />
        <div class="box-text">
          <a href="../movieplay/Shang-chi.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    
          <div class="swiper-slide">
        <img src="../img/movie-4.jpg" alt="" />
        <div class="box-text">
          <a href="../movieplay/Eternals.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    
          <div class="swiper-slide">
        <img src="../img/crush-christmas.jpg" alt="" />
        <div class="box-text">
          <a href="../movieplay/a-royal-christmas-crush.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    
          <div class="swiper-slide">
        <img src="../img/tomorrow_job.jpg" alt="" />
        <div class="box-text">
          <a href="../movieplay/The_Tomorrow_Job.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    
          <div class="swiper-slide">
        <img src="../img/no-hard-feelings.jpg" alt="" />
        <div class="box-text">
          <a href="../movieplay/nohardfeelings.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    
          <div class="swiper-slide">
        <img src="../img/horriblebosses.jpg" alt="" />
        <div class="box-text">
          <a href="../movieplay/horriblebosses.php" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    
          <div class="swiper-slide">
        <img src="../img/specter.jpg" alt="" />
        <div class="box-text">
          <a href="../movieplay/Spectre.php" class="watch-btn play-btn">
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
    <script
      src="https://kit.fontawesome.com/00a449879e.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
