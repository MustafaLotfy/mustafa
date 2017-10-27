<?php
include_once './Database.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FamilyController
 *
 * @author mohamed
 */
class FamilyController {
    public static function addProduct($name,$description,$price,$photo,$video,$id)
    {
       $date =  date('y/m/d h/m/s');
       Database::insertProduct($name, $description, $price, $photo, $video, $id, $date);
        
}
 public static function selectProducts($id)
    {
       return Database::selectProducts($id);
        
}
    
    
}
