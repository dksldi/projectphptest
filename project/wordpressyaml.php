<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>WORDPRESS 컨테이너 생성</title>
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
        <form name="k8s" method="post" action="deploywordpress.php">
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
                메모리:
                <select name="mem">
                        <option value="128">128Mi</option>
                        <option value="256">256Mi</option>
                        <option value="512">512Mi</option>
                        <option value="1024">1024Mi</option>
                        </select><br /><br /><br />
                cpu:
                <select name="cpu">
                        <option value="100">100m</option>
                        <option value="300">300m</option>
                        <option value="500">500m</option>
                        <option value="1000">1000m</option>
                        </select><br /><br /><br />
                최소 메모리:
                <select name="reqmem">
                        <option value="64">64Mi</option>
                        <option value="128">128Mi</option>
                        <option value="256">256Mi</option>
                        <option value="512">512Mi</option>
                        </select><br /><br /><br />
                최소 cpu:
                 <select name="reqcpu">
                        <option value="50">50m</option>
                        <option value="150">150m</option>
                        <option value="250">250m</option>
                        <option value="500">500m</option>
                        </select><br /><br /><br />
                스토리지:
                <select name="str">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        </select><br /><br /><br />
                호스트:
                        <input type="text" name="host1" style="width:30px;height:15px;"> .
                        <input type="text" name="host2" style="width:30px;height:15px;"> .
                        <input type="text" name="host3" style="width:30px;height:15px;"><br /><br /><br />


                <a href="#"><img src="./img/okctn.jpg" onclick="check_input()"></a>

        </div>
        </form>
</center>
</body>
</html>
