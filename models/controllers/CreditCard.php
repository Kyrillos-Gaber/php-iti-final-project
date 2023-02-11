<?php
class CreditCard implements Payment
{
    private $creditNumber;
    private $expireMonth=0;
    private $expireYear=0;
    private $password;
 public $isValid;
    private $validYear;
    private $validMonth;
    private $validNumber;


function validateEntry($creditNumber, $expireYear,  $expireMonth, $isValid)
    {
        if (isset($creditNumber) && !empty($creditNumber) && is_numeric($creditNumber)) {

     $creditNum=preg_replace("[^0-9]", "",$creditNumber);
        }
        else{
            exit();
        }

        if (isset($expireMonth) && !empty($expireMonth)) {
              if(is_numeric($expireMonth)){
                $this-> $expireMonth = $expireMonth;
              }
              else{
                exit();
              }
            
        }
        if (isset($expireYear) && !empty($expireYear)) {

            // $expireYear = (int) $expireYear;
if (is_numeric($expireYear)) {
    $this->expireYear = $expireYear;
}
        }
      
        // $this->exMonth=$exMonth;
        // $this->exYear=$exYear;
    }

    public function creditNumberValidation($creditNumber,  $validNumber)
    {
        if ($this . strlen($creditNumber) < 16) {
         return "Credit Card Must be 16 ";
         $validNumber=false;
         exit();
        }
        else {
             return $validNumber=true;
        }
    }
    public function dateValidation($expireMonth, $expireYear, $isValid)
    {
        $currentYear=date('Y');
        settype($currentMonth,'integer');
        if(!is_numeric($expireYear) || $expireYear<$currentYear|| $expireYear>$currentYear +10) {
            return " invalid expiry year";
            $isValid=false;
            exit();
        }
        else{
            return $this->expireYear=$expireYear;
        }
if(!is_numeric($expireMonth) ||$expireMonth<1||$expireMonth>12){
   return "invalid Expiry Date";
 
   
   exit();
}
else{
    $isValid=true;
}


    }


}
?>