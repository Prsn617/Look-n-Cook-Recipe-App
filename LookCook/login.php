<?php 
    include_once 'header.php';
?>

    <main>
        <div class="form-container">
            <div class="form-box">
                <form action="include/login.inc.php" method="post">
                    <h1>Sign In</h1>
                    <label for="">E-mail</label>
                    <input type="email" name="email" id="">
                    <label for="">Password</label>
                    <input type="password" name="password" id="">
                    <input type="submit" name="login-submit" value="Log In" class="signSubmit">
                    <?php
                        if(isset($_GET["error"])){
                            if($_GET["error"] == "emptyinput"){
                                echo"<p>Fill in all the fields!</p>";
                            }
                            elseif($_GET["error"] == "wronglogin"){
                                echo"<p>Email doesn't exist!</p>";
                            }
                            elseif($_GET["error"] == "wronglogin2"){
                                echo"<p>Invalid Email or Password!</p>";
                            }
                        }
                    ?>
                </form>
            </div>
            <div class="sign">
                <p>New to Look n Cook ? <a href="signup.php">Sign Up</a></p>
            </div>
        </div>
    </main>
</body>
</html>