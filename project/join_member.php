<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>회원가입</title>
	<link rel="stylesheet" type="text/css" href="./css/project.css">
	<script type="text/javascript" src="./js/join.js"></script>
</head>
<body>
	<center>
	<div id="join">
		<p><h2>회원가입</h2></p>
		<hr /><br /><br /><br />
		<form name=joinmember method='post' action='checkjoin.php'>
			아이디 : <input type="text" name="id"><br /><br /><br />
			패스워드 : <input type="password" name="pwd"><br /><br /><br />
			이름 : <input type="text" name="name"><br /><br /><br />
			네임스페이스 : <input type="text" name="ns"><br /><br /><br />
			<a href="#"><img src="./img/check.jpg" onclick="check_input()"></a>
		</form>
	</div>
	</center>
</body>
</html>
