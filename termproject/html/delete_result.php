<?php 
     $con = mysqli_connect("172.20.10.9", "cookUser", "1234", "mydb") or die("MySQL 접속 실패!!");
 
     $costomer_id = $_POST["costomer_id"];
 
     $sql = "DELETE FROM costomer WHERE costomer_id='".$costomer_id."'";
 
     $ret = mysqli_query($con, $sql);
 
    echo "<H1>회원 삭제 결과</H1>";
    if($ret) { 
    echo $costomer_id." 회원이 성공적으로 삭제됨..";
    } 
    else { 
       echo "데이터 삭제 실패!!!"."<BR>";
       echo "실패 원인 :".mysqli_error($con);
    } 
    mysqli_close($con);
 
    echo "<BR><BR> <A HREF='admin.html'> 초기 화면</A> ";
 ?>
