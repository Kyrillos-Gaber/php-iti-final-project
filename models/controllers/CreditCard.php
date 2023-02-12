<?php
class CreditCard 
{

//     private $creditNumber;
//     private $expireMonth=0;
//     private $expireYear=0;
//     private $password;
//     public $isValid;
//     private $validYear;
//     private $validMonth;
//     private $validNumber;


// function validateEntry($creditNumber, $expireYear,  $expireMonth, $isValid)
//     {
//         if (isset($creditNumber) && !empty($creditNumber) && is_numeric($creditNumber)) {

//      $creditNum=preg_replace("[^0-9]", "",$creditNumber);
//         }
//         else{
//             exit();
//         }

//         if (isset($expireMonth) && !empty($expireMonth)) {
//               if(is_numeric($expireMonth)){
//                 $this-> $expireMonth = $expireMonth;
//               }
//               else{
//                 exit();
//               }
            
//         }
//         if (isset($expireYear) && !empty($expireYear)) {

//             // $expireYear = (int) $expireYear;
// if (is_numeric($expireYear)) {
//     $this->expireYear = $expireYear;
// }
//         }
      
//         // $this->exMonth=$exMonth;
//         // $this->exYear=$exYear;
//     }

//     public function creditNumberValidation($creditNumber,  $validNumber)
//     {
//         if ($this . strlen($creditNumber) < 16) {
//             $validNumber=false;
//          return "Credit Card Must be 16 ";
//         //  exit();
//         }
//         else {
//              return $validNumber=true;
//         }
//     }
//     public function dateValidation($expireMonth, $expireYear, $isValid)
//     {
//         $currentYear=date('Y');
//         settype($currentMonth,'integer');
//         if(!is_numeric($expireYear) || $expireYear<$currentYear|| $expireYear>$currentYear +10) {
//             $isValid=false;
//             return " invalid expiry year";
//             // exit();
//         }
//         else{
//             return $this->expireYear=$expireYear;
//         }
// if(!is_numeric($expireMonth) ||$expireMonth<1||$expireMonth>12){
//    return "invalid Expiry Date";
 
   
// //    exit();
// }
// else{
//     $isValid=true;
// }


//     }


    private function checkyear($expireYear) {
        if (isset($expireYear) && !empty($expireYear)) {
            if (is_numeric($expireYear)) {
                return true;
            }
        } else {
            return false;
        }
    }

    private function checkCreditNum($creditNumber) {
        $creditNum=preg_replace("[^0-9]", "",$creditNumber);
        if (strlen($creditNum) === 16 && is_numeric($creditNum)) {
            return true;
        } else {
            return 0;
        }
    }

    private function checkmonth($expireMonth) {
        if (isset($expireMonth) && !empty($expireMonth)) {
            if (is_numeric($expireMonth)) {
                return true;
            }
        } else {
            return false;
        }
    }

    public function validate($creditNumber, $expireYear, $expireMonth)
    {
        if ($this->checkyear($expireYear) && $this->checkCreditNum($creditNumber) && $this->checkmonth($expireMonth)) {
            return true;
        } else {
            return 0;
        }
    }




}
