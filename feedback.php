<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="assets/css/feedback.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">SocialMoodLens</div>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="library.php">Library</a></li>
            <li class="no-underline">
                Feedbacks
                <div class="dropdown">
                    <a href="feedback.php">Add Feedbacks</a>
                    <a href="all_feedbacks.php">Show Feedbacks</a>
                </div>
            </li>
            <?php
            if (isset($_SESSION["username"])) {
                echo '<li><a href="includes/logout.inc.php">Logout</a></li>';
                echo '<li><span class="user"><a href=""><a href="profile.php">' . htmlspecialchars($_SESSION["username"]) . '</a> </span></li>';
            } else {
                echo '<li><a href="login.php">Login</a></li>';  
            }
            ?>
        </ul>
    </div>

    <div class="feedback-form">
        <form method="POST" action="feedback_submission.php">
            <h2>Feedback Form</h2>
            Name:<br>
            <input type="text" name="name" required><br><br>
            Email:<br>
            <input type="email" name="email" required><br><br>
            Subject:<br>
            <input type="text" name="subject" required><br><br>
            Message:<br>
            <textarea name="message" rows="4" required></textarea><br><br>
        
            <input type="submit" value="Submit">
            <?php if (isset($_SESSION['feedback_success'])): ?>
                <p class="success-message">Thank you for your feedback!</p>
                <?php unset($_SESSION['feedback_success']); ?>
            <?php endif; ?>
        </form>

        <br>
        <a href="all_feedbacks.php">View All Feedback</a>
    </div>
    
</body>
</html>
