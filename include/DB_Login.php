<?php 
class DB_Login {
    private $conn;
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
    /**
     * Storing new user
     * returns user details
     */
    public function insertuser($username,$password,$usertype) {
        $hash = $this->hashSSHA($password);
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
		
        $stmt = $this->conn->prepare("INSERT INTO login(userId, usertype, username, encrypted_password, salt, created_at) VALUES (NULL,?,?,?,?,NOW())");
		$stmt->bind_param("isss",$usertype,$username,$encrypted_password,$salt);
		$result = $stmt->execute();
        $stmt->close();

        // check for successful store
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


	/**
     * Change  user password
     */ 
    public function changePass($userid,$password) {
		$hash = $this->hashSSHA($password);
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
        $stmt = $this->conn->prepare("UPDATE login SET encrypted_password=?, salt=?  where userId=?");
		$stmt->bind_param("sss", $encrypted_password, $salt,$userid);
        $result = $stmt->execute();
        $stmt->close(); 
		if($result) return true;
		else return false;  
    }

	
    /**
     * Get user by username and password
     */
    public function getUserByUsernameAndPassword($username, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM login WHERE username = ?");
        $stmt->bind_param("s", $username);

        if ($stmt->execute()) {
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();

            // verifying user password
            $salt = $user['salt'];
            $encrypted_password = $user['encrypted_password'];
            $hash = $this->checkhashSSHA($salt, $password);
            // check for password equality
            if ($encrypted_password == $hash) {
                // user authentication details are correct
                return $user;
            }
        } else {
            return NULL;
        }
    }
	
    /**
     * Encrypting password
     * @param password
     * returns salt and encrypted password
     */
    public function hashSSHA($password) {

        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }

    /**
     * Decrypting password
     * @param salt, password
     * returns hash string
     */
    public function checkhashSSHA($salt, $password) {

        $hash = base64_encode(sha1($password . $salt, true) . $salt);

        return $hash;
    }
    function isLoginSessionExpired() {
        session_start();
        $login_session_duration = 10; 
        $current_time = time(); 
        if(isset($_SESSION['loggedin_time']) and isset($_SESSION["userId"])){  
            if(((time() - $_SESSION['loggedin_time']) > $login_session_duration)){ 
                return true; 
            }
            return false;
        }
        return false;
    }

}
?>
