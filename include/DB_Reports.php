<?php 
class DB_Reports {
    private $conn;

    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $db = new Db_Connect();
        $this->conn = $db->connect();

    }

  
    /**
     * Get total leads
     */
    public function getTotalLeads($pr) {
$stmt = $this->conn->prepare("SELECT COUNT(user_id) as total_leads 
                            FROM leads where product_id='$pr' ");
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL; 
        }
    }
    
    /**
     * Get total leads today
     */
    public function getTotalLeadsToday($pr) {
        
                            $stmt = $this->conn->prepare("SELECT COUNT(user_id) as total_leads_today 
                FROM leads where product_id='$pr' AND  day(user_created_at)=".date('d')." AND month(user_created_at)=  ".date('m')." AND year(user_created_at)=".date('Y'));

        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    }
    
    /**
     * Get total leads yesterday
     */
    public function getTotalLeadsYesterday($pr) {
       
                            $stmt = $this->conn->prepare("SELECT COUNT(user_id) as total_leads_yesterday 
                            FROM leads where product_id='$pr' AND day(user_created_at)=".date('d',strtotime("-1 days"))." AND month(user_created_at)=  ".date('m')." AND year(user_created_at)=".date('Y'));
                          
        
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
            
			return $user; 
        } else {
            return NULL;
        }
    }
    
    /**
     * Get total leads this month
     */
    public function getTotalLeadsMonth($pr) {
      
                            $stmt = $this->conn->prepare("SELECT COUNT(user_id) as total_leads_month 
                            FROM leads where product_id='$pr' AND month(user_created_at)=".date('m')." AND year(user_created_at)=".date('Y'));
               
        
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    } 


    /**
     * Get total leads date range
     */
    public function getTotalLeadsRange($start_dt,$end_dt) {
        $stmt = $this->conn->prepare("SELECT COUNT(user_id) as total_leads_range FROM leads WHERE user_created_at BETWEEN '$start_dt' AND '$end_dt'");
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    } 

    /**
     * Get total leads Hold
     */
    public function getAllLeadsRangeHold() {
        $stmt = $this->conn->prepare("SELECT COUNT(user_id) as total_leads_range_hold FROM leads WHERE user_status=1");
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    }
    
    /**
     * Get total leads date range Hold
     */
    public function getTotalLeadsRangeHold($start_dt,$end_dt) {
        $stmt = $this->conn->prepare("SELECT COUNT(user_id) as total_leads_range_hold FROM leads WHERE user_status=1 AND user_created_at BETWEEN '$start_dt' AND '$end_dt' ");
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    } 
 
    /**
     * Get total leads Approved
     */
    public function getAllLeadsRangeApproved() {
        $stmt = $this->conn->prepare("SELECT COUNT(user_id) as total_leads_range_approved FROM leads WHERE user_status=2");
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    } 
    
    /**
     * Get total leads date range Approved
     */
    public function getTotalLeadsRangeApproved($start_dt,$end_dt) {
        $stmt = $this->conn->prepare("SELECT COUNT(user_id) as total_leads_range_approved FROM leads WHERE user_status=2 AND user_created_at BETWEEN '$start_dt' AND '$end_dt' ");
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    } 

    
    /**
     * Get total leads  Rejected
     */
    public function getAllLeadsRangeRejected() {
        $stmt = $this->conn->prepare("SELECT COUNT(user_id) as total_leads_range_rejected FROM leads WHERE user_status=3");
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    } 
    
    /**
     * Get total leads date range Rejected
     */
    public function getTotalLeadsRangeRejected($start_dt,$end_dt) {
        $stmt = $this->conn->prepare("SELECT COUNT(user_id) as total_leads_range_rejected FROM leads WHERE user_status=3 AND user_created_at BETWEEN '$start_dt' AND '$end_dt' ");
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    } 
    
    /**
     * Get all leads details TO Leads page 
     */
    public function getAllLeads($pr) {


        
            $stmt = $this->conn->prepare("SELECT * FROM leads where product_id=? ORDER BY user_created_at DESC ");
            $stmt->bind_param("i", $pr);
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
        
			return $user; 
        } else {
            return NULL;
        }
    }
    public function getAllLeadsRangeDefault($pr,$start_dt,$end_dt) {


       
            $stmt = $this->conn->prepare("SELECT * FROM leads Where product_id =? AND user_created_at BETWEEN '$start_dt' AND '$end_dt'  ORDER BY user_created_at DESC ");
            $stmt->bind_param("i", $pr);
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
            sleep(5);
			return $user; 
        } else {
            return NULL;
        }
    }
    public function getAllLeadsRange($pr,$status,$start_dt,$end_dt) {


      
                    $stmt = $this->conn->prepare("SELECT * FROM leads Where product_id=? AND  user_status=? AND user_created_at BETWEEN '$start_dt' AND '$end_dt'  ORDER BY user_created_at DESC ");
                      
        $stmt->bind_param("ii", $pr,$status);
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
            sleep(5);
			return $user; 
        } else {
            return NULL;
        }
    }
    public function getAllLeadsstatus($pr,$status) {
     
            $stmt = $this->conn->prepare("SELECT * FROM leads  WHERE product_id=? AND user_status=? ORDER BY user_created_at DESC");           

       
        $stmt->bind_param("ii", $pr,$status);
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
           
			return $user; 
        } else {
            return NULL;
        }
    }
    public function getAllLeadsUser($pr,$userid,$status) {
       
            $stmt = $this->conn->prepare("SELECT * FROM leads  WHERE product_id=? AND assign_to=? AND user_status=? ORDER BY user_created_at DESC");           


       
        $stmt->bind_param("iii", $pr,$userid,$status);
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
           
			return $user; 
        } else {
            return NULL;
        }
    }


        /*
    search key word for specefic user and speceific product 
    */
    public function SeachLeadsAdmin($pr,$keyword) {
       
            $stmt = $this->conn->prepare("SELECT * FROM leads  WHERE product_id='$pr' AND   `user_phone` LIKE '%$keyword' or `user_fullName` LIKE  '$keyword%'   ORDER BY user_created_at DESC");              

 
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
           
			return $user; 
        } else {
            return NULL;
        }
    }

    public function SeachLeadsUser1($pr,$keyword,$userid) {
       
            $stmt = $this->conn->prepare("SELECT * FROM leads  WHERE product_id='$pr' AND  assign_to='$userid' AND   `user_phone` LIKE '%$keyword' or `user_fullName` LIKE  '$keyword%'   ORDER BY user_created_at DESC");              

     
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
           
			return $user; 
        } else {
            return NULL;
        }
    }
      /*
    search key word for specefic order and speceific product 
    */
    public function SearchOrder($pr,$keyword) {
       
        $stmt = $this->conn->prepare("SELECT OID,lead_id,orders.product_id,user_fullName,address,user_phone,user_status,quantity,order_details,total
        FROM orders 
        INNER JOIN  leads ON orders.product_id ='$pr' AND orders.product_id=leads.product_id AND orders.lead_id=leads.user_id
        where   `user_phone` LIKE '%$keyword' OR  `user_fullName` LIKE  '$keyword%'  ORDER BY OID DESC ");              

    if ($stmt->execute()) {			
        $user = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
       
        return $user; 
    } else {
        return NULL;
    }
}
    public function getAllLeadsUserDefault($pr) {
      
                $stmt = $this->conn->prepare("SELECT * FROM leads  WHERE product_id= ?   ORDER BY user_created_at DESC");              


       
        $stmt->bind_param("i", $pr);
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
       
           
            return $user; 
            $stmt->close();
        } else {
            die("Adding record failed: " .$stmt->error); 
            $stmt->close();
        
        }

    }
    public function getallleadsUserRange($pr,$userid,$start_dt,$end_dt) {


     
                      
 $stmt = $this->conn->prepare("SELECT * FROM leads Where product_id=? AND  assign_to=? AND user_created_at BETWEEN '$start_dt' AND '$end_dt'  ORDER BY user_created_at DESC ");
                            
        $stmt->bind_param("ii",$pr,$userid);
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
            sleep(5);
			return $user; 
        } else {
            return NULL;
        }
    }
    public function getallleadsUserStatusRange($pr,$userid,$status,$start_dt,$end_dt) {


                      
     $stmt = $this->conn->prepare("SELECT * FROM leads Where product_id=? AND assign_to=? AND  user_status=? AND user_created_at BETWEEN '$start_dt' AND '$end_dt'  ORDER BY user_created_at DESC ");
                          
        $stmt->bind_param("iii",$pr,$userid,$status);
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
            sleep(5);
			return $user; 
        } else {
            return NULL;
        }
    }

    /**
     * Count leads for panel user
     */
    public function CountAllLeadsAssigned($pr,$assign_toId) {
       
            $stmt = $this->conn->prepare("SELECT COUNT(lead_id) as totalLeads FROM log_admin WHERE product_id =? AND assigned_id =? ");        
        $stmt->bind_param("ii", $pr,$assign_toId);
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    }
    


     /**
     * Count Approved leads from the user (log_user)
     */
    public function CountworkedonLeadsUser($pr,$assign_toId) {
        $stmt = $this->conn->prepare("SELECT COUNT(lead_id) as totalworkedonLeads FROM log_user WHERE product_id=? AND  assigned_id=?");
    $stmt->bind_param("ii",$pr, $assign_toId);
    if ($stmt->execute()) {			
        $user = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $user; 
    } else {
        return NULL;
    }
}
    /**
     * Count Approved leads from the user (log_user)
     */
    public function CountApprovedLeadsUser($pr,$assign_toId) {
        
            $stmt = $this->conn->prepare("SELECT COUNT(lead_id) as totalAppLeads FROM log_user WHERE product_id=? AND  assigned_id=?  AND type_id=2");
    
          
        $stmt->bind_param("ii",$pr, $assign_toId);
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    }
    

    /**
     * Count Rejected leads for panel user
     */
    public function CountRejectedLeadsUser($pr,$assign_toId) {
        
            $stmt = $this->conn->prepare("SELECT COUNT(lead_id) as totalRejLeads FROM log_user WHERE product_id=? AND  assigned_id=?  AND type_id=3");
    
          
        $stmt->bind_param("ii",$pr, $assign_toId);
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    }
    
// get data for today
    /**
     * Count leads for panel user
     * >CountAllLeadsAssignedRange($pr,$user[0],$start_dt,$end_dt)['totalLeads'];
     */
    public function CountAllLeadsAssignedRange($pr,$assign_toId,$start_dt,$end_dt) {

        $stmt = $this->conn->prepare("SELECT COUNT(lead_id) as totalLeads FROM log_admin WHERE product_id ='$pr' AND assigned_id='$assign_toId'  AND time_assigned BETWEEN '$start_dt' AND '$end_dt' ");        
            // $stmt->bind_param("ii", $pr,$assign_toId);
    if ($stmt->execute()) {			
        $user = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $user; 
    } else {
        return NULL;
    }
}



 /**
 * Count Approved leads from the user (log_user)
 */
public function CountworkedonLeadsUserRange($pr,$assign_toId,$start_dt,$end_dt) {
    $stmt = $this->conn->prepare("SELECT COUNT(lead_id) as totalworkedonLeads FROM log_user WHERE product_id='$pr' AND  assigned_id='$assign_toId' AND time_updated BETWEEN '$start_dt' AND '$end_dt'");
//$stmt->bind_param("ii",$pr, $assign_toId);
if ($stmt->execute()) {			
    $user = $stmt->get_result()->fetch_assoc();
    $stmt->close();
    return $user; 
} else {
    return NULL;
}
}
/**
 * Count Approved leads from the user (log_user)
 */
public function CountApprovedLeadsUserRange($pr,$assign_toId,$start_dt,$end_dt) {
    
        $stmt = $this->conn->prepare("SELECT COUNT(lead_id) as totalAppLeads FROM log_user WHERE product_id='$pr' AND  assigned_id='$assign_toId'  AND type_id=2
     
         ");

      
 //   $stmt->bind_param("ii",$pr, $assign_toId);
    if ($stmt->execute()) {			
        $user = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $user; 
    } else {
        return NULL;
    }
}


/**
 * Count Rejected leads for panel user
 */
public function CountRejectedLeadsUserRange($pr,$assign_toId,$start_dt,$end_dt) {
    
        $stmt = $this->conn->prepare("SELECT COUNT(lead_id) as totalRejLeads FROM log_user WHERE  product_id='$pr' AND  assigned_id='$assign_toId'  AND type_id=3 AND time_updated BETWEEN '$start_dt' AND '$end_dt' ");

      
  //  $stmt->bind_param("ii",$pr, $assign_toId);
    if ($stmt->execute()) {			
        $user = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $user; 
    } else {
        return NULL;
    }
}
    /**
     * Count leads for panel user range
     */
    public function CountRangeLeadsUser($assign_toId,$pr,$start_dt,$end_dt) {
       
                $stmt = $this->conn->prepare("SELECT COUNT(user_id) as totalLeads FROM leads WHERE product_id=? AND assign_to=? AND user_created_at BETWEEN '$start_dt' AND '$end_dt'");
        
      
        $stmt->bind_param("ii", $pr,$assign_toId);
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    }
    
    /**
     * Count Approved leads for panel user
     */
    public function CountRangeApprovedLeadsUser($assign_toId,$pr,$start_dt,$end_dt) {
        
                $stmt = $this->conn->prepare("SELECT COUNT(user_id) as totalAppLeads FROM leads WHERE product_id=? AND  assign_to=? AND user_status=2 And user_created_at BETWEEN '$start_dt' AND '$end_dt'");
        
        $stmt->bind_param("ii",$pr,$assign_toId);
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    }
    
    /**
     * Count Rejected leads for panel user
     */
    public function CountRangeRejectedLeadsUser($assign_toId,$pr,$start_dt,$end_dt) {
       
         
                $stmt = $this->conn->prepare("SELECT COUNT(user_id) as totalRejLeads FROM leads WHERE product_id=? AND  assign_to=? AND user_status=3 AND user_created_at BETWEEN '$start_dt' AND '$end_dt'");
         
        
        $stmt->bind_param("ii",$pr, $assign_toId);
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    }
    
    /**
     * Get all Users details
     */
    public function getAllUsers() {
        $stmt = $this->conn->prepare("SELECT * FROM users");
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_all();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    }

    /**
     * Get Panel Users details
     */
    public function getPanelUsers() {
        $stmt = $this->conn->prepare("SELECT * FROM users where usertype=1");
        if ($stmt->execute()) {			
            $user = $stmt->get_result()->fetch_all();
            $stmt->close();
			return $user; 
        } else {
            return NULL;
        }
    }
  
      /**
     * Get all leads details TO Leads page 
     */
    public function getsingleorder($pr) {

            $stmt = $this->conn->prepare("SELECT OID,orders.product_id,lead_id,user_fullName,address,user_phone,user_status,quantity,order_details,total
            FROM orders 
            INNER JOIN  leads ON orders.product_id ='$pr' AND orders.product_id=leads.product_id AND orders.lead_id=leads.user_id
             ORDER BY OID DESC ");
            $stmt->bind_param("i", $pr);
        if ($stmt->execute()) {			
            $order = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
        
			return $order; 
        } else {
            return NULL;
        }
    }
  
    /**
     * Get all leads details TO Leads page 
     */
    public function getAllorder() {


      
        $stmt = $this->conn->prepare("SELECT * FROM orders ORDER BY OID DESC ");
  
    if ($stmt->execute()) {			
        $order = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
    
        return $order; 
    } else {
        return NULL;
    }
}
  
}
?>