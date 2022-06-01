<?php
	$costomer_id = $_POST["costomer_id"];
	$costomer_name = $_POST["costomer_name"];

	ECHO "전달 받은 아이디 : ", $costomer_id,"<br>";
	ECHO "전달 받은 이름 : " , $costomer_name, "<br>";
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content = "text/html" charset="utf-8">
	<link href="/termproject/css/styles.css" rel="stylesheet">
	<title>CELEN LOGIN</title>
</head>

<body>
	<p><FORM method="post" action="..\php\areusure.php">
      <INPUT TYPE="submit" VALUE="OK">
	</p>
	</FORM>
	
</body>
</html>
