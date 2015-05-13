<?php 
// Create the session
session_name('shoppingCart');
session_start();

$title='Upg 3'; include(__DIR__ . '/../mall/header.php'); ?>
 
<div id='flash'>

<h1>Payment</h1>

<?

//Get the total sum from the session
if (!isset($_SESSION['cart']) ) {
    echo "Cart is empty";
} else {
    $payment = $_SESSION['cart']['sum'];
    echo "$ The total amout is {$payment}. This amount will be drawn from your credit card.";
}

?>
    <fieldset>
    <form  id="payment_form" name="payment_form">
        <div class="columnHalf">
            
            <label for="firstname">First name:</label><br><input type="text" pattern="[A-Öa-ö]{2,}" name="firstname" id="firstname" required aria-required=”true”> <br>
            <label for="lastname">Last name:</label><br><input type="text" pattern="[A-Öa-ö]{2,}" name="lastname" id="lastname" required aria-required=”true”> <br>
            <label for="address">Adress:</label> <br><input type="text" name="address" id="address" required aria-required=”true”> <br>
            <label for="zip">Zip:</label> <br><input type="number" min="1000" max="999999" name="zip" id="zip" required aria-required=”true”> <br>
            <label for="city">City:</label><br><input type="text" name="city" pattern="[A-Öa-ö]{2,}" id="city" required aria-required=”true”> <br>
            <label for="country">Country:</label><br><select name="country" id="country"> <br>
                <option value="Denmark">Denamrk</option>
                <option value="Finland">Finland</option>
                <option value="Norway">Norway</option>
                <option value="Sweden" selected>Sweden</option>
            </select>
        </div>
        <div class="columnHalf">
            <label for="creditcardtype">Credit card:</label><br>
            <select id="creditcardtype" name="creditcardtype" id="creditcardtype"> 
                <option value="default">Select a credit card type...</option>
                <option value="visa">VISA</option>
                <option value="mastercard">Mastercard</option>
                <option value="eurocard">Eurocard</option>
                <option value="amex">American Express</option>
            </select><br>
            <label for="cardnumber">Credit card number:</label><br><input type="text" pattern="[0-9]{13,16}" name="cardnumber"  id="cardnumber" required aria-required=”true”><br>
            <label for="expirationmonth">Expiration month:</label><br>
            <select type="number" min="1" max="12" id="expirationmonth" name="expirationmonth">
                <option value="default">Select expiration month...</option>
                <option value="1">01</option>
                <option value="2">02</option>
                <option value="3">03</option>
                <option value="4">04</option>
                <option value="5">05</option>
                <option value="6">06</option>
                <option value="7">07</option>
                <option value="8">08</option>
                <option value="9">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select><br>
            <label for="expirationyear">Expiration year:</label><br>
            <select type="number" id="expirationyear" name="expirationyear" id="expirationyear" required aria-required=”true”>
                <option value="default">Select expiration year...</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
            </select><br>
            <label for="cvc">CVC:</label><br><input type="text" pattern="[0-9]{3,4}" name="cvc" id="cvc" required aria-required=”true”><br>
        </div>
        <div>
            <input type="submit" value="pay" id="pay"> 
        </div>
    <form>
    </fieldset>
    <div id="result"></div>
</div>

 
<?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>