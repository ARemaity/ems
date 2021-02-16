<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$projectid=$_POST['projectid'];
$cost=$_POST['cost'];

$data=0;
if(!empty($projectid)&&!empty($cost)){

    $result = $db->insertintoincome_transaction(1,$projectid,$cost);
    if(!is_bool($result)){


        $data=intval($result);


        $current_data = file_get_contents('file.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
             'ITID'  =>  $data,  
             'cost'=> $cost,  
             'created_at'=>"refresh");

        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
       file_put_contents('file.json', $final_data);














    }

}


echo $data;
die();