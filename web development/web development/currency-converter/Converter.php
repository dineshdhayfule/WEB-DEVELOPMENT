<?php
class Converter
{
 private $rateValue;
 //I have base these rates on USD :)
private $rates =array('AUSTRALIAN DOLLAR AUD' => 1.496 ,'AREGENTINE PESO ARS'=>218.505,'BELARUS RUBLE BYN'=>2.5241,'BRAZIALIAN REAL BRL' => 5.0494 ,'CANADIAN DOLLAR CAD' => 1.3499 ,'CHINESE YUAN CNY' => 6.8713 ,'COLOMBIAN PESO CLP'=>4515.69,'EGYPTIAN POUND EGP' => 30.9 ,'EURU EUR' => 0.800284 ,'HONG KONG DOLLAR HKD ' => 7.8497 ,'INDIAN RUPEES INR' => 82.055 ,'INDONESHIAN RUPIAH IDR' => 14845 ,'IRANIAN RIAL IRR'=>42002.5,'ISRAEL NEW SHEKEL ILS' => 3.6624 ,'JAPANESE YEN JPY' => 131.97,'KENYA SHILLING KES'=>135.35 ,'PAKISTANI RUPEE PKR' => 280.5 ,'POUND STERLING GBP' => 0.8038 ,'SOUTH AFRICAN RAND ZAR' => 18.281, 'US DOLLAR USD' => 1 );
    
public function setConvert($amount, $currency_from)
{
$this->rateValue = $amount/$this->rates[$currency_from];
}
    
public function getconvert($currency_to)
{
 return round($this->rates[$currency_to] * $this->rateValue, 2);
}
    
public function getRates()
   {
    return $this->rates;
    } 
}

 ?>