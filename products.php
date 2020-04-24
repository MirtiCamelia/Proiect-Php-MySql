<?php
    session_start();
    require 'check_if_add.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="images/icon.png" />
        <title>Gradina Bunicii</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Gradina bunicii!</h1>
                    <p>Fructe si legume</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cos.php">
                                <img src="img/mere.jpg" alt="Mere">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mere</h3>
                                    <p>Pret: 4 lei/kg</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Cumpara</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="insert.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Adauga in cos</a>
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
                            <a href="cos.php">
                                <img src="img/pere.jpg" alt="Pere">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Pere</h3>
                                    <p>Pret: 6 lei/kg</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Cumpara</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                        <a href="insert.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Adauga in cos</a>
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
                            <a href="cos.php">
                                <img src="img/struguri.jpg" alt="Struguri">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Struguri</h3>
                                    <p>Pret: 10 lei/kg</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Cumpara</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                        <a href="insert.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Adauga in cos</a>
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
                            <a href="cos.php">
                                <img src="img/mure.jpg" alt="Mure">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mure</h3>
                                    <p>Pret: 12 lei/kg</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Cumpara</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                        <a href="insert.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Adauga in cos</a>
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
                            <a href="cos.php">
                                <img src="img/ardei.jpg" alt="Ardei">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ardei</h3>
                                    <p>Pret: 5 lei/kg</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Cumpara</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="insert.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Adauga in cos</a>
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
                            <a href="cos.php">
                                <img src="img/ardei_iuti.jpg" alt="Ardei iuti">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ardei iuti</h3>
                                    <p>Pret: 8 lei/kg</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Cumpara</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="insert.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Adauga in cos</a>
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
                            <a href="cos.php">
                                <img src="img/capia.JPG" alt="Capia">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ardei capia</h3>
                                    <p>Pret: 7 lei/kg</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Cumpara</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="insert.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Adauga in cos</a>
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
                            <a href="cos.php">
                                <img src="img/castraveti.jpg" alt="Castraveti">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Castraveti</h3>
                                    <p>Pret: 3 lei/kg</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Cumpara</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="insert.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Adauga in cos</a>
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
                            <a href="cos.php">
                                <img src="img/dovlecei.jpg" alt="Dovlecei">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Dovlecei</h3>
                                    <p>Pret: 3 lei/kg</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Cumpara</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="insert.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Adauga in cos</a>
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
                            <a href="cos.php">
                                <img src="img/rosii1.jpg" alt="Rosii">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Rosii </h3>
                                    <p>Pret: 4 lei/kg</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Cumpara</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href=insert.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Adauga in cos</a>
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
                            <a href="cos.php">
                                <img src="img/rosii3.jpg" alt="Rosi">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Rosii</h3>
                                    <p>Pret: 5 lei/kg</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Cumpara</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="insert.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Adauga in cos</a>
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
                            <a href="cos.php">
                                <img src="img/ridichi.jpg" alt="Ridichi">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ridichi</h3>
                                    <p>Pret: 2 lei </p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Cumpara</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="insert.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Adauga in cos</a>
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
        </div>
    </body>
</html>
