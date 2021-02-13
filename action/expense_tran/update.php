<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$expenseid=$_POST['transactionid'];
$dropdown=$_POST['liste'];
$cost=$_POST['costedit'];
// first arg for uid 

$data=0;
if(!empty($dropdown)&&!empty($cost)&&!empty($expenseid)){

    $result = $db->updateexptransaction($expenseid,$dropdown,$cost);
    if($result){
    
        $data=1;
    
    
    }

}


echo $data;
die();