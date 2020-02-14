function validate(){
            var roomname=document.bedform.roomname.value;
            var bedname=document.bedform.bedname.value;
            var description=document.bedform.description.value;

            //validation for room
            if(document.validform.roomID.selectedIndex == 0){
                document.getElementById('roomID').innerHTML='Select Room';
                document.validform.roomID.focus();
                return false;
            }
        
            //check for roomname
            if(bedname.trim() ==''){
                document.getElementById('bedname').innerHTML='Enter Bed name';
                document.bedform.roomname.focus();
                return false;
            }
           
            //check for description
            if(description.trim()==''){
                document.getElementById('description').innerHTML='Write Description';
                document.bedform.description.focus();
                return false;
            }
            
        }