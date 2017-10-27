<?php
include_once 'Database.php';

class controlRoomController
{

    public static function add_new_admin()
    {
    if (isset($_POST['add-admin-submit']))
    {
        if (isset($_SESSION['priority'])&$_SESSION['priority']>0)
        {
            //get the data from the front
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $country_name = "dsa";
            $date=date();
            $phone_number = $_POST['phone_number'];
            $country_id = $_POST['country_id'];
            if (empty($address)) $address = NULL;

            //check if there's empty fields
            if (empty($first_name) || empty($last_name) || empty($email)
                || empty($password) || empty($phone_number) || empty($country_name) || empty($country_id)
            )
            {
                //echo $first_name.$last_name.$email.$password.$birth_date.$phone_number.$country_name;
                header("Location: HAdmin-Dashboard.php?add=empty");
                exit();
            } //check if there's invalid data
            elseif
            (!preg_match("/^[a-zA-Z]*$/", $first_name) ||
                !preg_match("/^[a-zA-Z]*$/", $last_name) ||
                !is_numeric($phone_number) ||
                !is_numeric($country_id) ||
                !filter_var($email, FILTER_VALIDATE_EMAIL) ||
                !preg_match("/^[a-zA-Z]*$/", $country_name) ||
                !preg_match("/^[a-zA-Z0-9]*$/", $password)
            ){
                header("Location: HAdmin-Dashboard.php?add=invalid");
                exit();
            } else {
                //check if there's similar exists
                if (Database::check_email($email)) {
                    header("Location: HAdmin-Dashboard.php?add=exists");
                    exit();
                } else {
                    //password encryption
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    //inseting data into the table
                    if(Database::insertAdmin($first_name, $last_name, $email, $hashed_password, $phone_number, $country_name, $country_id,$address,$date))
                    {
                        header("Location: HAdmin-Dashboard.php?add=success");
                        exit();
                    }
                    else
                    {
                        header("Location: HAdmin-Dashboard.php?add=error");
                        exit();
                    }
                }
            }
        }
        else {
            header("Location: HAdmin-Dashboard.php?add=auth");
            exit();
        }

    }
}


    public static function remove_admin(){
        if (isset($_POST['remove-admin-submit']))
        {
            if (isset($_SESSION['priority'])&$_SESSION['priority']>0)
            {
                $admin_id=$_POST['admin_id'];
                if(!Database::check_admin($admin_id))
                {
                    header("Location: HAdmin-Dashboard.php?remove=exist");
                    exit();
                }
                else
                {
                    if(Database::remove_person($admin_id))
                    {
                        header("Location: HAdmin-Dashboard.php?remove=success");
                        exit();
                    }
                    else
                    {
                        header("Location: HAdmin-Dashboard.php?remove=error");
                        exit();
                    }
                }
            }
            else
            {
                header("Location: HAdmin-Dashboard.php?remove=auth");
                exit();
            }
        }

    }


    public static function add_new_country(){
        if (isset($_POST['add-country-submit']))
        {
            if (isset($_SESSION['priority'])&$_SESSION['priority']>0)
            {
                $name=$_POST['name'];
                if(Database::check_country($name))
                {
                    header("Location: HAdmin-Dashboard.php?add=exist");
                    exit();
                }
                else
                {
                    if(Database::add_country($name))
                    {
                        header("Location: HAdmin-Dashboard.php?add=success");
                        exit();
                    }
                    else
                    {
                        header("Location: HAdmin-Dashboard.php?add=error");
                        exit();
                    }
                }
            }
            else
            {  //echo $_SESSION['priority'];
                header("Location: HAdmin-Dashboard.php?add=".$_SESSION['priority']);
                exit();
            }
        }


    }


    public static function remove_country(){
        if (isset($_POST['remove-admin-submit']))
        {
            if (isset($_SESSION['priority'])&$_SESSION['priority']>0)
            {
                $country_id=$_POST['country_id'];
                if(!Database::check_country($country_id))
                {
                    header("Location: HAdmin-Dashboard.php?remove=exist");
                    exit();
                }
                else
                {
                    if(Database::remove_country($country_id))
                    {
                        header("Location: HAdmin-Dashboard.php?remove=success");
                        exit();
                    }
                    else
                    {
                        header("Location: HAdmin-Dashboard.php?remove=error");
                        exit();
                    }
                }
            }
            else
            {
                header("Location: HAdmin-Dashboard.php?remove=auth");
                exit();
            }
        }

    }


    public static function get_countries()
    {
        if (isset($_SESSION['priority'])&$_SESSION['priority']>0)
        {
            $data=Database::get_countries_admins();
            return $data;
        }
        else
        {
            header("Location: HAdmin-Dashboard.php?remove=auth");
            exit();
        }
    }


    public static function edit_name(){
        if (isset($_POST['edit-name-submit']))
        {
            if (isset($_SESSION['priority']))
            {
                $country_id=$_POST['country_id'];
                $name=$_POST['name'];
                if(!Database::check_country($country_id))
                {
                    header("Location: HAdmin-Dashboard.php?edit=exist");
                    exit();
                }
                else
                {
                    if(Database::change_country_name($_SESSION['id'],$country_id,$name,$_SESSION['priority']))
                    {
                        header("Location: HAdmin-Dashboard.php?edit=success");
                        exit();
                    }
                    else
                    {
                        header("Location: HAdmin-Dashboard.php?edit=error");
                        exit();
                    }
                }
            }
            else
            {
                header("Location: HAdmin-Dashboard.php?edit=auth");
                exit();
            }
        }

    }


    public static function edit_flag(){
        if (isset($_POST['edit-flag-submit']))
        {
            if (isset($_SESSION['priority']))
            {
                $country_id=$_POST['country_id'];
                $photo=$_POST['photo'];
                if(!Database::check_country($country_id))
                {
                    header("Location: HAdmin-Dashboard.php?edit=exist");
                    exit();
                }
                else
                {
                    if(Database::change_country_flag($_SESSION['id'],$country_id,$photo,$_SESSION['priority']))
                    {
                        header("Location: HAdmin-Dashboard.php?edit=success");
                        exit();
                    }
                    else
                    {
                        header("Location: HAdmin-Dashboard.php?edit=error");
                        exit();
                    }
                }
            }
            else
            {
                header("Location: HAdmin-Dashboard.php?edit=auth");
                exit();
            }
        }


    }


    public static function remove_family(){
        if (isset($_POST['remove-family-submit']))
        {
            if (isset($_SESSION['priority']))
            {
                $family_id=$_POST['family_id'];
                if(!Database::check_family($family_id,$_SESSION['country_id']))
                {
                    header("Location: HAdmin-Dashboard.php?remove=exist");
                    exit();
                }
                else
                {
                    if(Database::remove_person($family_id))
                    {
                        header("Location: HAdmin-Dashboard.php?remove=success");
                        exit();
                    }
                    else
                    {
                        header("Location: HAdmin-Dashboard.php?remove=error");
                        exit();
                    }
                }
            }
            else
            {
                header("Location: HAdmin-Dashboard.php?remove=auth");
                exit();
            }
        }
    }

}