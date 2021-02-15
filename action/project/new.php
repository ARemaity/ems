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
    // if bool type then its false else success inser tion
    if(!is_bool($result)){


        $data=intval($result);
    }

}


echo $data;
die();