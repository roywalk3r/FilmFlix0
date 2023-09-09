
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Title and Meta Description -->
  <title>FilmFlix | Home Of Movies</title>
  <meta name="description" content="Watch the latest and greatest movies on FilmFlix. Your ultimate destination for entertainment." />

  <!-- Meta Keywords  -->
  <meta name="keywords" content="movies, rseann, film, entertainment, watch movies,watch movies on filmflix, film streaming, FilmFlix, filmflix,movie,streaming ,filmflix streaming" , />

  <!-- Local Links -->
  <link rel="stylesheet" href="landing.css" />
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

</head>

<body>
  <header class="showcase">
    <div class="showcase-top">
      <a href="home.php" class="logo"> Film<span id="flix">Flix</span> </a>
      <!-- <a href="#" class="btn btn-rounded">Sign In</a> -->
    </div>
    <div class="showcase-content">
      <h1>See what's next</h1>
      <p>Watch anywhere. FREE Anytime</p>
      <a href="home.php" class="btn btn-xl">LET'S BINGE<i class="fas fa-chevron-right btn-icon"></i></a>
    </div>
  </header>
  <main id="container">
    <div class="faq-section">
      <h2 align="center">Frequently Asked Questions</h2>
      <details open>
     <summary align="center">What is movie streaming?</summary>
        <div class="faq-content">
          <p>
            Movie Streaming is a streaming service that offers a wide variety of
            award wining movies on thousands of internet connected devices.
          </p>
          <p>
            You can watch as much as you want, whenever you want, absolutly
            free. There's always something new to discover, and new movies are
            added every week!
          </p>
        </div>
      </details>
      <br />
      <br />
      <details>
        <summary align="center">How much does movie streaming cost?</summary>
        <div class="faq-content">
          <p>
            Watch movies on your smartphone, tablet, smart TV, laptop, or
            streaming device, all for free
          </p>
        </div>
      </details>
    </div>
    <br />
    <br />
    <details>
      <summary align="center">Where can I Watch?</summary>
      <div class="faq-content">
        <p>
          Watch any where any time, on an unlimited number of devices. Sign in
          with you account to watch instantly on the at
          https://rseann.helioho.st from you personal computer or any tablets,
          streaming devices including smart TV, smartphones, and game consoles.
          You can also download your favourite shows with the IOS, Android or
          Windows. Use downloads to watch while you are on the go and without
          internet connection. Take movie streaming with you anywhere.
        </p>
      </div>
    </details>
    <br />
    <br />
    <details>
      <summary align="center">What can I watch on Movie Streaming?</summary>
      <div class="faq-content">
        <p>
          Movie Streaming has an extensive library of feature films,
          award-winning Movie Streaming originals, and more. Watch as much as
          you want, anytime you want.
        </p>
      </div>
    </details>
    <br />
    <br />
    <details>
      <summary align="center">Is Movie Streaming good for kids?</summary>
      <div class="faq-content">
        <p>
          The Movie Streaming comes with content that kids can watch including
          family time movies that can be enjoyed together by the family.
        </p>
      </div>
    </details>
    <br />
  </main>
  <!-- Go To Top Button-->
  <button id="scrollToTopButton" title="Go to top" class="ml-5">
    <i class="bx bx-arrow-to-top" style="font-weight: bolder"></i>
  </button>

  <script>
    // Go to Top Button
    const goTopBtn = document.getElementById("scrollToTopButton");

    window.addEventListener("scroll", function() {
      if (window.scrollY >= 300) {
        goTopBtn.classList.add("active");
      } else {
        goTopBtn.classList.remove("active");
      }
    });

    goTopBtn.addEventListener("click", function() {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  </script>

  <script src="https://kit.fontawesome.com/00a449879e.js" crossorigin="anonymous"></script>

</body>

</html>

</html>
