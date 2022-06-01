<HTML> 
 <HEAD>
     <title>SIGN UP</title> 
     <META http-equiv="content-type" content="text/html; charset=utf-8">
     <link href="/termproject/css/styles.css" rel="stylesheet" /> 
 </HEAD> 
 <BODY> 
     <div style="text-align: center;">
     <H1>신규 회원 입력</H1> 
     <FORM METHOD="post" ACTION="insert_result.php"> 
       <p>회원번호는 00000으로만 입력할 수 있습니다.</p>
       회원번호 : <INPUT TYPE="text" NAME="costomer_no"> <BR>
       <p>아이디는 본인 이름과 전화번호 뒷자리 조합으로만 생성할 수 있습니다.</p> 
       아이디 : <INPUT TYPE="text" NAME="costomer_id"> <BR> 
       이름 : <INPUT TYPE="text" NAME="costomer_name"> <BR>
       <p>등급은 "bronze" 등급으로만 입력할 수 있습니다.</p>
       등급 : <INPUT TYPE="text" NAME="costomer_grade"> <BR>  
       전화번호 : <INPUT TYPE="text" NAME="costomer_telephone"> <BR> 
       주소 : <INPUT TYPE="text" NAME="costomer_home"> <BR> 
      <BR><BR> 
      <INPUT TYPE="submit" VALUE="회원 입력"> 
   </FORM> 
    </div>
 </BODY> 
 </HTML>
