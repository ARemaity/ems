<?php
require_once (dirname(__FILE__, 2)) . '/base.php';
require_once (dirname(__FILE__,2)) . '/' . DIR_INC . 'DB_Reports.php';
require_once (dirname(__FILE__, 2)) . '/' . DIR_INC . 'DB_manage.php';



$db=new DB_Manage();
$rpt=new DB_Reports();




$result=$db->project_type_delete(3);

echo($result);



?>