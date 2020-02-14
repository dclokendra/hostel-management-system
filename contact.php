<?php 
require_once"object.php";
require_once"admin/class/contact.class.php";
    if(isset($_POST['submit'])){
        $error=[];//arrray
        if(isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name']) !=""){
            $contact->set('name',$_POST['name']);
            }
        else{
            $error['name']="Enter Name";
        }

        //check for address
         if(isset($_POST['address']) && !empty($_POST['address']) && trim($_POST['address']) !=""){
            $contact->set('address',$_POST['address']);
            }
        else{
            $error['address']="Enter address Name";
        }

         //check for email
        if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email']) !=""){
                $contact->set('email',$_POST['email']);
            }
        else{
            $error['email']="Enter Email";
        }

        //check for mobile
        if(isset($_POST['mobile']) && !empty($_POST['mobile']) && trim($_POST['mobile']) !=""){
            $contact->set('mobile',$_POST['mobile']);
            }
        else{
            $error['mobile']="Enter mobile";
        }
        
        //check for message
        if(isset($_POST['message']) && !empty($_POST['message']) && trim($_POST['message']) !=""){
                $contact->set('message',$_POST['message']);
            }
        else{
            $error['message']="Write Message";
        }
        $status=$contact->create();
        
    }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Page</title>
        <link rel="stylesheet" type="text/css" href="admin/css/form.css">
        <script type="text/javascript" src="js/contact.js">    
        </script>
</head>
<body>
	<?php include 'main.php'?>
    <div class="content">
        <div class="leftbar">
            <h2>Contact Form</h2>
            <?php if(isset($status) && $status >0){ ?>
                <div class="query" style="color:#0f0">
                Query Sent</div>
                <?php }else if(isset($status) && $status==false){ ?>
                <div  class="query" style="color:#f00">
                Query Send Failed</div>
                <?php } ?>
            <form action="#" method="post" onsubmit="return formvalidaiton()"  name="validform">
            <div class="indent">
                <label for="name">Name</label>
                <input type="text" name="name">
                <br>
                <span id="name">
                    <?php  if(isset($error['name'])){
                        echo $error['name'];
                        }?>
                </span>
            </div>
            <div class="indent">
                <label>Address</label>
                <input type="text" name="address"/>
                <br>
                <sapn id="name">
                    <?php  if(isset($error['address'])){
                        echo $error['address'];
                        }?>
                </sapn>
            </div>
            <div class="indent">
                <label for="email">Email</label>
                <input type="text" name="email">
                <br>
                <span id="email">
                    <?php  if(isset($error['email'])){
                        echo $error['email'];
                        }?>
                </span>
            </div>
            <div class="indent">
                <label for="mobile">Mobile</label>
                <input type="number" name="mobile">
                <br>
                <span id="mobile">
                    <?php  if(isset($error['mobile'])){
                        echo $error['mobile'];
                    }?>
                </span>
            </div>
            <div class="indent">
                 <label>Message</label>
                <textarea name="message"></textarea>
                <br>
                <span id="message">
                    <?php  if(isset($error['message'])){
                        echo $error['message'];
                        }?>
                </span>
            </div>
           
            <input type="submit" name="submit" value="Submit">
            <input type="submit" name="reset" value="Reset">
        </form>
        </div>
    </div>
    <?php include_once "admin/footer.php"; ?>
</body>
</html>