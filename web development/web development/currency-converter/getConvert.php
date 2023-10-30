<?php
session_start();
require_once('Converter.php');
 if(isset($_POST['convert']))
 {
    $amount = $_POST['amount'];
    $currency_from = $_POST['currency_from'];
    $currency_to = $_POST['currency_to'];
    $converter = new Converter();
    $converter->setConvert($amount, $currency_from);
    $result = $converter->getConvert($currency_to);
    $out = array();
    $out['amount'] = $amount;
    $out['from'] = $currency_from;
    $out['result'] = $result;
    $out['to'] = $currency_to;
    $_SESSION['value'] = $out;
    header('location:index.php');
 }
else
 {
    header('location:index.php');
 }
?>