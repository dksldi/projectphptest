<?php

	$dpname = $_POST["dpname"];
	$dpns = $_POST["dpns"];
	$dpcount = $_POST["dpcount"];
	$label = $_POST["label"];
	$image = $_POST["image"];

	$con = mysqli_connect("10.0.105.20","project","test123","project");
	$checkdpns = "select * from member where namespace='$dpns'";
	$dpnscheck = mysqli_query($con,$checkdpns);
	$count = mysqli_num_rows($dpnscheck);

	if ($count != 0)
	{
		shell_exec("/var/www/html/project/deploy.sh $dpname $dpns $dpcount $label $image");
		echo ("<script>alert('컨테이너 생성 시작');</script>");
                echo ("<script language='javascript'>location.replace('index.php');</script>");

	}
	else
	{
		echo "<script>alert('컨테이너 생성 실패(잘못된 네임스페이스 혹은 잘못된 정보 입니다)');</script>";
		echo ("<script language='javascript'>location.replace('index.php');</script>");
	}


?>
