<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HTTPD 컨테이너 생성</title>
	<link rel="stylesheet" type="text/css" href="./css/project.css">
	<script type="text/javascript" src="./js/k8s.js"></script>
</head>
<body>
<center>
	<div id="k8s">
	<p>
	<h2>컨테이너 생성</h2>
	</p>
	<hr />
	<br /><br />
	<form name="k8s" method="post" action="deployk8s.php">
		배포 이름 : <input type="text" name="dpname" placeholder="배포이름 입력"><br /><br /><br />
		namespace : <input type="text" name="dpns" placeholder="네임 스페이스 입력"><br /><br /><br />
		배포 개수 :
		<select name="dpcount">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			</select><br /><br /><br />
		라벨: <input type="text" name="label" placeholder="라벨 입력"><br /><br /><br/>
		이미지 : 
		<select name="image">
			<option value="httpd" selected>testimg</option>
			<option value="nginx">testimg2</option>
			</select><br /><br /><br /><br /><br />
		<a href="#"><img src="./img/okctn.jpg" onclick="check_input()"></a>
	</div>
	</form>
</center>
</body>
</html>


