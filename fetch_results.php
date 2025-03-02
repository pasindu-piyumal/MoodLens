<?php
include 'includes/dbh.inc.php';
session_start();
if (!isset($_SESSION['userid'])) {
    echo json_encode(["error" => "User not logged in"]);
    exit();
}

$usersId = $_SESSION['userid'];
$stmt = $conn->prepare("SELECT message, created_at FROM mood_messages WHERE usersId = ? ORDER BY created_at DESC");
$stmt->bind_param("i", $usersId);
$stmt->execute();
$result = $stmt->get_result();
$messages = [];
while ($row = $result->fetch_assoc()) {
    $messages[] = $row;
}
$stmt->close();
$conn->close();

echo json_encode($messages);
?>
