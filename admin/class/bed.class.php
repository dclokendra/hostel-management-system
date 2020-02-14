<?php 
require_once "common.class.php";
	class Bed extends Common{
		protected $bedID,$bedName,$description,$status,$created_by,$created_date,$updated_by,$updated_date,$roomName,$studentID,$adminID;
		
		function create(){
		     $sql="insert into bed (roomName,bedName,description,status,created_by,created_date) values('$this->roomName','$this->bedName','$this->description','$this->status','$this->created_by','$this->created_date')";
		 return $this->insert($sql);
		} 
		
		function lists(){
			$sql="select * from bed";
			return $this->select($sql);
		} 
		
		function remove(){
			$sql="delete from bed where bedID='$this->bedID'";
			return $this->delete($sql);
		}

		function getBedbyID(){
			$sql="select * from bed where bedID='$this->bedID'";
			return $this->select($sql);
		}
		function edit(){
			 $sql="update bed set roomName='$this->roomName',bedName='$this->bedName',description='$this->description',status='$this->status',updated_by='$this->updated_by',updated_date='$this->updated_date' where bedID='$this->bedID'";
			return $this->update($sql);
		}
		function getBedForSelect(){
			$sql="select bedID,bedName from bed";
			return $this->select($sql);
		}
		
	}
	
 ?>