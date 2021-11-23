function check_input(){
	if (!document.k8s.dpname.value)
	{
		alert("배포 이름이 입력되지 않았습니다");
		return;
	}

	if (!document.k8s.dpns.value)
        {
                alert("네임 스페이스가 입력되지 않았습니다");
                return;
        }
	
	if (!document.k8s.label.value)
        {
                alert("라벨이 입력되지 않았습니다");
                return;
        }
	document.k8s.submit();
}

