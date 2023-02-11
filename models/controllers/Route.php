<?php 
require_once("../Traits/URI.php");
class Route {
   static function request($prop){
return  $_SERVER[$prop];
   }
use URI;
    }