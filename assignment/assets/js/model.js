// animating the model
var spinning = false;
function spin(){
  spinning = !spinning;
  document.getElementById('x3dmodel__RotationTimer').setAttribute('enabled', spinning.toString());
}
function stopRotate(){
  spinning = false;
  document.getElementById('x3dmodel__RotationTimer').setAttribute('enabled', spinning.toString());
}

// wireframe model
function wireframe(){
	var e = document.getElementById("wiremodel");
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

// textures that can be added to lilt and costa models
var textures = ['costa.jpg','grape.jpg','lilt.jpg','orange.jpg','pepper_logo.jpg','sign.jpg','pineapple.jpg','strawberry.jpg']

// changes texture randomly
function changeTexture(){
	document.getElementById('x3dmodel__image').setAttribute('url', '/assets/images/textures/' + textures[Math.floor(Math.random() * 8)]);
}

// resets the texture of the models
function resetLiltTexture(){
	document.getElementById('x3dmodel__image').setAttribute('url', '/assets/images/textures/lilt.jpg');
}

function resetCostaTexture(){
	document.getElementById('x3dmodel__image').setAttribute('url', '/assets/images/textures/costa.jpg');
}


// removes the headlight
// slight change as all cameras have back lights themselves
var lightOn = true;

function headLight()
{
	lightOn = !lightOn;
	document.getElementById('x3dmodel__headlight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

// camera binds
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