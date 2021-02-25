<?php
require_once (dirname(__FILE__, 3)) . '/base.php';
require_once (dirname(__FILE__, 3)) . '/' . DIR_INC . 'DB_Reports.php';

$db =new DB_Reports();      

$action=$_POST['action'];


$data=array();
if($action=="init"){
    $result = $db->getnumberofprojects();
    if(!$result){ $data["numberofprojects"] ="Error!";}
        else{$data["numberofprojects"] = $result['total'];}
     
    
        $result1 = $db->numberofexpense_transaction();
        if(!$result1){
            $data["numberofexpense_transaction"] ="Error!";
            
        }else{   $data["numberofexpense_transaction"] = $result1['total'];}


        $result2 = $db->numberofincome_transaction();
        if(!$result2){
            $data["numberofincome_transaction"] = "Error";
         
        }else{$data["numberofincome_transaction"] = $result2['total'];}

        
    }//end of inint action

    if($action=="select"){

        $startdate=$_POST['start_dt'];
        $enddate=$_POST['end_dt'];
        

        $result = $db->getnumberofprojectbydate($startdate,$enddate);
        if(!$result){ $data["numberofprojects"] ="Error!";}
            else{$data["numberofprojects"] = $result['total'];}


           
            $result1 = $db-> getexpense_transactionbydate($startdate,$enddate);
            if(!$result1){
                $data["numberofexpense_transaction"] ="Error!";
                
            }else{   $data["numberofexpense_transaction"] = $result1['total'];}


            $result2 = $db->numberofincome_transactionbydate($startdate,$enddate);
            if(!$result2){
                $data["numberofincome_transaction"] = "Error";
             
            }else{$data["numberofincome_transaction"] = $result2['total'];}










    }


 echo json_encode($data);

die();





