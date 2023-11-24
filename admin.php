<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin | Dashboard</title>
</head>

<body>

</body>

</html>
<div class="movie-form">
    <!-- <h1>Add a New Movie</h1> -->
    <form action="process_movie.php" method="POST" enctype="multipart/form-data">
        <div class="log">
            <label for="title">Title:</label>
            <input type="text" name="title" required>
        </div>
        <div class="log">
            <label for="description">Description:</label>
            <textarea name="description"></textarea>
        </div>
        <div class="log">
            <label for="release_date">Release Date:</label>
            <input type="date" name="release_date">
        </div>
        <div class="log">
            <label for="genre">Genre:</label>
            <input type="text" name="genre">
        </div>
        <div class="log">
            <label for="time">Time:</label>
            <input type="text" name="time">
        </div>
        <div class="log">
            <label for="director">Writer:</label>
            <input type="text" name="director">
        </div>
        <div class="log">
            <label for="thumbnail">Thumbnail Image:</label>
            <input type="text" name="thumbnail_url">
        </div>
        <!-- Poster Image -->
        <div class="log">
            <label for="poster">Poster Image:</label>
            <input type="file" name="poster">
        </div>

        <!-- Cast 1 -->
        <div class="log">
            <label for="cast1_name">Cast 1 Name:</label>
            <input type="text" name="cast1_name">
        </div>
        <div class="log">
            <label for="cast1_img_url">Cast 1 Image URL:</label>
            <input type="text" name="cast1_img_url">
        </div>

        <!-- Cast 2 -->
        <div class="log">
            <label for="cast2_name">Cast 2 Name:</label>
            <input type="text" name="cast2_name">
        </div>
        <div class="log">
            <label for="cast2_img_url">Cast 2 Image URL:</label>
            <input type="text" name="cast2_img_url">
        </div>

        <!-- Cast 3 -->
        <div class="log">
            <label for="cast3_name">Cast 3 Name:</label>
            <input type="text" name="cast3_name">
        </div>
        <div class="log">
            <label for="cast3_img_url">Cast 3 Image URL:</label>
            <input type="text" name="cast3_img_url">
        </div>

        <!-- Cast 4 -->
        <div class="log">
            <label for="cast4_name">Cast 4 Name:</label>
            <input type="text" name="cast4_name">
        </div>
        <div class="log">
            <label for="cast4_img_url">Cast 4 Image URL:</label>
            <input type="text" name="cast4_img_url">
        </div>

        <!-- Cast 5 -->
        <div class="log">
            <label for="cast5_name">Cast 5 Name:</label>
            <input type="text" name="cast5_name">
        </div>
        <div class="log">
            <label for="cast5_img_url">Cast 5 Image URL:</label>
            <input type="text" name="cast5_img_url">
        </div>

        <!-- Cast 6 -->
        <div class="log">
            <label for="cast6_name">Cast 6 Name:</label>
            <input type="text" name="cast6_name">
        </div>
        <div class="log">
            <label for="cast6_img_url">Cast 6 Image URL:</label>
            <input type="text" name="cast6_img_url">
        </div>

        <!-- Video URL -->
        <div class="log">
            <label for="video_url">Video URL:</label>
            <input type="text" name="video_url">
        </div>

        <!-- Download Links -->
        <div class="log">
            <label for="download_link1">Download Link 1:</label>
            <input type="text" name="download_link1">
        </div>
        <div class="log">
            <label for="download_link2">Download Link 2:</label>
            <input type="text" name="download_link2">
        </div>
        <div class="log">
            <label for="download_link3">Download Link 3:</label>
            <input type="text" name="download_link3">
        </div>

        <!-- Related Movies 1 -->
        <div class="log">
            <label for="related1_name">Related Movie 1 Name:</label>
            <input type="text" name="related1_name">
        </div>
        <div class="log">
            <label for="related1_genre">Related Movie 1 Genre:</label>
            <input type="text" name="related1_genre">
        </div>
        <div class="log">
            <label for="related1_img_url">Related Movie 1 Image URL:</label>
            <input type="text" name="related1_img_url">
        </div>
        <div class="log">
            <label for="related1_movie_url">Related Movie 1 URL:</label>
            <input type="text" name="related1_movie_url">
        </div>

        <!-- Related Movies 2 -->
        <div class="log">
            <label for="related2_name">Related Movie 2 Name:</label>
            <input type="text" name="related2_name">
        </div>
        <div class="log">
            <label for="related2_genre">Related Movie 2 Genre:</label>
            <input type="text" name="related2_genre">
        </div>
        <div class="log">
            <label for="related2_img_url">Related Movie 2 Image URL:</label>
            <input type="text" name="related2_img_url">
        </div>
        <div class="log">
            <label for="related2_movie_url">Related Movie 2 Movie URL:</label>
            <input type="text" name="related2_movie_url">
        </div>

        <!-- Related Movies 3 -->
        <div class="log">
            <label for="related3_name">Related Movie 3 Name:</label>
            <input type="text" name="related3_name">
        </div>
        <div class="log">
            <label for="related3_genre">Related Movie 3 Genre:</label>
            <input type="text" name="related3_genre">
        </div>
        <div class="log">
            <label for="related3_img_url">Related Movie 3 Image URL:</label>
            <input type="text" name="related3_img_url">
        </div>
        <div class="log">
            <label for="related3_movie_url">Related Movie 3 Movie URL:</label>
            <input type="text" name="related3_movie_url">
        </div>

        <!-- Recommended Movies 1 -->
        <div class="log">
            <label for="recommended1_img_url">Recommended Movie 1 Image URL:</label>
            <input type="text" name="recommended1_img_url">
        </div>
        <div class="log">
            <label for="recommended1_movie_url">Recommended Movie 1 URL:</label>
            <input type="text" name="recommended1_movie_url">
        </div>

        <!-- Recommended Movies 2 -->
        <div class="log">
            <label for="recommended2_img_url">Recommended Movie 2 Image URL:</label>
            <input type="text" name="recommended2_img_url">
        </div>
        <div class="log">
            <label for="recommended2_movie_url">Recommended Movie 2 Video URL:</label>
            <input type="text" name="recommended2_movie_url">
        </div>

        <!-- Recommended Movies 3 -->
        <div class="log">
            <label for="recommended3_img_url">Recommended Movie 3 Image URL:</label>
            <input type="text" name="recommended3_img_url">
        </div>
        <div class="log">
            <label for="recommended3_movie_url">Recommended Movie 3 Video URL:</label>
            <input type="text" name="recommended3_movie_url">
        </div>

        <!-- Recommended Movies 4 -->
        <div class="log">
            <label for="recommended4_img_url">Recommended Movie 4 Image URL:</label>
            <input type="text" name="recommended4_img_url">
        </div>
        <div class="log">
            <label for="recommended4_movie_url">Recommended Movie 4 Video URL:</label>
            <input type="text" name="recommended4_movie_url">
        </div>

        <!-- Recommended Movies 5 -->
        <div class="log">
            <label for="recommended5_img_url">Recommended Movie 5 Image URL:</label>
            <input type="text" name="recommended5_img_url">
        </div>
        <div class="log">
            <label for="recommended5_movie_url">Recommended Movie 5 Video URL:</label>
            <input type="text" name="recommended5_movie_url">
        </div>

        <!-- Recommended Movies 6 -->
        <div class="log">
            <label for="recommended6_img_url">Recommended Movie 6 Image URL:</label>
            <input type="text" name="recommended6_img_url">
        </div>
        <div class="log">
            <label for="recommended6_movie_url">Recommended Movie 6 Video URL:</label>
            <input type="text" name="recommended6_movie_url">
        </div>

        <!-- Recommended Movies 7 -->
        <div class="log">
            <label for="recommended7_img_url">Recommended Movie 7 Image URL:</label>
            <input type="text" name="recommended7_img_url">
        </div>
        <div class="log">
            <label for="recommended7_movie_url">Recommended Movie 7 Video URL:</label>
            <input type="text" name="recommended7_movie_url">
        </div>

        <!-- Recommended Movies 8 -->
        <div class="log">
            <label for="recommended8_img_url">Recommended Movie 8 Image URL:</label>
            <input type="text" name="recommended8_img_url">
        </div>
        <div class="log">
            <label for="recommended8_movie_url">Recommended Movie 8 Video URL:</label>
            <input type="text" name="recommended8_movie_url">
        </div>

        <!-- Recommended Movies 9 -->
        <div class="log">
            <label for="recommended9_img_url">Recommended Movie 9 Image URL:</label>
            <input type="text" name="recommended9_img_url">
        </div>
        <div class="log">
            <label for="recommended9_movie_url">Recommended Movie 9 Video URL:</label>
            <input type="text" name="recommended9_movie_url">
        </div>

        <input type="submit" name="submit" value="Add Movie">
    </form>


</div>


</body>

</html>