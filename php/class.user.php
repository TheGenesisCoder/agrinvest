
<?php
	session_start();
	
	include "db_config.php";

    class User{

        public $db;

        public function __construct(){

            $this->db =  mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
			if(mysqli_connect_errno()) {

              echo "Error: Could not connect to database.";

                    exit;

            }

        }
		public function connect_user($username, $password){
			
		echo $query = "SELECT * FROM investors WHERE username = '".$username."'  AND  password= '".$password."'";
		$result = mysqli_query($this->db, $query);
		while($row = mysqli_fetch_assoc($result)) {
				$user = $row['username'];
				$pass = $row['password'];
			if(($user === $username ) && ($pass === $password) ){
			return true;
		}
		else{
			return false;
		}
		}
	}
	public function position_checker($username, $password){
		$query = "SELECT  status FROM investors WHERE username = '".$username."'  AND  password= '".$password."' ";
		$result = mysqli_query($this->db, $query);
		$row  = mysqli_fetch_assoc($result);
		
		return $row;
		
	}
	
	
	public function logout(){
		$_SESSION['login'] = false;
		session_unset();
		session_destroy();
		
	}
	public function insert_data($need, $quantity, $product, $address, $size){
		echo $query = "INSERT INTO data_f VALUES need = '". $need ."', quantity = ". $quantity .", product = '". $product ."', address = '". $address ."', size = ". $size ." ;";
		$result = mysqli_query($this->db, $query);
		
		return true;
	}

	}
	?>
