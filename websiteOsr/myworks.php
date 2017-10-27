<?php
session_start();
include_once  './Database.php';

include_once './FamilyController.php';

 
 $familyId=$_SESSION['id'];


$products =  FamilyController::selectProducts($familyId);
$product = new Product();
for ($i = 0; $i < count($products); $i++) {
    
    $product = $products[$i];
    $id=$product->getId() ;
    //echo $id;
    ?><a href="ProductDetails.php/?id=<?php echo $id ?>"><?php echo $product->getName(); ?></a><br/>
    <?php echo $product->getPhoto(); ?>

    <?php
     
}

?>