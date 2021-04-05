<?php
require_once dirname(__FILE__, 3) . '/base.php';
require_once dirname(__FILE__, 3) . '/' . DIR_INC . 'DB_manage.php';

$db = new DB_Manage();
$type = $_POST['expensename'];
$description = $_POST['description'];

$data = 0;
if (!empty($type) && !empty($description)) {

    $result = $db->project_type_create($type,$description);
    if($result){

$data=1;

    }
}

echo $data;
die();
