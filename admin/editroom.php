
<?php 

include_once"header.php"; 
$title="Edit Room";
$room->set('roomID',$_GET['id']);
 if(isset($_POST['btnupdate'])){
   	$room->set('roomName',$_POST['roomname']);
   	$room->set('floor',$_POST['floor']);  
    $room->set('description',$_POST[ 'description']);
    $room->set('created_by',$_SESSION['admin_username']);
    $room->set('created_date',date('Y-m-d H:i:s'));
    $room->set('updated_by',$_SESSION['admin_username']);
    $room->set('updated_date',date('Y-m-d H:i:s'));
    $status=$room->edit();
 }
$data=$room->getRoomByID();
	
 ?>

	
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<script type="text/javascript" src="js/addroom.js">  </script>
	<div class="rightbar">
		<h2>Edit Room</h2>
			<?php if(isset($status) && $status =1){ ?>
            <div class="info" style="color:#0f0">
            Room Updated</div>
            <?php }else if(isset($status) && $status==0){ ?>
            <div class="info" style="color:#f00">
            Room Update failed</div>
            <?php } ?>
		<form action="" method="post" onsubmit="return validate()" name="valid">
			<div class="indent">
				<label>Room Name</label>
				<input type="text" name="roomname" value="<?php echo $data[0]->roomName; ?>">
			</div>
			<div class="indent"> 
				<label>Floor</label>
				<input type="text" name="floor" value="<?php echo $data[0]->floor; ?>">
				
			</div>
			<div class="indent">
				<label>Dexcription</label>
				<input type="text" name="description" value="<?php echo $data[0]->description; ?>">
			</div>
			<input type="submit" name="btnupdate" value="Update Room"/>
			<input type="submit" name="reset" value="Reset"/> 
		</form>
	</div>
	</div>
	<?php include_once"footer.php"; ?>
