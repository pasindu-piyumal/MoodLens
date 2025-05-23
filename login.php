<?php
    include_once 'headerSignupLogin.php';
?>

        <div class="form-box login">
            <form action="includes/login.inc.php" method="POST">
                <h1>Login</h1>
                <div class="input-box">
                    <input name="uid" type="text" placeholder="Username or Email" required>
                    <i class='bx bxs-user' ></i>
                </div>
                <div class="input-box">
                    <input name="pwd" type="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>

                <?php
                if (isset($_GET["error"])){
                if ($_GET["error"] == "emptyinput"){
                    echo '<div class="error">Fill all fields</div>';
                } elseif ($_GET["error"] == "stmtfailed"){
                    echo '<div class="error">Something went wrong</div>';
                } elseif ($_GET["error"] == "wronglogin"){
                    echo '<div class="error">Incorrect Username or Password</div>';
                } 
                }
            
                ?>

                <button name="submit" type="submit">Login</button>

            </form>
        </div>



        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Hello, Welcome to MoodLens!</h1>
                <p>Don't have an account?</p>
                <button class="btn register-btn"><a href="signup.php">Register</a></button>
            </div>
        </div>
    </div>
    
</body>
</html>