<?php 
require_once "common.class.php";
	class Room extends Common{
		protected $roomID,$roomName,$floor,$description,$created_by,$created_date,$updated_by,$updated_date,$adminID,$studentID;
		
		function create(){
		   echo $sql="insert into room (roomName,floor,description,created_by,created_date) values('$this->roomName','$this->floor','$this->description','$this->created_by','$this->created_date')";
		 return $this->insert($sql);
		} 
		
		function lists(){
			$sql="select * from room";
			return $this->select($sql);
		} 
		
		function remove(){
			$sql="delete from room where roomID='$this->roomID'";
			return $this->delete($sql);
		}

		function getRoomByID(){
			$sql="select * from room where roomID='$this->roomID'";
			return $this->select($sql);
		}
		function edit(){
			 $sql="update room set roomName='$this->roomName',floor='$this->floor',description='$this->description',updated_by='$this->updated_by',updated_date='$this->updated_date' where roomID='$this->roomID'";
			return $this->update($sql);
		}
		
		function getBedForRoom(){
			$sql="select roomID,roomName from room where roomID='$this->roomID' ";
			return $this->select($sql);
		}
		function getRoomForSelect(){
			$sql="select roomID,roomName from room where roomID='$this->roomID' ";
			return $this->select($sql);
		}
	}
	
 ?> 