<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movies";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get movie ID from the URL
if (isset($_GET['id'])) {
  $movie_id = $_GET['id'];

  // Retrieve movie details based on ID
  $sql = "SELECT * FROM movie WHERE id = $movie_id";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $title = $row['title'];
    $description = $row['description'];
    $release_date = $row['release_date'];
    $genre = $row['genre'];
    $director = $row['director'];
    $poster_url = $row['poster_url'];
    $thumbnail_url = $row['thumbnail_url']; // Retrieve new field
    $cast1_name = $row['cast1_name']; // Retrieve new field
    $cast1_img_url = $row['cast1_img_url']; // Retrieve new field
    $cast2_name = $row['cast2_name']; // Retrieve new field
    $cast2_img_url = $row['cast2_img_url']; // Retrieve new field
    $cast3_name = $row['cast3_name']; // Retrieve new field
    $cast3_img_url = $row['cast3_img_url']; // Retrieve new field
    $cast4_name = $row['cast4_name']; // Retrieve new field
    $cast4_img_url = $row['cast4_img_url']; // Retrieve new field
    $cast5_name = $row['cast5_name']; // Retrieve new field
    $cast5_img_url = $row['cast5_img_url']; // Retrieve new field
    $cast6_name = $row['cast6_name']; // Retrieve new field
    $cast6_img_url = $row['cast6_img_url']; // Retrieve new field
    $video_url = $row['video_url'];
    $download_link1 = $row['download_link1']; // Retrieve new field
    $download_link2 = $row['download_link2']; // Retrieve new field
    $download_link3 = $row['download_link3']; // Retrieve new field
    
    // Arrangement for related movies
    $related1_name = $row['related1_name']; // Retrieve new field
    $related1_genre = $row['related1_genre']; // Retrieve new field
    $related1_img_url = $row['related1_img_url']; // Retrieve new field
    $related1_movie_url = $row['related1_movie_url']; // Retrieve new field

    $related2_name = $row['related2_name']; // Retrieve new field
    $related2_genre = $row['related2_genre']; // Retrieve new field
    $related2_img_url = $row['related2_img_url']; // Retrieve new field
    $related2_movie_url = $row['related2_movie_url']; // Retrieve new field

    $related3_name = $row['related3_name']; // Retrieve new field
    $related3_genre = $row['related3_genre']; // Retrieve new field
    $related3_img_url = $row['related3_img_url']; // Retrieve new field
    $related3_movie_url = $row['related3_movie_url']; // Retrieve new field
    
    // Arrangement for recommended movies
    $recommended1_img_url = $row['recommended1_img_url']; // Retrieve new field
    $recommended1_movie_url = $row['recommended1_movie_url']; // Retrieve new field

    $recommended2_img_url = $row['recommended2_img_url']; // Retrieve new field
    $recommended2_movie_url = $row['recommended2_movie_url']; // Retrieve new field

    $recommended3_img_url = $row['recommended3_img_url']; // Retrieve new field
    $recommended3_movie_url = $row['recommended3_movie_url']; // Retrieve new field

    $recommended4_img_url = $row['recommended4_img_url']; // Retrieve new field
    $recommended4_movie_url = $row['recommended4_movie_url']; // Retrieve new field

    $recommended5_img_url = $row['recommended5_img_url']; // Retrieve new field
    $recommended5_movie_url = $row['recommended5_movie_url']; // Retrieve new field

    $recommended6_img_url = $row['recommended6_img_url']; // Retrieve new field
    $recommended6_movie_url = $row['recommended6_movie_url']; // Retrieve new field

    $recommended7_img_url = $row['recommended7_img_url']; // Retrieve new field
    $recommended7_movie_url = $row['recommended7_movie_url']; // Retrieve new field

    $recommended8_img_url = $row['recommended8_img_url']; // Retrieve new field
    $recommended8_movie_url = $row['recommended8_movie_url']; // Retrieve new field

    $recommended9_img_url = $row['recommended9_img_url']; // Retrieve new field
    $recommended9_movie_url = $row['recommended9_movie_url']; // Retrieve new field

  } else {
      echo "Movie not found.";
  }
}




$conn->close();
?>
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
      href="https://rseann.helioho.st/assets/movieplay/a-royal-christmas-crush.html"
    />
    <title>Watch: <?php echo $title; ?></title>
    <!-- Local Links -->
    <link rel="stylesheet" href="../css/watch.css" />
    <link rel="stylesheet" href="../swiperjs/swiper-scrollbar-min.css" />
    <link rel="stylesheet" href="../boxicons-2.1.4/css/boxicons.min.css" />
    <link rel="stylesheet" href="../swiperjs/swiper-bundle.min.css" />
    <script
      src="https://kit.fontawesome.com/00a449879e.js"
      crossorigin="anonymous"
    ></script>

    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
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
            src="<?php echo $thumbnail_url; ?>"
            alt="thumbnail"
            id="thumbnail"
          />
          <iframe
            src="<?php echo $video_url; ?>"
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
            <img src="<?php echo $poster_url; ?>" alt="" class="img" />
            <div class="content">
              <h2><?php echo $title; ?></h2>
        <!-- <p>Genre: <?php echo $genre; ?></p> -->

              <div class="req">
                <span><i class="bx bx-calendar-alt"></i> 2023</span>
                <span class="age-req"><i>17+</i></span>
                <span><i class="bx bx-time"></i> 1h 24min</span>
              </div>
              <p>
              <?php echo $description; ?>
              </p>
              <span id="release"
                ><i class="fa fa-calendar"></i> Release date :<?php echo $release_date; ?><sup>th</sup>
                July 2023</span
              >
              <span id="writer"
                >Writer <span id="name">: <?php echo $director; ?> </span></span
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
    <?php
    // Assuming you have retrieved the cast information from the database
    
    $cast_variables = array(
        'cast1_name', 'cast1_img_url',
        'cast2_name', 'cast2_img_url',
        'cast3_name', 'cast3_img_url',
        'cast4_name', 'cast4_img_url',
        'cast5_name', 'cast5_img_url',
        'cast6_name', 'cast6_img_url'
    );

    for ($i = 0; $i < count($cast_variables); $i += 2) {
      $cast_name_var = $row[$cast_variables[$i]];
      $cast_img_var = $row[$cast_variables[$i + 1]];
  
      // Check if the cast information is available
      if (!empty($cast_name_var) && !empty($cast_img_var)) {
          echo '<div class="cast-box">';
          echo '<img src="' . $cast_img_var . '" alt="' . $cast_name_var . '" class="cast-img" />';
          echo '<span class="cast-title">' . $cast_name_var . '</span>';
          echo '</div>';
      }
  }
  
    ?>
</div>
        </div>

     <!-- Download -->
<div class="download">
    <h2 class="download-title">Download Movie</h2>
    <div class="download-links">
      <a href=" <?php echo $download_link1; ?>" target="_blank" download="Jumanji">480p</a>
      <a href=" <?php echo $download_link2; ?>" target="_blank" download>720p</a>
      <a href=" <?php echo $download_link3; ?>" target="_blank" download>1080p</a>
  </div>
</div>
      </div>

      <div class="right-sidebar">
        <div class="sidebar-title">
          <h2>Related</h2>
        </div>
        <div class="related-movies">
        <?php if (!empty($related1_name)): ?>
  <a href="<?php echo $related1_movie_url; ?>">
    <div class="movie">
      <img src="<?php echo $related1_img_url; ?>" alt="<?php echo $related1_name; ?>" />
      <div class="movie-container">
        <small>similar</small>
        <h4><?php echo $related1_name; ?></h4>
        <span class="bottom-content">
          <p><?php echo $related1_genre; ?></p>
          <p>1 Eps</p>
          <p class="fas fa-bookmark">&nbsp; 57k</p>
        </span>
      </div>
    </div>
  </a>
<?php endif; ?>


<?php if (!empty($related2_name)): ?>
  <a href="<?php echo $related2_movie_url; ?>">
    <div class="movie">
      <img src="<?php echo $related2_img_url; ?>" alt="<?php echo $related2_name; ?>" />
      <div class="movie-container">
        <small>similar</small>
        <h4><?php echo $related2_name; ?></h4>
        <span class="bottom-content">
          <p><?php echo $related2_genre; ?></p>
          <p>1 Eps</p>
          <p class="fas fa-bookmark">&nbsp; 67k</p>
        </span>
      </div>
    </div>
  </a>
<?php endif; ?>

<?php if (!empty($related3_name)): ?>
  <a href="<?php echo $related3_movie_url; ?>">
    <div class="movie">
      <img src="<?php echo $related3_img_url; ?>" alt="<?php echo $related3_name; ?>" />
      <div class="movie-container">
        <small>similar</small>
        <h4><?php echo $related3_name; ?></h4>
        <span class="bottom-content">
          <p><?php echo $related3_genre; ?></p>
          <p>1 Eps</p>
          <p class="fas fa-bookmark">&nbsp; 87k</p>
        </span>
      </div>
    </div>
  </a>
<?php endif; ?>

</div>
<!-- Recommended Movies -->
<h2 class="download-title">You Might Also Like...</h2>
<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <?php if (!empty($recommended1_img_url)): ?>
      <div class="swiper-slide">
        <img src="<?php echo $recommended1_img_url; ?>" alt="" />
        <div class="box-text">
          <a href="<?php echo $recommended1_movie_url; ?>" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($recommended2_img_url)): ?>
      <div class="swiper-slide">
        <img src="<?php echo $recommended2_img_url; ?>" alt="" />
        <div class="box-text">
          <a href="<?php echo $recommended2_movie_url; ?>" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($recommended3_img_url)): ?>
      <div class="swiper-slide">
        <img src="<?php echo $recommended3_img_url; ?>" alt="" />
        <div class="box-text">
          <a href="<?php echo $recommended3_movie_url; ?>" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($recommended4_img_url)): ?>
      <div class="swiper-slide">
        <img src="<?php echo $recommended4_img_url; ?>" alt="" />
        <div class="box-text">
          <a href="<?php echo $recommended4_movie_url; ?>" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($recommended5_img_url)): ?>
      <div class="swiper-slide">
        <img src="<?php echo $recommended5_img_url; ?>" alt="" />
        <div class="box-text">
          <a href="<?php echo $recommended5_movie_url; ?>" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($recommended6_img_url)): ?>
      <div class="swiper-slide">
        <img src="<?php echo $recommended6_img_url; ?>" alt="" />
        <div class="box-text">
          <a href="<?php echo $recommended6_movie_url; ?>" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($recommended7_img_url)): ?>
      <div class="swiper-slide">
        <img src="<?php echo $recommended7_img_url; ?>" alt="" />
        <div class="box-text">
          <a href="<?php echo $recommended7_movie_url; ?>" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($recommended8_img_url)): ?>
      <div class="swiper-slide">
        <img src="<?php echo $recommended8_img_url; ?>" alt="" />
        <div class="box-text">
          <a href="<?php echo $recommended8_movie_url; ?>" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($recommended9_img_url)): ?>
      <div class="swiper-slide">
        <img src="<?php echo $recommended9_img_url; ?>" alt="" />
        <div class="box-text">
          <a href="<?php echo $recommended9_movie_url; ?>" class="watch-btn play-btn">
            <i class="bx bx-right-arrow"></i>
          </a>
        </div>
      </div>
    <?php endif; ?>
    
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
