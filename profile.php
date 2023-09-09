<?php
session_start();

// Check if the user is logged in, if not, redirect to the login page
if (!isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirect to your login page
    exit;
}

// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Add your database password here
$dbname = "user_credentials";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user data
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $email = $row['email'];
    $signupDate = $row['signup_date'];
    $password = $row['password'];

    // Add more user data as needed
}
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the updated email from the form
    $newEmail = sanitizeInput($_POST['Email']);

    // Update the email address in the database
    $updateSql = "UPDATE users SET email = '$newEmail' WHERE username = '$_SESSION[username]'";
    
    if ($conn->query($updateSql) === TRUE) {
        // Update successful message
        echo '<p id="successText" style="color: green">Email address updated successfully.</p>';
    } else {
        echo '<p id="errorText" style="color: red">Error updating email address.</p>';
    }
}
function generateAvatarUrl($username) {
    // Use a hashing algorithm (e.g., md5) to generate a unique identifier from the username
    $hash = md5($username);
    
    // Define the UI Avatars URL format with the generated hash
    $avatarUrl = "https://ui-avatars.com/api/?name=" . $username . "&size=200&background=random&color=ffffff&rounded=true&length=2";

    return $avatarUrl;
}

// // Function to safely sanitize user input
// function sanitizeInput($input) {
//     return htmlspecialchars(stripslashes(trim($input)));
// }


// // Read the avatars.json file to get the list of image filenames
// $avatarsJson = file_get_contents("avatars.json");
// $avatarsData = json_decode($avatarsJson, true);

// // Get a random image filename from the list
// $randomAvatarFilename = $avatarsData['avatars'][array_rand($avatarsData['avatars'])];

// // Function to generate the image URL based on the selected filename
// function generateAvatarUrl($filename) {
//     return "" . $filename; // Assuming the avatars are in a folder named "avatars"
// }




// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_profile.css">
    <title>User Profile</title>
    <style>
        
/* Logo */
.logo {
  font-size: 1.4rem;
  color: var(--text-color), #fff;
  text-transform: uppercase;
  margin: 0 auto 0 0;
  font-weight: 600;
}

.logo #flix {
  color: red !important;
  font-weight: 600;
}

    </style>
</head>
<body>
    <header >
    <nav>
    <a href="home.html" class="logo"> Film<span id="flix">Flix</span> </a>

        <?php

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // User is logged in, so display the logout button
    echo '<button type="button" class="login" id="logoutButton">Logout</button>';
} else {
    // User is not logged in, so display the login button
    echo '<button type="button" class="login" id="loginButton">Login</button>';
}
?>
      </nav>
    </header>
    

    <!-- Add more user details here -->

        <div class="container">
      <div class="right-sidebar">
      <div class="profile-pic">
     <img src="<?php echo generateAvatarUrl($username); ?>">
    <!-- <img src="<?php echo generateAvatarUrl($randomAvatarFilename); ?>" alt=""> -->

</div>
    
    <div class="user-detail">
     <p class="username"><?php echo $username; ?></p>
    <!-- <p>Email: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $email; ?></p>  -->
    <p>Join Date:  &nbsp; &nbsp;<?php echo $signupDate; ?></p> 
    </div>
    <br>
    <br>
    <div class="logout" id="control">

        <div class="home">
    <a href="home.php" class="home">Go home</a>
        </div>
    <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> &nbsp;Logout</a>
</div>




    </div>
        <br />
      
      <div class="main-content">
        <form class="update-form" id="updateForm" method="post" action="update_email.php">
    <div class="log">
        <label for="JoinDate">Join Date: </label>
        <input type="text" name="JoinDate" id="JoinDate" value="<?php echo $signupDate; ?>" readonly>
    </div>
    <div class="log">
        <label for="Email">Email Address: </label>
        <input type="email" name="Email" id="address" value="<?php echo $email; ?>">
    </div>
    <div class="log">
        <label for="Username">Username: </label>
        <input type="text" name="Username" id="username" value="<?php echo $username; ?>">
    </div>
<div class="log" id="changePasswordOption">
    <a href="#" id="togglePasswordChange">Change Password: </a>
</div>

<div id="passwordChangeFields" class="password-fields-hidden">
    <div class="log">
        <label for="currentPassword">Current Password: </label>
        <input type="password" name="currentPassword" id="currentPassword">
    </div>
    <div class="log">
        <label for="newPassword">New Password</label>
        <input type="password" name="newPassword" id="newPassword">
    </div>
</div>


    <input type="submit" value="Update" id="Submit">
</form>


<script>
document.addEventListener("DOMContentLoaded", function () {
    // Get references to the link and password change fields
    var toggleLink = document.getElementById("togglePasswordChange");
    var passwordFields = document.getElementById("passwordChangeFields");

    // Add click event listener to the link
    toggleLink.addEventListener("click", function (e) {
        e.preventDefault(); // Prevent the link from navigating

        // Toggle the visibility of password change fields
        if (passwordFields.style.display === "none") {
            passwordFields.style.display = "block";
        } else {
            passwordFields.style.display = "none";
        }
    });
});

</script>



      </div>
    
      </div>
    <script
      src="https://kit.fontawesome.com/00a449879e.js"
      crossorigin="anonymous"
    ></script>
    <script>
$(document).ready(function() {
    // Toggle the visibility of the "Change Password" input field
    $("#changePasswordButton").click(function() {
        $("#passwordField").toggle();
    });
});
</script>

    <script>
    $(document).ready(function() {
        // When the "Update" button is clicked
        $("#updateButton").click(function() {
            // Get the new email value from the input field
            var newEmail = $("#email").val();

            // Send an AJAX request to update the email
            $.ajax({
                type: "POST",
                url: "update_email.php", // Replace with the URL of your PHP script
                data: { Email: newEmail },
                success: function(response) {
                    // Display the response message
                    $("#updateMessage").html(response);
                    $("#updateMessage").show();
                }
            });
        });
    });
    </script>
    <script>
$(document).ready(function() {
    $("#logoutButton").click(function() {
        $.ajax({
            type: "POST",
            url: "logout.php", // Replace with the URL of your logout script
            success: function(response) {
                // Redirect the user to the login page after successful logout
                window.location.href = "index.php"; // Replace with your login page URL
            }
        });
    });
});
</script>
</body>
</html>
