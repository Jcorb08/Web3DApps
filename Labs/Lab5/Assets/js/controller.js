//JS Gallery Generator
$(document).ready(function() {
  // Create the XMLHTTPRequest obj for communicating with the web server
  var xmlHttp = new XMLHttpRequest();
  // Stores newly gen gallery HTML code
  var htmlCode = "";
  // temp stores server response while code gen
  var response;
  // setup the path to the PHP function that reads the img dir to find thumbnail file names
  var send = "Assets/php/get_files.php";
  // open connnection to web server
  xmlHttp.open("GET", send, true);
  // tell server that client has no outgoing msg, i.e. we are sending nothing to server
  xmlHttp.send(null);
  // check valid response
  xmlHttp.onreadystatechange = function() {
    if(xmlHttp.readyState == 4){
      //response handler code
      //alert(xmlHttp.responseText);
      response = xmlHttp.responseText.split("~");
      //alert(response);
      //loop response array
      for(var i=0;i<response.length;i++){
        htmlCode += '<a href="Assets/images/gallery' + response[i] + ' ">';
        htmlCode += '<img class="card-img-top img-thumbnail" src="Assets/images/gallery' + response[i] + '"/>';
        htmlCode += '</a>';
      }
      document.getElementById('gallery_coke').innerHTML = htmlCode;
      document.getElementById('gallery_sprite').innerHTML = htmlCode;
      document.getElementById('gallery_pepper').innerHTML = htmlCode;
    }
  }
});