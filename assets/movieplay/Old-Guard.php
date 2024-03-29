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
    <title>Watch : The Old Guard (2020)</title>
    <!-- Local Links -->
    <link rel="stylesheet" href="../css/watch.css" />
    <link rel="stylesheet" href="../swiperjs/swiper-scrollbar-min.css" />
    <link rel="stylesheet" href="../boxicons-2.1.4/css/boxicons.min.css" />
    <link rel="stylesheet" href="../swiperjs/swiper-bundle.min.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

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
        <div class="sub-menu-wrap" id="subMenu">
          <div class="sub-menu">
            <div class="user-info">
              <img src="../img/user.png" alt="user" />
              <h3>John Doe</h3>
            </div>
            <hr />

            <!-- Submenu Links -->
            <a href="#" class="sub-menu-link">
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

            <a href="../../login.html" class="sub-menu-link">
              <img src="../img/logout.png" alt="logout" />
              <p>Logout</p>
              <span>&gt;</span>
            </a>
          </div>
        </div>
      </div>
    </header>

    <!-- Play Movie Container -->
    <div class="section-container body-container">
      <div class="main-left">
        <div class="movie-play">
          <img
            src="https://www.rollingstone.com/wp-content/uploads/2020/07/the-old-guard-netflix-movie.jpg"
            alt="thumbnail"
            id="thumbnail"
          />
          <iframe
            src="https://vidsrc.to/embed/movie/tt7556122"
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
            <img src="../img/the-old-gurd.jpg" alt="movie poster" class="img" />
            <div class="content">
              <h2>The Old Guard</h2>
              <div class="req">
                <span><i class="bx bx-calendar-alt"></i> 2023</span>
                <span class="age-req"><i>PG 13</i></span>
                <span><i class="bx bx-time"></i> 2h 5min</span>
              </div>
              <p>
                Four undying warriors who've secretly protected humanity for
                centuries become targeted for their mysterious powers just as
                they discover a new immortal.
              </p>
              <span id="release"
                ><i class="fa fa-calendar"></i> Release date : 10<sup>th</sup>
                July 2020</span
              >
              <span id="writer"
                >Writer <span id="name">: Greg Rucka</span></span
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
            <div class="cast-box">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Charlize-theron-IMG_6045.jpg/220px-Charlize-theron-IMG_6045.jpg "
                alt="Charlize-theron-IMG"
                class="cast-img"
              />
              <span class="cast-title">Charlize Theron</span>
            </div>
            <div class="cast-box">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/6/68/Kiki_Layne_Oscars_2019.png "
                alt="KiKi Layne
            "
                class="cast-img"
              />
              <span class="cast-title">KiKi Layne </span>
            </div>
            <div class="cast-box">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Marwan-kenzari-1391101948.jpg/800px-Marwan-kenzari-1391101948.jpg "
                alt="Marwan Kenzari"
                class="cast-img"
              />
              <span class="cast-title">Marwan Kenzari</span>
            </div>
            <div class="cast-box">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Luca_Marinelli_after_the_European_Shooting_Stars_Award_Ceremony_%28cropped%29.jpg/800px-Luca_Marinelli_after_the_European_Shooting_Stars_Award_Ceremony_%28cropped%29.jpg "
                alt="Luca Marinelli"
                class="cast-img"
              />
              <span class="cast-title">Luca Marinelli</span>
            </div>
            <div class="cast-box">
              <img
                src=" https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Harry_Melling_Venice_%28cropped%29.jpg/220px-Harry_Melling_Venice_%28cropped%29.jpg"
                alt="Harry Melling"
                class="cast-img"
              />
              <span class="cast-title">Harry Melling</span>
            </div>
            <div class="cast-box">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Ngo_Thanh_Van_at_the_premiere_of_%27The_Tailor%27%2C_22nd_BIFF.jpg/220px-Ngo_Thanh_Van_at_the_premiere_of_%27The_Tailor%27%2C_22nd_BIFF.jpg "
                alt="Ngô Thanh Vân"
                class="cast-img"
              />
              <span class="cast-title">Ngô Thanh Vân</span>
            </div>
          </div>
        </div>
        <!-- Download -->
        <div class="download">
          <h2 class="download-title">Download Movie</h2>
          <div class="download-links">
            <a
              href="https://streamtape.com/v/OWdmX4ZVJ9Hz98/The_Old_Guard_%282020%29_WEB-DL_high_%28fzmovies.net%29_450a0f29054d32fe8a66ecf34366bc8d.mp4#"
              target="_blank"
              download
              >480p</a
            >
            <a
              href="https://streamtape.com/v/OWdmX4ZVJ9Hz98/The_Old_Guard_%282020%29_WEB-DL_high_%28fzmovies.net%29_450a0f29054d32fe8a66ecf34366bc8d.mp4#"
              target="_blank"
              download
              >720p</a
            >
            <a
              href="https://streamtape.com/v/OWdmX4ZVJ9Hz98/The_Old_Guard_%282020%29_WEB-DL_high_%28fzmovies.net%29_450a0f29054d32fe8a66ecf34366bc8d.mp4#"
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
          <a href="">
            <div class="movie">
              <img src="../img/HitmansBodyguard.jpg" alt="" />
              <div class="movie-container">
                <small>Action</small>
                <h4>Hitman's Bodyguard</h4>
                <span class="bottom-content">
                  <p>Movie</p>
                  <p>1 Eps</p>
                  <p class="fas fa-bookmark">&nbsp;977k</p>
                </span>
              </div>
            </div>
          </a>
          <a href="transporter.html">
            <div class="movie">
              <img src="../img/transporter.jpg" alt="" />
              <div class="movie-container">
                <small>Action</small>
                <h4>Transporter 2</h4>
                <span class="bottom-content">
                  <p>Movie</p>
                  <p>1 Eps</p>
                  <p class="fas fa-bookmark">&nbsp;97k</p>
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
                  <p class="fas fa-bookmark">&nbsp;101k</p>
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
                <a href="../movieplay/jumanji.html" class="watch-btn play-btn">
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
