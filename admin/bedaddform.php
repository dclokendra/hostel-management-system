<?php 
 $title= "Bed Form";
include_once "header.php"; 
    $room->set('roomID',$_GET['id']); 
    if(isset($_POST['submit'])){
        $error=[];//arrray

        $bed->set('roomName',$_POST['roomName']);
        //check for bed name
        if(isset($_POST['bedname']) && !empty($_POST['bedname']) && trim($_POST['bedname'] !="")){
            $bed->set('bedName',$_POST['bedname']);
            }
        else{
            $error['bedname']="Enter Bed Name";
        }
        //check for description
        if(isset($_POST['description']) && !empty($_POST['description']) && trim($_POST['description'] !="")){
            $bed->set('description',$_POST['description']);
            }
        else{
            $error['description']="Write description";
        }
       
        $bed->set('status',$_POST['status']);   
        $bed->set('created_by',$_SESSION['admin_username']);
        $bed->set('created_date',date('Y-m-d H:i:s'));
        $status=$bed->create();
    }
    $data=$room->getBedForRoom();
 ?>


    <link rel="stylesheet" type="text/css" href="css/layout.css">
	<script type="text/javascript" src="js/addbed.js">
    </script>
        <div class="rightbar">
        	<h2>Add New Bed</h2>
                <?php if(isset($status) && $status >0){ ?>
                    <div class="info" style="color:#0f0">
                    Bed Inserted</div>
                    <?php }else if(isset($status) && $status==false){ ?>
                    <div class="info" style="color:#f00">
                    Bed Insert failed</div>
                    <?php }else{ ?>
                    <?php } ?>
            	<form action="" method="post" onsubmit="return validate()" name="bedform">
                     <div class="indent">
                        <label>Room Name</label>
                        <input type="text" name="roomName" value="<?php echo $data[0]->roomName; ?>">
                    </div>
                    <div class="indent">
                		<label>Bed Name</label>
                		<input type="text" name="bedname">
                        <br>
                		<span id="bedname"><?php 
                            if(isset($error['bedname'])){
                                echo $error['bedname'];
                            }?>
                        </span>
            		</div>
                    <div class="indent">
                		<label>Description</label>
                		<input type="text" name="description">
                        <br>
                		<span id="description"> <?php 
                            if(isset($error['description'])){
                                echo $error['description'];
                            }?>
                        </span>
                    </div>
                    <div class="indent">
                        <label>Status</label>
                        <input type="radio" name="status" value="1">Allocated
                        <input type="radio" name="status" value="0" checked>Not Allocated
                        <br>
                        <span id="status"> <?php 
                        if(isset($error['status'])){
                            echo $error['status'];
                            }?>
                        </span>
                    </div>
            		<input type="submit" name="submit" value="Save"/>
            		<input type="submit" name="reset" value="Reset"/>
            	</form>
        </div>    
    </div>
    <?php include_once"footer.php"; ?>
