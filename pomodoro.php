<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pomodoro Timer</title>
    <link rel="stylesheet" href="assets/css/pomodoro.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo">
            <a href="#">SocialMoodLens</a>
        </div>
        <div class="menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul id="nav-menu" class="nav-menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="library.php">Library</a></li>
            <?php
            if (isset($_SESSION["username"])) {
                echo '<li><a href="includes/logout.inc.php">Logout</a></li>';
                echo '<li><span class="user"><a href=""><a href="profile.php">' . htmlspecialchars($_SESSION["username"]) . '</a> </span></li>';
            } else {
                echo '<li><a href="login.php">Login</a></li>';  
            }
            ?>
        </ul>
    </nav>
    <div class="container">
        <h1>Pomodoro Timer</h1>
        <div id="timer">
            <span id="time">25:00</span>
        </div>
        <div>
            <label for="break">Select Break Duration:</label>
            <select id="breakTime">
                <option value="5">5 minutes</option>
                <option value="10">10 minutes</option>
                <option value="15">15 minutes</option>
            </select>
        </div>
        <div class="controls">
            <button id="startBtn">Start</button>
            <button id="pauseBtn">Pause</button>
            <button id="resetBtn">Reset</button>
        </div>
        <div id="status">Focus to Your Studies</div>
    </div>
    <script src="assets/js/pomodoro.js"></script>
</body>