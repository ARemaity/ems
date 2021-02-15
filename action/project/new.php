<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$number=$_POST['numberinput'];
$city=$_POST['cityinput'];
$phonenumber=$_POST['phonenumberinput'];
$clientname=$_POST['clientnameinput'];
$data=0;
if(!empty($number)&&!empty($city)&&!empty($phonenumber)&&!empty($clientname)){

    $result = $db->insertintoproject($number,$city,$clientname,$phonenumber);
    if($result){
    
        $data=1;
    
      




        











    
    }

}


echo $data;
die();