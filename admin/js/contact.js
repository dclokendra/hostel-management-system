function formvalidaiton(){
			var name=document.validform.name.value;
			var college=document.validform.college.value;
			var email=document.validform.email.value;
			var phone=document.validform.phone.value;
			var message=document.validform.message.value;
			

			if(name.trim() ==''){
				document.getElementById('name').innerHTML='Enter Full Name';
				document.validform.name.focus();
				return false;
			}
			else{
			}
			//end validation for name
			if(college.trim() ==''){
				document.getElementById('college').innerHTML='Enter College Name';
				document.validform.name.focus();
				return false;
			}
			else{
			}
			//end validation for college

			var emailpattern=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(email.trim()==''){
				document.getElementById('email').innerHTML='Enter Email';  
				document.validform.email.focus();
				return false;
			}
			else if(!emailpattern.test(email)){
				document.getElementById('email').innerHTML='Invalid Email';
				document.validform.email.focus();
				return false;
			}
			else{
			}
			//end validation for email

			var pattern=/^([0-9]{10})$/;
			if(phone.trim()==''){
				document.getElementById('phone').innerHTML='Enter Phone Number';
				document.validform.Phone.focus();
				return false;
			}
			else if(phone.length<10){
				document.getElementById('phone').innerHTML='Phone Number must be of 10 Digit';
				document.validform.phone.focus();
				return false;
			}
			else if(!pattern.test(phone)){
				document.getElementById('phone').innerHTML='Phone must be of 10 Digit Number';
				document.validform.phone.focus();
				return false;
			}
			else{
			}
			//end validation for phone
			if(message.trim() ==''){
				document.getElementById('message').innerHTML='Write Message';
				document.validform.message.focus();
				return false;
			}
			else{
			}
			//end validation for message
		}