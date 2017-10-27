<?php
include_once './Database.php';
$id = $_GET['id'];
Database::deleteProduct($id);
                  header("Location: HFamily-product.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

