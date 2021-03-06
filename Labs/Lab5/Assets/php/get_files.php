<?php
// path
$dir = '../images/gallery';
// load files with following extentsions
$exts = array('jpg','jpeg','gif','png');
// arr to separate exts from each file
$file_parts = array();
// msg
$response = "";
// opens dir to parse imgs
$dir_handle = opendir($dir);
// iterate through files
while ($file = readdir($dir_handle)){
  // check hidden files
  if (substr($file, 0 ,1) != '.'){
    // split each file name to extract the file extension
    $file_comps = explode('.', $file);
    // grab exts token
    $ext = strtolower(array_pop($file_comps));
    // file = valid img if so add it
    if (in_array($ext, $exts)){
      // build response string using ~ symbol as string operator
      $response .= '/'.$file.'~';
    }
  }
}
closedir($dir_handle);
// return response while removing the last ~ operator
echo substr_replace($response,"",-1);
?>
