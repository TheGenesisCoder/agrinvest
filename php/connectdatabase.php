
<?php
	session_start();
	
	include "db_config.php";

    class User{

        public $db;

        public function __construct(){

            $this->db =  mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
			if(mysqli_connect_errno()) {

              echo "Error: Could not connect to database.";

                    exit;

            }

        }
		public function connect_user($username, $password){
		$query = "SELECT * FROM investors where username = '".$username."  and password= '".$password."';";
		$result = mysqli_query($this->db, $query);
		
		if($result ){
			return $result;
		}
		else{
			return false;
		}
	}
	}
	?>
