<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_Reports.php';

$db =new DB_Reports();      
$id=$_POST['id'];
$action=$_POST['action'];
$data=0;
if(!empty($id)){









    if($action =="trans"){

    $result = $db->getexpensetransaction_sum($id);
    if($result){
     echo json_encode($result);
    die();}
    
    }else{

        $result = $db->getincometransaction_sum($id);
        if($result){
         echo json_encode($result);
        die();}







    }
    

}


echo $data;
die();