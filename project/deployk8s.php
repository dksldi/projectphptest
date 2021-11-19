<?php

	$dpname = $_POST["dpname"];
	$dpns = $_POST["dpns"];
	$dpcount = $_POST["dpcount"];
	$label = $_POST["label"];
	$image = $_POST["image"]

	$con = mysqli_connect("10.0.105.20","project","test123","project");
	$checkdpns = "select * from member where namespace='$dpns'";
	$dpnscheck = mysqli_query($con,$checkid);
	$count = mysqli_num_rows($dpnscheck);

	$result1 = shell_exec("sudo kubectl create namespace $dpns")
	$result2 = shell_exec("sudo cp /root/projectyml/project.yaml /root/projectyml/'".$dpname."' | sudo sed -i 's/name: my-web/name: '".$dpname."'/g' /root/projectyml/'".$dpname."'.yaml | sudo sed -i 's/namespace: web/namespace: '".$dpns."'/g'  /root/projectyml/'".$dpname."'.yaml | sudo sed -i 's/replicas: 2/replicas: '".$dpcount."'/g' /root/projectyml/'".$dpname."'.yaml | sudo sed -i 's/app: websrv/app: '".$label."'/g' /root/projectyml/'".$dpname."'.yaml | sudo sed -i 's/image: httpd/image: '".$image."'/g' /root/projectyml/'".$dpname."'.yaml | sudo kubectl apply -f '".$dpname."'.yaml")

	if ($count != 0)
	{
		echo ("$result1");
		echo ("$result2");
		echo ("<script>alert('컨테이너 생성 시작')";</script>);
		echo ("<script language='javascript'>location.replace('index.php');</script>");
	}
	else
	{
		echo "<script>alert('컨테이너 생성 실패(잘못된 네임스페이스 혹은 잘못된 정보 입니다)');</script>";
		echo ("<script language='javascript'>location.replace('index.php');</script>");
	}


?>
