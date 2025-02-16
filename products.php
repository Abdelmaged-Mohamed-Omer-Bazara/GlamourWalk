<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href='img/lifestyleStore' />
        <title>GlamourWalk Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our GlamourWalk Store!</h1>
                    <p>We have the best Offical Ladys Shoes, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/heels 1" alt="heels">
                            </a>
                            <center>
                                
                                <div class="caption">
                                    <h3>heels 1</h3>
                                    <p>Price: 72$</p>
                                    <label for="shoe-size">Shoe Size:</label>
                            <select name="shoe_size" id="shoe_size" class="form-control" required>
                             <option value="size">40</option>
                             <option value="size">41</option>
                             <option value="size">42</option>
                             <option value="size">43</option>
                             <option value="size">44</option>
                            <option value="size">45</option>
                            </select>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/heels 2" alt="boots">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>heels 2</h3>
                                    <p>Price: 79$</p>
                            <label for="shoe-size">Shoe Size:</label>
                            <select name="shoe_size" id="shoe_size" class="form-control" required>
                             <option value="size">40</option>
                             <option value="size">41</option>
                             <option value="size">42</option>
                             <option value="size">43</option>
                             <option value="size">44</option>
                            <option value="size">45</option>>
                            </select>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/heels 3.jpg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>heels 3</h3>
                                    <p>Price:80$</p>
                                    <label for="shoe-size">Shoe Size:</label>
                            <select name="shoe_size" id="shoe_size" class="form-control" required>
                            <option value="size">40</option>
                            <option value="size">41</option>
                             <option value="size">42</option>
                             <option value="size">43</option>
                             <option value="size">44</option>
                            <option value="size">45</option>
                            </select>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/heels 4.jpg" alt="Olympus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>heels 4</h3>
                                    <p>Price:85$</p>
                                    <label for="shoe-size">Shoe Size:</label>
                            <select name="shoe_size" id="shoe_size" class="form-control" required>
                            <option value="size">40</option>
                            <option value="size">41</option>
                             <option value="size">42</option>
                             <option value="size">43</option>
                             <option value="size">44</option>
                            <option value="size">45</option>
                            </select>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/boots 1.jpg" alt="Titan 301">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boot 1</h3>
                                    <p>Price:100$</p>
                                    <label for="shoe-size">Shoe Size:</label>
                            <select name="shoe_size" id="shoe_size" class="form-control" required>
                            <option value="size">40</option>
                            <option value="size">41</option>
                             <option value="size">42</option>
                             <option value="size">43</option>
                             <option value="size">44</option>
                            <option value="size">45</option>
                            </select>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/boots 2" alt="Titan 201">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boot 2</h3>
                                    <p>Price: 110$</p>
                                    <label for="shoe-size">Shoe Size:</label>
                            <select name="shoe_size" id="shoe_size" class="form-control" required>
                            <option value="size">40</option>
                            <option value="size">41</option>
                             <option value="size">42</option>
                             <option value="size">43</option>
                             <option value="size">44</option>
                            <option value="size">45</option>
                            </select>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/boots 3" alt="htm milan">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boot 3</h3>
                                    <p>Price: 120$</p>
                                    <label for="shoe-size">Shoe Size:</label>
                            <select name="shoe_size" id="shoe_size" class="form-control" required>
                            <option value="size">40</option>
                            <option value="size">41</option>
                             <option value="size">42</option>
                             <option value="size">43</option>
                             <option value="size">44</option>
                            <option value="size">45</option>
                            </select>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/boots 4.jpg" alt="Favre Leuba">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boot 4</h3>
                                    <p>Price: 130$</p>
                                    <label for="shoe-size">Shoe Size:</label>
                            <select name="shoe_size" id="shoe_size" class="form-control" required>
                            <option value="size">40</option>
                            <option value="size">41</option>
                             <option value="size">42</option>
                             <option value="size">43</option>
                             <option value="size">44</option>
                            <option value="size">45</option>
                            </select>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/flat 1.jpg" alt="Raymond shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Flatshoes 1</h3>
                                    <p>Price: 90$</p>
                                    <label for="shoe-size">Shoe Size:</label>
                            <select name="shoe_size" id="shoe_size" class="form-control" required>
                            <option value="size">40</option>
                            <option value="size">41</option>
                             <option value="size">42</option>
                             <option value="size">43</option>
                             <option value="size">44</option>
                            <option value="size">45</option>
                            </select>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/flat 2.jpg" alt="Charles shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Flatshoes 2</h3>
                                    <p>Price:150$</p>
                                    <label for="shoe-size">Shoe Size:</label>
                            <select name="shoe_size" id="shoe_size" class="form-control" required>
                             <option value="card">40</option>
                            <option value="cash_on_pickup">41</option>
                            <option value="cash_on_pickup">42</option>
                            <option value="cash_on_pickup">43</option>
                            <option value="cash_on_pickup">44</option>
                            <option value="cash_on_pickup">45</option>
                            </select>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/flat 3.jpg" alt="HXR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Flatshoes 3</h3>
                                    <p>Price: 170$</p>
                                    <label for="shoe-size">Shoe Size:</label>
                            <select name="shoe_size" id="shoe_size" class="form-control" required>
                             <option value="card">40</option>
                            <option value="cash_on_pickup">41</option>
                            <option value="cash_on_pickup">42</option>
                            <option value="cash_on_pickup">43</option>
                            <option value="cash_on_pickup">44</option>
                            <option value="cash_on_pickup">45</option>
                            </select>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/flat 4.jpg" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Flatshoes 4</h3>
                                    <p>Price:175$</p>
                                    <label for="shoe-size">Shoe Size:</label>
                            <select name="shoe_size" id="shoe_size" class="form-control" required>
                             <option value="card">40</option>
                            <option value="cash_on_pickup">41</option>
                            <option value="cash_on_pickup">42</option>
                            <option value="cash_on_pickup">43</option>
                            <option value="cash_on_pickup">44</option>
                            <option value="cash_on_pickup">45</option>
                            </select>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="">GlamourWalk</a> Store. All Rights Reserved.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>