<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome Back</h2>
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo '<p class="error">' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['username'])) {
            header("Location: welcome.php");
            exit();
        }
        ?>
        <form action="login.php" method="POST">
            <div class="input-group">
                <input type="text" name="username" placeholder=" " required>
                <label>Username</label>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder=" " required>
                <label>Password</label>
            </div>
            <button class="btn" type="submit">Login</button>
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
        </form>
        <div class="particles">
            <div class="particle" style="width: 10px; height: 10px; left: 10%; top: 20%; animation-delay: 0s;"></div>
            <div class="particle" style="width: 8px; height: 8px; left: 80%; top: 40%; animation-delay: 1s;"></div>
            <div class="particle" style="width: 12px; height: 12px; left: 30%; top: 70%; animation-delay: 2s;"></div>
            <div class="particle" style="width: 6px; height: 6px; left: 60%; top: 10%; animation-delay: 3s;"></div>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>