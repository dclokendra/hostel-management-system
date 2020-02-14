  <?php 
    $title= "Edit User"; 
	include_once "header.php"; 
 $admin->set('adminID',$_GET['id']);
    if(isset($_POST['btnupdate'])){
       	$admin->set('email',$_POST['email']);
        $admin->set('username',$_POST['username']);
 		$admin->set('password',$_POST['password']);
        $admin->set('role',$_POST['role']);
        $admin->set('status',$_POST['status']);
       	$admin->set('created_by',$_SESSION['admin_username']);
   		$admin->set('created_date',date('Y-m-d H:i:s'));
   		$admin->set('updated_by',$_SESSION['admin_username']);
   		$admin->set('updated_date',date('Y-m-d H:i:s'));
        $stat=$admin->edit();
    }
     $data=$admin->getUserbyID();
 ?>
 		<div class="rightbar">
 			<h2>Edit User</h2>
	        <form action="" method="post" name="validform" onsubmit="return validate()">
	            <?php if(isset($stat) && $stat >0){ ?>
		            <div class="info" style="color:#0f0">
		            User Updated</div>
		            <?php }else if(isset($stat) && $stat==false){ ?>
		            <div class="info" style="color:#f00">
		            User Update failed</div>
		            <?php } ?>
	        	<div class="indent">
	                <label>Email</label>
	                <input type="email" name="email" value="<?php echo $data[0]->email; ?>"/>
	            </div>
	            <div class="indent">
	                <label>Username</label>
	                <input type="text" name="username" value="<?php echo $data[0]->username; ?>"/>
	            </div>
	            <div class="indent">
	                <label>Password</label>
	                <input type="password" name="password" value="<?php echo $data[0]->password; ?>"/>
	            </div>
	             <div class="indent">
	            	<label>Role</label>
	            		<?php if($data[0]->status=='admin'){ ?>
	                    <input type="radio" name="role" value="admin" checked>Admin
	                    <input type="radio" name="role" value="user">User
	                <?php }else{?>
	                	<input type="radio" name="role" value="admin">Admin
	                    <input type="radio" name="role" value="user" checked>User
	                <?php }?>
	            </div>
	            <div class="indent">
	            	<label>Status</label>
	            	<?php if($data[0]->status==0){ ?>
	            		<input type="radio" name="status" value="1">Active
	                    <input type="radio" name="status" value="0" checked>De Active
	            	<?php }else{?>
	                    <input type="radio" name="status" value="1" checked>Active
	                    <input type="radio" name="status" value="0">De Active
	                <?php }?>
	            </div>
	            <input type="submit" name="btnupdate" class="save" value="Save user">
	            <input type="submit" name="clear" value="Clear">
	        </form>
    	</div>
    </div>
    <?php include_once"footer.php"; ?>
</body>
</html>