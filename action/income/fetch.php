<?php

@ob_end_clean();
if(isset($_POST)&&isset($_POST['PID'])):
$PID=trim($_POST['PID']);
require_once (dirname(__FILE__,3)).'/base.php';
require_once (dirname(__FILE__,3)).'/'.DIR_INC.'DB_Reports.php';
$db = new DB_Reports();
$getallincomes = $db->get_income_project($PID);
$results=array();
$status=0;
foreach($getallincomes as $inc){
    array_push($results,$inc);

}
if(!empty($results)){
    $fp = fopen('file.json', 'w');
    fwrite($fp, json_encode($results));
    fclose($fp);
}else{
   
    $fp = fopen('file.json', 'w');
    fwrite($fp, json_encode(new stdClass));
    fclose($fp);
}

echo "1";
exit();
endif;

?>