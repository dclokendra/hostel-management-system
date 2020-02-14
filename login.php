 <?php 
    require_once "object.php";
     session_start();
        if(isset($_SESSION['admin_username']) && $_SESSION['admin_username']!=""){
        header('location:admin/dashboard.php');
         }
    if(isset($_POST['login'])){
        $error=[];//arrray
        if(isset($_POST['username']) && !empty($_POST['username']) && trim($_POST['username'] !="")){
                $admin->set('username',$_POST['username']);
            }
        else{
            $error['username']="Enter Username";
        }
        //check for password
        if(isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'] !="")){
            $admin->set('password',$_POST['password']);
            }
        else{
            $error['password']="Enter password";
        }

        if(count($error)==0){
           $message=$admin->login();
        }

    }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
     <link rel="stylesheet" type="text/css" href="login.css">
     <script type="text/javascript" src="admin/js/login.js"> </script>

</head>
<body>
    <?php include 'main.php'?>
    <div class="content">
        <form action="" method="post" name="validform" onsubmit="return validate()">
            <h2>Login Here</h2>
                    <span>
                     <?php
                        if(isset($message)){
                            echo $message;
                    }?>
                     <?php
                        if(isset($_GET['msg'])&& $_GET['msg']==1){
                            echo "Please login to continue";
                    }?>
                </span>
            <div class="log">
                <label>Username</label>
                <input type="text" name="username"/>
                <br>
                <span id="username">
                    <?php
                    if(isset($error['username'])){
                        echo $error['username'];
                    }?>
                </span>
            </div>
            <div class="log">
                <label>Password</label>
                <input type="password" name="password"/>
                <br>
                <span id="password">
                    <?php
                    if(isset($error['password'])){
                        echo $error['password'];
                    }?>
                </span>
            </div>
            <input type="submit" name="login" class="login" value="Log In">
    </div>
    <?php include_once"admin/footer.php"; ?>
</body>
</html>