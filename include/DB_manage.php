<?php 

//America/New_York

class DB_Manage{
     
     
    private $conn;
 
private $timezone;
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $db = new Db_Connect();
        $this->conn = $db->connect();

        $this->date= new DateTime("now", new DateTimeZone('Asia/Beirut'));
        $this->timezone=$this->date->format('Y-m-d H:i:s');
    }

    // destructor
    function __destruct() {
        
    }


//     /**
//      * Delete lead by Id
//      */
//     public function delLeadId($userId,$pr) {
//   $stmt = $this->conn->prepare("Delete FROM leads  WHERE `product_id` =  ? AND user_id=? ");
//         $stmt->bind_param("ii",$pr,$userId);
//         $result = $stmt->execute();
//         $stmt->close();
//         if ($result) {
//             return true;
//         } else {
//             return false;
//         }
//     }

//     /**
//      * update lead by Id
//      */
//     public function updateLeadId($userId,$user_fullName,$user_email,$user_phone,$address,$quantity,$pr) {
     
//   $stmt = $this->conn->prepare("UPDATE leads  SET user_fullName=?, user_email=?, user_phone=?, address=?,  quantity=? WHERE `product_id` =  ? AND  user_id=?");

//             $stmt->bind_param("ssisiii",$user_fullName,$user_email,$user_phone,$address,$quantity,$pr,$userId);
//             $result = $stmt->execute();
//             $stmt->close();
//         // check for successful store
//         if ($result) {
//             return true;
//         } else {
//             return false;
//         }
//     }
        
//     /**
//      * update selected leads status
//      */
//     public function updateStatusLeadId($userId,$user_status,$pr) {
       
       
//                     $stmt = $this->conn->prepare("UPDATE leads  SET user_status=? WHERE `product_id` =  ? AND  user_id=?");
           
         
//             $stmt->bind_param("iii",$user_status,$pr,$userId);
//             $result = $stmt->execute();
//             $stmt->close();
//         // check for successful store
//         if ($result) {
//             return true;
//         } else {
//             return false;
//         }
//     }
 
//      /**
//      *  insertintolog($userid,$pr,$Id,$status);*/
//     public function insertintologuser($userid,$pr,$LeadId,$leadstatus) {
                                
//             $stmt = $this->conn->prepare("INSERT INTO `log_user`(`LID`, `time_updated`, `assigned_id`, `product_id`, `lead_id`, `type_id`) VALUES (NULL,NULL,?,?,?,?)");
//             $stmt->bind_param("iiii",$userid,$pr,$LeadId,$leadstatus);
//             $result = $stmt->execute();
//             $stmt->close();
//         // check for successful store
//         if ($result) {
//             return true;
//         } else {
//             return false;
//         }
//     }

    
//      /**
//      * Delete lead by Id from log_user
//      */
//     public function deleteleadfromlog($leadid,$pr) {
       
//         $stmt = $this->conn->prepare("DELETE FROM `log_user` WHERE lead_id=? AND product_id=? ");

//     $stmt->bind_param("ii",$leadid,$pr);
//     $result = $stmt->execute();
//     $stmt->close();
//     if ($result) {
//         return true;
//     } else {
//         return false;
//     }
// }
//     /**
//      * update assign_to
//      */
//     public function assignto($LeadId,$assign_to,$pr) {
      
//                 $stmt = $this->conn->prepare("UPDATE leads  SET assign_to=? WHERE product_id=? AND  user_id=?");
               
//             $stmt->bind_param("iii",$assign_to,$pr,$LeadId);
//             $result = $stmt->execute();
//             $stmt->close();
//         // check for successful store
//         if ($result) {
//             return true;
//         } else {
//             return false;
//         }
//     }
//         public function insertintologadmin($LeadId,$userid,$pr) {
     
//             $stmt = $this->conn->prepare("INSERT INTO `log_admin` (`LID`, `time_assigned`, `assigned_id`, `lead_id`, `product_id`) VALUES (NULL, '$this->timezone', ?, ?, ?);");
            
//             $stmt->bind_param("iii",$userid,$LeadId,$pr);
//             $result = $stmt->execute();
//             $stmt->close();
//         // check for successful store
//         if ($result) {
//             return true;
//         } else {
//             return false;
//         }
//     }


//      /**
//      * Delete lead by Id
//      */
//     public function deleteexistlead($leadid,$pr) {
       
//             $stmt = $this->conn->prepare("DELETE FROM `log_admin` WHERE lead_id=? AND product_id=? ");
   
//         $stmt->bind_param("ii",$leadid,$pr);
//         $result = $stmt->execute();
//         $stmt->close();
//         if ($result) {
//             return true;
//         } else {
//             return false;
//         }
//     }

    
//     public function insertintoorder($pr,$leadid,$order_details,$total) {
     
//        $stmt = $this->conn->prepare("INSERT INTO `orders` (`OID`, `product_id`, `lead_id`, `order_details`, `total`) VALUES (NULL, '$pr', '$leadid', '$order_details', '$total')");
       
//         $result = $stmt->execute() or die(print_r($stmt->errorInfo(), true));
//         $stmt->close();
//     // check for successful store
//     if ($result) {
//         return true;
//     } else {
//         return false;
//     }





// }

// public function updateorder($pr,$leadid,$order_details,$total) {
     
//     $stmt = $this->conn->prepare("UPDATE orders SET  `order_details`='$order_details',`total`=? WHERE lead_id=? AND product_id=?
//     ");
//     $stmt->bind_param("iii",$total,$leadid,$pr);
//     $result = $stmt->execute();
//     $stmt->close();
// // check for successful store
// if ($result) {
//     return true;
// } else {
//     return false;
// }
// }

//  /**
//  * Delete lead by Id
//  */
// public function deleteexistorder($leadid,$pr) {
   
//         $stmt = $this->conn->prepare("DELETE FROM orders WHERE lead_id=? AND product_id=? ");

//     $stmt->bind_param("ii",$leadid,$pr);
//     $result = $stmt->execute();
//     $stmt->close();
//     if ($result) {
//         return true;
//     } else {
//         return false;
//     }
// }
//   /**
//      * Count leads for panel user
//      */
//     public function checkexsitorder($leadid,$pr) {
       
//         $stmt = $this->conn->prepare("SELECT COUNT(OID) as totalorders FROM orders WHERE lead_id=? AND product_id=?  ");        
//     $stmt->bind_param("ii", $leadid,$pr);   
//     if ($stmt->execute()) {			
//         $order = $stmt->get_result()->fetch_assoc();
//         $stmt->close();
//         return $order; 
//     } else {
//         return NULL;
//     }
// }
// /**
//  *return status of current leads
//  */
//     public function getleadStatus($leadid,$pr) {
       
//         $stmt = $this->conn->prepare("SELECT leads .user_status as status from leads  where user_id=? and product_id =? ");        
//     $stmt->bind_param("ii", $leadid,$pr);   
//     if ($stmt->execute()) {			
//         $order = $stmt->get_result()->fetch_assoc();
//         $stmt->close();
//         return $order; 
//     } else {
//         return NULL;
//     }
// }
}

?>