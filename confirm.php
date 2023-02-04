<?php 
$title="Order Complete";
require('header.php');
?>

<h1 class="confirmed">Order Confirmed</h1>
<main>

<?php
if(isset($_POST['save'])){
    //Write billing info to table
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $phone=mysqli_real_escape_string($connection,$_POST['phone']);
    $address1=mysqli_real_escape_string($connection,$_POST['address1']);
    $address2=mysqli_real_escape_string($connection,$_POST['address2']);
    $country=mysqli_real_escape_string($connection,$_POST['country']);
    $province=mysqli_real_escape_string($connection,$_POST['province']);
    $city=mysqli_real_escape_string($connection,$_POST['city']);
    $postal=mysqli_real_escape_string($connection,$_POST['postal']);
    $ccn=mysqli_real_escape_string($connection,$_POST['ccn']);
    $expiry=mysqli_real_escape_string($connection,$_POST['expiry']);
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $cvv=mysqli_real_escape_string($connection,$_POST['cvv']);

    $query="INSERT INTO customer (email,phone,address1,address2,country,province,city,postal,ccn,expiry,name,cvv) VALUES ('$email','$phone','$address1','$address2','$country','$province','$city','$postal','$ccn','$expiry','$name','$cvv')";
    $sql=mysqli_query($connection,$query);

    if($sql){
        echo '<p class="confirm">Your information has been saved.</p>';
    }else{
        echo mysqli_error($connection);
    }
}

if(isset($_POST['payment'])){
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $products=implode(",",$_SESSION['greenleaf']);
    $total=mysqli_real_escape_string($connection,$_POST['total']);

    $query="INSERT INTO orders (email,name,products,total) VALUES ('$email','$name','$products','$total')";
    $sql=mysqli_query($connection,$query);
}

if(isset($_POST['ccn'])){
    //Destroy session
    session_destroy();
    echo '<p class="confirm">Your order is being processed. You will receive a confirmation email shortly. <br>Please allow 3-5 business days for your items to arrive.</p>
    <p class="confirm">Thank you for shopping with us! Have a wonderful day.</p>';
}

echo"</main>";

include('footer.php');
?>