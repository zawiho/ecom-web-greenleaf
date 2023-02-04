<?php 
    $title="View Product";
    require('header.php');
    $id=$_GET['id'];
    $query="SELECT id,product,price,category1,category2,full,thumb,description FROM products WHERE id='$id'";
    $sql=mysqli_query($connection,$query);
    $row=mysqli_fetch_array($sql);
?>

        <main>
            <p class="pcategory"><a href="all_products.php">Browse</a> > <a href="all_products.php?category=<?php echo $row['category1']; ?>&sort=az"><?php echo ucwords($row['category1']); ?></a>  >  <a href="all_products.php?category=<?php echo $row['category1']; ?>&sort=az"><?php echo ucwords($row['category2']); ?></a> > <a href="product.php?id=<?php echo $row['id'];?>"><?php echo $row['product'];?></a></p>
            <div class="item">
                <div class="item-img">
                    <img class="upload" src="images/<?php echo $row['full']; ?>" alt="<?php echo $row['description'];?>">
                </div>
                <div class="item-info">
                    <h1 class="itemh1"><?php echo $row['product']; ?></h1>
                    <p class="description"><?php echo $row['description']; ?></p>
                    <div class="action">
                        <h2 class="cost">&dollar;<?php echo $row['price']; ?></h2>
                        <form action="cart.php" method="post" class="addbtn">
                            <input type="submit" name="submit" class="add" value="Add to Cart">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                        </form>
                    </div>
                </div>
            </div>

            <div class="relatedh2">
                <h2>Related Items</h2>
            </div>
            <div class="related-container">
                <div class="related">
                <?php
                    $query="SELECT * FROM products WHERE id!='20' ORDER BY RAND() LIMIT 3";
                    $sql=mysqli_query($connection,$query);
                    WHILE($row=mysqli_fetch_array($sql)){
                        echo"<div class=\"container\">
                                <div>
                                    <a href=\"product.php?id=".$row['id']."\"><img class=\"img\" src=\"images/".$row['thumb']."\" alt=\"".$row['description']."\"></a>
                                </div>
                                <h2><a href=\"product.php?id=".$row['id']."\" class=\"product\">".$row['product']."</a></h2>
                            </div>";
                    }
                ?>
                    <div class="browse-container">
                        <a class="browse" href="all_products.php">Browse All Products</a>
                    </div>
                </div>
            </div>
        </main>
       
    <?php include('footer.php');?>