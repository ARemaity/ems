<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$incomeid=$_POST['incometransactionidupdate'];

$cost=$_POST['incometransactioncostupdate'];
// first arg for uid 

$data=0;
if(!empty($cost)&&!empty($incomeid)){

    $result = $db->updateincometransaction($incomeid,$cost);
    if($result){
    
        $data=1;
    
    
    }

}


echo $data;
die();