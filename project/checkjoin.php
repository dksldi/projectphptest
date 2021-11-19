<?php

	$id = $_POST["id"];
	$pwd = $_POST["pwd"];
	$name = $_POST["name"];
	$ns = $_POST["ns"];

	$con = mysqli_connect("10.0.105.20","project","test123","project");
	$sql = "insert into member (id, password, name, namespace) values ('$id', '$pwd', '$name', '$ns')";
	$checkid = "select * from member where id='$id'";
	$idcheck = mysqli_query($con,$checkid);
	$idcount = mysqli_num_rows($idcheck);
	$checkns = "select * from member where namespace='$ns'";
	$nscheck = mysqli_query($con,$checkns);
	$nscount = mysqli_num_rows($nscheck);

	$result = mysqli_query($con,$sql);

	if($idcount != 0){
		echo ("
			<script>
				alert('중복된 아이디 입니다')
				history.go(-1)
			</script>
			");
		exit;
	}
	if($nscount != 0){
		echo ("
			<script>
				alert('중복된 네임스페이스 입니다')
				history.go(-1)
			</script>
			");
		exit;
	}
	if($result) {
	?>	<script>
			alert('가입 되었습니다');
			location.replace("./index.php");
		</script>
<?php	}
	else{
?>		<script>
			alert('가입에 실패하셨습니다');
			location.replace("./index.php");
		</script>
<?php	}
?>

















