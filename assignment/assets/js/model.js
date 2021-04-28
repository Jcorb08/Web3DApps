var spinning = false;
function spin(){
  spinning = !spinning;
  document.getElementById('model_RotationTimer').setAttribute('enabled', spinning.toString());
}
function stopRotate(){
  spinning = false;
  document.getElementById('model_RotationTimer').setAttribute('enabled', spinning.toString());
}
function animateModel(){
  if(document.getElementById('model_RotationTimer').getAttribute('enabled')!= true){
    document.getElementById('model_RotationTimer').setAttribute('enabled', 'true');
  } else {
    document.getElementById('model_RotationTimer').setAttribute('enabled', 'false');
  }
}

function wireframe(){
	var e = document.getElementById("model");
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;

function headLight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function omniLight()
{
	lightOn = !lightOn;
	document.getElementById('model__omniLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function targetLight()
{
	lightOn = !lightOn;
	document.getElementById('model__targetLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function cameraFront()
{
	document.getElementById('model__Front').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__Back').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__Left').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__Right').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__Top').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__Bottom').setAttribute('bind', 'true');
}

// goes in X3D file
// <timeSensor DEF="RotationTimer" cycleInterval="4" loop="true" enabled="false"></timeSensor>