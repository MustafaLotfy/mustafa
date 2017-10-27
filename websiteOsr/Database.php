<?php
include_once  'User.php';
include_once  './Admin.php';
include_once  './Familiy.php';
include_once  './Product.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author mohamed
 */
class  Database {

    public static function connect()
    {
    try {
    $dsn='mysql:host=localhost;dbname=osarmontja';
     $username='root';
     $password='';
        $options=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',);
         $con = new PDO($dsn, $username, $password, $options);
} catch (Exception $exc) {

    }
    return $con;
}

public static function selectProducts ($id) 
{
    $products = array();
    try {
        $con= Database::connect();
    $query=$con->prepare("SELECT id, name, price, information, date, photo, video FROM products WHERE family_id = '$id'");
    $query->execute();
    
    //$query->execute(array($email,$pass));
    } catch (Exception $ex) {
            echo $exc->getTraceAsString();

    }
    if($query->rowCount()>0)
    {
       while($result = $query->fetch()){
            $product  = new Product();
           
       $product->setId($result['id']) ;
       $product->setName($result['name']);
       $product->setPrice($result['price']);
       $product->setDate($result['date']);
       $product->setPhoto($result['photo']);
           
       array_push($products, $product);
}

return $products;

    }
 else {
    return NULL;    
    }
    

}
public static function insertProduct($name,$description,$price,$photo,$video,$id,$date)
{
   
            $con= Database::connect();
                $query=$con->prepare("INSERT INTO `products` (`name`, `price`, `information`, `date`, `photo`, `video`, `family_id`) VALUES ('$name', '$price', '$description','$date', '$photo', '$video', '$id')");


                $result=$query->execute();
                echo $result;
}







public static function selectProduct($id)
{
     
    $product = new Product();
    try {
        $con= Database::connect();
    $query=$con->prepare("SELECT id, name, price, information, date, photo, video FROM products WHERE id = '$id'");
    $query->execute();
    
    //$query->execute(array($email,$pass));
    } catch (Exception $ex) {
            echo $exc->getTraceAsString();

    }
    if($query->rowCount()>0)
    {
while($result = $query->fetch()){
       $product->setId($result['id']) ;
       $product->setName($result['name']);
       $product->setPrice($result['price']);
       $product->setInformation($result['information']);
       $product->setDate($result['date']);
       $product->setPhoto($result['photo']);
       $product->setVideo($result['video']);


}
return $product;

    }
 else {
    return NULL;    
    }
}
public static function selectEmail($email)
{
 $sql_email="select email from person where email='$email';";
 $result_email=mysqli_query(self::conn(),$sql_email);
  $result_email_number=mysqli_num_rows($result_email);
  
  return( $result_email_number>0);
}
/////////////bahi/////////////////////////////////
/////////////bahi/////////////////////////////////
    public static function conn()
    {
         $conn=mysqli_connect("localhost","root","","osarmontja");
        if(!$conn){
            die("could not connect: ".mysqli_connect_error());
        }else{
            mysqli_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $conn);
        }
        return $conn;
    }


    public static function insertAdmin($first_name,$last_name,$email,$password,$phone_number,$country_name,$country_id,$address,$date)
{

    $conn=Database::conn();
    $stmt=$conn->prepare("insert into persons (email,password,phone_number,address,registeration_date) VALUES (?,?,?,?,?)");
    $stmt2=$conn->prepare ("insert into admins (id,first_name,last_name,country_name,country_id) VALUES (LAST_INSERT_ID(),?,?,?,?)");
    $stmt->bind_param("sssss",$email,$password,$phone_number,$address,$date);
    $stmt2->bind_param("ssss",$first_name,$last_name,$country_name,$country_id);
    $stmt->execute();
    if($stmt->affected_rows>0)
    {
        $stmt2->execute();
        if($stmt2->affected_rows>0)return true;
        else
        {
            $sql="delete from persons where id=LAST_INSERT_ID()";
            mysqli_query($conn,$sql);
            return false;
        }
    }
    else return false;

}


    public static function insertUser($first_name,$last_name,$email,$password,$phone_number,$address,$birth_date,$date,$country_name)
{
    $conn=Database::conn();
    $stmt=$conn->prepare("insert into persons (email,password,phone_number,address,registeration_date) VALUES (?,?,?,?,?)");
    $stmt2=$conn->prepare ("insert into users (id,first_name,last_name,birth_date,country_name) VALUES (LAST_INSERT_ID(),?,?,?,?)");
    $stmt->bind_param("sssss",$email,$password,$phone_number,$address,$date);
    $stmt2->bind_param("ssss",$first_name,$last_name,$birth_date,$country_name);
    $stmt->execute();
    if($stmt->affected_rows>0)
    {
        $stmt2->execute();
        if($stmt2->affected_rows>0)return true;
        else
        {
            $sql="delete from persons where id=LAST_INSERT_ID()";
            mysqli_query($conn,$sql);
            return false;
        }
    }
    else return false;
}


    public static function insertFamily($name,$email,$password,$phone_number,$address,$starting_date,$date,$country_id)
{
    $conn=Database::conn();
    $stmt=$conn->prepare("insert into persons (email,password,phone_number,address,registeration_date) VALUES (?,?,?,?,?)");
    $stmt2=$conn->prepare ("insert into families (id,name,starting_date,country_id) VALUES (LAST_INSERT_ID(),?,?,?)");
    $stmt->bind_param("sssss",$email,$password,$phone_number,$address,$date);
    $stmt2->bind_param("sss",$name,$starting_date,$country_id);
    $stmt->execute();
    if($stmt->affected_rows>0)
    {
        $stmt2->execute();
        if($stmt2->affected_rows>0)return true;
        else
        {
            $sql="delete from persons where id=LAST_INSERT_ID()";
            mysqli_query($conn,$sql);
            return false;
        }
    }
    else return false;

}


    public  static function check_email($email){
        $conn=Database::conn();
        $stmt=$conn->prepare("select email from persons where email= ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        return ($stmt->num_rows > 0);
    }


    public static function check_id($id){
        $conn=Database::conn();
        $stmt=$conn->prepare("select id from persons where id= ?");
        $stmt->bind_param("s",$id);
        $stmt->execute();
        return ($stmt->num_rows > 0);
    }


    public static function get_password($id)
    {
        $conn=Database::conn();
        $stmt=$conn->prepare("select password from persons where id= ?");
        $stmt->bind_param("s",$id);
        $stmt->execute();
        $result = $stmt->get_result();
        $assoc = $result->fetch_assoc();
        return $assoc['password'];
    }


    public  static function check_email_id($email,$id){
        $conn=Database::conn();
        $stmt=$conn->prepare("select email from persons where email= ? and id !=?");
        $stmt->bind_param("ss",$email,$id);
        $stmt->execute();
        return ($stmt->num_rows > 0);
    }


    public static function editEmail($id,$email)
    {
        $conn=Database::conn();
        $stmt=$conn->prepare("update persons set email= ? where id= ?");
        $stmt->bind_param("ss",$email,$id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function editPassword($id,$password)
    {
        $conn=Database::conn();
        $stmt=$conn->prepare("update persons set password= ? where id= ?");
        $stmt->bind_param("ss",$password,$id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function editPhoneNumber($id,$phone_number)
    {
        $conn=Database::conn();
        $stmt=$conn->prepare("update persons set phone_number= ? where id= ?");
        $stmt->bind_param("ss",$phone_number,$id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function editAddress($id,$address)
    {
        $conn=Database::conn();
        $stmt=$conn->prepare("update persons set address= ? where id= ?");
        $stmt->bind_param("ss",$address,$id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function editName($id,$name)
    {
        $conn=Database::conn();
        $stmt=$conn->prepare("update families set name= ? where id= ?");
        $stmt->bind_param("ss",$name,$id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function editFirst_U($id,$first_name)
    {
        $conn=Database::conn();
        $stmt=$conn->prepare("update users set first_name= ? where id= ?");
        $stmt->bind_param("ss",$first_name,$id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function editLast_U($id,$last_name)
    {
        $conn=Database::conn();
        $stmt=$conn->prepare("update users set last_name= ? where id= ?");
        $stmt->bind_param("ss",$last_name,$id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function editFirst_A($id,$first_name)
    {
        $conn=Database::conn();
        $stmt=$conn->prepare("update admins set first_name= ? where id= ?");
        $stmt->bind_param("ss",$first_name,$id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function editLast_A($id,$last_name)
    {
        $conn=Database::conn();
        $stmt=$conn->prepare("update admins set last_name= ? where id= ?");
        $stmt->bind_param("ss",$last_name,$id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function update_profile_picture($id,$photo){
        $conn=Database::conn();
        $stmt=$conn->prepare("update persons set photo= ? where id= ?");
        $stmt->bind_param("ss",$photo,$id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function check_country($name){
        $conn=Database::conn();
        $stmt=$conn->prepare("select id from countries where name= ?");
        $stmt->bind_param("s",$name);
        $stmt->execute();
        return ($stmt->num_rows > 0);
    }


    public static function add_country($name){
        $conn=Database::conn();
        $stmt=$conn->prepare("insert into countries (name) values (?)");
        $stmt->bind_param("s",$name);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function get_countries_admins(){
        $conn=Database::conn();
        $sql="select  admins.id,countries.name,countries.flag,persons.email,admins.first_name,admins.last_name,persons.registeration_date,admins.country_id from countries
              right join admins on admins.country_id=countries.id inner join persons on persons.id=admins.id order by countries.id";
        $result=mysqli_query($conn,$sql);
        $data[]=NULL;
        while ($row=mysqli_fetch_assoc($result)) $data[]=$row;
        return $data;
    }


    public static function get_countries(){
        $conn=Database::conn();
        $sql="select  * from countries ";
        $result=mysqli_query($conn,$sql);
        $data[]=NULL;
        while ($row=mysqli_fetch_assoc($result)) $data[]=$row;
        return $data;
    }


    public static function check_auth($id,$country_id,$priority)
    {
        $conn=Database::conn();
        $stmt0=$conn->prepare("select id from admins where (id= ? and country_id = ?) or (id= ? and  priority= ?)");
        $stmt0->bind_param("ssss",$id,$country_id,$id,$priority);
        $stmt0->execute();
        return ($stmt0->num_rows > 0);
    }


    public static function change_country_name($id,$country_id,$name,$priority)
    {
        if(!self::check_auth($id,$country_id,$priority)) return false;
        $conn=Database::conn();
        $stmt=$conn->prepare("update countries set name= ? where id= ?");
        $stmt->bind_param("ss",$name,$country_id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function change_country_flag($id,$country_id,$photo,$priority)
    {
        if(!self::check_auth($id,$country_id,$priority)) return false;
        $conn=Database::conn();
        $stmt=$conn->prepare("update countries set flag= ? where id= ?");
        $stmt->bind_param("ss",$photo,$country_id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function check_admin($id){
        $conn=Database::conn();
        $stmt=$conn->prepare("select id from admins where id= ?");
        $stmt->bind_param("s",$id);
        $stmt->execute();
        return ($stmt->num_rows > 0);
    }


    public static function check_family($id,$country_id){
        $conn=Database::conn();
        $stmt=$conn->prepare("select id from families where id= ? and country_id=?");
        $stmt->bind_param("ss",$id,$country_id);
        $stmt->execute();
        return ($stmt->num_rows > 0);
    }


    public static function remove_person($id){
        $conn=Database::conn();
        $stmt=$conn->prepare("delete  from persons where id= ?");
        $stmt->bind_param("s",$id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function remove_country($id){
        $conn=Database::conn();
        $stmt=$conn->prepare("delete  from countries where id= ?");
        $stmt->bind_param("s",$id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function remove_product($id){
        $conn=Database::conn();
        $stmt=$conn->prepare("delete  from products where id= ?");
        $stmt->bind_param("s",$id);
        $stmt->execute();
        if($stmt->affected_rows<=0)return false;
        else return true;
    }


    public static function get_families($country_id){
        $conn=Database::conn();
        $cid=mysqli_real_escape_string($conn,$country_id);
        $sql="select  families.id,families.name,persons.email,families.starting_date,persons.registeration_date,persons.phone_number,persons.address,persons.photo from families
              inner join persons on persons.id=families.id where families.country_id = '$cid' order by families.id";
        $result=mysqli_query($conn,$sql);
        $data[]=null;
        while ($row=mysqli_fetch_assoc($result)) $data[]=$row;
        return $data;
    }
    
     public static function profile_family($id){
        $conn=Database::conn();
        $id=mysqli_real_escape_string($conn,$id);
        $sql="select  families.id,families.name,persons.email,families.starting_date,persons.registeration_date,persons.phone_number,
              persons.photo,persons.address,persons.photo,families.country_id,countries.flag from families
              inner join persons on persons.id=families.id inner join countries on countries.id=families.country_id  where families.id = '$id'";
        $result=mysqli_query($conn,$sql);
        $data[]=null;
        while ($row=mysqli_fetch_assoc($result)) $data[]=$row;
        return $data;
    }


    public static function profile_user($id){
        $conn=Database::conn();
        $id=mysqli_real_escape_string($conn,$id);
        $sql="select  users.id,users.first_name,users.last_name,users.country_name,persons.email,users.birth_date,persons.registeration_date,persons.phone_number,
              persons.photo,persons.address,persons.photo from users inner join persons on persons.id=users.id where users.id = '$id'";
        $result=mysqli_query($conn,$sql);
        //echo $sql;
        //exit();
        $data[]=null;
        while ($row=mysqli_fetch_assoc($result)) $data[]=$row;
        return $data;
    }


    public static function profile_admin($id){
        $conn=Database::conn();
        $id=mysqli_real_escape_string($conn,$id);
        $sql="select  adminss.id,admins.first_name,persons.email,persons.registeration_date,persons.phone_number,
              persons.photo,persons.address,persons.photo,admins.country_id,countries.flag from admins
              inner join persons on persons.id=admins.id inner join countries on countries.id=admins.country_id  where admins.id = '$id'";
        $result=mysqli_query($conn,$sql);
        $data[]=null;
        while ($row=mysqli_fetch_assoc($result)) $data[]=$row;
        return $data;
    }
    ///////////////////////////////////////////////////////
    public static function selectPerson ($email) 
{
    $person = new Person() ;
    try {
        $con= Database::connect();
    $query=$con->prepare("SELECT id, email, password FROM persons WHERE email = '$email'");
    $query->execute();
    
    //$query->execute(array($email,$pass));
    } catch (Exception $ex) {
            echo $exc->getTraceAsString();

    }
    if($query->rowCount()>0)
    {
while($result = $query->fetch()){
       $person->setId($result['id']) ;
       $person->setEmail($result['email']);
       $person->setPassword($result['password']);
}
return $person;

    }
 else {
    return NULL;    
    }

}
public static function selectUser ($id) 
{
    $user = new User();
    try {
        $con= Database::connect();
    $query=$con->prepare("SELECT id, first_name, last_name FROM users WHERE id='$id'");
    $query->execute();
    
    //$query->execute(array($email,$pass));
    } catch (Exception $ex) {
            echo $exc->getTraceAsString();

    }
    if($query->rowCount()>0)
    {
while($result = $query->fetch()){
       $user->setId($result['id']) ;
       $user->setFirst($result['first_name']);
       $user->setLast($result['last_name']);
}
return $user;

    }
 else {
    return NULL;    
    }

}
public static function selectFamiliy ($id) 
{
    $user = new Familiy();
    try {
        $con= Database::connect();
    $query=$con->prepare("SELECT id, name, country_id FROM families WHERE id='$id'");
    $query->execute();
    
    //$query->execute(array($email,$pass));
    } catch (Exception $ex) {
            echo $exc->getTraceAsString();

    }
    if($query->rowCount()>0)
    {
while($result = $query->fetch()){
       $user->setId($result['id']) ;
       $user->setName($result['name']);
       $user->setCountryId($result['country_id']);
}
return $user;

    }
 else {
    return NULL;    
    }

}
public static function selectAdmin ($id) 
{
    $user = new Admin();
    try {
        $con= Database::connect();
    $query=$con->prepare("SELECT id, first_name, last_name, priority, country_id FROM admins WHERE id='$id'");
    $query->execute();
    
    //$query->execute(array($email,$pass));
    } catch (Exception $ex) {
            echo $exc->getTraceAsString();

    }
    if($query->rowCount()>0)
    {
while($result = $query->fetch()){
       $user->setId($result['id']) ;
       $user->setFirst($result['first_name']);
       $user->setLast($result['last_name']);
       $user->setPriority($result['priority']);
 $user->setCountryId($result['country_id']);


}
return $user;

    }
 else {
    return NULL;    
    }
    

}
public static function selectFamilies ($id) 
{
    $families = array();
    try {
        $con= Database::connect();
    $query=$con->prepare("SELECT id, name FROM families WHERE country_id='$id'");
    $query->execute();
    
    //$query->execute(array($email,$pass));
    } catch (Exception $ex) {
            echo $exc->getTraceAsString();

    }
    if($query->rowCount()>0)
    {

     while($result = $query->fetch()){
            $family  = new Familiy();
           
       $family->setId($result['id']) ;
       $family->setName($result['name']);
      
       array_push($families, $family);
     }

return $families;

    }
 else {
    return NULL;    
    }

}
    //////////////////////////////////////////////////////////////////////////
    public static function insertFollow($idUs,$idFam)
{
    $con= Database::connect();
                $query=$con->prepare("INSERT INTO `follow_family` (`family_id`, `user_id`) VALUES ('$idFam', '$idUs')");


                $result=$query->execute();
                echo $result;
}
public static function selectFollow($idUs,$idFam)
{
    $con= Database::connect();
                $query=$con->prepare("SELECT family_id, user_id FROM follow_family WHERE family_id='$idFam' AND user_id = '$idUs'");


               $query->execute();
                // $query->execute();
    
    //$query->execute(array($email,$pass));
     
    if($query->rowCount()>0)
    {
        return 1;
             
}
 else {
    return 0;    
}
}
public static function deletefollow($idUs,$idFam)
{
    $con= Database::connect();
                $query=$con->prepare("Delete FROM follow_family WHERE family_id='$idFam' AND user_id = '$idUs'");


               $query->execute();
                // $query->execute();
    
    //$query->execute(array($email,$pass));
     
   
}
    
    public static function selectFavouriteFamilies ($id) 
{
    $families = array();
    try {
        $con= Database::connect();
    $query=$con->prepare("SELECT id, name, family_id FROM families, follow_family WHERE follow_family.user_id='$id' And families.id = follow_family.family_id ");
    $query->execute();
    
    //$query->execute(array($email,$pass));
    } catch (Exception $ex) {
            echo $exc->getTraceAsString();

    }
    if($query->rowCount()>0)
    {

     while($result = $query->fetch()){
            $family  = new Familiy();
           
       $family->setId($result['id']) ;
       $family->setName($result['name']);
      
       array_push($families, $family);
     }

return $families;

    }
 else {
    return NULL;    
    }

}
    public static function deleteProduct($idPro)
{
    $con= Database::connect();
                $query=$con->prepare("Delete FROM products WHERE id = '$idPro'");


               $query->execute();
                // $query->execute();
    
    //$query->execute(array($email,$pass));
     
   
}
}
