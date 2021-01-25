<?php


require_once 'include/DB_manage.php';
require_once 'include/DB_Reports.php';

$db=new DB_Manage();
$rpt=new DB_Reports();
// example 

// $insertinto=$db->insertintoclient("ali","sour",700324234);
// if($insertinto){
//     echo "good";
// }else{
//     echo "bad";
// }


// $insertinto2 = $db->insertintocompany("apple","cali",7415466,"assembled in china");
// if($insertinto2){echo "sucess";}else{echo "failed"; }

// $insertinro3 = $db->insertintoexpense("that","this is spartan",2500.23);
// if($insertinro3){echo "sucess";}else{echo "duuummm";}

// $insertinto3 = $db->insertintoexpense_transaction(10,20,30,"");
// if($insertinto3){echo "sucess";}else{echo "dumm";}

//  $insertinto3 = $db->insertintoincome("ali","dumm",1300);
//  if($insertinto3){echo "sucess";}else{echo "dumm";}



//  $insertinto3 = $db->insertintoincome_transaction(10,20,30,"2000-01-01");
//  if($insertinto3){echo "sucess";}else{echo "dumm";}
 



 $insertinto3 = $db->insertintoproject(7546654,"sur",25,"2000-01-01");
 if($insertinto3){echo "sucess";}else{echo "dumm";}


?>