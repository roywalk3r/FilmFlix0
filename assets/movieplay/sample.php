<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <!-- Title and Meta Description -->
  <meta name="description" content="Watch the latest and greatest movies on FilmFlix. Your ultimate destination for entertainment." />
  <!-- Meta Keywords (optional) -->
  <meta name="keywords" content="movies, film, entertainment, watch movies, film streaming, FilmFlix, filmflix,movie,streaming" />
  <link rel="canonical" href="https://rseann.helioho.st/assets/movieplay/.html" />


  <!-- Title and Meta Description -->
  <meta name="description" content="Watch the latest and greatest movies on FilmFlix. Your ultimate destination for entertainment." />
  <!-- Meta Keywords (optional) -->
  <meta name="keywords" content="movies, film, entertainment, watch movies, film streaming, FilmFlix, filmflix,movie,streaming" />
  <link rel="canonical" href="https://rseann.helioho.st/assets/movieplay/.html" />
    <title>Watch:</title>
    <!--  Links For Icons ANd Css-->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../swiperjs/swiper-scrollbar-min.css" />
    <link rel="stylesheet" href="../boxicons-2.1.4/css/boxicons.min.css" />
    <link rel="stylesheet" href="../swiperjs/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
        <a href="../../home.html" class="logo"> Film<span>Flix</span> </a>
        <!-- Search Box -->
             <div class="search-box">
          <input type="search" id="search-input" placeholder="Search movie" />
          <i class="bx bx-search" id="search-icon"></i>
      <div class="results-container container" id="resultsContainer">
          <!-- Search results will be displayed here -->
      </div>
      </div>
        <!-- User -->
        <a href="#" class="user">
          <img src="../img/user.png" class="user-img" onclick="toggleMenu()" />
        </a>
        <!-- Nav Bar -->
      <div class="navbar">
          <a href="../../home.html#home" class="nav-link nav-active">
            <i class="bx bx-home"></i>
            <span class="nav-link-title">Home</span>
          </a>
          <a href="../../home.html#popular" class="nav-link">
            <i class="bx bxs-hot"></i>
            <span class="nav-link-title">Trending</span>
          </a>
          <a href="../../home.html#recommended" class="nav-link">
            <i class="bx bx-compass"></i>
            <span class="nav-link-title">Explore</span>
          </a>
          <a href="../../home.html#binge" class="nav-link">
            <i class="bx bx-tv"></i>
            <span class="nav-link-title">Movies</span>
          </a>
          <a href="../../home.html#for-you" class="nav-link">
            <i class="bx bx-heart"></i>
            <span class="nav-link-title">Favourite</span>
          </a>
        </div>
        
     <!-- Submenu for User Settings -->
     <div class="sub-menu-wrap" id="subMenu" >
       <div class="sub-menu">
         <div class="user-info">
           <img src="../img/user.png" alt="user">
           <h3>John Doe</h3>
         </div>
         <hr>
         
         <!-- Submenu Links -->
         <a href="#" class="sub-menu-link">
           <img src="../img/profile.png" alt="profile">
           <p>Edit Profile</p>
           <span>&gt;</span>
         </a>

         <a href="#" class="sub-menu-link">
           <img src="../img/setting.png" alt="setting">
           <p>Settings & Privacy</p>
           <span>&gt;</span>
         </a>

         <a href="#" class="sub-menu-link">
           <img src="../img/help.png" alt="help">
           <p>Help & Support</p>
           <span>&gt;</span>
         </a>

         <a href="../../login.html" class="sub-menu-link">
           <img src="../img/logout.png" alt="logout">
           <p>Logout</p>
           <span>&gt;</span>
         </a>
       </div>
     </div>
      </div>
       
    </header>
    <!-- Play Movie Container -->
    <div class="play-container container">
      <!-- Play IMG -->
      <img src=" " alt="Movie Poster" class="play-img" />
      <!-- pLAY Text -->
      <div class="play-text">
        <h2></h2>
        <!-- rating -->
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star-half"></i>
        </div>
        <!-- Tags -->
        <div class="tags">
          <span>Action</span>
          <span>Adventure</span>
          <span>4K</span>
        </div>
      </div>
      <!-- Play btn -->
      <i class="bx bx-right-arrow play-movie"></i>
      <!-- Video Container -->
      <div class="video-container">
        <!-- Video-Box  -->
        <div class="video-box">
          <iframe
            src=""
            width="100%"
            allowfullscreen
            allowtransparency
            allow="autoplay"
            scrolling="no"
            frameborder="0"
            id="myvideo"
          ></iframe>
          <!-- Close Video Icon  -->
          <i class="bx bx-x close-video"></i>
        </div>
      </div>
    </div>

    <!-- About  -->
    <div class="about-movie container">
      <div class="sypnosis">
        <img src="../img/" alt="movie poster" class="img">
        <div class="content">
        <h2></h2>
        <div class="req">
        <span><i class="bx bx-calendar-alt"></i> 2023</span>
        <span class="age-req"><i>PG 13</i></span>
        <span><i class="bx bx-time"></i> 1h 44min</span>
        </div>
        <p>
         
        </p>
        <span  id="release"><i class="fa fa-calendar"></i> Release date : <sup>th</sup> </span>
        <span id="writer">Writer <span id="name">: </span></span>
        <div class="rating-card">
          <div class="rating-content">
          <h2 class="card-heading">7.81/10</h2>
          <span style="color: rgb(86, 39, 129);">4314 reviews</span>
          </div>
          <div class="stars">
            <input type="radio" name="rating" id="star5">
            <label for="star5"><i class="fa fa-star"></i></label>
            <input type="radio" name="rating" id="star4">
            <label for="star4"><i class="fa fa-star"></i></label>
            <input type="radio" name="rating" id="star3">
            <label for="star3"><i class="fa fa-star"></i></label>
            <input type="radio" name="rating" id="star2">
            <label for="star2"><i class="fa fa-star"></i></label>
            <input type="radio" name="rating" id="star1">
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
          <a href="" target="_blank" title="read about actor on MovieDB">
            <img src=" " alt="" class="cast-img" />
          </a>
          <span class="cast-title"></span>
        </div>
        <div class="cast-box">
          <a href="" target="_blank" title="read about actor on MovieDB">
            <img src=" " alt="" class="cast-img" />
          </a>
          <span class="cast-title"></span>
        </div>
        <div class="cast-box">
          <a href="" target="_blank" title="read about actor on MovieDB">
            <img src=" " alt="" class="cast-img" />
          </a>
          <span class="cast-title"></span>
        </div>
        <div class="cast-box">
          <a href="" target="_blank" title="read about actor on MovieDB">
            <img src=" " alt="" class="cast-img" />
          </a>
          <span class="cast-title"></span>
        </div>
        <div class="cast-box">
          <a href="" target="_blank" title="read about actor on MovieDB">
            <img src=" " alt="" class="cast-img" />
          </a>
          <span class="cast-title"></span>
        </div>
        <div class="cast-box">
          <a href="" target="_blank" title="read about actor on MovieDB">
            <img src=" " alt="" class="cast-img" />
          </a>
          <span class="cast-title"></span>
        </div>
      </div>
    </div>
    <h2 class="download-title">You Might Also Like...</h2>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="../img/movie-1.jpg" alt="" />
          <div class="box-text">
            <a
              href="../movieplay/jumanji.html"
              class="watch-btn play-btn"
            >
              <i class="bx bx-right-arrow"></i>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="../img/movie-2.jpg" alt="" />
          <div class="box-text">
            <a
              href="../movieplay/hitman2.html"
              class="watch-btn play-btn"
            >
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
            <a
              href="../movieplay/Eternals.html"
              class="watch-btn play-btn"
            >
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
            <a
              href="../movieplay/Spectre.html"
              class="watch-btn play-btn"
            >
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
    <!-- Download -->
    <div class="download">
      <h2 class="download-title">Download Movie</h2>
      <div class="download-links">
        <a href="" target="_blank" download>480p</a>
        <a href="" target="_blank" download>720p</a>
        <a href="" target="_blank" download>1080p</a>
      </div>
    </div>
        <!-- ---------------------------------------------------------------------------- -->
  <!-- Adding Disqus -->
 
<!-- Place the Disqus thread div at the bottom of the page -->
  <div class="comment-section container">
      <h2 class="comment-head">
        <i class="bx bxs-star star"></i>
        Comment Section</h2>
    <div id="disqus_thread"></div>
    </div>

<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


    <!-- Copyright  -->
    <div class="copyright">&#169; Godak All rights Reserved</div>
    <button id="scrollToTopButton" title="Go to top">
      <i class="fa fa-angles-up"  style="font-weight: bolder;"></i>
    </button>
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
  </body>
</html>