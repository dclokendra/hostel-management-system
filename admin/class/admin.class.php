<?php  
require_once "common.class.php";
	class Admin extends Common{
		protected $adminID,$email,$username,$password,$status;

		function set($var,$value){
			$this->$var=$value;
		}

		function get($var){
			return $this->$var;
		}

		function login(){
			$sql="select * from admin where username='$this->username' and password='$this->password' and status=1";
			$conn=new mysqli('localhost:3306','root','','db_hostel');
			if($conn->connect_errno !=0){
				die('Database Connection Error');
			}
			$result=$conn->query($sql);
			if($result->num_rows == 1){
				$data=$result->fetch_object();
				session_start();
				$_SESSION['admin_username']=$data->username;
				header('location:admin/dashboard.php');
			}
			else{
				return "Username and Password doesnot match";
			}
		}

		function create(){
			
		 $sql="insert into admin (email,username,password,role,status,created_by,created_date) values('$this->email','$this->username','$this->password','$this->role','$this->status','$this->created_by','$this->created_date')";
		 return $this->insert($sql);
		}
		
		function lists(){
			$sql="select * from admin";
			return $this->select($sql);
		}

		function remove(){
			$sql="delete from admin where adminID='$this->adminID'";
			return $this->delete($sql);
		}

		function getUserbyID(){
			$sql="select * from admin where adminID='$this->adminID'";
			return $this->select($sql);
		}
		function edit(){
			 $sql="update admin set email='$this->email',username='$this->username',password='$this->password',role='$this->role',status='$this->status',updated_date='$this->updated_date',updated_by='$this->updated_by' where adminID='$this->adminID'";
			return $this->update($sql);
		}

	}
 ?> 