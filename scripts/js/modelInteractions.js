//adapted from example code 'benskitchen.com'

var spinning = false;

function spin()
{
	spinning = true;
	document.getElementById('model__Cup-4-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__Lid-29-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__Straw-5-TIMER').setAttribute('enabled', spinning.toString());
}

function spinn()
{
	spinning = true;
	document.getElementById('model2__Label-90-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model2__Cylinder001-72-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model2__Liquid-110-TIMER').setAttribute('enabled', spinning.toString());
	
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__Cup-4-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__Lid-29-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__Straw-5-TIMER').setAttribute('enabled', spinning.toString());
}

function stopRotationn()
{
	spinning = false;
	document.getElementById('model2__Label-90-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model2__Cylinder001-72-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model2__Liquid-110-TIMER').setAttribute('enabled', spinning.toString());
}


function animateModel()
{
    if(document.getElementById('model__Cup-4-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model__Cup-4-TIMER').setAttribute('enabled', 'true');
    else
		document.getElementById('model__Cup-4-TIMER').setAttribute('enabled', 'false');
		
	if(document.getElementById('model__Lid-29-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model__Lid-29-TIMER').setAttribute('enabled', 'true');
    else
		document.getElementById('model__Lid-29-TIMER').setAttribute('enabled', 'false');
		
	if(document.getElementById('model__Straw-5-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model__Straw-5-TIMER').setAttribute('enabled', 'true');
    else
        document.getElementById('model__Straw-5-TIMER').setAttribute('enabled', 'false');
}

function animateModel2()
{
    if(document.getElementById('model2__Cylinder001-72-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model2__Cylinder001-72-TIMER').setAttribute('enabled', 'true');
    else
		document.getElementById('model2__Cylinder001-72-TIMER').setAttribute('enabled', 'false');
		

	if(document.getElementById('model2__Label-90-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model2__Label-90-TIMER').setAttribute('enabled', 'true');
    else
		document.getElementById('model2__Label-90-TIMER').setAttribute('enabled', 'false');
		

	if(document.getElementById('model2__Liquid-110-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model2__Liquid-110-TIMER').setAttribute('enabled', 'true');
    else
        document.getElementById('model2__Liquid-110-TIMER').setAttribute('enabled', 'false');
}

function wireframe()
{
	var e = document.getElementById('model');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}
function poly()
{
	var e = document.getElementById('model');
	e.runtime.togglePoints(false);
}





function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}





function cameraFront2()
{
	document.getElementById('model2__CameraFront2').setAttribute('bind', 'true');
}

function cameraBack2()
{
	document.getElementById('model2__CameraBack2').setAttribute('bind', 'true');
}

function cameraLeft2()
{
	document.getElementById('model2__CameraLeft2').setAttribute('bind', 'true');
}

function cameraRight2()
{
	document.getElementById('model2__CameraRight2').setAttribute('bind', 'true');
}

function wireframe2()
{
	var e = document.getElementById('model2');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}
function poly2()
{
	var e = document.getElementById('model2');
	e.runtime.togglePoints(false);
}





function drink()
{
	spinning = true;
	document.getElementById('model3__Line001-9-TIMER').setAttribute('enabled', spinning.toString());
}

function stopDrink()
{
	spinning = false;
	document.getElementById('model3__Line001-9-TIMER').setAttribute('enabled', spinning.toString());
}

function animateModel3()
{
    if(document.getElementById('model3__Line001-9-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model3__Line001-9-TIMER').setAttribute('enabled', 'true');
    else
        document.getElementById('model3__Line001-9-TIMER').setAttribute('enabled', 'false');
}

function cameraFront3()
{
	document.getElementById('model3__CameraFront3').setAttribute('bind', 'true');
}

function cameraBack3()
{
	document.getElementById('model3__CameraBack3').setAttribute('bind', 'true');
}

function cameraLeft3()
{
	document.getElementById('model3__CameraLeft3').setAttribute('bind', 'true');
}

function cameraRight3()
{
	document.getElementById('model3__CameraRight3').setAttribute('bind', 'true');
}

function wireframe3()
{
	var e = document.getElementById('model3');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}
function poly3()
{
	var e = document.getElementById('model3');
	e.runtime.togglePoints(false);
}





function rotate()
{
	spinning = true;
	document.getElementById('model4__Chair-46-TIMER').setAttribute('enabled', spinning.toString());
}

function stopRotate()
{
	spinning = false;
	document.getElementById('model4__Chair-46-TIMER').setAttribute('enabled', spinning.toString());
}

function animateModel4()
{
    if(document.getElementById('model4__Chair-46-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model4__Chair-46-TIMER').setAttribute('enabled', 'true');
    else
        document.getElementById('model4__Chair-46-TIMER').setAttribute('enabled', 'false');
}

function cameraFront4()
{
	document.getElementById('model4__CameraFront4').setAttribute('bind', 'true');
}

function cameraBack4()
{
	document.getElementById('model4__CameraBack4').setAttribute('bind', 'true');
}

function cameraLeft4()
{
	document.getElementById('model4__CameraLeft4').setAttribute('bind', 'true');
}

function cameraRight4()
{
	document.getElementById('model4__CameraRight4').setAttribute('bind', 'true');
}

function wireframe4()
{
	var e = document.getElementById('model4');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}
function poly4()
{
	var e = document.getElementById('model4');
	e.runtime.togglePoints(false);
}
