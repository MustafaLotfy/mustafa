<?php
session_start();
include_once './Database.php';
$families =Database::selectFavouriteFamilies($_SESSION['id']);
//echo count($families);
$family = new Familiy();
for ($i = 0; $i < count($families); $i++) {
    
    $family = $families[$i];
    $id=$family->getId() ;
    
    //echo $id;
?><a href="FamilyDetails.php/?id=<?php echo $id ?>"><?php echo $family->getName(); ?></a><br/>

<?php

}?>
 


