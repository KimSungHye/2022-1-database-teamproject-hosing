<?php 
  include 'connect_to_mydb.php';
  include 'loadproductbarcode.php';
?>

<?php
  ini_set('display_errors', '0')
?>

<?php 
  include 'inc_head.php';
?>


<!DOCTYPE html>

<html>
  <head>
    <link href="..\images\logo\small_logo.ico" rel="shortcut icon" type="image/x-icon">
    <title>CELEN</title>
    <meta http-equiv="content-type" content = "text/html" charset="utf-8">
    <link href="..\css\styles.css?aa" rel="stylesheet">
    <style> img{float: center; }
            div{text-align: center;} </style>
  </head>

  <body>
    <?php
      $list_result = mysqli_query($con, 'SELECT * FROM product') or die(mysqli_error($con));
      $list_result_select_products = 
        mysqli_query($con,
          "SELECT * 
            FROM product P
              INNER JOIN product_barcode PB
                ON P.product_barcode = PB.productbarcode
                 WHERE P.product_name = '".$_GET['product_name']."'") or die(mysqli_error($con));

  while($row = mysqli_fetch_array($list_result)){
        $row = mysqli_fetch_array($list_result_select_products) or die(mysqli_error($con));
        if ($row['size'] == 'S'){
        echo     "<FORM METHOD='post' ACTION='gotocart.php?costomer_id=", $_SESSION['costomer_id'], "&&product_name=",$row['product_name'], "'>
                  <div class='productsinfo'>
                    <img src=".$row['product_image_path'].">
                    <br>
                    <p>".$row["product_name"]."</p>
                    <p class='price'>".$row["price"]."</p>
                    <p><SELECT name='size'>
                      <option VALUE=''>사이즈 선택</option>
                      <option VALUE='S'>S</option>
                      <option VALUE='M'>M</option>
                      <option VALUE='L'>L</option>
                    </SELECT>
                    <INPUT TYPE='submit' VALUE='장바구니'> </p>
                  </div>
                  </FORM>";}
  }
    ?>


<!--     <div class="info_of_products">
        <img src="..\images\product\11232342352390101.png" width="450px" height="450px" align="top">
        <p>FLOWERMARDI T-SHIRTS</p>
        <p class="price">37,800</p>
      <div class="clearfix"></div>
    </div> -->
    
    <!--<div class="footer">
      <a href="#"><img src="images/facebook.png"></a>
      <a href="#"><img src="images/instagram.png"></a>
      <a href="#"><img src="images/twitter.png"></a>
    </div>!-->
  </body>
</html>