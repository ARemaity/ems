<?php


require_once 'include/DB_manage.php';
require_once 'include/DB_Reports.php';

$db=new DB_Manage();
$rpt=new DB_Reports();
// example 

// $insertinto=$db->insertintoclient("abadi","kafra",700324234);
// if($insertinto){
//     echo "good";
// }else{
//     echo "bad";
// }


// $insertinto2 = $db->insertintocompany("apple","cali",7415466,"assembled in china");
// if($insertinto2){echo "sucess";}else{echo "failed"; }

// $insertinro3 = $db->insertintoexpense("that","this is spartssan",2500.23);
// if($insertinro3){echo "sucess";}else{echo "duuummm";}

$insertinto3 = $db->insertintoexpense_transaction(1,2,1,10000);
if($insertinto3){echo "sucess";}else{echo "dumm";}

//  $insertinto3 = $db->insertintoincome("ali","dumm",1300);
//  if($insertinto3){echo "sucess";}else{echo "dumm";}



//  $insertinto3 = $db->insertintoincome_transaction(10,20,30,"2000-01-01");
//  if($insertinto3){echo "sucess";}else{echo "dumm";}

// $result = $db->getallexpense()->get_result();
// while ($row = $result->fetch_assoc()) {
//   echo $row['name'];
 
// }


//  $insertinto3 = $db->insertintoproject(75654,"sur","ali",25);
//  if($insertinto3){echo "sucess";}else{echo "dumm";}

// $client = $db->getproject(1);

// echo print_r($client);


?>