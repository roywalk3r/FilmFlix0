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
            header("Location: profile.php"); // Redirect to the profile page
            exit;
        }
    }

    // Combination not found or passwords do not match, display an error message
    echo '<p style="color: red">Could not find username and password combination.</p>';
}

// Close the database connection
$conn->close();
?>
