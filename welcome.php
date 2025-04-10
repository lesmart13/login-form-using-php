<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <?php
        session_start();
        if (!isset($_SESSION['username'])) {
            header("Location: index.php");
            exit();
        }
        ?>
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>You've successfully logged in. Enjoy your stay!</p>
        <a href="logout.php" class="btn">Logout</a>
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