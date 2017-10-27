<?php
include './Database.php';
date_default_timezone_set('Africa/Cairo');
if(isset($_POST['signup-submit'])){

    //get the data from the front
    $first_name=mysqli_real_escape_string(Database::conn(),$_POST['first_name']);
    $last_name=mysqli_real_escape_string(Database::conn(),$_POST['last_name']);
    $password=mysqli_real_escape_string(Database::conn(),$_POST['password']);
    $email=mysqli_real_escape_string(Database::conn(),$_POST['email']);
    $birth_date=mysqli_real_escape_string(Database::conn(),$_POST['birth_date']);
    $date=date('Y-m-d H:i:s');
    $country_name=mysqli_real_escape_string(Database::conn(),$_POST['country_name']);
    $address=mysqli_real_escape_string(Database::conn(),$_POST['address']);
    $phone_number=mysqli_real_escape_string(Database::conn(),$_POST['phone_number']);
    if(empty($address))$address=NULL;

    //check if there's empty fields
    if(empty($first_name)||empty($last_name)||empty($email)
        ||empty($password)||empty($birth_date)||empty($phone_number)||empty($country_name)){
        /*echo $first_name." ".$last_name." ".$email." ".$password." ".$birth_date." ".$phone_number." ".$country_name." ";*/
        header("Location: ../signup.php?signup=empty");
        exit();
    }
    //check if there's invalid data
    elseif(!preg_match("/^[a-zA-Z]*$/",$first_name)||
            !preg_match("/^[a-zA-Z]*$/",$last_name)||
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
            $hashed_password=password_hash($password,PASSWORD_DEFAULT);
            //inseting data into the table
            Database::insertUser($first_name,$last_name,$email,$hashed_password,$phone_number,$address,$birth_date,$date,$country_name);
            header("Location: HSecondEnglish-Home.php");
            exit();
        }
    }

}
else {

    header("Location: ../signup.php?signup=error");
    exit();
}