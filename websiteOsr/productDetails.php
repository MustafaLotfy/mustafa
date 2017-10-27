<?php
include './Database.php';
$id =$_GET['id'];
$product =  Database::selectProduct($id);
echo $product->getDate();?><br/>
<?php echo $product->getName();?><br/>
<?php echo $product->getInformation();?><br/>
<?php echo $product->getPrice();?><br/>
<?php echo $product->getPhoto();?><br/>
<?php echo $product->getVideo();?><br/>



