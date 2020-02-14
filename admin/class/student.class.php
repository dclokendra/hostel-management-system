<?php 
require_once "common.class.php";
	class Student extends Common{
		protected $studentID,$fullName,$photo,$mobile,$email,$dob,$address,$created_by,$created_date,$updated_by,$updated_date,$adminID;
		
		function create(){
		    $sql="insert into student (fullName,photo,mobile,email,dob,address,created_by,created_date) values('$this->fullName','$this->photo','$this->mobile','$this->email','$this->dob','$this->address','$this->created_by','$this->created_date')";
		 return $this->insert($sql);
		} 
		
		function lists(){
			$sql="select * from student";
			return $this->select($sql);
		} 
		
		function remove(){
			$sql="delete from student where studentID='$this->studentID'";
			return $this->delete($sql);
		}

		function getStudentByID(){
			$sql="select * from student where studentID='$this->studentID'";
			return $this->select($sql);
		}
		function edit(){
			 $sql="update student set fullName='$this->fullName',photo='$this->photo',mobile='$this->mobile',email='$this->email',dob='$this->dob',address='$this->address',updated_date='$this->updated_date',updated_by='$this->updated_by' where studentID='$this->studentID'";
			return $this->update($sql);
		}
		function getStudentWithID(){
			$sql="select studentID,fullName from student";
			return $this->select($sql);
		}
	}
	
 ?>