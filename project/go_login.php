<!doctype html>
<html>
<head>
	<title>로그인</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/project.css">
	<script type="text/javascript" src="./js/login.js"></script>
</head>
<body>
	
		<?php include "header.php";?>
	
	<div id="gologin">		
			<p>
			<center><h2>로그인</h2>
			<hr />
			<br />
			</p>
			<form name="login" method="post" action="login.php">
					아이디 : <input type="text" name="id" placeholder="아이디 입력"><br /><br /><br />
					패스워드 : <input type="password" name="pass" placeholder="패스워드 입력"><br /><br /><br />
				<a href="#"><img src="./img/login.jpg" onclick="check_input()"></a></center>
			</form>	
	</div>
	<div id="footer">
		<?php include "footer.php";?>
	</div>
</body>
</html>
