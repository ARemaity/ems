<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$incometransactionid=$_POST['id'];

// first arg for uid 

$data=0;
if(!empty($incometransactionid)){

    $result = $db->deleteincometransaction($incometransactionid);
    if($result){
    
        $data=1;
    
    
    }

}


echo $data;
die();