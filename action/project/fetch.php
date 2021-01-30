<?php

@ob_end_clean();

if(isset($_POST)&&isset($_POST['get_json'])):
    // $module=basename(__DIR__);
//Get base class
require_once (dirname(__FILE__,3)).'/base.php';
require_once (dirname(__FILE__,3)).'/'.DIR_INC.'DB_Reports.php';
$db = new DB_Reports();
$pr=1;
$getallProject = $db->getAllProject();
$results=array();
$status=0;
foreach($getallProject as $lead){
    array_push($results,$lead);

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
endif;

?>