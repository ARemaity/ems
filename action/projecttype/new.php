<?php
require_once dirname(__FILE__, 3) . '/base.php';
require_once dirname(__FILE__, 3) . '/' . DIR_INC . 'DB_manage.php';

$db = new DB_Manage();
$expensename = $_POST['expensename'];
$description = $_POST['description'];

$data = 0;
if (!empty($expensename) && !empty($description)) {

    $result = $db->insertintoexpense($expensename,$description);
    if(!is_bool($result)){


        $data=intval($result);
       
        
        $current_data = file_get_contents('file.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
             'EID'=> $data,  
             'cost'=>$expnsname,
             'description'=>$description);
             

        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
       file_put_contents('file.json', $final_data);

    }
}

echo $data;
die();
