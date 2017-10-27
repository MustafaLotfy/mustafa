<?php
include_once 'Database.php';
class editController
{
    public static function edit_user(){
        if(isset($_POST['edit-submit'])) {
            if (isset($_SESSION['id'])) {

                //get the data from the front
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone_number = $_POST['phone_number'];
                $password_conformation =$_POST['password_conformation'];
                //check if there's invalid data
                if ((!preg_match("/^[a-zA-Z]*$/", $first_name) & !empty($first_name)) ||
                    (!preg_match("/^[a-zA-Z]*$/", $last_name) & !empty($last_name)) ||
                    (!filter_var($email, FILTER_VALIDATE_EMAIL) & !empty($email)) ||
                    (!is_numeric($phone_number) & !empty($phone_number)) ||
                    (!preg_match("/^[a-zA-Z0-9]*$/", $password) & !empty($password)))
                {
                    header("Location: HProfileNew.php?profile=invalid");
                    exit();
                }
                else {
                    if (!Database::check_id($_SESSION['id'])) {
                        header("Location: HProfileNew.php?profile=unknown");
                        exit();
                    }
                    else
                        {
                            $old_password=Database::get_password($_SESSION['id']);

                        if (!password_verify($password_conformation, $old_password))
                        {
                            header("Location: HProfileNew.php?profile=mismatch");
                            exit();
                        }
                        else
                            {
                            if (Database::check_email_id($email,$_SESSION['id']) & !empty($email))
                            {
                                header("Location: HProfileNew.php?profile=exists");
                                exit();
                            }
                            else
                            {

                                if (!empty($email))
                                {
                                   Database::editEmail($_SESSION['id'],$email);
                                }

                                if (!empty($password))
                                {
                                    $password=password_hash($password,PASSWORD_DEFAULT);
                                    Database::editPassword($_SESSION['id'],$password);
                                }

                                if (!empty($address)) {
                                    Database::editAddress($_SESSION['id'],$address);
                                }

                                if (!empty($phone_number))
                                {
                                    Database::editPhoneNumber($_SESSION['id'],$phone_number);
                                }
                                if (!empty($first_name))
                                {
                                    Database::editFirst_U($_SESSION['id'],$first_name);
                                }
                                if (!empty($last_name))
                                {
                                    Database::editLast_U($_SESSION['id'],$last_name);
                                }
                                header("Location: HProfileNew.php?update=success");
                                exit();
                            }

                        }
                    }
                }
            }
        }
    }


    public static function edit_Admin(){
        if(isset($_POST['edit-admin-submit'])) {
            if (isset($_SESSION['id'])) {

                //get the data from the front
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone_number = $_POST['phone_number'];
                $password_conformation =$_POST['password_conformation'];
                //check if there's invalid data
                if ((!preg_match("/^[a-zA-Z]*$/", $first_name) & !empty($first_name)) ||
                    (!preg_match("/^[a-zA-Z]*$/", $last_name) & !empty($last_name)) ||
                    (!filter_var($email, FILTER_VALIDATE_EMAIL) & !empty($email)) ||
                    (!is_numeric($phone_number) & !empty($phone_number)) ||
                    (!preg_match("/^[a-zA-Z0-9]*$/", $password) & !empty($password)))
                {
                    header("Location: HProfileNew.php?profile=invalid");
                    exit();
                }
                else {
                    if (!Database::check_id($_SESSION['id'])) {
                        header("Location: HProfileNew.php?profile=unknown");
                        exit();
                    }
                    else
                    {
                        $old_password=Database::get_password($_SESSION['id']);

                        if (!password_verify($password_conformation, $old_password))
                        {
                            header("Location: HProfileNew.php?profile=mismatch");
                            exit();
                        }
                        else
                        {
                            if (Database::check_email_id($email,$_SESSION['id']) & !empty($email))
                            {
                                header("Location: HProfileNew.php?profile=exists");
                                exit();
                            }
                            else
                            {

                                if (!empty($email))
                                {
                                    Database::editEmail($_SESSION['id'],$email);
                                }

                                if (!empty($password))
                                {
                                    $password=password_hash($password,PASSWORD_DEFAULT);
                                    Database::editPassword($_SESSION['id'],$password);
                                }

                                if (!empty($address)) {
                                    Database::editAddress($_SESSION['id'],$address);
                                }

                                if (!empty($phone_number))
                                {
                                    Database::editPhoneNumber($_SESSION['id'],$phone_number);
                                }
                                if (!empty($first_name))
                                {
                                    Database::editFirst_A($_SESSION['id'],$first_name);
                                }
                                if (!empty($last_name))
                                {
                                    Database::editLast_A($_SESSION['id'],$last_name);
                                }
                                header("Location: HProfileNew.php?update=success");
                                exit();
                            }

                        }
                    }
                }
            }
        }
    }


    public static function edit_family(){
        if(isset($_POST['edit-family-submit'])) {
            if (isset($_SESSION['id'])) {

                //get the data from the front
                $name = $_POST['name'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone_number = $_POST['phone_number'];
                $password_conformation =$_POST['password_conformation'];
                //check if there's invalid data
                if ((!preg_match("/^[a-zA-Z]*$/", $name) & !empty($name)) ||
                    (!filter_var($email, FILTER_VALIDATE_EMAIL) & !empty($email)) ||
                    (!is_numeric($phone_number) & !empty($phone_number)) ||
                    (!preg_match("/^[a-zA-Z0-9]*$/", $password) & !empty($password)))
                {
                    header("Location: HProfileNew.php?profile=invalid");
                    exit();
                }
                else {
                    if (!Database::check_id($_SESSION['id'])) {
                        header("Location: HProfileNew.php?profile=unknown");
                        exit();
                    }
                    else
                    {
                        $old_password=Database::get_password($_SESSION['id']);

                        if (!password_verify($password_conformation, $old_password))
                        {
                            header("Location: HProfileNew.php?profile=mismatch");
                            exit();
                        }
                        else
                        {
                            if (Database::check_email_id($email,$_SESSION['id']) & !empty($email))
                            {
                                header("Location: HProfileNew.php?profile=exists");
                                exit();
                            }
                            else
                            {

                                if (!empty($email))
                                {
                                    Database::editEmail($_SESSION['id'],$email);
                                }

                                if (!empty($password))
                                {
                                    $password=password_hash($password,PASSWORD_DEFAULT);
                                    Database::editPassword($_SESSION['id'],$password);
                                }

                                if (!empty($address)) {
                                    Database::editAddress($_SESSION['id'],$address);
                                }

                                if (!empty($phone_number))
                                {
                                    Database::editPhoneNumber($_SESSION['id'],$phone_number);
                                }
                                if (!empty($name))
                                {
                                    Database::editName($_SESSION['id'],$name);
                                }

                                header("Location: HProfileNew.php?update=success");
                                exit();
                            }

                        }
                    }
                }
            }
        }
    }


    public static function update_profile_picture(){
        if(isset($_POST['upload-submit']))
        {
            if(isset($_SESSION['id'])){
            $file=$_FILES['image'];
            $file_name=$file['name'];
            $file_tmp_name=$file['tmp_name'];
            $file_size=$file['size'];
            $file_error=$file['error'];
            $ext=explode('.',$file_name);
            $file_ext=strtolower(end($ext));
            $allowed=array('jpg','jpeg','png');
            if(in_array($file_ext,$allowed)){
                if($file_error==0)
                {
                    if($file_size>50000000)
                    {
                        header("Location: HProfileNew.php?upload=size");
                        exit();
                    }
                    else
                    {
                        $file_new_name=uniqid('',true).$file_ext;
                        move_uploaded_file($file_tmp_name,'../images/'.$file_new_name);
                        if($_SESSION['photo']!="0.jpg")unlink('../images/'.$_SESSION['photo']);
                        $_SESSION['photo']=$file_new_name;
                        Database::update_profile_picture($_SESSION['id'],$file_new_name);
                        header("Location: HProfileNew.php?upload=success");
                        exit();
                    }
                }
                else
                {
                    header("Location: HProfileNew.php?upload=uploading");
                    exit();
                }

            }
            else
                {
                    header("Location: HProfileNew.php?upload=type");
                    exit();
                }
            }
            else
                {
                header("Location: ../index.php?upload=logged");
                exit();
                }
        }
    }
    
        public static function selectData()
    {
        if(isset($_SESSION['id'])&isset($_SESSION['type']))
        {
            switch ($_SESSION['type']) {
                case 1:
                    return Database::profile_admin($_SESSION['id']);
                    break;
                case 2:
                    return Database::profile_user($_SESSION['id']);
                    break;
                case 3:
                    return Database::profile_family($_SESSION['id']);
                    break;
                default:
                    echo $_SESSION['id'];
                    return null;
                    
            }
        }
        else
        {
        header("Location: HProfileNew-Family.php?add=logged");
        exit();
        }
    }
}