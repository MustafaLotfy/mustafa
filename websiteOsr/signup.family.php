<?php
include './Database.php';
date_default_timezone_set('Africa/Cairo');
if(isset($_POST['signup-submit'])){

    //get the data from the front
    $name=mysqli_real_escape_string(Database::conn(),$_POST['name']);
    $password=mysqli_real_escape_string(Database::conn(),$_POST['password']);
    $email=mysqli_real_escape_string(Database::conn(),$_POST['email']);
    $starting_date=mysqli_real_escape_string(Database::conn(),$_POST['starting_date']);
    $date=date('Y-m-d H:i:s');
    $country_name=mysqli_real_escape_string(Database::conn(),$_POST['country_name']);
    $address=mysqli_real_escape_string(Database::conn(),$_POST['address']);
    $phone_number=mysqli_real_escape_string(Database::conn(),$_POST['phone_number']);
    if(empty($address))$address=NULL;

    //check if there's empty fields
    if(empty($name)||empty($email)
        ||empty($password)||empty($starting_date)||empty($phone_number)||empty($country_name)){
        header("Location: ../signup.php?signup=empty");
        exit();
    }
    //check if there's invalid data
    elseif(!preg_match("/^[a-zA-Z]*$/",$name)||
        !is_numeric($phone_number)||
        !filter_var($email,FILTER_VALIDATE_EMAIL)||
        !preg_match("/^[a-zA-Z]*$/",$country_name)||
        !preg_match("/^[a-zA-Z0-9]*$/",$password)){
        header("Location: ../signup.php?signup=invalid");
        exit();}
    else {
        //check if there's similar exists
        if(Database::check_email_existance($email)){header("Location: ../signup.php?signup=exists");exit();}
        else {
            //password encryption
            //$hashed_password=password_hash($password,PASSWORD_DEFAULT);
            //inseting data into the table
            Database::insertFamily($name,$email,$password,$phone_number,$address,$starting_date,$date,$country_name);
            header("Location: HSignin");
            exit();
        }
    }

}
else {

    header("Location: ../signup.php?signup=error");
    exit();
}