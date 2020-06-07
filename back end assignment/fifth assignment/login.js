function validation(){
	var fn = true;
	
	var p= true;

	
	
	formLables = document.getElementsByTagName("label");
	
	var firstName = document.getElementsByName("Name")[0];
	if(firstName.value==""){
		formLables[0].innerHTML="Name: [required]";
		formLables[0].style="color: red";
		fn=false;
	}
	else if( !isNaN(firstName.value)){
		formLables[0].innerHTML="Name: [Name must be a text]";
		formLables[0].style="color: red";
		fn = false;
	}
	else {
		formLables[0].innerHTML="Name: ";
		formLables[0].style="color: black";
		fn =true;
	}
	
	
	
	var password = document.getElementsByName("password")[0];
	if(password.value == ""){
		formLables[1].innerHTML="Password: [required]";
		formLables[1].style="color: red";
		p = false;
	}
	else if(password.value.length < 8){
		formLables[1].innerHTML="Password: [Length at least 8]";
		formLables[1].style="color: red";
		p = false;
	}
	   	if (p ==true && fn ==true)	
            return true;

	
	


}




var count = 1;
var max = 5;

function next(){
	if(count == max){
		count= 1;
	}
	else {
		count++;
	}
	document.getElementById("myIMG").src=count+".jpg";
}



setInterval(next,2000);




