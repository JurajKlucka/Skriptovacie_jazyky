<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "po-2023-2024");

include "zoznam.php";

if(!isset($_GET['id'])) {
    header("Location: home.php");
}

$menuItem = $db->getMenuItem($_GET['id']);
?>
<br><br>
<form action="update-item.php" method="post">
    <input type="text" name="name" value="<?php echo $menuItem['page_name']; ?>" placeholder="Page name"><br>
    <input type="text" name="url" value="<?php echo $menuItem['url']; ?>" placeholder="Page url"><br>
    <input type="hidden" name="id" value="<?php echo $menuItem['id']; ?>">
    <input type="submit" name="submit" value="Aktualizovat">
</form>