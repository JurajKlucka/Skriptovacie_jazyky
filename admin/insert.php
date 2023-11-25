<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include "zoznam.php";
?>
<br><br>
<form action="insert-item.php" method="post">
    <input type="text" name="name" value="" placeholder="Page name"><br>
    <input type="text" name="url" value="" placeholder="Page url"><br>
    <input type="submit" name="submit" value="Vlozit">
</form>