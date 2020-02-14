
<?php 
$title= "Create Room"; 
include_once "header.php"; 
    
	if(isset($_POST['btnadd'])){
		$error=[];      
		if(isset($_POST['roomname']) && !empty($_POST['roomname']) && trim($_POST['roomname'] !="")){
				$room->set('roomName',$_POST['roomname']);
			}
		else{
			$error['roomname']="Enter Room Name";
		}
		//check for floor
		if(isset($_POST['floor']) && !empty($_POST['floor']) && trim($_POST['floor'] !="")){
			$room->set('floor',$_POST['floor']);
			}
		else{
			$error['floor']="Enter floor";
		}
		//check for description
		if(isset($_POST['description']) && !empty($_POST['description']) && trim($_POST['description'] !="")){
			$room->set('description',$_POST['description']);
			}
		else{
			$error['description']="Write description";
		}

		$room->set('created_by',$_SESSION['admin_username']);
    	$room->set('created_date',date('Y-m-d H:i:s'));
    	$status=$room->create();
	}
 ?>

	
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<script type="text/javascript" src="js/addroom.js">  </script>
		<div class="rightbar">
			<h2>Add New Room</h2>
				<?php if(isset($status) && $status >0){ ?>
	            <div class="info" style="color:#0f0">
	            Room Inserted</div>
	            <?php }else if(isset($status) && $status==false){ ?>
	            <div class="info" style="color:#f00">
	            Room Insert failed</div>
	            <?php } ?>
			<form action="" method="post" onsubmit="return validate()" name="valid">
				<div class="indent">
					<label>Room Name</label>
					<input type="text" name="roomname" placeholder="R***"/>
					<br>
					<span id="roomname"><?php  
						if(isset($error['roomname'])){
		 					echo $error['roomname'];
						}?>
					</span>
				</div>
				<div class="indent"> 
					<label>Floor</label>
					<input type="text" name="floor">
					<br>
					<span id="floor"><?php 
						if(isset($error['floor'])){
							echo $error['floor'];
						}?>
					</span>
				</div>
				<div class="indent">
					<label>Dexcription</label>
					<input type="text" name="description">
					<br>
					<span id="description"> <?php 
						if(isset($error['description'])){
							echo $error['description'];
						}?>
					</span>
				</div>
				<input type="submit" name="btnadd" value="Add Room"/>
				<input type="submit" name="reset" value="Reset"/> 
			</form>
		</div>
	</div>
	<?php include_once"footer.php"; ?>
