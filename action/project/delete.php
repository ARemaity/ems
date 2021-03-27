<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      
$projectid=$_POST['id'];

// firstprojectid arg for uid 

$data=0;
if(!empty($projectid)){


// delete   income trasnaction

$result1 = $db->deleteincomebypid($projectid);
// delete expense transaction 


$result2 = $db->deleteexpbypid($projectid);

    $result = $db->deleteproject($projectid);
    if($result){
    
        $data=1;
        $jsonString = file_get_contents('file.json', 'w');
     $DPID=0;
// decode json to associative array
$json_arr = json_decode($jsonString, true);


foreach ($json_arr as $key => $value)
{
    if ($value['PID'] == $projectid)
    {
       $DPID= $key;
    }
}

// delete data

    unset($json_arr[$DPID]);

// rebase array
$json_arr = array_values($json_arr);

// encode array to json and save to file
file_put_contents('file.json', json_encode($json_arr));

    
    }

}


echo $data;
die();