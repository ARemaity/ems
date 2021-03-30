<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$number=$_POST['numberinput'];
$TID=$_POST['dropdown'];
$city=$_POST['cityinput'];
$phonenumber=$_POST['phonenumberinput'];
$clientname=$_POST['clientnameinput'];
$data=0;
if(!empty($number)&&!empty($city)&&!empty($phonenumber)&&!empty($clientname)){

    $result = $db->insertintoproject($number,$city,$clientname,$phonenumber,$TID);
    // if bool type then its false else success inser tion
    if(!is_bool($result)){


        $data=intval($result);


        $current_data = file_get_contents('file.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
             'PID'  =>  $data,
             'fk_TID'  =>  $TID,  
             'number'=> $number,  
             'city'=>    $city,
             'client_name'=>  $clientname, 
             'client_phone'=>   $phonenumber,
             'created_at'=>  date("Y-m-d H:i:s"));

        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
       file_put_contents('file.json', $final_data);
    }

}


echo $data;
die();