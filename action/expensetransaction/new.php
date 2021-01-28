<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$projectid=$_POST['projectid'];
$dropdown=$_POST['dropdown'];
$cost=$_POST['cost'];

$data=0;
if(!empty($projectid)&&!empty($dropdown)&&!empty($cost)){

    $result = $db->insertintoexpense_transaction(1,$projectid,$dropdown,$cost);
    if($result){
    
        $data=1;
    
    
    }

}


echo $data;
die();