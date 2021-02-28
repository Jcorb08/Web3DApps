//JS Gallery Generator
// Create the XMLHTTPRequest obj for communicating with the web server
var xmlHttp = new XMLHttpRequest();
// stores number of horizontalColumns galley has if too large wont fit in window
var numOfCol = 4;
// Stores newly gen gallery HTML code
var htmlCode = "";
// temp stores server response while code gen
var response;

$(document).ready(function() {
  // setup the path to the PHP function that reads the img dir to find thumbnail file names
  var send = "scripts/hook.php";
  // open connnection to web server
  xmlHttp.open("GET", send, true);
  // tell server that client has no outgoing msg, i.e. we are sending nothing to server
  xmlHttp.send(null);
  // check valid response
  xmlHttp.onreadystatechange = function() {
    if(xmlHttp.readyState == 4){
      //response handler code
      // alert(xmlHttp.responseText);
      response = xmlHttp.responseText.split("~");
      // use of a table
      htmlCode += '<tr>';
      for(var i=0;i<response.length;i++){
        htmlCode += '<td id="gallery_cell">';
        htmlCode += '<a href="' + 'images/' + response[i] + '">';
        htmlCode += '<img src="images/' + response[i] + '" id="image_thumbnail"/>';
        htmlCode += '</a>';
        htmlCode += '</td>';
        if(((i+1)%numOfCol) == 0){
          htmlCode += '</tr><tr>';
        }
      }
      htmlCode += '</tr>';
      document.getElementById('gallery').innerHTML = htmlCode;
    }
  }
});