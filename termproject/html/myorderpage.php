<?php 
  include 'connect_to_mydb.php';
  include 'inc_head.php';
?>

<HTML>
 <link href="..\images\logo\small_logo.ico" rel="shortcut icon" type="image/x-icon">
 <title>ORDER LIST</title>
 <META http-equiv="content-type" content="text/html; charset=utf-8"> 
 <link href="/termproject/css/styles.css" rel="stylesheet" />
      <style type="text/css"> 
      a { text-decoration:none } 
      /* link - 아직 클릭하지 않은 경우  */
      a:link { color: black;} 
      /* visited - 한번 클릭하거나 전에 클릭한적 있을 경우  */
      a:visited { color: black;}  
      /* hover - 마우스를 해당 링크에 위치했을 경우  */
      a:hover { color: green;}
      table {  width:70%; margin-left:15%; margin-right:15%; text-align: center; }
      table, td, th { border-collapse : collapse; border : 1.5px solid black;};
     </style>
</HTML>

<?php 
     // $con = mysqli_connect("172.20.10.9", "cookUser", "1234", "mydb") or die("MySQL 접속 실패!!");
      $costomer_id = $_SESSION['costomer_id'];
     $sql = "SELECT * FROM mydb.order where costomer_id = '".$costomer_id."'";

     $ret = mysqli_query($con, $sql);
     if($ret) { 
     $count = mysqli_num_rows($ret);
     } 
    else { 
       echo "데이터 검색 실패!!!"."<br>";
       echo "실패 원인 :".mysqli_error($con);
       exit();
   } 
 
    echo "<H1>주문서</H1>";
    echo "<TABLE BORDER=1>";
    echo "<TR>";
    echo "<TH>주문 번호</TH> <TH>바코드 번호</TH> <TH>수량</TH> <TH>가격</TH>";
    echo "</TR>";
    while($row = mysqli_fetch_array($ret)) {
       echo "<TR>";
       echo "<TD>", $row['order_no'], "</TD>";
       echo "<TD>", $row['order_barcode'], "</TD>";
       echo "<TD>", $row['number_of_order'], "</TD>";
       echo "<TD>", $row['order_price'], "</TD>";
    } 
 
    mysqli_close($con);
    echo "</TABLE>";
    echo "<BR> <A HREF='home.php'> 홈 화면</A> ";
?>