<?php

error_reporting(1);
require_once 'include/DB_manage.php';
require_once 'include/DB_Reports.php';

$db=new DB_Manage();
$rpt=new DB_Reports();
// example 

$insertinto=$db->insertintoclient("ali","sour",700324234);
if($insertinto){
    echo "good";
}else{
    echo "bad";
}
?>