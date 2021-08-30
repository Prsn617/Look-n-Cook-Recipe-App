<?php 
    include_once 'header.php';
?>

<main>
    <div class="bmi-container">
        <div class="bmi-form">
            <h3>BMI Calculator</h3>
            <form action="#">
                <label>Height (in cm):</label><input type="text" id="height"><br>
                <label>Weight (in kg): </label><input type="text" id="weight"><br>
                <button onclick="bmicalc()">Go</button><br>
                <label>BMI: </label>
                <label id="bmi"></label>
                <label>BMI Categories: </label>
                <label id="bmic"></label>
            </form>
        </div>
</main>

</body>
<script src="js/bmi.js"></script>

</html>