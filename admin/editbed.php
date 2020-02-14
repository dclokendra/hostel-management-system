<?php 
 $title= "Edit Bed";
include_once "header.php";
    $bed->set('bedID',$_GET['id']);
    $data=$bed->getBedbyID();  
        if(isset($_POST['btnupdate'])){
            $bed->set('roomName',$_POST['roomName']);
            $bed->set('bedName',$_POST['bedname']);
            $bed->set('description',$_POST['description']);
            $bed->set('status',$_POST['status']);
            $bed->set('created_by',$_SESSION['admin_username']);
            $bed->set('created_date',date('Y-m-d H:i:s'));
            $bed->set('updated_by',$_SESSION['admin_username']);
            $bed->set('updated_date',date('Y-m-d H:i:s'));
            $status=$bed->edit();
        }
     
 ?>


    <link rel="stylesheet" type="text/css" href="css/layout.css">
	<script type="text/javascript" src="js/addbed.js">
    </script>
    <div class="content">
        <div class="rightbar">
        	<h2>Edit Bed</h2>
                <?php if(isset($status) && $status >0){ ?>
                    <div class="info" style="color:#0f0">
                    Bed Updated</div>
                    <?php }else if(isset($status) && $status==false){ ?>
                    <div class="info" style="color:#f00">
                    Bed Update failed</div>
                    <?php }else{ ?>
                    <?php } ?>
            	<form action="" method="post" onsubmit="return validate()" name="bedform">
                     <div class="indent">
                        <label>Room Name</label>
                        <input type="text" name="roomName" value="<?php echo $data[0]->roomName;?>"> 
                    </div>
                    <div class="indent">
                		<label>Bed Name</label>
                		<input type="text" name="bedname" value="<?php echo $data[0]->bedName; ?>">
            		</div>
                    <div class="indent">
                		<label>Dexcription</label>
                		<input type="text" name="description" value="<?php echo $data[0]->description; ?>">
                    </div>
                    <div class="indent">
                        <label>Status</label>
                        <?php if($data[0]->status==1){ ?>
                        <input type="radio" name="status" value="1" checked>Allocated
                        <input type="radio" name="status" value="0">Not Allocated
                    <?php }else{?>
                        <input type="radio" name="status" value="1">Allocated
                        <input type="radio" name="status" value="0" checked>Not Allocated
                    <?php }?>
                    </div>
            		<input type="submit" name="btnupdate" value="Save"/>
            		<input type="submit" name="reset" value="Reset"/>
            	</form>
        </div>    
    </div>
    <?php include_once"footer.php"; ?>
