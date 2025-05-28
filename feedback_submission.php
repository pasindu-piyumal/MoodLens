<?php
include 'includes/dbh.inc.php';
session_start();

if (!isset($_SESSION['userid'])) {
    header("Location: feedback.php?error=notloggedin");
    exit();
}

$usersId = $_SESSION['userid'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'] ?? '';


$stmt = $conn->prepare("INSERT INTO feedback (usersId, name, email, subject, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("issss", $usersId, $name, $email, $subject, $message);

if ($stmt->execute()) {
    $_SESSION['feedback_success'] = "Thank you for your feedback!";
} else {
    $_SESSION['feedback_error'] = "Failed to submit feedback.";
}

$stmt->close();
$conn->close();

header("Location: feedback.php");
exit();
?>

