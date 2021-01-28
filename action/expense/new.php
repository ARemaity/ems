<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$expensename=$_POST['expensename'];
$description=$_POST['description'];

$data=0;
if(!empty($expensename)&&!empty($description)){

    $result = $db->insertintoexpense($expensename,$description);
    if($result){
    
        $data=1;
    
    
    }

}


echo $data;
die();