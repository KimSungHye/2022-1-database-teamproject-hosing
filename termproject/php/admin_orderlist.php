<?php 
  include '../html/connect_to_mydb.php';
  include '../html/loadproductbarcode.php';
?>

<?php 
  $adminorderlists = mysqli_query($con, 'SELECT * FROM mydb.order');
  $costomer_address = mysqli_query($con, 'SELECT * FROM mydb.costomer');

  $address_orderlist = 
  mysqli_query($con,
    "SELECT * 
      FROM mydb.order O 
        INNER JOIN mydb.costomer C 
          ON O.costomer_id = C.costomer_id
        INNER JOIN mydb.product P
          ON O.order_barcode = P.product_barcode
      ORDER BY O.order_no") or die(mysqli_error($con));
  // print_r($address_orderlist);


  echo '<TABLE BORDER=1>';
  echo '<TH>주문 번호</TH>';
  echo '<TH>아이디</TH>';
  echo '<TH>고객 번호</TH>';
  echo '<TH>이름</TH>';
  echo '<TH>주소</TH>';
  echo '<TH>제품 사진</TH>';
  echo '<TH>제품 이름</TH>';
  echo '<TH>바코드번호</TH>';
  echo '<TH>위치</TH>';

  $order_num = 0;
  print_r($order_no);
  echo '<br>';
  $numoforder = array();
  // [
  //   ['order_no' => NULL, 'number_of_order' => $order_num]
  // ];

  // $add_num_of_order = array_map(function($arr) { $arr['number_of_order'] = $arr['number_of_order'] + 1; }, $numoforder);
  // $clear_num_of_order = array_map(function($arr) { $arr['number_of_order'] = 1; }, $numoforder);
  // $add_order_no_order = array_map(function($arr, $order_no) { $arr['order_no'] = $order_no; }, $numoforder, $order_no);

  $row = mysqli_fetch_array($address_orderlist);
  // print($row);
  $order_no = $row['order_no'];
  // print($order_no);
  $numoforders[$order_no] = 1;
  // print_r($numoforder);

  while($row = mysqli_fetch_array($address_orderlist)){
    echo "<TR>";
    $order_no = $row['order_no'];
    if ($order_no == $row['order_no']){
      $numoforders[$order_no] = $numoforders[$order_no] + 1;
      // print_r($numoforders);
    }

    else {
      $numoforders[$order_no] = 1;
    }
    // print_r($numoforders);
  }

  print_r(array_keys($numoforders)[0]);
  $key_arrays = array_keys($numoforders);
  $values_arrays = array_values($numoforders);
  $num_key_arrays = 0;
  $while_key_arrays = 0;

  while($row = mysqli_fetch_array($address_orderlist)){  

    $order_no = $row['order_no'];

    if ($key_arrays[$num_key_arrays] == $order_no and $while_key_arrays != $values_arrays[$num_key_arrays] ){
      $while_key_arrays = $values_arrays[$num_key_arrays];
    }
    // print_r($while_key_arrays);
    
    // $order_no = $numoforders[$order_no]


    // print_r($numoforder[]);
    echo "<TD rowspan = ",$numoforder,">", $order_no, "</TD>";

    echo "<TD> <img src = '",$row['product_image_path'], "' width = '200px' height = '200px'></TD>";
    echo "<TD>", $row['product_name'], "</TD>";
    echo "<TD>", $row['product_barcode'], "</TD>";
    echo "<TD>", $row['product_location'], "</TD>";


    echo "<TD rowspan = ",$numoforder,">", $row['costomer_id'], "</TD>";
      echo "<TD rowspan = ",$numoforder,">", $row['costomer_no'], "</TD>";
      echo "<TD rowspan = ",$numoforder,">", $row['costomer_name'], "</TD>";
      echo "<TD rowspan = ",$numoforder,">", $row['costomer_home'], "</TD>";

    echo "<TD> <img src = '",$row['product_image_path'], "' width = '200px' height = '200px'></TD>";
    echo "<TD>", $row['product_name'], "</TD>";
    echo "<TD>", $row['product_barcode'], "</TD>";
    echo "<TD>", $row['product_location'], "</TD>";
    print_r($row['costomer_home']);
    print_r($row['order_no']);
    echo '<br>';
    echo "</TR>";
  }

  echo "</TABLE>";

  // print($row['']);