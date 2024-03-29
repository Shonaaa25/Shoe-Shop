<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
	
	<link rel="stylesheet" href="checkout.css" />
</head>
<style>
.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%;
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; 
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #bdb8ed;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #f6f5fa;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<body>
    <h2>Checkout</h2> 

    <?php
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "checkout";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
        $item = $_POST["item"];
        $cardNumber = $_POST["cardNumber"];
        $expiryDate = $_POST["expiryDate"];
        $cvv = $_POST["cvv"];

        echo "<p>Payment Successful!</p>";
    }
    ?>
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


<div class="row">
 <div class="col-75">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>4</b>
        </span>
      </h4>
      <p><a href="shoeopt.html">Product 1</a> <span class="price">R1950</span></p>
      <p><a href="shoeopt.html">Product 2</a> <span class="price">R2100</span></p>
      <p><a href="shoeopt.html">Product 3</a> <span class="price">R1300</span></p>
      <p><a href="shoeopt.html">Product 4</a> <span class="price">R2000</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>R7350</b></span></p>
    </div>
  </div>
  </div>


  <div class="col-25">
    <div class="container">

        <div class="row">
          <div class="col-25">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label> 
            <input type="text" id="fname" name="firstname" ></br>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email"></br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address"></br>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city"></br>
                <label for="state">State</label>
                <input type="text" id="state" name="state">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" >
              </div>
            </div>
          </div>
<div class="row">
          <div class="col-25">
            <h3>Payment</h3>
            <label for="cname">Name on Card</label>
            <input type="text" id="item" name="item" ></br>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="cardNumber" name="cardNumber" ></br>
            <label for="expmonth">Exp Date</label>
            <input type="text" id="expiryDate" name="expiryDate" ></br>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" >
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing </br>
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>

</div>

</body>
</html>
