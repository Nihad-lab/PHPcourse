<form action="index.php" method="post">
    <label>Enter a number to count up to:</label><br>
    <input type="text" name="counter"><br>
    <input type="submit" value="Start">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counter = $_POST['counter'];
    for ($i = 1; $i <= $counter; $i++) {
        echo $i . "<br>";
    }
}
?>

