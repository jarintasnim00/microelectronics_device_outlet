<?php
     $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
?>
<?php 


class Customer{
	
	
	private $db;
	private $fm;
	
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}


	public function customerRegistration($data){
		$name = mysqli_real_escape_string($this->db->link,$data['name']);
		$phone_number = mysqli_real_escape_string($this->db->link,$data['phone_number']);
		$address = mysqli_real_escape_string($this->db->link,$data['address']);
		$email = mysqli_real_escape_string($this->db->link,$data['email']);
		$password= mysqli_real_escape_string($this->db->link,md5($data['password']));
		

		if ($name == "" || $phone_number == "" || $address== "" || $email == "" || $password == "" ) {
	    	$msg = "<span class='error'>Field must not be empty!</span>";
			return $msg;
	    }
	     $mailquery ="SELECT *FROM tbl_customer WHERE email= '$email' LIMIT 1";
	     $mailchk  = $this->db->select( $mailquery);
	     if ($mailchk != false) {
	     	$msg = "<span class='error'>Email already exist</span>";
			return $msg;
	     }
	     else{

	     	 $query = "INSERT INTO tbl_customer(name,phone_number,address,email,password) VALUES('$name',
		    	 '$phone_number','$address','$email','$password')";
		    	 $inserted_row = $this->db->insert($query);
				 if ($inserted_row) {
					$msg = "<span class='success'>Registration Successfully.</span>";
					return $msg;
				 }else{
					$msg = "<span class='error'>Registration Not Completed. Tray Again!.</span>";
					return $msg;
			}
	     }
	}
	  public function customerLogin($data){
	  	  $email = mysqli_real_escape_string($this->db->link,$data['email']);
		$password= mysqli_real_escape_string($this->db->link,md5($data['password']));
		if (empty($email) || empty($password)) {
			$msg = "<span class='error'>Field must not be empty!</span>";
			return $msg;
		}
		$query ="SELECT *FROM tbl_customer WHERE email= '$email' AND password= '$password'";
	     $result  = $this->db->select( $query);
	     if ($result != false) {
	     	$value = $result->fetch_assoc();

	     		Session::set("custLogin",true);
	     		Session::set("cmrId",$value['id']);
	     		Session::set("cmrName",$value['name']);
	     	echo "<script>window.location ='cart.php';</script>";
	    }
	    else{

         $msg = "<span class='error'>Please register before login</span>";
			return $msg;

	    }
    }

      public function getCustomerData($id){

          $query = "SELECT * FROM  tbl_customer WHERE id = '$id'";
     	$result = $this->db->select($query);
     	return $result;

      }

      public function customerUpdate($data,$cmrId){

      	$name = mysqli_real_escape_string($this->db->link,$data['name']);
		$phone_number = mysqli_real_escape_string($this->db->link,$data['phone_number']);
		$address = mysqli_real_escape_string($this->db->link,$data['address']);
		$email = mysqli_real_escape_string($this->db->link,$data['email']);
		

		if ($name == "" || $phone_number == "" || $address== "" || $email == ""  ) {
	    	$msg = "<span class='error'>Field must not be empty!</span>";
			return $msg;
	    } else{

		    	$query = "UPDATE tbl_customer
		    	 SET
		    	  name  ='$name',
		    	  phone_number ='$phone_number',
		    	  address='$address',
		    	  email='$email'
                 WHERE id='$cmrId'";
			$updated_row = $this->db->update($query);
			if ($updated_row) {
				$msg = "<span class='success'>Customer Data Updated Successfully.</span>";
				return $msg;
			}else{
				$msg = "<span class='error'>Customer Data not Updated!</span>";
				return $msg;
			}
		}
	     }

}

?>