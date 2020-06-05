<!--
Creator: Valentine Onah
Creator's email: ucval@yahoo.com
Creator's CV URL: http://valentine-cv.special-talk.com/
Creator's University: Wyższa Szkoła Biznesu - National-Louis University, Poland.
Field of study: Computer Science -> Business Application Programming
-->

<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'includes/head.php' ?>
</head>

<body>
    <!-- mian-content -->
    <div class="main-banner inner" id="home">
        <!-- header -->
        <?php include 'includes/navbar.php' ?>
        <!-- //header -->

    </div>
    <!--//main-content-->

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="shop-single.php">Shop Single</a>
        </li>
        <li class="breadcrumb-item active">Checkout</li>
    </ol>
           <style>
                .row {
                  display: -ms-flexbox;
                  display: flex;
                  -ms-flex-wrap: wrap;
                  flex-wrap: wrap;
                  margin: 50px;
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

                .container1 {
                  background-color: #f2f2f2;
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
                  background-color: #10adfb;
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
                  background-color: #45a049;
                }

                a {
                  color: #2196F3;
                }

                hr {
                  border: 1px solid lightgrey;
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

              <div class="row">
                  <div class="col-75">
                    <div class="container1">
                      <form action="/action_page.php">

                        <div class="row">
                          <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required="">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="john@example.com">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="ul. jana pawla 16">
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="krakow">

                            <div class="row">
                              <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="KRK">
                              </div>
                              <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="33-300">
                              </div>
                            </div>
                          </div>

                          <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                              <i class="fa fa-cc-visa" style="color:navy;"></i>
                              <i class="fa fa-cc-amex" style="color:blue;"></i>
                              <i class="fa fa-cc-mastercard" style="color:red;"></i>
                              <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September">
                            <div class="row">
                              <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2019">
                              </div>
                              <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                              </div>
                            </div>
                          </div>

                        </div>
                        <label>
                          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                        </label>
                        <a href="#" class="btn active">Continue to checkout</a>
                      </form>
                    </div>
                  </div>
                  <div class="col-25">
                    <div class="container">
                      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                      <p><a href="#">Bella Toes</a> <span class="price">$670.00</span></p>
                      <p><a href="#">SRV Sneakers</a> <span class="price">$575.00</span></p>
                      <p><a href="#">Red Bellies</a> <span class="price">$575.00</span></p>
                      <p><a href="#">Running Shoes</a> <span class="price">$675.00</span></p>
                      <hr>
                      <p>Total <span class="price" style="color:black"><b>$2.495,00</b></span></p>
                    </div>
                  </div>
                </div>

    <!-- footer -->
    <footer>
        <?php include 'includes/footer.php' ?>
    </footer>
    <!-- //footer -->
</body>

</html>
