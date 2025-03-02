<?php
session_start();
if (!isset($_SESSION["userid"])) {
    header("Location: login.php");
    exit();
}

require "includes/dbh.inc.php";

$userid = $_SESSION["userid"];
$sql = "SELECT usersName, usersEmail, usersUid, usersAge, usersGender, profile_pic FROM users WHERE usersId = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$username = htmlspecialchars($user["usersUid"] ?? "Guest");
$email = htmlspecialchars($user["usersEmail"] ?? "Not provided");
$name = htmlspecialchars($user["usersName"] ?? "Not provided");
$age = htmlspecialchars($user["usersAge"] ?? "Not provided");
$gender = htmlspecialchars($user["usersGender"] ?? "Not specified");
$profile_pic = !empty($user["profile_pic"]) ? htmlspecialchars($user["profile_pic"]) : "../uploads/default.png";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Page</title>
    <link rel="stylesheet" href="assets/css/profile.css">
</head>
<body>

<div class="profile">
    <div class="image">
    <img src="<?php echo $profile_pic; ?>" width="100" alt="Profile Picture">
    </div>
    <div class="includes">
        <h1>Hello, <?php echo $username; ?>!</h1>

        <p><strong>Name:</strong>  <span><?php echo $name; ?></span></p>
        <p><strong>Email:</strong>  <span><?php echo $email; ?></span></p>
        <p><strong>Age:</strong>  <span><?php echo $age; ?></span></p>
        <p><strong>Gender:</strong>  <span><?php echo $gender; ?></span></p>

        <div class="btn">
            <button><a href="profile_edit.php">Edit Profile</a> </button>
            <button><a href="includes/logout.inc.php">Logout</a></button>
        </div>
        <div class="back-btn">
            <button><a href="index.php">Go to Home</a></button>
        </div>

</div>

</body>
</html>
