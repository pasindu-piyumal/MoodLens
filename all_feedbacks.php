<?php
include 'includes/dbh.inc.php';
session_start();

if (!isset($_SESSION['userid'])) {
    echo "<p>Please log in to view feedbacks.</p>";
    exit();
}

// Fetch all feedbacks
$sql = "SELECT f.name, f.email, f.subject, f.message, f.submitted_at, u.usersUid 
        FROM feedback f 
        JOIN users u ON f.usersId = u.usersId 
        ORDER BY f.submitted_at DESC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Feedback</title>
    <link rel="stylesheet" href="assets/css/all_feedbacks.css">
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
            <li class="dropdown-parent">
                Feedbacks
                <div class="dropdown">
                    <a href="feedback.php">Add Feedback</a>
                    <a href="all_feedbacks.php">Show Feedbacks</a>
                </div>
            </li>

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

    <h2>Users Feedbacks</h2>

    <?php
    if ($result->num_rows > 0) {
        echo "<div class='container'>";
        while ($row = $result->fetch_assoc()) {
            echo "<div class='feedback-box'>";
            echo "<p><strong>User:</strong> " . htmlspecialchars($row['usersUid']) . " (" . htmlspecialchars($row['name']) . ")</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>";
            echo "<p><strong>Subject:</strong> " . htmlspecialchars($row['subject']) . "</p>";
            echo "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($row['message'])) . "</p>";
            echo "<small>Submitted on: " . htmlspecialchars($row['submitted_at']) . "</small>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "<p>No feedbacks yet.</p>";
    }
    $conn->close();
    ?>


</body>
</html>
