<?php
// The require or include statement takes all the text/code/markup that exists 
// in the specified file and copies it into the file that uses the include (or require) statement.
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';
// The URI which was given in order to access this page; for instance, '/index.html'. 
$pageURI =$_SERVER['REQUEST_URI'];
//echo $pageURI . " original";
// Returns part of the string that is the page we are accessing
$pageURI =substr($pageURI,strrpos($pageURI,'index.php')+10);
//echo $pageURI . " uri with ()";
// gets the parameter if there is a bracket
// doesn't matter if this value is passed if not needed
$parameter =substr($pageURI,strrpos($pageURI, '(')+1, -1);
if (strrpos($pageURI,'(')){
	// takes off the parameter if there
	$pageURI = substr($pageURI,0, strrpos($pageURI,'('));
	//echo $pageURI . " uri ";
}
//echo $parameter . "  parra ";
// can't find anything then it is homepage otherwise its a different page
	if (!$pageURI)
		new Controller('home');
	else
		new Controller($pageURI, $parameter);
?>