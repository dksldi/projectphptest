<!doctype html>
<html>
<head>
	<title>프로젝트</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/project.css">
</head>
<body>
	<div id="header">
		<?php include "header.php";?>
	</div>
	<div id="main">
<?php
	$id = $_POST["id"];
	$pass = $_POST["pass"];

	$con = mysqli_connect("10.0.105.20","project","test123","project");
	$sql = "select * from member where id='$id'";
	$result = mysqli_query($con,$sql);

	$num_match = mysqli_num_rows($result);

	if(!$num_match){
		echo("
			<script>
			alert('등록되지 않은 사용자 입니다')
			history.go(-1)
			</script>
			");
	}
	else{
		$row = mysqli_fetch_array($result);
		$db_pass = $row["password"];
		mysqli_close($con);

		if($pass != $db_pass){
			echo ("
				<script>
					alert('잘못된 패스워드 입니다')
					history.go(-1)
				</script>
				");
			exit;
		}
		else
		{
			session_start();
			$_SESSION['userid'] = $row["id"];
			$_SESSION['username'] = $row["name"];
			

			echo("
				<script>
					location.href = 'index.php';
				</script>
				");
		}

	}

?>
	</div>
	<div id="footer">
		<?php include "footer.php";?>
	</div>
</body>
</html>
