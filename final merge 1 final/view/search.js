

"use strict"

function search(){
	
	const data = document.getElementById('name').value;
	const xhttp = new XMLHttpRequest();
	
	
	

	xhttp.open('POST', '../controller/searchT.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('show').innerHTML = this.responseText;
		}
	}
	xhttp.send('name='+data);

}
function searchH(){
	
	const data = document.getElementById('name').value;
	const xhttp = new XMLHttpRequest();
	
	
	

	xhttp.open('POST', '../controller/searchH.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('show').innerHTML = this.responseText;
		}
	}
	xhttp.send('name='+data);

}