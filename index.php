<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Gradina Paradis</title>
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
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Gradina bunicii s-a mutat online!</h1>
                       <p>Fructe si legume cu gust!</p>
                       <a href="products.php" class="btn btn-danger">Cumpara acum</a>
                   </div>
                   </center>
               </div>
           </div>

           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Mirti Camelia - Cristina ( cas. Martisca )</p>
                   <p>Gr. 531</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>