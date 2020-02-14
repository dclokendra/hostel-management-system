 function validate(){
            var username=document.validform.username.value;
            var password=document.validform.password.value;

            //check for username
            if(username.trim() ==''){
                document.getElementById('username').innerHTML='Enter Username';
                document.validform.username.focus();
                return false;
            }
            else{

            }
            //check for password
            if(password.trim()==''){
                document.getElementById('password').innerHTML='Enter Password';
                document.validform.password.focus();
                return false;
            }
            else{
                
            }
        }