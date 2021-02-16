<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$projectid=$_POST['projectid'];
$dropdown=$_POST['dropdown'];
$cost=$_POST['cost'];
$expnsname=$_POST['expnsname'];

// first arg for uid 

$data=0;
if(!empty($projectid)&&!empty($dropdown)&&!empty($cost)&&!empty($expnsname)){

    $result = $db->insertintoexpense_transaction(1,$projectid,$dropdown,$cost);
    if(!is_bool($result)){


        $data=intval($result);
       
        
        $current_data = file_get_contents('file.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
             'ETID'=> $data,  
             'name'=>$expnsname,
             'cost'=>$cost,
             'date'=>date("Y-m-d H:i:s"));

        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
       file_put_contents('file.json', $final_data);





      










    }

}


echo $data;
die();