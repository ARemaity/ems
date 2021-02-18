<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$expenseid=$_POST['uexpenseid'];

$expensename=$_POST['uexpensename'];

$expensedescription=$_POST['uexpensedescription'];
// first arg for uid 

$data=0;
if(!empty($expenseid)&&!empty($expensename)&&!empty($expensedescription)){

    $result = $db->updateexpense($expenseid,$expensename,$expensedescription);
    if($result){
    
        $data=1;
    

        $jsonsString = file_get_contents('file.json', 'w');
        $datas = json_decode($jsonsString, true); 
        foreach ($datas as $key => $entry) {
            if ($entry['EID'] == $expenseid) {
              
                // if 1 no need to add again
           
                $datas[$key]['name'] = $expensename;
                $datas[$key]['description'] = $expensedescription;
                break;
               
            }
        }
        file_put_contents('file.json', json_encode($datas));













    
    }

}


echo $data;
die();