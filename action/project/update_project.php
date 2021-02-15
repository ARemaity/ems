<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();  
$id=$_POST['PID'];    
$number=$_POST['number'];
$city=$_POST['city'];
$phonenumber=$_POST['phonenumber'];
$clientname=$_POST['clientname'];
$data=0;
if(!empty($number)&&!empty($city)&&!empty($phonenumber)&&!empty($clientname)){

    $result = $db->updateproject($id,$number,$city,$clientname,$phonenumber);
    if($result){
    
        $data=1;

    }

}


echo $data;
die();