<?php
include 'includes/dbh.inc.php';
session_start();
if (!isset($_SESSION['userid'])) {
    echo json_encode(["error" => "User not logged in"]);
    exit();
}

$usersId = $_SESSION['userid'];
$study_time = $_POST['study-time'];
$facebook_time = $_POST['facebook-time'];
$instagram_time = $_POST['instagram-time'];
$whatsapp_time = $_POST['whatsapp-time'];  // Corrected to match the HTML input name
$youtube_time = $_POST['youtube-time'];
$telegram_time = $_POST['telegram-time'];
$tiktok_time = $_POST['tiktok-time'];  // Corrected to match the HTML input name

$total_social_media_time = $facebook_time + $instagram_time + $whatsapp_time + $youtube_time + $telegram_time + $tiktok_time;
$total_time = $study_time + $total_social_media_time;
$message = "";
$status = "";

if ($total_time > 24) {
    $status = "negative";
    $message = "Total time exceeds 24 hours. Please adjust your inputs.";
} elseif ($total_time > 20) {
    $status = "negative";
    $message = "Warning: You've allocated more than 20 hours. Are you sure these inputs are correct?";
} elseif ($study_time > $total_social_media_time) {
    if ($study_time >= 10) {
        $status = "positive";
        $message = "Strongly Positive: Excellent! You're dedicating a significant amount of time to your studies. Keep it up!";
    } elseif ($study_time >= 5) {
        $status = "positive";
        $message = "Positive: Great job! Your study time is well-balanced. Stay consistent!";
    } else {
        $status = "positive";
        $message = "Positive: You're prioritizing studies, but there's still room for improvement!";
    }
} elseif ($study_time < $total_social_media_time) {
    if ($total_social_media_time >= 10) {
        $status = "negative";
        $message = "Strongly Negative: Warning! You're spending a lot of time on social media. Try to focus more on your studies.";
    } elseif ($total_social_media_time >= 5) {
        $status = "negative";
        $message = "Negative: Be cautious! Your social media usage is higher than your study time. Consider adjusting your schedule.";
    } else {
        $status = "negative";
        $message = "Negative: You're spending more time on social media than studying. A little adjustment can make a big difference!";
    }
} else { 
    if ($study_time >= 5) {
        $status = "neutral";
        $message = "Neutral: Your study and social media time are balanced, which is great! Keep going!";
    } else {
        $status = "neutral";
        $message = "Neutral: Your study and social media time are equal, but increasing study time could be beneficial!";
    }
}

$status_colors = [
    "positive" => "#4CAF50", 
    "neutral" => "#2196F3", 
    "negative" => "#F44336" 
];

$color = $status_colors[$status];



$stmt = $conn->prepare("INSERT INTO mood_messages (usersId, message) VALUES (?, ?)");
$stmt->bind_param("is", $usersId, $message);
$stmt->execute();
$stmt->close();

$stmt = $conn->prepare("INSERT INTO analyzer_form (usersId, study_time, facebook_time, instagram_time, whatsapp_time, youtube_time, telegram_time, tiktok_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iddddddd", $usersId, $study_time, $facebook_time, $instagram_time, $whatsapp_time, $youtube_time, $telegram_time, $tiktok_time);
$stmt->execute();
$stmt->close();

$conn->close();

echo json_encode([
    "status" => $status,
    "message" => "<div style='
        background-color: $color;
        color: white;
        padding: 15px;
        border-radius: 10px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        margin: 10px 0;
        box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
    '>$message</div>"
]);
exit();
?>

