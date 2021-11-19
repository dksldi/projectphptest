<div id="top">
<?php
	session_start();
	if (isset($_SESSION['userid'])){
		$userid = $_SESSION['userid'];
	}
	else {
		$userid = "";
	}

	if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
	}
	else {
		$username = "";
	}


?>
	<p>
		<div id="big"><center><h1><a href="index.php" target="_self">프로젝트 연습</a></h1></center></div>
	</p>
	<p class="login">
<?php
	if(!$userid) {
		echo ("<a href='join_member.php'>회원가입</a>&nbsp;|&nbsp;<a href='go_login.php'>로그인</a>");
	}
	else {
		echo "{$username}님 반갑습니다.<br>";
		echo ("<a href='logout.php'>로그아웃</a>");
		echo "<br>";
	}
?>
	</p>
</div>
