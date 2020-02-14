<?php
$title= "Student Registration";

include_once "header.php"; 

	if(isset($_POST['submit'])){
		$error=[];//arrray
		//check for full name
		if(isset($_POST['fullName']) && !empty($_POST['fullName']) && trim($_POST['fullName']) !=""){
				$student->set('fullName',$_POST['fullName']);
			}
		else{
			$error['fullName']="Enter Full Name";
		} 

		//check for photo
		//print_r($_FILES);
		if($_FILES['photo']['error']==0){
			if($_FILES['photo']['type']=='image/jpg' || $_FILES['photo']['type']=='image/jpeg'){
				if($_FILES['photo']['size']<1000000){
					move_uploaded_file($_FILES['photo']['tmp_name'],'../images/'.$_FILES['photo']['name']);
					$student->set('photo',$_FILES['photo']['name']);
				}
				else{
					$error['photo']="Image must be less than 1 MB";
				}
			}
			else{
				$error['photo']="Image must be of jpg format";
			}
		}
		else{
			$error['photo']='Image upload Error';
		}
	
		//check for mobile
		if(isset($_POST['mobile']) && !empty($_POST['mobile']) && trim($_POST['mobile']) !=""){
			$student->set('mobile',$_POST['mobile']);
			}
		else{
			$error['mobile']="Enter Mobile Number";
		}
		//check for email
		
		if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email']) !=""){
			$student->set('email',$_POST[ 'email']);
			}
		else{
			$error['email']="Enter Email";
		}
		//check for dob
		if(isset($_POST['dob']) && !empty($_POST['dob']) && trim($_POST['dob']) !=""){
			$student->set('dob',$_POST['dob']);
			}
		else{
			$error['dob']="Enter DOB";
		}
		//check for address
		if(isset($_POST['address']) && !empty($_POST['address']) && trim($_POST['address']) !=""){
				$student->set('address',$_POST['address']);
			}
		else{
			$error['address']="Enter address";
		}
		$student->set('created_by',$_SESSION['admin_username']);
   		$student->set('created_date',date('Y-m-d H:i:s'));
		$status=$student->create();
	}
 ?>


	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<script type="text/javascript" src="js/registration.js">	
	</script>

		<div class="rightbar">
			<h2>Student Registration</h2>
			<?php if(isset($status) && $status >0){ ?>
	            <div class="info" style="color:#0f0">
	            Registration Success</div>
	            <?php }else if(isset($status) && $status==false){ ?>
	            <div class="info" style="color:#f00">
	            Registration Failed</div>
	            <?php } ?>
	           
			<form action="#" method="post" onsubmit="return formvalidaiton()"  name="validform" enctype="multipart/form-data">
				<div class="indent">
					<label>Full Name</label>
					<input type="text" name="fullName">
					<br>
					<span id="fullName">
						<?php  if(isset($error['fullName'])){
							echo $error['fullName'];
							}?>
					</span>
				</div>
				
				<div class="indent">
					<label>Photo</label>
					<input type="file" name="photo"/>
					<br>
					<sapn>
						<?php  if(isset($error['photo'])){
						echo $error['photo'];
						}?>
					</sapn>
				</div>
				<br>
				<div class="indent">
					<label>Mobile</label>
					<input type="number" name="mobile"/>
					<br>
					<span id="mobile">
						<?php  if(isset($error['mobile'])){
							echo $error['mobile'];
						}?>
					</span>
				</div>
				<div class="indent">
					<label for="email">Email</label>
					<input type="text" name="email"/ >
					<br>
					<span id="email">
						<?php  if(isset($error['email'])){
							echo $error['email'];
							}?>
					</span>
				</div>
				<div class="indent">
					<label>DOB</label>
					<input type="date" name="dob" >
					<br>
					<span id="dob">
						<?php  if(isset($error['dob'])){
							echo $error['dob'];
							}?>
						</span>
				</div>
				<div class="indent">
					 <label>Address</label>
					<input type="text" name="address"/>
					<br>
					<span id="address">
						<?php  if(isset($error['address'])){
							echo $error['address'];
							}?>
					</span>
				</div>
				<input type="submit" class="submit" name="submit" value="Submit">
				<input type="submit" class="submit" name="reset" value="Reset">
			</form>
		</div>
	</div>
	<?php include_once"footer.php"; ?>
