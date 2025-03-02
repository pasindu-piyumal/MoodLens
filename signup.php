<?php
    include_once 'headerSignupLogin.php';
?>

<div class="form-box register">
            <form action="includes/signup.inc.php" method="POST" enctype="multipart/form-data">
                <h1>REGISTER</h1>
                <div class="input-box">
                    <input name="name" type="text" placeholder="Name" required>
                    <i class='bx bxs-user' ></i>
                </div>
                <div class="input-box">
                    <input name="email" type="text" placeholder="Email" required>
                    <i class='bx bxs-envelope-open'></i>
                </div>
                <div class="input-box">
                    <input name="uid" type="text" placeholder="Username" required>
                    <i class='bx bxs-user' ></i>
                </div>
                <div class="input-box">
                    <input name="age" type="number" placeholder="Age" required>
                    <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/age.png" alt="age"/>
                </div>
                <div class="input-box">
                    <select name="gender" required>
                        <option value="" disabled selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <img width="25" height="30" src="https://img.icons8.com/cotton/64/gender.png" alt="gender"/>
                </div>
                <label>Profile Picture:</label>
                <input type="file" name="profile_pic">
                <div class="input-box">
                    <input name="pwd" type="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <div class="input-box">
                    <input name="pwdrepeat" type="password" placeholder="Confirm Password" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>

                <?php
                if (isset($_GET["error"])){
                if ($_GET["error"] == "emptyinput"){
                    echo '<div class="error">Fill all fields</div>';
                } elseif ($_GET["error"] == "invalidUid"){
                    echo '<div class="error">Invalid Username!</div>';
                } elseif ($_GET["error"] == "invalidemail"){
                    echo '<div class="error">Invalid Email!</div>';
                } elseif ($_GET["error"] == "invalidage"){
                    echo '<div class="error">Invalid Age!</div>';
                } elseif ($_GET["error"] == "passwordnotmatch"){
                    echo '<div class="error">Passwords do not match!</div>';
                } elseif ($_GET["error"] == "stmtfailed"){
                    echo '<div class="error">Something went wrong</div>';
                } elseif ($_GET["error"] == "usernametaken"){
                    echo '<div class="error">Username or Email already exist</div>';
                } elseif ($_GET["error"] == "none"){
                    echo '<div class="error">Acount Created</div>';
                } else if ($_GET['error'] == 'invalidfiletype') {
                    echo "<p>Invalid file type. Only JPG, PNG, and GIF images are allowed.</p>";
                } else if ($_GET['error'] == 'filesize') {
                    echo "<p>File is too large. Please upload a file smaller than 5MB.</p>";
                } else if ($_GET['error'] == 'uploadfailed') {
                    echo "<p>There was an error uploading your profile picture. Please try again.</p>";
                }
                }
                ?>

                <button name="submit" type="submit">Sign Up</button>
        
            </form>

            </div>

                <div class="toggle-box">
                    <div class="toggle-panel toggle-left">
                        <h1>Welcome Back!</h1>
                        <p>Already have an account?</p>
                        <button class="btn login-btn"><a href="login.php">Login</a></button>
                    </div>
                </div>
            </div>
</div>
</body>
</html>