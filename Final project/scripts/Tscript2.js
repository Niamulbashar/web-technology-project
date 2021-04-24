"use strict"


function NameValidation()
{
	let data= document.getElementById('name').value;

	if(data ==''){
		document.getElementById('msgN').innerHTML = 'Empty name field ';		
	}
	else if(data.length <2){
		document.getElementById('msgN').innerHTML = 'Name is too Short !';	
	}


	
	
 
   else{
		ajax();
	}
	

}


function EmailValidation()
{
	let data= document.getElementById('email').value;

	if(data == ''){
		document.getElementById('ajaxe').innerHTML = 'Empty Name field ';		
	}
	else if(data.length <3 ){
		document.getElementById('ajaxe').innerHTML = 'Email is invalid !';	
	}
	          
      else{
		ajaxe();
	}

}



function GenderValidation()
{

 let male = document.getElementById('male');
 let female = document.getElementById('female');
 let other = document.getElementById('other');

     if(male.checked ==true ){
		document.getElementById('msgG').innerHTML = " --- male selected ! ";		
	}
    else if(female.checked ==true){
		document.getElementById('msgG').innerHTML = " --- female selected ! ";		
	}
	else if(other.checked ==true){
		document.getElementById('msgG').innerHTML =" --- other selected ! ";		
	}
	
     else{
		document.getElementById('msgG').innerHTML = "Empty !!";
	}

}


function repassCheck() {
	let password = document.getElementById('password').value;
 let repass = document.getElementById('repass').value;
	


        
         if(password !=repass){
                document.getElementById('msg9').innerHTML="please check your password and confirm password";
				
				
			
            
        }
        else{ document.getElementById('msg9').innerHTML="matched with password";}
    }

function dateValidation()
{
	

 let dd = document.getElementById('dd').value;
 let mm = document.getElementById('mm').value;
 let yy = document.getElementById('yy').value;

    if(dd == '' || mm == '' || yy == ''){
		document.getElementById('msgD').innerHTML = 'Empty Date Field ';		
	}
	else if(dd > 0 && dd <=31 || mm >=1 && mm <=12 || yy >=1900 && yy <= 2016 ){
		document.getElementById('msgD').innerHTML = 'Valid date !';	
	}
	
    else{
		document.getElementById('msgD').innerHTML = 'Valid date required!';
	}

}

function ajax(){
	
	const data = document.getElementById('name').value;
	const xhttp = new XMLHttpRequest();
	

	xhttp.open('POST', '../controller/Tabc.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			
			document.getElementById('msgN').innerHTML = this.responseText;
		}
	}
	xhttp.send('name='+data);

}

function ajaxe(){
	
	const dataemail = document.getElementById('email').value;
	const xhttp = new XMLHttpRequest();


	xhttp.open('POST', '../controller/TemailCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
		
			document.getElementById('ajaxe').innerHTML = this.responseText;
		}
	}
	xhttp.send('email='+dataemail);

	

}