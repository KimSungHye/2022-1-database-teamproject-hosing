<?php 
     $con = mysqli_connect("172.20.10.9", "cookUser", "1234", "mydb") or die("MySQL 접속 실패!!");
     $sql ="SELECT * FROM costomer WHERE costomer_id='".$_GET['costomer_id']."'";
 
     $ret = mysqli_query($con, $sql);
     if($ret) { 
     $count = mysqli_num_rows($ret);
     if($count==0) { 
       echo $_GET['costomer_id']." 아이디의 회원이 없음!!!"."<BR>";
     echo "<BR> <A HREF='admin.html'> 초기 화면</A> ";
     exit();
     } 
   } 
   else { 
     echo "데이터 검색 실패!!!"."<BR>";
     echo "실패 원인 :".mysqli_error($con);
     echo "<BR> <A HREF='admin.html'> 초기 화면</A> ";
     exit();
   } 
   $row = mysqli_fetch_array($ret);
   $costomer_id = $row['costomer_id'];
   $costomer_name = $row["costomer_name"];

?> 

<HTML> 
<HEAD> 
	 <title>ADMIN UPDATE</title>
     <META http-equiv="content-type" content="text/html; charset=utf-8"> 
     <link href="/termproject/css/styles.css" rel="stylesheet" />
</HEAD> 
<BODY>
<div style="text-align: center;">
<H1>회원 삭제</H1> 
<FORM METHOD="post" ACTION="delete_result.php"> 
 아이디 : <INPUT TYPE="text" NAME="costomer_id" VALUE=<?php echo $costomer_id ?> READONLY> <BR> 
 이름 : <INPUT TYPE="text" NAME="costomer_name" VALUE=<?php echo $costomer_name ?> READONLY>     
    <BR> 
 <BR><BR> 
 위 회원을 삭제하겠습니까?
 <INPUT TYPE="submit" VALUE="회원 삭제"> 
</FORM> 
</div>
</BODY> 
</HTML>
