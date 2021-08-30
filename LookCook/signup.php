<?php 
    include_once 'header.php';
?>

    <main>
        <div class="form-container">
            <div class="form-box">
                <form action="include/signup.inc.php" method="post">
                    <h1>Sign Up</h1>
                        <label for="">E-mail</label>
                        <input type="email" name="email" id="">
                        <label for="">Password</label>
                        <input type="password" name="password" id="">
                        <input type="submit" name="signup-submit" value="Sign Up" class="signSubmit">
                    <?php
                        if(isset($_GET["error"])){
                            if($_GET["error"] == "emptyinput"){
                                echo"<p>Fill in all the fields!</p>";
                            }
                            elseif($_GET["error"] == "invalidemail"){
                                echo"<p>Choose a proper email!</p>";
                            }
                            elseif($_GET["error"] == "emailtaken"){
                                echo"<p>Email already taken!</p>";
                            }
                            elseif($_GET["error"] == "stmtfailed"){
                                echo"<p>Something went wrong!</p>";
                            }
                            elseif($_GET["error"] == "stmtfailed2"){
                                echo"<p>Something went wrong!!!</p>";
                            }
                            elseif($_GET["error"] == "none"){
                                alert("You've Signed Up!");
                            }
                        }
                    ?>
                </form>
            </div>
            <div class="sign">
                <p>Already have an account? <a href="login.php">Log In</a></p>
            </div>
        </div>
    </main>
</body>
</html>