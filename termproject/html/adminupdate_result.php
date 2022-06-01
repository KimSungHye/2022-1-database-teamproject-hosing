<?php 
     $con = mysqli_connect("172.20.10.9", "cookUser", "1234", "mydb") or die("MySQL 접속 실패!!");
 
     $costomer_no = $_POST["costomer_no"];
     $costomer_id = $_POST["costomer_id"];
     $costomer_name = $_POST["costomer_name"];
     $costomer_grade = $_POST["costomer_grade"];
     $costomer_telephone = $_POST["costomer_telephone"];
     $costomer_home = $_POST["costomer_home"];
     $sql ="UPDATE costomer SET costomer_no=".$costomer_no.", costomer_id='".$costomer_id."',costomer_name='".$costomer_name;
     $sql = $sql."',costomer_grade='".$costomer_grade."',costomer_telephone='".$costomer_telephone."',costomer_home='".$costomer_home."' WHERE costomer_id='".$costomer_id."'";
     $ret = mysqli_query($con, $sql);
 
   echo "<H1>회원 정보 수정 결과</H1>";
   if($ret) { 
     echo "데이터가 성공적으로 수정됨.";
 }
     else { 
        echo "데이터 수정 실패!!!"."<BR>";
        echo "실패 원인 :".mysqli_error($con);
     } 
     mysqli_close($con);
 
     echo "<BR> <A HREF='admin.html'> 초기 화면</A> ";
?>
