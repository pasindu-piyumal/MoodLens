<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Mood Analyzer</title>
    <link rel="stylesheet" href="assets/css/analyzer.css"> 
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
                echo '<li><a href="login.php">Login</a></li>';  // Show login link if user is not logged in
            }
            ?>
        </ul>
    </nav>

    <div class="box">
        <span class="border"></span>
        <form>
            <h2>STUDY MOOD ANALYZER</h2>
            <div id="analyzer-form"></div>

            <div class="inputBox">
                <label for="study-time">Study Time (hours):</label>
                <div class="range-container">
                    <input type="range" id="study-time" name="study-time" min="0" max="24" value="0" oninput="updateValue(this.value, 'study-value')">
                    <span id="study-value">0</span>
                </div>
            </div>  

            <div class="inputBox">
                <label for="facebook-time">Facebook Time (hours):</label>
                <div class="range-container">
                    <input type="range" id="facebook-time" name="facebook-time" min="0" max="24" value="0" oninput="updateValue(this.value, 'facebook-value')">
                    <span id="facebook-value">0</span>
                </div>
            </div>

            <div class="inputBox">
                <label for="instagram-time">Instagram Time (hours):</label>
                <div class="range-container">
                    <input type="range" id="instagram-time" name="instagram-time" min="0" max="24" value="0" oninput="updateValue(this.value, 'instagram-value')">
                    <span id="instagram-value">0</span>
                </div>
            </div>

            <div class="inputBox">
                <label for="whatsapp-time">WhatsApp Time (hours):</label>
                <div class="range-container">
                    <input type="range" id="whatsapp-time" name="whatsapp-time" min="0" max="24" value="0" oninput="updateValue(this.value, 'whatsapp-value')">
                    <span id="whatsapp-value">0</span>
                </div>
            </div>

            <div class="inputBox">
                <label for="youtube-time">YouTube Time (hours):</label>
                <div class="range-container">
                    <input type="range" id="youtube-time" name="youtube-time" min="0" max="24" value="0" oninput="updateValue(this.value, 'youtube-value')">
                    <span id="youtube-value">0</span>
                </div>
            </div>

            <div class="inputBox">
                <label for="tiktok-time">TikTok Time (hours):</label>
                <div class="range-container">
                    <input type="range" id="tiktok-time" name="tiktok-time" min="0" max="24" value="0" oninput="updateValue(this.value, 'tiktok-value')">
                    <span id="tiktok-value">0</span>
                </div>
            </div>

            <div class="inputBox">
                <label for="telegram-time">Telegram Time (hours):</label>
                <div class="range-container">
                    <input type="range" id="telegram-time" name="telegram-time" min="0" max="24" value="0" oninput="updateValue(this.value, 'telegram-value')">
                    <span id="telegram-value">0</span>
                </div>
            </div>

            <div class="btn">
                <button type="submit" id="analyze-btn">Analyze Your Mood</button>
            </div>
            <div id="result"></div>
        </form>
    </div>

    <script src="assets/js/analyzer.js"></script>

    <script>
        function toggleMenu() {
            let menu = document.getElementById("nav-menu");
            menu.classList.toggle("show");
        }

        document.addEventListener("click", function (event) {
            let menu = document.getElementById("nav-menu");
            let toggleButton = document.querySelector(".menu-toggle");

            if (!menu.contains(event.target) && !toggleButton.contains(event.target)) {
                menu.classList.remove("show");
            }
        });
    </script>

</body>
</html>
