<?php
require_once("../../../../vendor/autoload.php");



$expiry_month = isset($_POST['expiry-month']) ? $_POST['expiry-month'] : "not found";
$expiry_year = isset($_POST['expiry-year']) ? $_POST['expiry-year'] : "not found";
$current_month = date('m');
$credit_number = isset($_POST['creditNumber']) ? $_POST['creditNumber'] : "not found";

if (count($_POST) > 0) { {
    $creditCard = new CreditCard();
    $x = $creditCard->validate($credit_number, $expiry_year, $expiry_month, 1);
    
    if ($x){
      header("location: ");
    }else {
      header("location: ");
    }
    
    

  }
}