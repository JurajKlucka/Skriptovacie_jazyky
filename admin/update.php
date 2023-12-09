<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "po-2023-2024");

include "menu.php";

//moj kod - pokus
//include_once "lib/DB.php";
//use PO\Lib\DB;

//$db = new DB("localhost", 3306, "root", "", "po-2023-2024");

$zoznam = $db->getZoznam();


//foreach ($zoznam as $zoznamKey => $zoznamData) {
   foreach ($zoznam as $zoznamKey => $menuItem) {

       /*echo "id: " .  $zoznamData["id"] . "<br>";

       echo "Category: " . $zoznamData["Category"] . "<br>";
       echo "Price: " . $zoznamData["Price"] . "<br>";
       echo "Address: " . $zoznamData["Address"] . "<br>";
       echo "Bedrooms: " . $zoznamData["Bedrooms"] . "<br>";
       echo "Bathrooms: " . $zoznamData["Bathrooms"] . "<br>";
       echo "Area: " . $zoznamData["Area"] . "<br>";
       echo "Floor: " . $zoznamData["Floor"] . "<br>";
       echo "Parking: " . $zoznamData["Parking"] . "<br>"; 

       echo "Image: " . $zoznamData["Image"] . "<br>"; 

       echo "<br>";*/
       ?>   
        
      
    
    
    


<!--if(!isset($_GET['id'])) {
   header("Location: home.php");
}

$menuItem = $db->getMenuItem($_GET['id']);
?> -->

<br><br>
<form action="update-item.php" method="post">

        
    <input type="text" name="name1" value="<?php echo $menuItem['Category']; ?>" placeholder="Category"><br>
    <input type="text" name="name2" value="<?php echo $menuItem['Price']; ?>" placeholder="Price"><br>
    <input type="text" name="name3" value="<?php echo $menuItem['Address']; ?>" placeholder="Address"><br>
    <input type="text" name="name4" value="<?php echo $menuItem['Bedrooms']; ?>" placeholder="Bedrooms"><br>
    <input type="text" name="name5" value="<?php echo $menuItem['Bathrooms']; ?>" placeholder="Bathrooms"><br>
    <input type="text" name="name6" value="<?php echo $menuItem['Area']; ?>" placeholder="Area"><br>
    <input type="text" name="name7" value="<?php echo $menuItem['Floor']; ?>" placeholder="Floor"><br>
    <input type="text" name="name8" value="<?php echo $menuItem['Parking']; ?>" placeholder="Parking"><br>

    <input type="text" name="url" value="<?php echo $menuItem['Image']; ?>" placeholder="Image url"><br>
    
    <input type="hidden" name="id" value="<?php echo $menuItem['id']; ?>" placeholder="id"><br>
    <input type="submit" name="submit" value="Aktualizovat">
</form>
<?php
        }



        ?>  

