<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to the Dashboard</h1>
    </header>
    <nav>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li> <!-- Add logout link -->
        </ul>
    </nav>
    <main>
        <section>
            <h2>Member Dashboard</h2>
            <!-- Add member-specific content here -->
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> University Registration System. All rights reserved.</p>
    </footer>
</body>
</html>
