<?php 

//America/New_York

class DB_Manage {
     
     
    private $conn;
 
//private $timezone;
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $db = new Db_Connect();
        $this->conn = $db->connect();
     
    }

    // destructor
    function __destruct() {
        
    }



         public function insertintocompany($name,$address,$phone,$description) {
                                
            $stmt = $this->conn->prepare("INSERT INTO `company`(`CID`, `name`, `address`, `phone`, `description`) VALUES (Null,?,?,?,?)");
            $stmt->bind_param("ssis",$name,$address,$phone,$description);
            $result = $stmt->execute();
            $stmt->close();
         // check for successful stores
         if ($result) {
             return true;
         } else {
             return false;
         }
     }


     public function insertintoexpense($name,$description) {
                                
        $stmt = $this->conn->prepare("INSERT INTO `expense`(`EID`, `name`, `description`) VALUES (Null,?,?)");
        $stmt->bind_param("ss",$name,$description);
        $result = $stmt->execute();
        $last_id=$stmt->insert_id;
        $stmt->close();
    // check for successful store
    if ($result) {
        return $last_id;
    } else {
        return false;
    }
 }



 public function insertintoexpense_transaction($fk_UID,$fk_PID,$fk_IID,$cost) {
                                
    $stmt = $this->conn->prepare("INSERT INTO `expense_transaction`(`ETID`, `fk_UID`, `fk_PID`, `fk_EID`,`cost`,`created_at`) VALUES (Null,?,?,?,?,NOW())");
    $stmt->bind_param("iiid",$fk_UID,$fk_PID,$fk_IID,$cost);
    $result = $stmt->execute();
    $last_id=$stmt->insert_id;
    $stmt->close();
// check for successful store
if ($result) {
    return $last_id;
} else {
    return false;
}
}








public function insertintoincome_transaction($fk_UID,$fk_PID,$cost,$status) {
                                
    $stmt = $this->conn->prepare("INSERT INTO `income_transaction`(`ITID`, `fk_UID`, `fk_PID`, `cost`, `status`,`created_at`) VALUES (NULL,?,?,?,?,NOW())");
    $stmt->bind_param("iidi",$fk_UID,$fk_PID,$cost,$status);
    $result = $stmt->execute();
    $last_id=$stmt->insert_id;
    $stmt->close();
// check for successful store
if ($result) {
    return $last_id;
} else {
    return $last_id;
}
}




public function insertintoproject($number,$city,$client_name,$client_phone,$TID) {
                                
    $stmt = $this->conn->prepare("INSERT INTO `project`(`PID`,`fk_TID`, `number`, `city`, `client_name`, `client_phone`, `created_at`) VALUES (Null,?,?,?,?,?,NOW())");
 
    $stmt->bind_param("iissi",$TID,$number,$city,$client_name,$client_phone);
  
    $result = $stmt->execute();
    $last_id=$stmt->insert_id;
    $stmt->close();
// check for successful store
if ($result) {
    return $last_id;
} else {
    return false;
}
}

  

 public function getcompany($companyid) {
       
    $stmt = $this->conn->prepare("SELECT `CID`, `name`, `address`, `phone`, `description` FROM `company` WHERE CID = ?");        
$stmt->bind_param("i", $companyid);   

if ($stmt->execute()) {			
     $order = $stmt->get_result()->fetch_assoc();
     $stmt->close();
     return $order; 
 } else {
    return NULL;
 }
}


public function getexpense($expenseid) {
       
    $stmt = $this->conn->prepare("SELECT `EID`, `name`, `description` FROM `expense` WHERE EID = ?");        
$stmt->bind_param("i", $expenseid);   

if ($stmt->execute()) {			
     $order = $stmt->get_result()->fetch_assoc();
     $stmt->close();
     return $order; 
 } else {
    return NULL;
 }
}
public function getallexpense() {
       
    $stmt = $this->conn->prepare(" SELECT `EID`, `name` FROM `expense` ");        
  

if ($stmt->execute()) {			
    return $stmt;
 } else {
    return NULL;
 }
}



public function getexpense_transaction($expensetrans_id) {
       
    $stmt = $this->conn->prepare("SELECT `ETID`, `fk_UID`, `fk_PID`, `fk_IID`, `cost`, `created_at` FROM `expense_transaction` WHERE ETID = ?");        
$stmt->bind_param("i", $expensetrans_id);   

if ($stmt->execute()) {			
     $order = $stmt->get_result()->fetch_assoc();
     $stmt->close();
     return $order; 
 } else {
    return NULL;
 }
}








public function getproject($projecttid) {
       
    $stmt = $this->conn->prepare("SELECT * FROM `project` WHERE PID = ?");        
$stmt->bind_param("i", $projecttid);   

if ($stmt->execute()) {			
     $order = $stmt->get_result()->fetch_assoc();
     $stmt->close();
     return $order; 
 } else {
    return NULL;
 }
}

public function updateproject($projecttid,$TID,$number,$city,$client_name,$client_phone) {
       
    $stmt = $this->conn->prepare("UPDATE `project` SET `fk_TID`=?, `number`= ?,`city`= ?,`client_name`= ?,`client_phone`= ? WHERE PID = ?");        
$stmt->bind_param("iissii", $TID,$number,$city,$client_name,$client_phone,$projecttid);   
$result = $stmt->execute();
$stmt->close();
// check for successful stores
if ($result) {
 return true;
} else {
 return false;
}
}


public function deleteexptransaction($expensetrans_id) {
       
    $stmt = $this->conn->prepare("DELETE FROM `expense_transaction` WHERE ETID = ?");        
$stmt->bind_param("i", $expensetrans_id);   

if ($stmt->execute()) {			
    
     $stmt->close();
     return true; 
 } else {
    return false;
 }
}

public function updateexptransaction($expensetrans_id,$expenseid,$cost) {
       
    $stmt = $this->conn->prepare("UPDATE `expense_transaction` SET `fk_EID`=?,`cost`= ? WHERE ETID= ?");        
$stmt->bind_param("idi",$expenseid,$cost,$expensetrans_id);   

if ($stmt->execute()) {			
    
     $stmt->close();
     return true; 
 } else {
    return false;
 }
}
public function deleteincometransaction($incometransactionid) {
       
    $stmt = $this->conn->prepare("DELETE FROM `income_transaction` WHERE ITID = ?");        
$stmt->bind_param("i", $incometransactionid);   

if ($stmt->execute()) {			
    
     $stmt->close();
     return true; 
 } else {
    return false;
 }
}


public function deleteincomebypid($incometransactionid) {
       
    $stmt = $this->conn->prepare("DELETE FROM `income_transaction` WHERE fk_PID = ?");        
$stmt->bind_param("i", $incometransactionid);   

if ($stmt->execute()) {			
    
     $stmt->close();
     return true; 
 } else {
    return false;
 }
}

public function deleteexpbypid($expensetrans_id) {
       
    $stmt = $this->conn->prepare("DELETE FROM `expense_transaction` WHERE fk_PID = ?");        
$stmt->bind_param("i", $expensetrans_id);   

if ($stmt->execute()) {			
    
     $stmt->close();
     return true; 
 } else {
    return false;
 }
}
public function updateincometransaction($incometransactionid,$cost,$status) {
       
    $stmt = $this->conn->prepare("UPDATE `income_transaction` SET `cost`=? ,`status`=? WHERE ITID = ?");        
$stmt->bind_param("dii",$cost,$status,$incometransactionid);   

if ($stmt->execute()) {			
    
     $stmt->close();
     return true; 
 } else {
    return false;
 }
}
public function deleteproject($projectid) {
       
    $stmt = $this->conn->prepare("DELETE FROM `project` WHERE PID = ?");        
$stmt->bind_param("i", $projectid);   

if ($stmt->execute()) {			
    
     $stmt->close();
     return true; 
 } else {
    return false;
 }
}

public function updateexpense($id,$name,$description) {
       
    $stmt = $this->conn->prepare("UPDATE `expense` SET `name`= ?,`description`= ? WHERE EID = ?");        
$stmt->bind_param("ssi",$name,$description,$id);   

if ($stmt->execute()) {			
    
     $stmt->close();
     return true; 
 } else {
    return false;
 }
}


public function deleteexpns($id) {
       
    $stmt = $this->conn->prepare("DELETE FROM `expense` WHERE EID = ?");        
$stmt->bind_param("i", $id);   

if ($stmt->execute()) {			
    
     $stmt->close();
     return true; 
 } else {
    return false;
 }
}

//project type sql manage

public function project_type_delete($id) {
       
    $stmt = $this->conn->prepare("DELETE FROM `project_type` WHERE TID = ?");        
    $stmt->bind_param("i", $id);   

if ($stmt->execute()) {			
    
     $stmt->close();
     return true; 
 } else {
    return false;
 }
}

public function project_type_update($id,$name,$description) {
       
    $stmt = $this->conn->prepare("UPDATE `project_type` SET `name`=?,`description`=? WHERE TID=?");        
$stmt->bind_param("ssi",$name,$description,$id);   

if ($stmt->execute()) {			
    
     $stmt->close();
     return true; 
 } else {
    return false;
 }
}


public function project_type_create($name,$description) {
                                
    $stmt = $this->conn->prepare("INSERT INTO `project_type`(`TID`, `name`, `description`, `created_at`) VALUES (Null,?,?,NOW())");
 
    $stmt->bind_param("ss",$name,$description);
    $result = $stmt->execute();
  
    $last_id=$stmt->insert_id;
    $stmt->close();
    // check for successful store
    if ($result) {
    return $last_id;
    } else {
    return false;
    }
    }
    
    







}

?>