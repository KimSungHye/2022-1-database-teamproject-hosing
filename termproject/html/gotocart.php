<?php 
  include 'connect_to_mydb.php';
  include 'loadproductbarcode.php';
?>


<?php 
  include 'inc_head.php';
?>

<HTML> 
<HEAD> 
    <title>CART RESULT</title>
    <style type="text/css"> 
      a { text-decoration:none } 
      /* link - 아직 클릭하지 않은 경우 red 색상 설정 */
      a:link { color: black;} 
      /* visited - 한번 클릭하거나 전에 클릭한적 있을 경우 #c71d44 설정 */
      a:visited { color: black;}  
      /* hover - 마우스를 해당 링크에 위치했을 경우 #006DD7 설정 */
      a:hover { color: green;} 
    </style> 
</HEAD>
<body>
</body>
</HTML>

<?php

  $product_size = $_POST["size"];
  $costomer_id = $_SESSION['costomer_id'];
  $product_name = $_GET['product_name'];
  $product_count = 1;

    $list_result_select_products = 
      mysqli_query($con,
      "SELECT * 
        FROM product P
          INNER JOIN product_barcode PB
            ON P.product_barcode = PB.productbarcode
              WHERE P.product_name='" .$product_name. "'") or die(mysqli_error($con));



  $list_result = mysqli_query($con, 'SELECT * FROM product') or die(mysqli_error($con));

  while($row = mysqli_fetch_array($list_result))
  {
    $row = mysqli_fetch_array($list_result_select_products) or die(mysqli_error($con));
    if ($row['size'] == $product_size)
    {
      // echo     
      //     '<div class="products">
      //       <a href="productinfo.php?product_name=', $row["product_name"],'"costomer_id="',   $_SESSION['costomer_id'],' target="home">
      //         <img src="'.$row['product_image_path'].'">
      //         <p>'.$row['product_name'].'</p>
      //         <p class="price">'.$row['price'].'</p>
      //       </a>
      //     </div>';
      $sql ="INSERT INTO cart VALUES ('".$costomer_id."','".$row['product_barcode']."','".$product_size;
      $sql = $sql."',".$product_count.",".$row['price'].")";

      // print_r($sql);
   $ret = mysqli_query($con, $sql) or die(mysqli_error($ret));

   if($ret) { 
     echo "<center>";
     echo "장바구니에 상품이 성공적으로 추가되었습니다!";
     echo "<br>";
     echo "<a href='../php/cart.php'> 장바구니로 이동</a>" ;
     echo "</center>";
   } 
   else { 
    echo "데이터 입력 실패!!!"."<BR>";
    echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
    }
  }

?>
