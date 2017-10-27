<?php
session_start();
    echo $_SESSION['id'];

//include 'PersonController.php';

/*if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
     $user=  PersonController::login($email,$pass);
if($user!=null)
{
    $_SESSION['id']=$user->getId();
    ?>
<a href="logout.php">logout</a>
<?php


}
 else {
    echo 'email or pass is incorrect';
    header("Location: login.php");

}
    
}
 else {
       header("Location: login.php");
 
}

*/
