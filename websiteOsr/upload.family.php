<?php
include_once 'dbh.inc.php';
session_start();
if(isset($_POST['profileimage-submit'])& isset($_SESSION['id'])){
    $file=$_FILES['image'];
    $file_name=$file['name'];
    $file_tmp_name=$file['tmp_name'];
    $file_size=$file['size'];
    $file_error=$file['error'];
    $file_type=$file['type'];
    $ext=explode('.',$file_name);
    $file_ext=strtolower(end($ext));
    $allowed=array('jpg','jpeg','png');
    if(in_array($file_ext,$allowed)){
        if($file_error==0){
            if($file_size>1000000000){
                header("Location: ../profile.php?upload=size");
                exit();
            }
            else{
                $file_new_name=uniqid('',true);
                Database::upload_photo_family($file_tmp_name,$file_new_name);
                header("Location: ../profile.php?upload=success");
                exit();
            }
        }
        else {
            header("Location: ../profile.php?upload=uploading");
            exit();
        }

    }else {header("Location: ../profile.php?upload=type");exit();}
}
else {header("Location: ../index.php?upload=error");exit();}