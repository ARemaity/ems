<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$projectid=$_POST['projectid'];
$cost=$_POST['cost'];

$data=0;
if(!empty($projectid)&&!empty($cost)){

    $result = $db->insertintoincome_transaction(1,$projectid,$cost);
    if($result){
    
        $data=1;
    
    
    }

}


echo $data;
die();