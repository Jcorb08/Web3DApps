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

// goes in X3D file
// <timeSensor DEF="RotationTimer" cycleInterval="4" loop="true" enabled="false"></timeSensor>