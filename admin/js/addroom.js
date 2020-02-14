function validate(){
            var roomname=document.valid.roomname.value;
            var floor=document.valid.floor.value;
            var description=document.valid.description.value;

            //check for roomname
            if(roomname.trim() ==''){
                document.getElementById('roomname').innerHTML='Enter Room name';
                document.valid.roomname.focus();
                return false;
            }
            else{

            }
            //check for floor
            if(floor.trim()==''){
                document.getElementById('floor').innerHTML='Enter Floor';
                document.valid.floor.focus();
                return false;
            }
            else{
                
            }
            //check for description
            if(description.trim()==''){
                document.getElementById('description').innerHTML='Write Description';
                document.valid.description.focus();
                return false;
            }
            else{
                
            }
        }