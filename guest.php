<?php 

class Guest{

	public $connect;

	function __construct(){
		$this->connect = new mysqli('localhost','root','','birthdaydb');

		if ($this->connect->connect_error) {

		echo "ERROR CONNECTING TO DATABASE".$connect->connect_error;

		}else{

		echo "Successfully connected";

		}

	}

	
	function addGuest($name,$phone,$gender,$state){
		
		$this->connect->query("INSERT INTO guests SET guests_name='$name',guests_number='$phone',guests_gender='$gender',$guests_state_id='$state'");

							}
		}

	function getstate(){

		$query = "SELECT * FROM state";
		$query2 = $this->connect->query($query);
		$rows = $query2->fetch_assoc();

		$allstates=array();

		while ($rows){
			$allstates[] = $rows;

		}

		return $allstates;
	}

 ?>