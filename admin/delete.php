<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "po-2023-2024");


//moj kod - pokus
//include_once "lib/DB.php";
//use PO\Lib\DB;

//$db = new DB("localhost", 3306, "root", "", "po-2023-2024");

$zoznam = $db->getZoznam();


foreach ($zoznam as $zoznamKey => $zoznamData) {
  

       echo "id: " .  $zoznamData["id"] . "<br>";

       echo "Category: " . $zoznamData["Category"] . "<br>";
       echo "Price: " . $zoznamData["Price"] . "<br>";
       echo "Address: " . $zoznamData["Address"] . "<br>";
       echo "Bedrooms: " . $zoznamData["Bedrooms"] . "<br>";
       echo "Bathrooms: " . $zoznamData["Bathrooms"] . "<br>";
       echo "Area: " . $zoznamData["Area"] . "<br>";
       echo "Floor: " . $zoznamData["Floor"] . "<br>";
       echo "Parking: " . $zoznamData["Parking"] . "<br>"; 

       echo "Image: " . $zoznamData["Image"] . "<br>"; 

       echo "<br>";
    
     
      
        
        
    }

if(isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $delete = $db->deleteMenuItem($id);

    if($delete) {
        header("Location: home.php?status=3");
    } else {
        header("Location: home.php?status=4");
    }
} else {
    header("Location: home.php"); 
} 