<?php
    $title="Checkout";
    require('header.php');
?>
<main>
<h1 class="checkouth1">Checkout</h1>
<form class="checkout" action="confirm.php" method="post">
    <fieldset class="contact">
        <legend>Contact Info</legend>
        <input type="email" name="email" placeholder="Email"  >
        <input type="tel" name="phone" placeholder="Phone" pattern="[0-9]{10}"  >
    </fieldset>

    <fieldset class="shipping">
        <legend>Shipping Address</legend>
        <input type="text" id="address1" name="address1" placeholder="Address Line 1"  >
        <input type="text" id="address2" name="address2" placeholder="Address Line 2">
        <select id="country" name="country"  >
        <option value="" disabled selected hidden>Country</option>
            <option value="can">Canada</option>
        </select>
        <select id="province" name="province"  >
        <option value="" disabled selected hidden>Province/Territory</option>
            <option value="AB">Alberta</option>
            <option value="BC">British Columbia</option>
            <option value="MB">Manitoba</option>
            <option value="NB">New Brunswick</option>
            <option value="NL">Newfoundland and Labrador</option>
            <option value="NWT">Northwest Territories</option>
            <option value="NS">Nova Scotia</option>
            <option value="NU">Nunavut</option>
            <option value="ON">Ontario</option>
            <option value="PEI">Prince Edward Island</option>
            <option value="QC">Quebec</option>
            <option value="SK">Saskatchewan</option>
            <option value="YT">Yukon</option>
        </select>
        <input type="text" id="city" name="city" placeholder="City"  >
        <input type="text" id="postal" name="postal" placeholder="Postal Code"  >
    </fieldset>

    <fieldset class="billing">
        <legend>Billing Address</legend>
        <input type="checkbox" id="same" name="same" value="same"><label class="checkbox" for="same">Same as Shipping</label>
        <br>
        <input type="text" id="address1b" name="address1b" placeholder="Address Line 1">
        <input type="text" id="address2b" name="address2b" placeholder="Address Line 2">
        <select id="countryb" name="countryb">
            <option value="" disabled selected hidden>Country</option>
            <option value="can">Canada</option>
        </select>
        <select id="provinceb" name="provinceb">
            <option value="" disabled selected hidden>Province/Territory</option>
            <option value="AB">Alberta</option>
            <option value="BC">British Columbia</option>
            <option value="MB">Manitoba</option>
            <option value="NB">New Brunswick</option>
            <option value="NL">Newfoundland and Labrador</option>
            <option value="NWT">Northwest Territories</option>
            <option value="NS">Nova Scotia</option>
            <option value="NU">Nunavut</option>
            <option value="ON">Ontario</option>
            <option value="PEI">Prince Edward Island</option>
            <option value="QC">Quebec</option>
            <option value="SK">Saskatchewan</option>
            <option value="YT">Yukon</option>
        </select>
        <input type="text" id="cityb" name="cityb" placeholder="City">
        <input type="text" id="postalb" name="postalb" placeholder="Postal Code">
    </fieldset>

    <fieldset class="payment">
        <legend>Payment Info</legend>
        <input id="ccn" name="ccn" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" maxlength="19" placeholder="Card Number"  >
        <input type="text" id="expiry" name="expiry" placeholder="Expiry(MM/YY)"  >
        <input type="text" id="name" name="name" placeholder="Name on Card"  >
        <input type="text" id="cvv" name="cvv" placeholder="CVV"  >
    </fieldset>

    <input type="checkbox" id="save" name="save" value="save"><label class="checkbox" for="save">Save info for next time</label>
    <br>
    <input type="hidden" name="total" value="<?php echo $_GET['total'];?>">
    <input class="pay" type="submit" name="payment" value="Submit Payment">
</form>
</main>

<?php include('footer.php');?>