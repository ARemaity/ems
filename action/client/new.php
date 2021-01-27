<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$name=$_POST['name'];
$phonenumber=$_POST['phonenumber'];
$address=$_POST['address'];
$data=0;
if(!empty($name)&&!empty($phonenumber)&&!empty($address)){

    $result = $db->insertintoclient($_POST['name'],$_POST['address'],$_POST['phonenumber']);
    if($result){
    
        $data=1;
    
    
    }

}


echo $data;
die();