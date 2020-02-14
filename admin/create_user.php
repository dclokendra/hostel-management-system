  <?php 
    $title= "Create User"; 
	include_once "header.php"; 
 
    if(isset($_POST['save'])){
        $error=[];//arrray
        //check for email
        if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'] !="")){
                $admin->set('email',$_POST['email']);
            }
        else{
            $error['email']="Enter Email";
        }
        //check for username
        if(isset($_POST['username']) && !empty($_POST['username']) && trim($_POST['username']) !=""){
                $admin->set('username',$_POST['username']);
            }
        else{
            $error['username']="Enter Username";
        }
        //check for password
        if(isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])!=""){
            $admin->set('password',$_POST['password']);
            }
        else{
            $error['password']="Enter password";
        }
        
        $admin->set('role',$_POST['role']);
        $admin->set('status',$_POST['status']);
       	$admin->set('created_by',$_SESSION['admin_username']);
   		$admin->set('created_date',date('Y-m-d H:i:s'));
        $stat=$admin->create();
    }
 ?>
 <link rel="stylesheet" type="text/css" href="css/layout.css">
 		<div class="rightbar">
 			<h2>Create User</h2>
	        <form action="" method="post" name="validform" onsubmit="return validate()">
	            <?php if(isset($stat) && $stat >0){ ?>
		            <div class="info" style="color:#0f0">
		            User Created</div>
		            <?php }else if(isset($stat) && $stat==false){ ?>
		            <div class="info" style="color:#f00">
		            User Creation failed</div>
		            <?php } ?>
	        	<div class="indent">
	                <label>Email</label>
	                <input type="email" name="email"/>
	                <br>
	                <span>
	                    <?php
	                    if(isset($error['email'])){
	                        echo $error['email'];
	                    }?>
	                </span>
	            </div>
	            <div class="indent">
	                <label>Username</label>
	                <input type="text" name="username"/>
	                <br>
	                <span>
	                    <?php
	                    if(isset($error['username'])){
	                        echo $error['username'];
	                    }?>
	                </span>
	            </div>
	            <div class="indent">
	                <label>Password</label>
	                <input type="password" name="password"/>
	                <br>
	                <span>
	                    <?php
	                    if(isset($error['password'])){
	                        echo $error['password'];
	                    }?>
	                </span>
	            </div>
	             <div class="indent">
	            	<label>Role</label>
	                    <input type="radio" name="role" value="admin">Admin
	                    <input type="radio" name="role" value="user" checked>User
	            </div>
	            <div class="indent">
	            	<label>Status</label>
	                    <input type="radio" name="status" value="1">Active
	                    <input type="radio" name="status" value="0" checked>De Active
	            </div>
	            <input type="submit" name="save" class="save" value="Save user">
	        </form>
    	</div>
    </div>
    <?php include_once"footer.php"; ?>
</body>
</html>