<?php 
     $con = mysqli_connect("172.20.10.9", "cookUser", "1234", "mydb") or die("MySQL 접속 실패!!");

     $costomer_no = $_POST["costomer_no"];
     $costomer_id = $_POST["costomer_id"];
     $costomer_name = $_POST["costomer_name"];
     $costomer_grade = $_POST["costomer_grade"];
     $costomer_telephone = $_POST["costomer_telephone"];
     $costomer_home = $_POST["costomer_home"];
  
   $sql =" INSERT INTO costomer VALUES (".$costomer_no.", '".$costomer_id."','".$costomer_name;
   $sql = $sql."','".$costomer_grade."','".$costomer_telephone."','".$costomer_home."')";
 
   $ret = mysqli_query($con, $sql);
 
   echo "<H1>신규 회원 입력 결과</H1>";
   if($ret) { 
     echo "데이터가 성공적으로 입력됨.";
   } 
   else { 
    echo "데이터 입력 실패!!!"."<BR>";
    echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
 
   echo "<BR> <A HREF='sign.html'> 초기 화면</A> ";
?>

<HTML> 
<HEAD> 
    <title>SIGN RESULT</title>
</HEAD>
</HTML>