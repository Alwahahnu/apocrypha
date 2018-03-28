<?php

require_once( explode("wp-content", __FILE__)[0] . "wp-load.php" );
include_once (plugin_dir_path(__FILE__) . 'parameters.php');

if(isset($_POST["info"])){
$info=$_POST["info"];
$info();
}


function register_item(){
    
    
    global $wpdb;
    $name=$_POST["name"];
    $firstNum=$_POST["firstNum"];
    $lastNum=$_POST["lastNum"];
    $type=$_POST["type"];
    $category=$_POST["category"];
    $author=$_POST["author"];
    $user="1";
    
    error_log('le user est '.$user." le nom  est ".$name." la category est ".$category." l'author est ".$author);
          
    
    $itemName = $wpdb->prepare("INSERT INTO `name` (`id`,`name`) "
            . "values (%d,%d)", 
            $name);
    
    $wpdb->query($itemName);
    
    $select = $wpdb->prepare("SELECT `id` FROM `name` WHERE 'name'='%d'", $name);
        $result = $wpdb->get_results($select);
        
        error_log($result);
//    
//    $sql = $wpdb->prepare("INSERT INTO `item` (`name`, `numero`, `type`, `category`, `author`, `editor`, `user`) "
//            . "values (%d, %d, %d, %d, %d, %d, %d)", 
//            $result, $numero, $type, $category, $author, $editor,$user);
//
//    $wpdb->query($sql);
    
}

