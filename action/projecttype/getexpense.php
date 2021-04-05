<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_Reports.php';
$db =new DB_Reports();  

$id=$_POST['id'];

$data=0;
if(!empty($id)){

    $result = $db->project_type_getsingletype($id);
    if($result){
     echo json_encode($result);
    die();
 }

}


echo $data;
die();