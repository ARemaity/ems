<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$Tid=$_POST['uexpenseid'];

$type=$_POST['uexpensename'];

$description=$_POST['uexpensedescription'];
// first arg for uid 

$data="0";
if(!empty($Tid)&&!empty($type)&&!empty($description)){

    $result = $db->project_type_update($Tid,$type,$description);
    if($result){
    

    
        $jsonsString = file_get_contents('file.json', 'w');
        $datas = json_decode($jsonsString, true); 
        foreach ($datas as $key => $entry) {
            if ($entry['TID'] == $Tid) {
              
                // if 1 no need to add again
           
                $datas[$key]['name'] = $type;
                $datas[$key]['description'] = $description;
                break;
               
            }
        }
        file_put_contents('file.json', json_encode($datas));



        $data="1";
    
    }

}


echo $data;
die();