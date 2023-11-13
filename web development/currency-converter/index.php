<?php
session_start();
include_once('Converter.php');
$converter = new Converter();
$rates = $converter->getRates();
?>
<!DOCTYPE html>
<html> 
    <head>
    <title>Currency Converter</title>
   <link href="style.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    </head> <body> <div class="container">
    <h1 class="page-header text-center"> <i class="uil uil-usd-circle"></i>Currency Converter</h1> 
      <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
    <form method="POST" action="getConvert.php">
    <div class="form-group"> <label >Amount:</label>
    <input type="number" class="form-control" name="amount" required> </div>
    <div class="form-group"> <label>From:</label>
    <select class="form-control" name="currency_from" required>
    <?php
    foreach ($rates as $key => $currency)
    {
    ?>
    <option value="<?php echo $key; ?>"><?php echo $key ?></option>
    <?php
    }
    ?> 
    </select> 
    </div>
    <div class="form-group">
    <label>To:</label>
    <select class="form-control" name="currency_to" required>
    <?php
    foreach ($rates as $key => $currency){
    ?>
    <option value="<?php echo $key; ?>"><?php echo $key ?></option>
    <?php
    }
?> </select></div><BR>
<button type="submit" name="convert" class="btn btn-primary">Convert</button>
    </form> <?php
if(isset($_SESSION['value'])){
?>
<div class="alert alert-info text-center">
<?php 
echo "<h1>".$_SESSION['value']['amount'].' '.$_SESSION['value']['from'].' <br>IS EQUAL TO<br>
'.$_SESSION['value']['result'].' '.$_SESSION['value']['to']."</h1>"; 
?> </div>
<?php
unset($_SESSION['value']);
} ?> 
</div> </div>
</div>
</body>
</html>