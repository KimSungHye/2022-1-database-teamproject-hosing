<?php 
  include '../html/connect_to_mydb.php';
  include '../html/loadproductbarcode.php';
?>


<?php 
  include '../html/inc_head.php';
?>


<?php
$arrlist = $_POST['checked_product'];
  $order_list_result = mysqli_query($con, 'SELECT * FROM mydb.order') or die(mysqli_error($con));
  $costomer_id = $_SESSION['costomer_id'];
  // print_r($costomer_id);
  // print_r ($_POST['checked_product'][0]);
  // echo "////";
  // print_r ($_POST['checked_product'][1]);
  // echo "////";
  // print_r ($_POST['checked_product'][2]);
  // echo "////";
    // $_POST['checked_product'] = [];


  // print_r($i);
  // echo "<br>";
  // for ($num=0; $num < $i; $num++) { 
  //   if (isset($_POST['checked_product'][$num])){
  //     // if(in_array('checked', $_POST['checked_product'][$num]))
  //     print_r($_POST['checked_product'][$num]);echo "<br>";}
  //         // echo "checked<br>";
  //   else{
  //     $_POST['checked_product'][$num] = "off";
  //     echo "none checked<br>";}

  // }

  
  $i = count($_POST['order_no']);
  print_r($_POST['checked_product']);
  echo "////";
  print_r($_POST['order_no']);
  echo "////";
  print_r($_POST['order_barcode']);
  echo "////";  
  print_r($_POST['costomer_no']);
  echo "////";
  print_r($_POST['order_price']);

 
  for ($num=0; $num < $i; $num++) { 
    if ($_POST['checked_product'][$num]=="checked"){
      $sql = "INSERT INTO mydb.order VALUES ('".$_POST['order_no'][$num]."', '".$_POST['order_barcode'][$num]."', 1, '".$_POST['costomer_no'][$num]."', ".$_POST['order_price'][$num].")";
      print_r($sql);
      $ret = mysqli_query($con, $sql);
      if($ret) 
        echo '<script>alert("주문서추가완료")</script>';
      $sql2 = "DELETE FROM  mydb.cart WHERE product_barcode = '".$_POST['order_barcode'][$num]."'";
      print_r($sql2);
      $ret2 = mysqli_query($con, $sql2);
    }
  }

 if ($_POST['checked_product'][$i]=="checked")
  $intoordertbl = 
      mysqli_query($con,
      "SELECT * 
        FROM cart C
          INNER JOIN product P
            ON C.product_barcode = P.product_barcode
              WHERE C.costomer_id='" .$costomer_id. "'") or die(mysqli_error($con));



?>


<!DOCTYPE html>

<html>
  <head>    
    <link href="..\images\logo\small_logo.ico" rel="shortcut icon" type="image/x-icon">
    <title>CELEN</title>
    <style type="text/css">
      a { text-decoration:none } 
      /* link - 아직 클릭하지 않은 경우 red 색상 설정 */
      a:link { color: black;} 
      /* visited - 한번 클릭하거나 전에 클릭한적 있을 경우 #c71d44 설정 */
      a:visited { color: black;}  
      /* hover - 마우스를 해당 링크에 위치했을 경우 #006DD7 설정 */
      a:hover { color: green;}      
    </style>
    <meta http-equiv="content-type" content = "text/html" charset="utf-8" />
    <link href="\termproject\css\styles.css?d" rel="stylesheet" />
  </head>
  <body>
    <script type="text/javascript">
      $(document).ready(function() {
      $("input[name=checked_product]").each(function(index, item){
       alert($(item).attr("value1") + ", " + $(item).attr("value2"));
   });
});
    </script>
  </body>
</html>

