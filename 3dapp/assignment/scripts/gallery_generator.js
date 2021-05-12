
	var xmlHttp = new XMLHttpRequest ();
	var htmlCode = "";
	var response;
	var numberofcolumns = 4;
	
	$(document).ready(function() {
	var send = "scripts/hook.php";
	xmlHttp.open("GET", send, true);
	xmlHttp.send(null);
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4) {
		response = xmlHttp.responseText.split("~");
		for (var i=0;i<response.length;i++) {
			htmlCode += '<a href="images/' + response[i] +' " ' + ' data-fancybox data-caption="MentalRay Render" > ';
			htmlCode += '<img class="card-img-top img-thumbnail" src="images/' + response[i] + '"/>';
			htmlCode += '</a>';	
		}
		document.getElementById('gallery').innerHTML = htmlCode;
	}
	}
});

