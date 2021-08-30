<?php 
    include_once 'header.php';
?>

    <main>
        <section class="hero-container">
            <div class="hero-desc">
                <h1>The Ultimate Cooking App</h1>
                <p>Search for Hundreds of Recipes all in one App.</p>
                <form action="">
                    <div class="search">
                    <?php
                        if(isset($_SESSION["userid"])){
                            echo'<input type="text" name="" id="search-input" placeholder="Search for recipes">
                                <span class="material-icons" id="search-btn">
                                    search
                                </span>';
                        }
                        else{
                            echo'<a href="signup.php">Sign In</a>';
                        }
                    ?>
                    </div>
                </form>
            </div>
    
            <div class="hero-img-container">
                <img class="hero-img" src="./images/hero.png" alt="Food Picture">
            </div>
        </section>

        <section class="recipe-container" id="meal">
        </section>

        <section class="meal-details hidden">
            <span class="close material-icons" id="close-btn" onclick="closef()">
                close
            </span>
        </section>
    </main>
</body>

<script src="js/script.js"></script>

</html>

<?php
    if(isset($_POST['log-out'])){
        session_destroy();
        session_start();
        header('location:index.php');
    }
?>