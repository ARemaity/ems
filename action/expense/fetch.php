<?php

@ob_end_clean();
if(isset($_POST)):
require_once (dirname(__FILE__,3)).'/base.php';
require_once (dirname(__FILE__,3)).'/'.DIR_INC.'DB_Reports.php';
$db = new DB_Reports();
$getallexpenses = $db->get_expense();
$results=array();
$status=0;
foreach($getallexpenses as $exp){
    array_push($results,$exp);

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

echo 1;
die();
endif;

?>