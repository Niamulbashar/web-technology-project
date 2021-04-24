"use strict"

function route(){
	
	const data = document.getElementById('name').value;
	const xhttp = new XMLHttpRequest();
	xhttp.open('GET', 'route.php',true);
	xhttp.send();

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//document.write(this.responseText);
			document.getElementById('h').innerHTML = this.responseText;
		

		}

	}
	
}