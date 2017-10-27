<?php
include_once 'dbh.inc.php';
session_start();
date_default_timezone_set('Africa/Cairo');
if(isset($_POST['edit-submit'])& isset($_SESSION['id'])) {

    //get the data from the front
    $first_name = mysqli_real_escape_string(Database::conn(), $_POST['first_name']);
    $last_name = mysqli_real_escape_string(Database::conn(), $_POST['last_name']);
    $password = mysqli_real_escape_string(Database::conn(), $_POST['password']);
    $email = mysqli_real_escape_string(Database::conn(), $_POST['email']);
    $country_name = mysqli_real_escape_string(Database::conn(), $_POST['country_name']);
    $address = mysqli_real_escape_string(Database::conn(), $_POST['address']);
    $phone_number = mysqli_real_escape_string(Database::conn(), $_POST['phone_number']);
    $password_conformation = mysqli_real_escape_string(Database::conn(), $_POST['password_conformation']);
    //check if there's invalid data
    if ((!preg_match("/^[a-zA-Z]*$/", $first_name) & !empty($first_name)) ||
        (!preg_match("/^[a-zA-Z]*$/", $last_name) & !empty($last_name)) ||
        (!is_numeric($phone_number) & !empty($phone_number)) ||
        (!filter_var($email, FILTER_VALIDATE_EMAIL) & !empty($email)) ||
        (!preg_match("/^[a-zA-Z]*$/", $country_name) & !empty($country_name)) ||
        (!preg_match("/^[a-zA-Z0-9]*$/", $password) & !empty($password))
    ) {
        header("Location: ../profile.php?profile=invalid");
        exit();
    } else {
        if (!Database::check_email_existance($_SESSION['email'])) {
            header("Location: ../profile.php?profile=unknown");
            exit();
        } else {
                if (!Database::checkPassword_user($password_conformation)) {header("Location: ../profile.php?profile=mismatch");exit();}
                else{
                    if (Database::check_email_existance_user($email)&!empty($email)) {header("Location: ../profile.php?profile=exists");exit();}
                    else {
                        Database::update_user($first_name,$last_name,$email,$password,$address,$country_name,$phone_number);
                        header("Location: ../profile.php?update=success");exit();
                    }
                }
        }
    }
}
else {header("Location: ../profile.php?profile=error");exit();}