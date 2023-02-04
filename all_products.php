<?php 
$title="All Products";
require('header.php');
?>
<main>
<div class="form">
    <?php
    if(isset($_GET['category'])&&isset($_GET['sort'])){
        if(($_GET['category'])=="plants"){
            echo '<h1 class="all">All Plants</h1>';
        }else if($_GET['category']=="planters"){
            echo '<h1 class="all">All Planters</h1>';
        }elseif($_GET['category']=="tools"){
            echo '<h1 class="all">All Tools</h1>';
        }}
    else{
        echo '<h1 class="all">All Products</h1>';
    }
    ?>
    
        <form class="order" action="all_products.php" method="get">
            <fieldset class="fs">

            <label class="label" for="category">Category:</label>
            <select class="select" id="category" name="category">
                <option value="all">All</option>
                <option value="plants">Plants</option>
                <option value="planters">Planters</option>
                <option value="tools">Tools</option>
            </select>

            <label class="label" for="sort">Order By:</label>
            <select class="select" id="sort" name="sort">
                <option value="az">Name (A-Z)</option>
                <option value="za">Name (Z-A)</option>
                <option value="low">Price (Low-High)</option>
                <option value="high">Price (High-Low)</option>
            </select>

            <input class="button" type="submit" value="Sort">
            </fieldset>
        </form>
</div>
        <?php
            if(isset($_GET['category'])&&isset($_GET['sort'])){
                if($_GET['category']=="all" && $_GET['sort']=="az"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products ORDER BY product ASC";
                }
                else if($_GET['category']=="all" && $_GET['sort']=="za"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products ORDER BY product DESC";
                }
                else if($_GET['category']=="all" && $_GET['sort']=="low"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products ORDER BY price ASC";
                }
                else if($_GET['category']=="all" && $_GET['sort']=="high"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products ORDER BY price DESC";
                }
                else if($_GET['category']=="plants" && $_GET['sort']=="az"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products WHERE category1='plants' ORDER BY product ASC";
                }
                else if($_GET['category']=="plants" && $_GET['sort']=="za"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products WHERE category1='plants' ORDER BY product DESC";
                }
                else if($_GET['category']=="plants" && $_GET['sort']=="low"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products WHERE category1='plants' ORDER BY price ASC";
                }
                else if($_GET['category']=="plants" && $_GET['sort']=="high"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products WHERE category1='plants' ORDER BY price DESC";
                }
                else if($_GET['category']=="planters" && $_GET['sort']=="az"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products WHERE category1='planters' ORDER BY product ASC";
                }
                else if($_GET['category']=="planters" && $_GET['sort']=="za"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products WHERE category1='planters' ORDER BY product DESC";
                }
                else if($_GET['category']=="planters" && $_GET['sort']=="low"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products WHERE category1='planters' ORDER BY price ASC";
                }
                else if($_GET['category']=="planters" && $_GET['sort']=="high"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products WHERE category1='planters' ORDER BY price DESC";
                }
                else if($_GET['category']=="tools" && $_GET['sort']=="az"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products WHERE category1='tools' ORDER BY product ASC";
                }
                else if($_GET['category']=="tools" && $_GET['sort']=="za"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products WHERE category1='tools' ORDER BY product DESC";
                }
                else if($_GET['category']=="tools" && $_GET['sort']=="low"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products WHERE category1='tools' ORDER BY price ASC";
                }
                else if($_GET['category']=="tools" && $_GET['sort']=="high"){
                    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products WHERE category1='tools' ORDER BY price DESC";
                }}
            else{
            $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products";
            }
        ?>

        <div class="products">
        <?php
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
    </main>
<?php include('footer.php');?>