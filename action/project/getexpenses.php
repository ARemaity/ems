<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_Reports.php';

$db =new DB_Reports();      
$id=$_POST['id'];


$data=array();
if(!empty($id)){
    $result = $db->getexpensetransaction_sum($id);
    if($result){
        $data["trns"] = $result['sum'];
        $data["trnscount"] = $result['trnscount'];
    }
        $result1 = $db->getincometransaction_sum($id);
        if($result1){
            $data["incm"] = $result1['sum'];
            $data["incmcount"] = $result1['incmcount'];
       

            
       
        }

 echo json_encode($data);

die();




}


echo $data = 0;
die();