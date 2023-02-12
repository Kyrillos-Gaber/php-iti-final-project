<?php
//  require_once('../../conf.php'); 
require_once("../../../vendor/autoload.php");

define('extintion_path','jpeg');
if($_POST){
if ( isset($_POST['submit']) && !empty($_POST['submit'])){
  if((1)){
  header("Content-type: image/jpeg");
  header("Content-Disposition: attachment;"." filename=unknown.jpeg");
  readfile('images.jpeg');
}
else{
  echo "your backage already is finshed ";
}
}

}
?>