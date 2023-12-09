<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login_alt.php");
}

include "menu_alt.php";
?>
<br><br>
<form action="insert-item.php" method="post">
    <input type="text" name="name1" value="" placeholder="Category"><br>
    <input type="text" name="name2" value="" placeholder="Price"><br>
    <input type="text" name="name3" value="" placeholder="Address"><br>
    <input type="text" name="name4" value="" placeholder="Bedrooms"><br>
    <input type="text" name="name5" value="" placeholder="Bathrooms"><br>
    <input type="text" name="name6" value="" placeholder="Area"><br>
    <input type="text" name="name7" value="" placeholder="Floor"><br>
    <input type="text" name="name8" value="" placeholder="Parking"><br>
    <input type="text" name="url" value="" placeholder="Image url"><br>

    <input type="submit" name="submit" value="Vlozit">
</form>