"use strict"

function ajax(){
	
	const data = document.getElementById('name').value;
	const xhttp = new XMLHttpRequest();
	

	xhttp.open('POST', '../controller/Tabc.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//document.write(this.responseText);
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
			//document.write(this.responseText);
			document.getElementById('ajaxe').innerHTML = this.responseText;
		}
	}
	xhttp.send('email='+dataemail);

	

}

function route(){
	
	const data = document.getElementById('name').value;
	const xhttp = new XMLHttpRequest();
	xhttp.open('GET', 'Troute.php', true);
	xhttp.send();

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			alert(this.responseText);
			//document.getElementById('route').innerHTML = this.responseText;
		

		}

	}