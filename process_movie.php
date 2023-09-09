

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

// Handle form submission
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $release_date = $_POST['release_date'];
    $genre = $_POST['genre'];
    $director = $_POST['director'];
    $poster_url = '';
    $thumbnail_url = $_POST['thumbnail_url']; // New field
    $cast1_name = $_POST['cast1_name']; // New field
    $cast1_img_url = $_POST['cast1_img_url']; // New field
    $cast2_name = $_POST['cast2_name']; // New field
    $cast2_img_url = $_POST['cast2_img_url']; // New field
    $cast3_name = $_POST['cast3_name']; // New field
    $cast3_img_url = $_POST['cast3_img_url']; // New field
    $cast4_name = $_POST['cast4_name']; // New field
    $cast4_img_url = $_POST['cast4_img_url']; // New field
    $cast5_name = $_POST['cast5_name']; // New field
    $cast5_img_url = $_POST['cast5_img_url']; // New field
    $cast6_name = $_POST['cast6_name']; // New field
    $cast6_img_url = $_POST['cast6_img_url']; // New field
    $video_url = $_POST['video_url'];
    $download_link1 = $_POST['download_link1']; // New field
    $download_link2 = $_POST['download_link2']; // New field
    $download_link3 = $_POST['download_link3']; // New field
    $related1_name = $_POST['related1_name']; // New field
    $related1_genre = $_POST['related1_genre']; // New field
    $related1_img_url = $_POST['related1_img_url']; // New field
    $related1_movie_url = $_POST['related1_movie_url']; // New field
    $related2_name = $_POST['related2_name']; // New field
    $related2_genre = $_POST['related2_genre']; // New field
    $related2_img_url = $_POST['related2_img_url']; // New field
    $related2_movie_url = $_POST['related2_movie_url']; // New field
    $related3_name = $_POST['related3_name']; // New field
    $related3_genre = $_POST['related3_genre']; // New field
    $related3_img_url = $_POST['related3_img_url']; // New field
    $related3_movie_url = $_POST['related3_movie_url']; // New field
    $recommended1_img_url = $_POST['recommended1_img_url']; // New field
    $recommended1_movie_url = $_POST['recommended1_movie_url']; // New field
    $recommended2_img_url = $_POST['recommended2_img_url']; // New field
    $recommended2_movie_url = $_POST['recommended2_movie_url']; // New field
    $recommended3_img_url = $_POST['recommended3_img_url']; // New field
    $recommended3_movie_url = $_POST['recommended3_movie_url']; // New field
    $recommended4_img_url = $_POST['recommended4_img_url']; // New field
    $recommended4_movie_url = $_POST['recommended4_movie_url']; // New field
    $recommended5_img_url = $_POST['recommended5_img_url']; // New field
    $recommended5_movie_url = $_POST['recommended5_movie_url']; // New field
    $recommended6_img_url = $_POST['recommended6_img_url']; // New field
    $recommended6_movie_url = $_POST['recommended6_movie_url']; // New field
    $recommended7_img_url = $_POST['recommended7_img_url']; // New field
    $recommended7_movie_url = $_POST['recommended7_movie_url']; // New field
    $recommended8_img_url = $_POST['recommended8_img_url']; // New field
    $recommended8_movie_url = $_POST['recommended8_movie_url']; // New field
    $recommended9_img_url = $_POST['recommended9_img_url']; // New field
    $recommended9_movie_url = $_POST['recommended9_movie_url']; // New field

    // Handle file upload (poster image)
    if ($_FILES['poster']['size'] > 0) {
        $uploadDir = '../img/';
        $posterName = basename($_FILES['poster']['name']);
        $posterPath = $uploadDir . $posterName;

        if (move_uploaded_file($_FILES['poster']['tmp_name'], $posterPath)) {
            $poster_url = $posterPath;
        } else {
            echo "Error uploading poster.";
            exit;
        }
    }

    // Insert movie details into the database
    $sql = "INSERT INTO movie (title, description, release_date, genre, director, poster_url, thumbnail_url, cast1_name, cast1_img_url, cast2_name, cast2_img_url, cast3_name, cast3_img_url, cast4_name, cast4_img_url, cast5_name, cast5_img_url, cast6_name, cast6_img_url, video_url, download_link1, download_link2, download_link3, related1_name, related1_genre, related1_img_url, related1_movie_url, related2_name, related2_genre, related2_img_url, related2_movie_url, related3_name, related3_genre, related3_img_url, related3_movie_url, recommended1_img_url, recommended1_movie_url, recommended2_img_url, recommended2_movie_url, recommended3_img_url, recommended3_movie_url, recommended4_img_url, recommended4_movie_url, recommended5_img_url, recommended5_movie_url, recommended6_img_url, recommended6_movie_url, recommended7_img_url, recommended7_movie_url, recommended8_img_url, recommended8_movie_url, recommended9_img_url, recommended9_movie_url)
            VALUES ('$title', '$description', '$release_date', '$genre', '$director', '$poster_url', '$thumbnail_url', '$cast1_name', '$cast1_img_url', '$cast2_name', '$cast2_img_url', '$cast3_name', '$cast3_img_url', '$cast4_name', '$cast4_img_url', '$cast5_name', '$cast5_img_url', '$cast6_name', '$cast6_img_url', '$video_url', '$download_link1', '$download_link2', '$download_link3', '$related1_name', '$related1_genre', '$related1_img_url', '$related1_movie_url', '$related2_name', '$related2_genre', '$related2_img_url', '$related2_movie_url', '$related3_name', '$related3_genre', '$related3_img_url', '$related3_movie_url', '$recommended1_img_url', '$recommended1_movie_url', '$recommended2_img_url', '$recommended2_movie_url', '$recommended3_img_url', '$recommended3_movie_url', '$recommended4_img_url', '$recommended4_movie_url', '$recommended5_img_url', '$recommended5_movie_url', '$recommended6_img_url', '$recommended6_movie_url', '$recommended7_img_url', '$recommended7_movie_url', '$recommended8_img_url', '$recommended8_movie_url', '$recommended9_img_url', '$recommended9_movie_url')";

    if ($conn->query($sql) === TRUE) {
        // Movie added successfully!

        // Get the inserted movie's ID
        $movie_id = $conn->insert_id;

// Get the movie title for the HTML file name
$html_file_name = sanitizeFileName($title) . '.html';

// Specify the directory where you want to save the HTML file
$directory = 'assets/movieplay/';

// Create the full path to the HTML file
$html_file_path = $directory . $html_file_name;
        // Retrieve movie details from the database
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
// Start output buffering to capture HTML content
ob_start();

// Include the template to generate HTML (Assuming template.php is in the same directory)
include('template.php');

// Get the generated HTML content
$html_content = ob_get_clean();

// Create the specified directory if it doesn't exist
if (!is_dir($directory)) {
    mkdir($directory, 0755, true);
}

// Create a new HTML file for the movie in the specified directory with the title as the file name
file_put_contents($html_file_path, $html_content);

echo "Movie added successfully!<br>";
echo "HTML file created: <a href='$html_file_path'>$html_file_name</a>";

        } else {
            echo "Movie added successfully, but unable to create HTML file.";
        }
    } else {
        echo "Error adding the movie: " . $conn->error;
    }
}
// Function to sanitize a string for use as a file name
function sanitizeFileName($filename) {
    $filename = preg_replace("/[^a-zA-Z0-9]+/", "-", $filename);
    $filename = strtolower($filename);
    return $filename;
}
// Close the connection after all operations are done
?>

<h1 style="color:green;">Success</h1>
