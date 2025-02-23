<?php
    session_start();
    require "includes/dbh.inc.php";

    if (!isset($_SESSION['userid'])){
        header("Location: login.php");
        exit();
    }

    $userid = $_SESSION['userid'];

    $sql = "SELECT * FROM users WHERE usersId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userid);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (!$user) {
        die("User not found.");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uid = $_POST['uid'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        if(!empty($_FILES['profile_pic']['name'])){
            $dir = "uploads/";
            $file = $dir . basename($_FILES["profile_pic"]["name"]);
            move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $file);
        } else {
            $file = $user["profile_pic"];
        }

        $sql_update = "UPDATE users SET usersUid = ?, usersEmail = ?, usersName = ?, usersAge = ?, usersGender = ?, profile_pic = ? WHERE usersId = ?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param("sssissi", $uid, $email, $username, $age, $gender, $file, $userid);

        if ($stmt_update->execute()) {
            echo "<script>alert('Profile updated successfully!'); window.location='profile.php';</script>";
        } else {
            echo "Error updating profile.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/profile_edit.css">
    <title>Edit Profile</title>
</head>
<body>
<div class="container">
<h2>Edit Profile</h2>
    <form action="profile_edit.php" method="POST" enctype="multipart/form-data">
        <label>Username:</label>
        <input type="text" name="uid" value="<?php echo htmlspecialchars($user['usersUid']); ?>" required>
        
        <label>Name:</label>
        <input type="text" name="username" value="<?php echo htmlspecialchars($user['usersName']); ?>" required>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($user['usersEmail']); ?>" required>

        <label>Age:</label>
        <input type="number" name="age" value="<?php echo htmlspecialchars($user['usersAge']); ?>" required>

        <label>Gender:</label>
        <select name="gender">
            <option value="Male" <?php if ($user['usersGender'] == 'Male') echo 'selected'; ?>>Male</option>
            <option value="Female" <?php if ($user['usersGender'] == 'Female') echo 'selected'; ?>>Female</option>
        </select>

        <div class="image">
            <label>Profile Picture:</label>
            <input type="file" name="profile_pic">
            <img src="<?php echo htmlspecialchars($user['profile_pic']); ?>" width="100" alt="Profile Picture">

        </div>

        <button type="submit">Update Profile</button>
    </form>
</div>

</body>
</html>