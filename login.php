<?php
session_start();

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

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginUsername = mysqli_real_escape_string($conn, $_POST['loginUsername']);
    $loginPassword = mysqli_real_escape_string($conn, $_POST['loginPassword']);

    // Query the database to check if the combination exists
    $sql = "SELECT * FROM users WHERE (username = '$loginUsername' OR email = '$loginUsername')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the hashed password from the database
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify the entered password against the hashed password
        if (password_verify($loginPassword, $hashed_password)) {
            // Passwords match, successful login
            $_SESSION['username'] = $loginUsername; // Store user data in session

            // Redirect back to the previous page or to a default page if 'return_to' is not set
            $redirect_url = isset($_SESSION['return_to']) ? $_SESSION['return_to'] : 'profile.php';
            header("Location: $redirect_url");
            exit;
        }
    }

    // Combination not found or passwords do not match, display a generic error message
    echo '<p style="color: red">Invalid username or password.</p>';
    echo '<a href="home.php">Click here to try again</a>';
}

// Store the current page URL in a session variable
$_SESSION['return_to'] = $_SERVER['REQUEST_URI'];

// Close the database connection
$conn->close();
?>
