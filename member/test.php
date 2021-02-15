<?php
require_once (dirname(__FILE__, 2)) . '/base.php';
require_once (dirname(__FILE__, 2)) . '/' . DIR_INC . 'DB_manage.php';

$db =new DB_Manage();      


echo $db->getlastid();


die();