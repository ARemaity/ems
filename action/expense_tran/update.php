<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$expenseid=$_POST['transactionid'];
$dropdown=$_POST['liste'];
$cost=$_POST['costedit'];
$transactionname=$_POST['transactionname'];
// first arg for uid 

$data=0;
if(!empty($dropdown)&&!empty($cost)&&!empty($expenseid)){

    $result = $db->updateexptransaction($expenseid,$dropdown,$cost);
    if($result){
    
        $data=1;

        $jsonsString = file_get_contents('file.json', 'w');
        $datas = json_decode($jsonsString, true); 
        foreach ($datas as $key => $entry) {
            if ($entry['ETID'] == $expenseid) {
              
                // if 1 no need to add again
                $datas[$key]['name'] = $transactionname;
                $datas[$key]['cost'] = $cost;
                
                break;
               
            }
        }
        file_put_contents('file.json', json_encode($datas));


















    
    
    }

}


echo $data;
die();