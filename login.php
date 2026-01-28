<?php
session_start();

// entered username needs to match the user and pass I made here
function authenticate_user($username, $password) {
    $valid_username = 'woody';
    $valid_password = 'fijiwood';
    
    // sees if entered creds are valid
    if ($username === $valid_username && $password === $valid_password) {
        return true;
    }
    return false;
}

// error message empty variable
$error = '';

// sees if form was submitted when the user clicks the login button
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // finds username and pass is in there
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // checks if login creds are correct
    if (authenticate_user($username, $password)) {
        // session stuff
        $_SESSION['user'] = $username;
        // redirect to simplx page, might change the name
        header('Location: dashboard.php');
        exit();
    } else {
        // error message if login fails
        $error = 'Invalid username or password.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Simplx Access</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <!-- login container and box from stylesheet -->
    <div class="login-container">
        <div class="login-box">
            <!-- logo image -->
            <img src="images/logo.webp" alt="Logo" class="logo">
            <!-- login text title -->
            <h1>LOGIN</h1>
            <!-- checks for error to display -->
            <?php if ($error): ?>
                <!-- shows that error box -->
                <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
            <form method="post">
                <!-- container for username input field and label thing -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <!-- required = must be filled -->
                    <input type="text" id="username" name="username" placeholder="Enter username" required>
                </div>
                <!-- Container for pass input field and label -->
                <div class="form-group">
                    <!-- password label -->
                    <label for="password">Password</label>
                    <!-- password input box -->
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                </div>
                <!-- login button -->
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>