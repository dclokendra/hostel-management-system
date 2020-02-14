<?php 
require_once "common.class.php";
	class Contact extends Common{
		protected $contactID,$name,$address,$email,$mobile,$message,$adminID;
		
		function create(){
		    $sql="insert into contact (name,address,email,mobile,message) values('$this->name','$this->address','$this->email','$this->mobile','$this->message')";
		 return $this->insert($sql);
		} 
		
		function lists(){
			$sql="select * from contact";
			return $this->select($sql);
		} 
		
		function remove(){
			$sql="delete from contact where contactID='$this->contactID'";
			return $this->delete($sql);
		}

		function getStudentByID(){
			$sql="select * from contact where contactID='$this->contactID'";
			return $this->select($sql);
		}
		function edit(){
			 $sql="update contact set name='$this->name',address='$this->address',email='$this->email',mobile='$this->mobile',message='$this->message' where contactID='$this->contactID'";
			return $this->update($sql);
		}
		
	}
	
 ?>