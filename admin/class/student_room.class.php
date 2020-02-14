<?php 
require_once "common.class.php";
	class Student_room extends Common{
		protected $id,$studentID,$roomID,$bedID,$description,$date_of_joining,$created_by,$updated_by,$updated_date,$adminID;
		
		function create(){
		    echo $sql="insert into student_room (studentID,roomID,bedID,description,date_of_joining,created_by) values('$this->fname','$this->lname','$this->bedID','$this->description','$this->date_of_joining','$this->created_by')";
		 return $this->insert($sql);
		} 
		  
		function lists(){
			$sql="select * from student_room";
			return $this->select($sql);
		} 
		
		function remove(){
			$sql="delete from student_room where id='$this->id'";
			return $this->delete($sql);
		}

		function getStudentRoomByID(){
			$sql="select * from student_room where id='$this->id'";
			return $this->select($sql);
		}
		function edit(){
			 $sql="update student_room set studentID='$this->studentID',roomID='$this->roomID',bedID='$this->bedID',description='$this->description',updated_date='$this->updated_date',updated_by='$this->updated_by' where id='$this->id'";
			return $this->update($sql);
		}
	}
	
 ?>