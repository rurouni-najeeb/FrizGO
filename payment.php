<?php
include 'db.php';
 session_start();
 include 'redirect.php';

$cat = $_REQUEST['sum'];

$r = $conn->prepare("SELECT * from card where customerid = ?");
$r->bindParam(1,$_SESSION['id']);
$r->execute();

if($r)
{
  $rr = $conn->prepare("SELECT * from card where customerid = ?");
  $rr->bindParam(1,$_SESSION['id']);
  $rr->execute();
$rt = $rr->fetch();
  $name = $rt['name'];
  $card = $rt['cardno'];
  $expiry = $rt['expiry'];
  $cvv = $rt['cvv'];
}
else {
  $name = " ";
  $card = " ";
  $expiry = " ";
  $cvv = " ";

}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Payment Form</title>


  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>

      <link rel="stylesheet" href="style.css">


</head>

<body>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<div class="container">
  <div id="Checkout" class="inline">
      <h1>Pay Invoice</h1>
      <div class="card-row">
          <span class="visa"></span>
          <span class="mastercard"></span>
          <span class="amex"></span>
          <span class="discover"></span>
      </div>
      <form method="post" action="paymentdone.php?sum=<?php echo $cat; ?>">
          <div class="form-group">
              <label for="PaymentAmount">Payment amount</label>
              <div class="amount-placeholder">
                  <span>INR</span>
                  <span><?php echo $cat; ?></span>
              </div>
          </div>
          <div class="form-group">
              <label or="NameOnCard">Name on card</label>
              <input id="NameOnCard" name="name" class="form-control" type="text" value="<?php echo $name; ?>"></input>
          </div>
          <div class="form-group">
              <label for="CreditCardNumber">Card number</label>
              <input id="CreditCardNumber" name="cardno" class="null card-image form-control" type="text" value="<?php echo $card; ?>"></input>
          </div>
          <div class="expiry-date-group form-group">
              <label for="ExpiryDate">Expiry date</label>
              <input id="ExpiryDate" class="form-control" name="expiry" type="text" value="<?php echo $expiry; ?>"></input>
          </div>
          <div class="security-code-group form-group">
              <label for="SecurityCode">Security code</label>
              <div class="input-container" >
                  <input id="SecurityCode" name="cvv" class="form-control" type="text" value="<?php echo $cvv; ?>"></input>
                  <i id="cvc" class="fa fa-question-circle"></i>
              </div>
              <div class="cvc-preview-container two-card hide">
                  <div class="amex-cvc-preview"></div>
                  <div class="visa-mc-dis-cvc-preview"></div>
              </div>
          </div>
          <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit">
              <span class="submit-button-lock"></span>
              <span class="align-middle">Pay <?php echo $cat; ?></span>
          </button>
      </form>
      <form action="codform.php?sum=<?php echo $cat; ?>" method="post ">
        <div class="form-group">
        <!-- <a href="codform.php?sum=<?php echo $cat; ?>"> -->
          <button id="PayB" class="btn btn-block btn-info submit-button" type="submit">
            <span class="submit-button-home"></span>
            <span class="align-middle">Cash On Delivery</span>
          </button>
        <!-- </a> -->
        </div>
      </form>
      </div>
    </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
  <script src="index.js"></script>
</body>
</html>
