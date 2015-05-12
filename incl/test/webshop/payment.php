<?php 
// Create the session
session_name('shoppingcart');
session_start();

$title='Upg 3'; include(__DIR__ . '/../mall/header.php'); ?>
 
<div id='flash'>

<h1>Payment</h1>

<?

//Get the total sum from the session
if (!isset($_SESSION['cart']) ) {
    echo "Nothing in cart!";
} else {
    $price = $_SESSION['cart']['sum'];
    echo "$ {$price} will be drawn from your credit card";
}

?>
    <fieldset>
    <form  id="payment_form" name="payment_form">
        <div id="left">
            
            <label for="firstname">First name:</label> <span id="firstname_error"></span> <br> <input type="text" name="firstname" id="firstname"> <br>
            <label for="lastname">Last name:</label> <span id="lastname_error"></span> <br> <input type="text" name="lastname" id="lastname"> <br>
            <label for="address">Adress:</label>  <span id="address_error"></span><br> <input type="text" name="address" id="address"> <br>
            <label for="zip">Zip:</label>  <span id="zip_error"></span><br> <input type="text" name="zip" id="zip"> <br>
            <label for="city">City:</label>  <span id="city_error"></span><br> <input type="text" name="city" id="city"> <br>
            <label for="Country">Country:</label> <span id="Country_error"></span><br> <select name="Country" id="Country"> <br>
                <option value="Norway">Norway</option>
                <option value="Sweden" selected>Sweden</option>
            </select>
        </div>
        <div id="right">
            <label for="creditcardtype">Credit card:</label> <span id="creditcardtype_error"></span> <br>
            <select id="creditcardtype" name="creditcardtype"  id="creditcardtype"> 
                <option value="default">Select a credit card type...</option>
                <option value="visa">VISA</option>
                <option value="mastercard">Mastercard</option>
                <option value="eurocard">Eurocard</option>
                <option value="amex">American Express</option>
            </select> <br>
            <label for="cardnumber">Credit card number:</label>  <span id="cardnumber_error"></span><br>
            <input type="text" name="cardnumber"  id="cardnumber"> <br>
            <label for="expirationmonth">Expiration month:</label> <span id="expirationmonth_error"></span><br>
            <select id="expirationmonth" name="expirationmonth">
                <option value="default">Select expiration month...</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select> <br>
            <label for="expirationyear">Expiration year:</label> <span id="expirationyear_error"></span><br>
            <select id="expirationyear" name="expirationyear" id="expirationyear">
                <option value="default">Select expiration year...</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
            </select> <br>
            <label for="cvc">CVC:</label>  <span id="cvc_error"></span> <br>
            <input type="text" name="cvc" id="cvc"> <br>
            
        </div>
        <div id="paybutton">
            <input type="submit" value="pay" id="pay"> 
        </div>
    <form>
    </fieldset>
    <div id="result"></div>
</div>

 
<?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>