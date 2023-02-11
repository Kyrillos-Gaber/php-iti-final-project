<?php

interface Payment
{
    public function creditNumberValidation($creditNumber,$isValid);
    public function dateValidation($month,$year,$isValid);
  
   public function validateEntry($creditNumber, $expireYear,  $expireMonth, $isValid);
}?>