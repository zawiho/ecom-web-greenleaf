<?php
    $title="Cart";
    require('header.php');
?>

<main>
<h1 class="cart">Review Order</h1>
<?php

    if(isset($_POST['submit'])){
        $_SESSION['greenleaf'][]=$_POST['id'];
        }
    //print_r($_SESSION['cart']);

    $string=implode(",",$_SESSION['greenleaf']);
    //echo $string;

    $subtotal=0;

    if(!empty($string)){
    $query="SELECT * FROM products WHERE id IN($string)";
    $sql=mysqli_query($connection,$query);
    echo "<div class=\"cartgrid\">
            <div class=\"incart\">";
    WHILE($row=mysqli_fetch_array($sql)){
        $subtotal+=$row['price'];
        echo "<div>
                <a href=\"product.php?id=".$row['id']."\">
                    <img class=\"cartimg\" src=\"images/".$row['thumb']."\">
                </a>
            </div>
            <div class=\"cartprod\">
                <h2>
                    <a href=\"product.php?id=".$row['id']."\" class=\"product\">".$row['product']."</a>
                </h2>
                <p class=\"price\"> $".$row['price']."</p>
                <form class=\"quantity\">
                    <label for=\"quant\">Quantity: </label>
                    <input type=\"number\" name=\"quant\" size=\"3\" min=\"0\" step=\"1\" value=\"1\">
                    <input type=\"submit\" class=\"submitQuant\" value=\"update\">
                </form>
            </div>";
        }
    echo "</div>";
    }
    else{
        echo "<p class=\"empty\">Your cart is empty.</p> <p class=\"empty\"><a href=\"index.php\">Return Home</a> or <a href=\"all_products.php\">Browse All Products</a> to begin shopping.</p>";
    }

    if(!empty($string)){
    $tax=$subtotal*0.05;
    $total=$subtotal+$tax;
    $total=number_format($total,2);

        echo "<div class=\"totals\">
                <h3 class=\"subtotal\">Subtotal: <span class=\"dollars\">&dollar;".number_format($subtotal,2)."</span></h3>
                <h3 class=\"tax\">Tax(5%): <span class=\"dollars\">&dollar;".number_format($tax,2)."</span></h3>
                <h3 class=\"total\">Total: <span class=\"dollars\">&dollar;".$total."</span></h3>
                <div class=\"placeorder\">
                    <a href=\"all_products.php\" class=\"continue\">Continue Shopping</a> 
                    <a href=\"checkout.php?total=".$total."\" class=\"add\">Checkout</a></div>
                </div>
            </div>";
    }

    echo"</main>";

    if(!empty($string)){
    include('footer.php');
    }else{
        echo "<footer class=\"footer\">
        <p class=\"foot\">Copyright &copy; Zachary Howell 2022 All Rights Reserved.</p>
        </footer>
    
    </body>
    </html>";
    }
?>
