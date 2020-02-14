 <?php
$title= "Room | Student";

include_once "header.php"; 

	if(isset($_POST['assignroom'])){
		$error=[];//arrray
		//check for Student Name
		if(isset($_POST['studentID']) && !empty($_POST['studentID']) && trim($_POST['studentID']) !=""){
				$sr->set('studentID',$_POST['studentID']);
			}
		else{
			$error['studentID']="Select Student Name";
		}
		//check for Room Name
		if(isset($_POST['roomID']) && !empty($_POST['roomID']) && trim($_POST['roomID']) !=""){
			$sr->set('roomID',$_POST['roomID']);
			}
		else{  
			$error['roomID']="Select Room Name";
		}
	
		//check for bed Name
		if(isset($_POST['bedID']) && !empty($_POST['bedID']) && trim($_POST['bedID']) !=""){
			$sr->set('bedID',$_POST['bedID']);
			}
		else{
			$error['bedID']="Select Bed Name";
			}
		
		//check for description
		if(isset($_POST['description']) && !empty($_POST['description']) && trim($_POST['description']) !=""){
				$sr->set('description',$_POST['description']);
			}
		else{
			$error['description']="Enter Description";
		}
		$sr->set('date_of_joining',date('Y-m-d H:i:s'));
		$sr->set('created_by',$_SESSION['admin_username']);
		$status=$sr->create();
	}
		$dac= $student->getStudentWithID();
	  	$data= $room->getRoomForSelect();
	  	$dat= $bed->getBedForSelect();
 ?>


	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<script type="text/javascript" src="js/registration.js">	
	</script>

		<div class="rightbar">
			<h2>Student | Room Bed Assignment</h2>
			<?php if(isset($status) && $status >0){ ?>
	            <div class="info" style="color:#0f0">
	            Room and Bed Assigned</div>
	            <?php }else if(isset($status) && $status==false){ ?>
	            <div class="info" style="color:#f00">
	            Room and Bed Assignment Failed</div>
 	            <?php }else{ ?>
	            <?php } ?>
			<form action="" method="post" onsubmit="return formvalidaiton()"  name="validform" enctype="multipart/form-data">
				<div class="indent">
					<label>Student Name</label>
						<input type="text" name="studentID" value="<?php echo $dac[0]->fullName; ?>">
						<br>
						<span>
							<?php  if(isset($error['studentID'])){
								echo $error['studentID'];
								}?>
						</span>
				</div>
				<div class="indent">
                        <label>Room Name</label>
	                       	<select name="roomID">
	                            <option value="">Select Room</option>
	                            <?php foreach ($data as $d) { ?>
	                            <option value="<?php echo $d->roomID; ?>"><?php echo $d->roomName; ?></option>
	                            <?php } ?>
	                        </select>
                        <br>
                        <span><?php 
                            if(isset($error['roomID'])){
                                echo $error['roomID'];
                            }?>
                        </span>
                    </div>
				
				<div class="indent">
					<label>Bed Name</label>
						<select name="roomID">
	                        <option value="">Select Bed</option>
	                        <?php foreach ($dat as $d) { ?>
	                        <option value="<?php echo $d->bedID; ?>"><?php echo $d->bedName; ?></option>
	                        <?php } ?>
	                    </select>
						<br>
						<span>
							<?php  if(isset($error['bedID'])){
								echo $error['bedID'];
							}?>
						</span>
				</div>
				<div class="indent">
					<label>Description</label>
						<input type="text" name="description"/>
							<br>
							<span>
								<?php  if(isset($error['description'])){
									echo $error['description'];
									}?>
							</span>
				</div>
				<input type="submit" name="assignroom" value="Save">
				<input type="submit" name="reset" value="Reset">
			</form>
		</div>
	</div>
	<?php include_once"footer.php"; ?>
