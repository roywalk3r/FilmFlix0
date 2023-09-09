// Search function
// Get DOM elements
const searchIcon = document.getElementById("search-icon");
const searchInput = document.getElementById("search-input");
const resultsContainer = document.getElementById("resultsContainer");

let movies = [];

// Load movie data from JSON file
fetch("../../assets/movieplay/movies.json") // Adjust the path to match the location of the JSON file
  .then((response) => response.json())
  .then((data) => {
    movies = data;
  })
  .catch((error) => console.error("Error loading movie data:", error));

// Add event listeners
searchIcon.addEventListener("click", searchMovie);
searchInput.addEventListener("input", updateResultsVisibility);
document.addEventListener("click", closeResultsDropdown);

// Search movie function
function searchMovie() {
  const searchTerm = searchInput.value.toLowerCase();
  const filteredMovies = movies.filter((movie) =>
    movie.title.toLowerCase().includes(searchTerm)
  );

  displayResults(filteredMovies);
}

// Update results visibility based on search input
function updateResultsVisibility() {
  const searchTerm = searchInput.value.toLowerCase();
  const filteredMovies = movies.filter((movie) =>
    movie.title.toLowerCase().includes(searchTerm)
  );

  displayResults(filteredMovies);
}

// Display search results
function displayResults(results) {
  resultsContainer.innerHTML = "";

  if (results.length === 0) {
    resultsContainer.innerHTML = "No results found.";
    resultsContainer.style.display = "block";
    return;
  }
  results.forEach((movie) => {
    const movieElement = document.createElement("a");
    movieElement.textContent = movie.title;
    movieElement.href = movie.link;
    movieElement.classList.add("result-item");

    const imageElement = document.createElement("img");
    imageElement.src = movie.image; // Add the image URL to your movie data
    imageElement.alt = movie.title;
    imageElement.classList.add("result-image");

    movieElement.appendChild(imageElement);
    resultsContainer.appendChild(movieElement);
  });
  resultsContainer.style.display = "block";
}

// Close the results dropdown when clicking outside of it
function closeResultsDropdown(event) {
  if (
    !resultsContainer.contains(event.target) &&
    event.target !== searchInput
  ) {
    resultsContainer.style.display = "none";
  }
}

/// SubMenu Activation Code
let subMenu = document.getElementById("subMenu");
function toggleMenu() {
  subMenu.classList.toggle("open-menu");
}

// Swith thumbnail and play video
document.addEventListener("DOMContentLoaded", function () {
  const playMovieButton = document.querySelector(".play-movie-btn");
  const thumbnail = document.getElementById("thumbnail");
  const videoIframe = document.getElementById("video-iframe");

  playMovieButton.addEventListener("click", () => {
    thumbnail.style.display = "none"; // Hide the thumbnail
    playMovieButton.classList.add("hidden"); // Add class to hide the play button
    videoIframe.style.display = "block"; // Show the video iframe

    // Append the autoplay parameter using a question mark or ampersand
    if (videoIframe.src.indexOf("?") === -1) {
      videoIframe.src += "?autoplay=1";
    } else {
      videoIframe.src += "&autoplay=1";
    }
  });
});

// swiper initialization code
var swiper = new Swiper(".popular-content", {
  slidesPerView: 1,
  loop: false,
  spaceBetween: 10,
  grabCursor: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    280: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    320: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    510: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    758: {
      slidesPerView: 3,
      spaceBetween: 15,
    },
    900: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
});
/*  DISQUS COMMENT SECTION SCRIPT END */

// Go to Top Button
const goTopBtn = document.getElementById("scrollToTopButton");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 500) {
    goTopBtn.classList.add("active");
  } else {
    goTopBtn.classList.remove("active");
  }
});

goTopBtn.addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
