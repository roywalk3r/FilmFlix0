<!-- Search Function Explanation -->

The code starts by getting references to the DOM elements for the search icon, search input, and results container using getElementById().

The movies variable is declared as an empty array. This will be used to store the movie data loaded from the JSON file.

The code uses the fetch() function to load movie data from the JSON file located at "/assets/js/movies.json". The response is converted to JSON using response.json() and then assigned to the movies variable. If there is an error loading the movie data, an error message is logged to the console.

Event listeners are added to the search icon, search input, and the document itself.

The searchMovie() function is called when the search icon is clicked. It retrieves the search term from the search input, converts it to lowercase, and filters the movies array to find movies whose titles include the search term. The filtered movies are then passed to the displayResults() function.

The updateResultsVisibility() function is called when the search input value changes. It performs the same filtering logic as the searchMovie() function and passes the filtered movies to the displayResults() function.
making it so that the user does not have to click the search icon

The displayResults() function clears the contents of the results container, then checks if there are any results. If there are no results, it hides the results container and returns. Otherwise, it iterates over the results and creates HTML elements for each movie, including a link to the movie and an image. These elements are appended to the results container, and the container is displayed.

The closeResultsDropdown() function is called when a click event occurs on the document. It checks if the click target is outside of the results container and not the search input. If this condition is true, it hides the results container.

Overall, this code sets up a search functionality for movies based on user input. It loads movie data from a JSON file, filters the movies based on the search input, and displays the results dynamically in the results container.

<!-- Code for maintaing current.episode upon refresh  -->
   <script>
// // Get the current URL
// var currentURL = window.location.href;

// // Extract the fragment identifier
// var fragmentIdentifier = currentURL.split('#')[1];

// // Check if a fragment identifier exists
// if (fragmentIdentifier) {
//   // Remove the "ep" prefix and get only the numeric part
//   var numericPart = fragmentIdentifier.replace('ep', '');

//   // Construct the new episode URL by concatenating the numeric part
//   var newEpisodeURL = `https://vidsrc.to/embed/tv/tt1312171/1/${numericPart}`;

//   // Set the new URL as the iframe src
//   document.getElementById("video-iframe").src = newEpisodeURL;
// } else {
//   console.log('No Fragment Identifier found.');
// }


         </script>
