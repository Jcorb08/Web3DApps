


// https://doc.x3dom.org/tutorials/animationInteraction/switch/index.html
// https://doc.x3dom.org/tutorials/basics/htmlCSS/index.html
// try this ^

var spinning = false;
function spin(){
  spinning = !spinning;
  document.getElementById('x3dmodel_RotationTimer').setAttribute('enabled', spinning.toString());
}
function stopRotate(){
  spinning = false;
  document.getElementById('x3dmodel__RotationTimer').setAttribute('enabled', spinning.toString());
}
function animateModel(){
  if(document.getElementById('x3dmodel__RotationTimer').getAttribute('enabled')!= true){
    document.getElementById('x3dmodel__RotationTimer').setAttribute('enabled', 'true');
  } else {
    document.getElementById('x3dmodel__RotationTimer').setAttribute('enabled', 'false');
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
	document.getElementById('x3dmodel__headlight').setAttribute('headlight', lightOn.toString());
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
	document.getElementById('x3dmodel__Front').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('x3dmodel__Back').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('x3dmodel__Left').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('x3dmodel__Right').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('x3dmodel__Top').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('x3dmodel__Bottom').setAttribute('bind', 'true');
}

// goes in X3D file
// <timeSensor DEF="RotationTimer" cycleInterval="4" loop="true" enabled="false"></timeSensor>