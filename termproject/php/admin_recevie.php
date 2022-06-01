<?php
	$userID = $_POST["userID"];
	$userName = $_POST["userName"];

	ECHO "전달 받은 아이디 : ", $userID,"<br>";
	ECHO "전달 받은 이름 : " , $userName, "<br>";
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
