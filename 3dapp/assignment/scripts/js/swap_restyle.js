
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#mcdonaldsDescription').hide();
		$('#fantaDescription').hide(); 
		$('#duffDescription').hide(); 
		$('#chairDescription').hide(); 
		$('#mcdonaldsDescriptionn').hide();
		$('#mcdonaldsDescriptionn').hide(); 
		$('#duffDescriptionn').hide(); 
		$('#chairDescriptionn').hide(); 


		$('#navHome').click(function(){
			$('#home').show();
			$('#about').hide();
			$('#models').hide();
			$('#interaction').hide();
			$('#mcdonaldsDescription').hide();
			$('#fantaDescription').hide(); 
			$('#duffDescription').hide(); 	
			$('#chairDescription').hide();
			$('#mcdonaldsDescriptionn').hide();
		$('#fantaDescriptionn').hide(); 
		$('#duffDescriptionn').hide(); 
		$('#chairDescriptionn').hide();  	  
		});

		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
			$('#models').hide();
			$('#interaction').hide(); 
			$('#mcdonaldsDescription').hide();
			$('#fantaDescription').hide(); 
			$('#duffDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#mcdonaldsDescriptionn').hide();
		$('#fantaDescriptionn').hide(); 
		$('#duffDescriptionn').hide(); 
		$('#chairDescriptionn').hide(); 	  
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#mcdonaldsDescription').show();
			$('#fantaDescription').hide(); 
			$('#duffDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#mcdonaldsDescriptionn').show();
			$('#fantaDescriptionn').hide(); 
			$('#duffDescriptionn').hide(); 
			$('#chairDescriptionn').hide(); 
			$('#one').show();
			$('#two').hide();
			$('#three').hide();
			$('#four').hide();
		});

		$('#navModels1').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#mcdonaldsDescription').show();
			$('#fantaDescription').hide(); 
			$('#duffDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#mcdonaldsDescriptionn').show();
			$('#fantaDescriptionn').hide(); 
			$('#duffDescriptionn').hide(); 
			$('#chairDescriptionn').hide(); 
			$('#one').show();
			$('#two').hide();
			$('#three').hide();
			$('#four').hide();
		});

		$('#navModels2').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#mcdonaldsDescription').show();
			$('#fantaDescription').hide(); 
			$('#duffDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#mcdonaldsDescriptionn').show();
			$('#fantaDescriptionn').hide(); 
			$('#duffDescriptionn').hide(); 
			$('#chairDescriptionn').hide(); 
			$('#one').show();
			$('#two').hide();
			$('#three').hide();
			$('#four').hide();
		});

		$('#navModels3').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#mcdonaldsDescription').show();
			$('#fantaDescription').hide(); 
			$('#duffDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#mcdonaldsDescriptionn').show();
			$('#fantaDescriptionn').hide(); 
			$('#duffDescriptionn').hide(); 
			$('#chairDescriptionn').hide(); 
			$('#one').show();
			$('#two').hide();
			$('#three').hide();
			$('#four').hide();
		});

		$('#navModels4').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#mcdonaldsDescription').show();
			$('#fantaDescription').hide(); 
			$('#duffDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#mcdonaldsDescriptionn').show();
			$('#fantaDescriptionn').hide(); 
			$('#duffDescriptionn').hide(); 
			$('#chairDescriptionn').hide(); 
			$('#one').show();
			$('#two').hide();
			$('#three').hide();
			$('#four').hide();
		});
	}

	function selectModel() {

		$('#navmcdonalds').click(function(){
			$('#mcdonalds').show();
			$('#one').show();
			$('#two').hide();
			$('#three').hide();
			$('#four').hide();
			$('#fanta').hide();
			$('#duff').hide();
			$('#chair').hide();
			$('#interaction').show(); 
			$('#mcdonaldsDescription').show();
			$('#fantaDescription').hide(); 
			$('#duffDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#mcdonaldsDescriptionn').show();
			$('#fantaDescriptionn').hide(); 
			$('#duffDescriptionn').hide(); 
			$('#chairDescriptionn').hide(); 
		});

		$('#navfanta').click(function(){
			$('#mcdonalds').hide();
			$('#fanta').show();
			$('#duff').hide();
			$('#chair').hide();
			$('#interaction').show();  
			$('#mcdonaldsDescription').hide();
			$('#fantaDescription').show();
			$('#duffDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#mcdonaldsDescriptionn').hide();
			$('#fantaDescriptionn').show(); 
			$('#duffDescriptionn').hide(); 
			$('#chairDescriptionn').hide(); 
			$('#one').hide();
			$('#two').show();
			$('#three').hide();
			$('#four').hide(); 	  	  
		});

		$('#navduff').click(function(){
			$('#mcdonalds').hide();
			$('#fanta').hide();
			$('#duff').show();
			$('#chair').hide();
			$('#interaction').show(); 
			$('#mcdonaldsDescription').hide();
			$('#fantaDescription').hide(); 
			$('#duffDescription').show(); 
			$('#chairDescription').hide(); 
			$('#mcdonaldsDescriptionn').hide();
			$('#fantaDescriptionn').hide(); 
			$('#duffDescriptionn').show(); 
			$('#chairDescriptionn').hide(); 
			$('#one').hide();
			$('#two').hide();
			$('#three').show();
			$('#four').hide();	   
		});

		$('#navChair').click(function(){
			$('#mcdonalds').hide();
			$('#fanta').hide();
			$('#duff').hide();
			$('#chair').show();
			$('#interaction').show();
			$('#mcdonaldsDescription').hide();
			$('#fantaDescription').hide(); 
			$('#duffDescription').hide(); 
			$('#chairDescription').show();
			$('#mcdonaldsDescriptionn').hide();
			$('#fantaDescriptionn').hide(); 
			$('#duffDescriptionn').hide(); 
			$('#chairDescriptionn').show();  
			$('#one').hide();
			$('#two').hide();
			$('#three').hide();
			$('#four').show();	   
		});
	}

});

function changeLook() {
	counter += 1;
	switch (counter) {
		case 1:
			document.getElementById('bodyColor').style.backgroundColor = '#f7f9fb';
			document.getElementById('headerColor').style.backgroundColor = '#D1E8E2';
			document.getElementById('footerColor').style.backgroundColor = '#D1E8E2';
			break;
		case 2:
			counter = 0;
			document.getElementById('bodyColor').style.backgroundColor = '#D1E8E2';
			document.getElementById('headerColor').style.backgroundColor = '#88bdbc';
			document.getElementById('footerColor').style.backgroundColor = '#88bdbc';
			break;

	}
}

function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = '#f7f9fb';
	document.getElementById('headerColor').style.backgroundColor = '#88bdbc';
	document.getElementById('footerColor').style.backgroundColor = 'grey';
}

