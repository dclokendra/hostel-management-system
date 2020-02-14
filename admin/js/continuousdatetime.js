
		function continuoustime(){
			var dat=new Date();
			var today=new Date();
			var hr=today.getHours();
			var min=today.getMinutes();
			var sec=today.getSeconds();
			var tf="AM";
			
			var mname=['Janaury','February','March','April','May','June','July','August','September','October','November','December'];
			var day = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
			if(hr>11){
				tf="PM";
			}
			if(hr>12){
				hr=hr-12;
			}
			if(hr==0){
				hr=12;
			}
			hr=checktime(hr);
			min=checktime(min);
			sec=checktime(sec);
			document.getElementById('clock').innerHTML=dat.getFullYear()+" "+mname[dat.getMonth()]+
			" "+dat.getDate()+" "+day[dat.getDay()]+" "+'<br>'+hr+":"+min+":"+sec+" "+tf;
		}
		function checktime(i){
			if(i<10){
				i="0"+i;
			}
			return i;
		}
		setInterval("continuoustime()",1000);

		

	