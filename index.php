<?php
    $title="Home";
    require('header.php');
?>

<main>
<section>
<h1 class="h1index">Featured Items</h1>

<div class="featured">
<?php
    $query="SELECT * FROM products WHERE id!='20' ORDER BY RAND() LIMIT 8";
    $sql=mysqli_query($connection,$query);
            WHILE($row=mysqli_fetch_array($sql)){
            echo"
                <div class=\"container\">
                    <div>
                        <a href=\"product.php?id=".$row['id']."\">
                            <img class=\"img\"  src=\"images/".$row['thumb']."\" alt=\"".$row['description']."\">
                        </a>
                    </div>
                    <div class=\"caption\">
                        <div class=\"product-heading\">
                            <div>
                                <h2><a href=\"product.php?id=".$row['id']."\" class=\"product\">".$row['product']."</a></h2>
                                <p class=\"category\"><a href=\"all_products.php?category=".$row['category1']."&sort=az\">".ucwords($row['category1'])."</a> > <a href=\"all_products.php?category=".$row['category1']."&sort=az\">".ucwords($row['category2'])."</a></p>
                            </div>
                        <p class=\"price\"> &dollar;".$row['price']."</p>
                    </div>
                </div>
            </div>";
            }
?>
</div>
</section>

<section>
<h1 class="h1category">Categories</h1>
<div class="categories-container">
    <div class="categories">

        <div class="sort">
            <a href="all_products.php?category=plants&sort=low" class="product-img"><img class="img" src="images/english-ivy-3000px.jpg" width="340" alt="An image of English Ivy vines spilling over the edge of a large flower pot."></a>
            <div class="sort-copy">
                <a href="all_products.php?category=plants&sort=low" class="product"><h2 class="product">Plants</h2></a>
                <a href="all_products.php?category=plants&sort=low" class="explore">Explore</a>
                <p>Browse our wide variety of plants! We carry many varieties for plant owners of all experience and skill levels, from absolute beginners to those with a green thumb. You will see our selection contains only the highest quality of plants at competitive prices. We ship to any address within Canada and offer same-day delivery for residents of Calgary and the surrounding area.</p>
            </div>
        </div>

        <div class="sort">
            <a href="all_products.php?category=planters&sort=low" class="product-img"><img class="img" src="images/birds-nest-3000px.jpg" width="340" alt="An image of a planter in the shape of a nest with two birds perched upon the edge."></a>
            <div class="sort-copy">
                <a href="all_products.php?category=planters&sort=low" class="product"><h2 class="product">Planters</h2></a>
                <a href="all_products.php?category=planters&sort=low" class="explore">Explore</a>
                <p>Bring even more character to your home jungle with our wonderfully unique planters! Featuring rustic and artful designs, any one of these beautiful planters is sure to catch the eye of anyone lucky enough to witness your impressive collection. Crafted locally from durable, sustainable materials, you can rest assured that you are making an ethical purchase that will last a lifetime. </p>
            </div>
        </div>

        <div class="sort">
            <a href="all_products.php?category=tools&sort=low" class="product-img"><img class="img" src="images/thermo-hygrometer-3000px.jpg" width="340" alt="An image of an instrument for measuring temperature and humidity."></a>
            <div class="sort-copy">
                <a href="all_products.php?category=tools&sort=low" class="product"><h2 class="product">Tools</h2></a>
                <a href="all_products.php?category=tools&sort=low" class="explore">Explore</a>
                <p>Ensure your plants are getting the care and affection they deserve! Our specialized tools are designed to bring health and happiness to your plants. We carry watering tools to guarantee a consistent watering every time, fine mist vaporizers to provide adequate humidity, and even measuring tools to help you monitor growing conditions to help your botanical buddies thrive.</p>
            </div>
        </div>
    </div>
</div>
</section>
</main>

<?php include('footer.php');?>