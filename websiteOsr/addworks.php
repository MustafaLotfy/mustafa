<?php
session_start();
include_once  './Database.php';

include_once './FamilyController.php';



 
 $familyId=$_SESSION['id'];
if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
        $video = $_FILES['video']['name'];

    $target = "products/images/" . basename($_FILES['image']['name']);
    $target2= "products/videos/" . basename($_FILES['video']['name']);
    $check1= move_uploaded_file($_FILES['video']['tmp_name'], $target2);
    $check2=move_uploaded_file($_FILES['image']['tmp_name'], $target);
    if ( $check1||$check2) {
        echo 'succes';
        $name=$_POST['name'];
        $description= $_POST['description'];
        $price =$_POST['price'];
       
        FamilyController::addProduct($name, $description, $price, $image, $video, $familyId);
    } else {
        echo 'fail you must enter video or image ';
    }
}
?>
<form method="post" action="myworks.php" enctype="multipart/form-data">
    <input type="file" name="image"/>
    <input type="file" name="video" />

    <br/>
    <input type="text" name="name" placeholder="enter product name"/>
    <textarea name="description" rows="4" placeholder="descripe the product"></textarea>
    <br/>

    <input type="text" name="price" placeholder="enter price"/>
    <br/>

    <input type="submit" value="post" name="upload"/>
    <br/>

</form>

<?php
/*$products =  FamilyController::selectProducts($familyId);
$product = new Product();
for ($i = 0; $i < count($products); $i++) {
    
    $product = $products[$i];
    $id=$product->getId() ;
    //echo $id;
    ?><a href="ProductDetails.php/?id=<?php echo $id ?>"><?php echo $product->getName(); ?></a><br/>

    <?php
     
}*/

