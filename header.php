<header>
    <!-- Nav  -->
    <div class="nav container">
        <!-- logo -->
        <a href="../../home.php" class="logo"> Film<span>Flix</span> </a>
        <!-- Search Box -->
        <div class="search-box">
            <input type="search" id="search-input" placeholder="Search movie" />
            <i class="bx bx-search" id="search-icon"></i>
            <div class="results-container container" id="resultsContainer">
                <!-- Search results will be displayed here -->
            </div>
        </div>
        <?php

        function generateAvatarUrl($username)
        {
            // Use a hashing algorithm (e.g., md5) to generate a unique identifier from the username
            $hash = md5($username);

            // Define the UI Avatars URL format with the generated hash
            $avatarUrl = "https://ui-avatars.com/api/?name=" . $username . "&background=random&color=ffffff&rounded=true&length=2";

            return $avatarUrl;
        }
        ?>

        <?php
        session_start();

        // Check if the user is logged in
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username']; // Set the $username variable

            // Set the display style for the user image link when the user is logged in
            $userImageDisplay = 'block';
        } else {
            // User is not logged in, so set $username to an empty value
            $username = '';

            // Set the display style for the user image link when the user is not logged in
            $userImageDisplay = 'none';
        }
        ?>

        <?php if (!$username) { ?>
            <!-- Display the "Login" button if the user is not logged in -->
            <i class="login fa-solid fa-right-to-bracket" id="loginButton"></i>
        <?php } ?>


        <script>
            // JavaScript to hide the login button if the user is logged in
            document.addEventListener("DOMContentLoaded", function() {
                const loginButton = document.getElementById("loginButton");
                if (loginButton) {
                    <?php if (isset($_SESSION['username'])) { ?>
                        loginButton.style.display = "none";
                    <?php } ?>
                }
            });
        </script>


        <!-- User -->
        <a href="#" class="user" style="display: <?php echo $userImageDisplay; ?>">
            <img src="<?php echo generateAvatarUrl($username); ?>" class="user-img" onclick="toggleMenu()" id="profilePic" />
        </a>



        <!-- Nav Bar -->
        <div class="navbar">
            <a href="../../home.php#home" class="nav-link nav-active">
                <i class="bx bx-home"></i>
                <span class="nav-link-title">Home</span>
            </a>
            <a href="../../home.php#popular" class="nav-link">
                <i class="bx bxs-hot trending"></i>
                <span class="nav-link-title">Trending</span>
            </a>
            <a href="../../home.php#movies" class="nav-link">
                <i class="bx bx-compass"></i>
                <span class="nav-link-title">Explore</span>
            </a>
            <a href="../../home.php#movies" class="nav-link">
                <i class="bx bx-tv"></i>
                <span class="nav-link-title">Movies</span>
            </a>
            <a href="../../home.php#home" class="nav-link">
                <i class="bx bx-heart"></i>
                <span class="nav-link-title">Favourite</span>
            </a>
        </div>
        <!-- Submenu for User Settings -->
        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">


                    <img src="<?php echo generateAvatarUrl($username); ?>" alt="user" />
                    <h3 id="userName"><?php echo $username; ?></h3>
                    <p id="userEmail"></p>
                </div>
                <hr />
                <!-- Submenu Links -->
                <a href="../../profile.php" class="sub-menu-link">
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
                <?php if (isset($_SESSION['username'])) { ?>
                    <a href="logout.php" class="sub-menu-link logout">
                        <img src="../img/logout.png" alt="logout" />
                        <p id="logoutLink">Logout</p>
                        <span>&gt;</span>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="logform">
        <img src="../../tonny.png" id="tony" />
        <form class="login-form" id="logform" method="POST" action="../../login.php">
            <h3>Login</h3>
            <p id="welcome">welcome back!</p>
            <input type="text" name="loginUsername" id="loginUsername" placeholder="email or username" required />
            <input type="password" name="loginPassword" id="loginPassword" placeholder="password" required />
            <a id="forgot">forgot password</a>
            <div class="g-recaptcha" data-sitekey="6LePOO8nAAAAAFzgyeRE1MVa4er7jDNRXDPgJpVu"></div>
            <input type="submit" value="submit" />
            <div class="newmember"><a href="#">Not a member? Sign Up</a></div>
        </form>

        <div>
            <p class="acnot"></p>
        </div>
        <?php

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

        // Function to safely sanitize user input
        function sanitizeInput($input)
        {
            return htmlspecialchars(stripslashes(trim($input)));
        }

        // Initialize variables to store form data and error messages
        $username = $email = $password = $passwordConfirmation = "";
        $usernameError = $emailError = $passwordError = $passwordConfirmationError = "";
        // ...

        // Check if the form was submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = sanitizeInput($_POST['username']);
            $email = sanitizeInput($_POST['email']);
            $password = $_POST['password'];
            $passwordConfirmation = $_POST['passwordConfirmation'];

            // Validate username, email, and password here

            // Check if username or email already exist
            $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Handle existing user error here
            } else {
                // Hash the password
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Insert the user into the database with the current date and time
                $sql = "INSERT INTO users (username, email, password, signup_date) VALUES ('$username', '$email', '$hashed_password', NOW())";

                if ($conn->query($sql) === TRUE) {
                    // Registration successful
                    echo '<p  class="reg-com" style="color: green">Registration successful.</p>';
                } else {
                    // Error while registering
                    echo '<p class="reg-com" style="color: red">Error while registering.</p>';
                }
            }
        }

        // Retrieve user data
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


        // Close the database connection
        $conn->close();
        ?>



        <!-- Your HTML form -->
        <p id="errorText" style="display: none; color: red"></p>

        <!-- Your HTML form -->
        <form class="signup-form" id="regform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h3>Register</h3>
            <p id="welcome">create an account</p>

            <!-- Error messages for username -->
            <div class="error-container">
                <?php if (!empty($usernameError)) : ?>
                    <p class="error-text" style="color: red"><?php echo $usernameError; ?></p>
                <?php endif; ?>
                <input type="text" id="username" name="username" placeholder="Username" required pattern="[A-Za-z0-9]{3,}" title="Username must be at least 3 characters and can only contain letters and numbers." oninput="checkExistingUsername(this.value)" />

            </div>

            <!-- Error messages for email -->
            <div class="error-container">
                <?php if (!empty($emailError)) : ?>
                    <p class="error-text" style="color: red"><?php echo $emailError; ?></p>
                <?php endif; ?>
                <input type="email" name="email" id="email" placeholder="Email" required oninput="checkExistingEmail(this.value)" />
            </div>

            <!-- Error messages for password -->
            <div class="error-container">
                <?php if (!empty($passwordError)) : ?>
                    <p class="error-text" style="color: red"><?php echo $passwordError; ?></p>
                <?php endif; ?>
                <input type="password" id="password" name="password" placeholder="Password" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{6,}$" title="Password must be at least 6 characters and include at least one uppercase letter, one lowercase letter, and one digit." />

            </div>

            <!-- Error messages for password confirmation -->
            <div class="error-container">
                <?php if (!empty($passwordConfirmationError)) : ?>
                    <p class="error-text" style="color: red"><?php echo $passwordConfirmationError; ?></p>
                <?php endif; ?>
                <input type="password" name="passwordConfirmation" id="passwordConfirmation" placeholder="Confirm Password" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{6,}$" title="Password must be at least 6 characters and include at least one uppercase letter, one lowercase letter, and one digit." />

            </div>

            <div class="g-recaptcha" data-sitekey="6LePOO8nAAAAAFzgyeRE1MVa4er7jDNRXDPgJpVu"></div>
            <input type="submit" value="Sign Up" />
            <div class="member"><a href="#">Already a member? Login</a></div>
        </form>


        <button id="closeButton" class="close-button">
            <i class="fas fa-close"></i>
        </button>
    </div>
</header>