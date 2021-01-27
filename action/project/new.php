<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$number=$_POST['number'];
$city=$_POST['city'];
$ownerid=$_POST['ownerid'];
$data=0;
if(!empty($number)&&!empty($city)&&!empty($ownerid)){

    $result = $db->insertintoproject($number,$city,$ownerid);
    if($result){
    
        $data=1;
    
    
    }

}


echo $data;
die();