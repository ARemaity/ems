<?php
// example 
// //Get base class
// require_once '../base.php';
// //Get Reports class
// require_once '../'.DIR_INC.'DB_Reports.php';
// $db = new DB_Reports();
// //Get panel Users
// $getallusers = $db->getPanelUsers();
// $totalleads=0;
// $totalworkedonleads=0;
// $totalappleads=0;
// $totalrejleads=0;
// foreach($getallusers as $user){
//     if(isset($_POST['all'])){
//         $pr=$_POST['pr'];
//         $type=$_POST['type']; 
//         if($type=='1'){
//             for ($i=1; $i <7 ; $i++) { 
//           $totalleads+= $db->CountAllLeadsAssigned($i,$user[0])['totalLeads'];
//          $totalworkedonleads+= $db->CountworkedonLeadsUser($i,$user[0])['totalworkedonLeads'];  
//         $totalappleads+= $db->CountApprovedLeadsUser($i,$user[0])['totalAppLeads'];
//         $totalrejleads+= $db->CountRejectedLeadsUser($i,$user[0])['totalRejLeads'];
//             }
//         }else if($type=='2'){
//            $totalleads= $db->CountAllLeadsAssigned($pr,$user[0])['totalLeads'];
//          $totalworkedonleads= $db->CountworkedonLeadsUser($pr,$user[0])['totalworkedonLeads'];  
//         $totalappleads= $db->CountApprovedLeadsUser($pr,$user[0])['totalAppLeads'];
//         $totalrejleads= $db->CountRejectedLeadsUser($pr,$user[0])['totalRejLeads'];
//         }else if($type=='3'){
//             $start_dt = $_POST['start_dt'];
//             $end_dt = $_POST['end_dt'];
//             $totalleads= $db->CountAllLeadsAssignedRange($pr,$user[0],$start_dt,$end_dt)['totalLeads'];
//             $totalworkedonleads= $db->CountworkedonLeadsUserRange($pr,$user[0],$start_dt,$end_dt)['totalworkedonLeads'];  
//             $totalappleads= $db->CountApprovedLeadsUserRange($user[0],$pr,$start_dt,$end_dt)['totalAppLeads'];
//             $totalrejleads= $db->CountRejectedLeadsUserRange($user[0],$pr,$start_dt,$end_dt)['totalRejLeads'];
     
//     }
          
//     }
  

//     echo "<div class='kt-widget29__content'>";
//     echo "<h3 class='kt-widget29__title'>".$user[2]."</h3>";
//     echo "<div class='kt-widget29__item'><div class='kt-widget29__info'><span class='kt-widget29__subtitle'>Total Assigned</span>";
//     echo "<span class='kt-widget29__stats kt-font-success'>".$totalleads."</span></div>";
//     echo "<div class='kt-widget29__info'><span class='kt-widget29__subtitle'>Total Woked On</span>";
//     echo "<span class='kt-widget29__stats kt-font-success'>".$totalworkedonleads."</span></div>";
//     echo "<div class='kt-widget29__info'><span class='kt-widget29__subtitle'>Approved</span>";
//     echo "<span class='kt-widget29__stats kt-font-brand'>".$totalappleads."</span></div>";
//     echo "<div class='kt-widget29__info'><span class='kt-widget29__subtitle'>Rejected</span>";
//     echo "<span class='kt-widget29__stats kt-font-danger'>".$totalrejleads."</span></div>";
//     echo "</div></div>";
//         $totalleads=0;
//         $totalappleads=0;
//         $totalrejleads=0;
//         $totalworkedonleads=0;
// }    
?>                                            
                                          