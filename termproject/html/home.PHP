<?php 
  include 'inc_head.php';
?>

<?php 
  include 'connect_to_mydb.php';
?>

<!DOCTYPE html>

<html>
  <head>

    <title>CELEN</title>
    <meta http-equiv="content-type" content = "text/html" charset="utf-8">
    <link href="..\css\styles.css" rel="stylesheet">
  </head>

  <body>
     <div class="navbar">
      <!--<a class="logo" href="#">
        <img src="images/logo.png" height="20px">
      </a>!-->
    </div>
    
    <img src="\termproject\images\logo\big_logo.png" style="display: block; margin: 0 auto; width:900px; height:450px;">

    <h1>All Products</h1>
    <!-- <div class="products">
      <a href="#">
        <img src="\termproject\images\product\11232342352390101.png">
        <p>FLOWERMARDI T-SHIRTS</p>
        <p class="price">37,800</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11232222142130102.png">
        <p>MONOGRAM LOGO T-SHIRTS</p>
        <p class="price">69,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11232402402400103.png">
        <p>SMALL HEART LOGO SLEEVE</p>
        <p class="price">160,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01232352362410101.png">
        <p>BIG LOGO T-SHIRTS</p>
        <p class="price">35,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01230610590680102.png">
        <p>MICHIGAN OVER TEE</p>
        <p class="price">39,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11232282282380201.png">
        <p>TAG KEEP LONG SLEEVE</p>
        <p class="price">49,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11232262302350202.png">
        <p>Graphic Basic Sleeve</p>
        <p class="price">36,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01230180180180201.png">
        <p>STRIPE LONG SLEEVE</p>
        <p class="price">45,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01231882042380202.png">
        <p>Cityboy Oxford Shirts</p>
        <p class="price">47,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01232422432450203.png">
        <p>T-Logo L/S Tee</p>
        <p class="price">55,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11230340340360301.png">
        <p>BUCKLE WIDE DENIM PANTS</p>
        <p class="price">69,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11230790961120302.png">
        <p>Deep Washing Wide Denim</p>
        <p class="price">52,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01232182121980301.png">
        <p>Deep One Tuck Sweat Pants</p>
        <p class="price">39,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01231101331510302.png">
        <p>WIDE DENIM PANTS</p>
        <p class="price">49,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01230340360490303.png">
        <p>Wide String Cargo Slacks</p>
        <p class="price">89,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11231941911840401.png">
        <p>LINE HALF SHORTS</p>
        <p class="price">32,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11232322382340402.png">
        <p>MARCHE EMBLEM SWEAT SHORTS</p>
        <p class="price">59,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11230210200250403.png">
        <p>TWO PINTUCK DERMUDA PANTS</p>
        <p class="price">69,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01231961871700401.png">
        <p>CLASSIC FLAT SHORTS</p>
        <p class="price">119,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01230520550700402.png">
        <p>Denim Half Pants</p>
        <p class="price">99,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11230480520550501.png">
        <p>DENIM PLEATS BELT SKIRT</p>
        <p class="price">65,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11231571341540502.png">
        <p>Color unbalance skirt</p>
        <p class="price">62,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11231812072300503.png">
        <p>LONG DENIM SKIRT</p>
        <p class="price">51,200</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11232192131990504.png">
        <p>COTTON LONG SKIRT</p>
        <p class="price">46,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11231101371640505.png">
        <p>DISTRESSED DENIM MAXI SKIRT</p>
        <p class="price">128,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11230180190210601.png">
        <p>FLOWER ONEPIECE</p>
        <p class="price">74,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11230210200250602.png">
        <p>BCG ONEPIECE</p>
        <p class="price">59,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11231541812020603.png">
        <p>SHINE SLIM ONEPIECE</p>
        <p class="price">59,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11230950951050604.png">
        <p>C CHIFFON MINI DRESS</p>
        <p class="price">74,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11230370380430605.png">
        <p>Amigo Denim Dress</p>
        <p class="price">131,000</p>
      </a>
      <div class="clearfix"></div>
    </div> -->
    
    <!--<div class="footer">
      <a href="#"><img src="images/facebook.png"></a>
      <a href="#"><img src="images/instagram.png"></a>
      <a href="#"><img src="images/twitter.png"></a>
    </div>!-->
  </body>
</html>

<?php

  // $con = mysqli_connect('172.20.10.9', 'cookUser', '1234');
  // $con = mysqli_connect('localhost', 'cookUser', '1234');

  // mysqli_select_db($con, 'mydb') or die(mysqli_error($con));
  $list_result = mysqli_query($con, 'SELECT * FROM product') or die(mysqli_error($con));
  // if(!empty($_GET['id'])) {
  //   $product_result = mysql_query($con, 'SELECT * FROM product WHERE product_name = '.mysql_real_escape_string($_GET['id']));
  //   $product = mysql_fetch_array($product_result);
  // }
  $list_result_size = mysqli_query($con, 'SELECT * FROM product_barcode') or die(mysqli_error($con));

  $list_result_select_products = 
  mysqli_query($con,
    "SELECT * 
      FROM product_barcode PB
        INNER JOIN product P
          ON PB.productbarcode = P.product_barcode
           WHERE PB.size='S'") or die(mysqli_error($con));


  while($row = mysqli_fetch_array($list_result))
  {
    $row = mysqli_fetch_array($list_result_select_products) or die(mysqli_error($con));
    if ($row['size'] == 'S')
    {
      echo     
          '<div class="products">
            <a href="productinfo.php?product_name=', $row["product_name"],'"costomer_id="',   $_SESSION['costomer_id'],' target="home">
              <img src="'.$row['product_image_path'].'">
              <p>'.$row['product_name'].'</p>
              <p class="price">'.$row['price'].'</p>
            </a>
          </div>';
    }
  }

  // $row = mysqli_fetch_array($list_result)or die(mysqli_error($con));
  //   echo     '<div class="products">
  //       <a href="shortshirts1.html" target="home">
  //         <img src="'.$row['product_image_path'].'">
  //         <p>'.$row['product_name'].'</p>
  //         <p class="price">'.$row['price'].'</p>
  //       </a>
  //     </div>';
?>