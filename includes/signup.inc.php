<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInput = emptyInputSignup($name, $email, $username, $age, $gender,  $pwd, $pwdRepeat);
    $invalidUid = invalidUid($username);
    $invalidEmail = invalidEmail($email);
    $invalidAge = invalidAge($age);
    $pwdMatch = pwdMatch($pwd, $pwdRepeat);
    $uidExists = uidExists($conn, $username, $email);


    if ($emptyInput !== false) {
        header("Location:../signup.php?error=emptyinput");
        exit();
    }
    if ($invalidUid !== false) {
        header("Location:../signup.php?error=invalidUid");
        exit();
    }
    if ($invalidEmail !== false) {
        header("Location:../signup.php?error=invalidemail");
        exit();
    }
    if ($invalidAge !== false) {
        header("Location:../signup.php?error=invalidage");
        exit();
    }
    if ($pwdMatch !== false) {
        header("Location:../signup.php?error=passwordnotmatch");
        exit();
    }
    if ($uidExists !== false) {
        header("Location:../signup.php?error=usernametaken");
        exit();
    }

    // Profile Picture Upload
    if (!empty($_FILES['profile_pic']['name'])) {
        $target_dir = "../uploads/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true); // Create directory if it doesn't exist
        }

        $file_name = time() . '_' . basename($_FILES["profile_pic"]["name"]);
        $target_file = $target_dir . $file_name;
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ["jpg", "jpeg", "png", "gif"];

        if (!in_array($file_type, $allowed_types)) {
            header("Location:../signup.php?error=invalidfiletype");
            exit();
        }
        if ($_FILES["profile_pic"]["size"] > 5 * 1024 * 1024) {
            header("Location:../signup.php?error=filesize");
            exit();
        }
        if (!move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
            header("Location:../signup.php?error=uploadfailed");
            exit();
        }
    } else {
        $file_name = "default.png"; // Default image
    }

    createUser($conn, $name, $email, $username, $age, $gender, $file_name, $pwd);
}

else {
    header('Location:../login.php');
}