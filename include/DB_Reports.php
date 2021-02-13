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

  
  


public function insertintoproject($number,$city,$owner_id,$created_at) {
                                
    $stmt = $this->conn->prepare("INSERT INTO `project`(`PID`, `number`, `city`, `owner_id`, `created_at`) VALUES (Null,?,?,?,?)");
    $stmt->bind_param("isis",$number,$city,$owner_id,$created_at);
    $result = $stmt->execute();
    $stmt->close();
 // check for successful stores
 if ($result) {
     return true;
 } else {
     return false;
 }
}

    public function getclient($clientid) {
       
        $stmt = $this->conn->prepare("SELECT `CID`, `name`, `address`, `phone_number` FROM `client` WHERE CID = ?");        
    $stmt->bind_param("i", $clientid);   

    if ($stmt->execute()) {			
         $order = $stmt->get_result()->fetch_assoc();
         $stmt->close();
         return $order; 
     } else {
        return NULL;
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
       
    $stmt = $this->conn->prepare("SELECT `EID`, `name`, `description`, `cost` FROM `expense` WHERE EID = ?");        
$stmt->bind_param("i", $expenseid);   

if ($stmt->execute()) {			
     $order = $stmt->get_result()->fetch_assoc();
     $stmt->close();
     return $order; 
 } else {
    return NULL;
 }
}


public function getexpense_transaction($expensetrans_id) {
       
    $stmt = $this->conn->prepare("SELECT `ETID`, `fk_UID`, `fk_PID`, `fk_EID`, `cost`, `created_at` FROM `expense_transaction` WHERE ETID = ? ");        
    $stmt->bind_param("i", $expensetrans_id);   

if ($stmt->execute()) {			
     $order = $stmt->get_result()->fetch_assoc();
     $stmt->close();
     return $order; 
 } else {
    return NULL;
 }
}


public function getincome($incomeid) {
       
    $stmt = $this->conn->prepare("SELECT `IID`, `name`, `description`, `cost` FROM `income` WHERE IID = ?");        
$stmt->bind_param("i", $incomeid);   

if ($stmt->execute()) {			
     $order = $stmt->get_result()->fetch_assoc();
     $stmt->close();
     return $order; 
 } else {
    return NULL;
 }
}




public function getexpensetransaction_sum($projecttid) {
       
    $stmt = $this->conn->prepare("SELECT SUM(cost) as sum ,COUNT(cost) AS trnscount FROM expense_transaction WHERE fk_PID = ?");        
$stmt->bind_param("i", $projecttid);   

if ($stmt->execute()) {			
     $order = $stmt->get_result()->fetch_assoc();
     $stmt->close();
     return $order; 
 } else {
    return NULL;
 }
}

public function getincometransaction_sum($projecttid) {
       
    $stmt = $this->conn->prepare("SELECT SUM(cost) as sum,COUNT(cost) AS incmcount FROM income_transaction fk_PID WHERE fk_PID = ?");        
$stmt->bind_param("i", $projecttid);   

if ($stmt->execute()) {			
     $order = $stmt->get_result()->fetch_assoc();
     $stmt->close();
     return $order; 
 } else {
    return NULL;
 }
}






public function getproject($projecttid) {
       
    $stmt = $this->conn->prepare("SELECT `PID`, `number`, `city`, `client_name`, `client_phone`, `created_at` FROM `project` WHERE PID = ?");        
$stmt->bind_param("i", $projecttid);   

if ($stmt->execute()) {			
     $order = $stmt->get_result()->fetch_assoc();
     $stmt->close();
     return $order; 
 } else {
    return NULL;
 }
}

  
/**
 * getAllProject 
 *
 * @return array
 */
public function getAllProject() {
      
    $stmt = $this->conn->prepare("SELECT * FROM project   ORDER BY created_at DESC");              




if ($stmt->execute()) {			
$project = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);


return $project; 
$stmt->close();
} else {
die("Adding record failed: " .$stmt->error); 
$stmt->close();

}

}

public function getincome_transaction($incometransactionid) {
       
    $stmt = $this->conn->prepare("SELECT `ITID`, `fk_UID`, `fk_PID`, `cost`, `created_at` FROM `income_transaction` WHERE ITID = $incometransactionid ");        
$stmt->bind_param("i", $incometransactionid);   

if ($stmt->execute()) {			
     $order = $stmt->get_result()->fetch_assoc();
     $stmt->close();
     return $order; 
 } else {
    return NULL;
 }
}

public function getincome_transactionproject($PID) {//unfinished
       
    $stmt = $this->conn->prepare("");        
$stmt->bind_param("i", $incometransactionid);   

if ($stmt->execute()) {			
     $order = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
     $stmt->close();
     return $order; 
 } else {
    return NULL;
 }
}






















  

public function get_expenses_project($PID) {
    
    $stmt = $this->conn->prepare("SELECT   ETID ,  name , cost, T.created_at as date FROM expense_transaction AS T  INNER JOIN expense AS E  ON   T.fk_EID = E.EID where T.fk_PID = ?  ORDER BY created_at DESC");              
    $stmt->bind_param("i", $PID);   
if ($stmt->execute()) {			
$expenses = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
return $expenses; 
$stmt->close();
} else {
die("Adding record failed: " .$stmt->error); 
$stmt->close();

}

}



public function get_income_project($PID) {
    
    $stmt = $this->conn->prepare("SELECT `ITID`, `cost`, `created_at` FROM `income_transaction`   where fk_PID = ?  ORDER BY created_at DESC");              
    $stmt->bind_param("i", $PID);   
if ($stmt->execute()) {			
$incomes = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
return $incomes; 
$stmt->close();
} else {
die("Adding record failed: " .$stmt->error); 
$stmt->close();

}

}

  
}
?>