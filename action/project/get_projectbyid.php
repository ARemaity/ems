<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_Reports.php';
$db =new DB_Reports();  

$id=$_POST['id'];

$data=0;
if(!empty($id)){

    $result = $db->getproject($id);
    
    if($result){  


 $result1=$db->project_type_getsingletype($result["fk_TID"]);

 if(!$result1){  $result["prtype"]=  "no Type"; }//get name of the type from type project and add it to array


$result["prtype"]=  $result1["name"];

     echo json_encode($result);
    die();
 }

}


echo $data;
die();