function check_input(){
	if (!document.joinmember.id.value)
	{
		alert("아이디를 입력 해주세요");
		return;
	}
	if (!document.joinmember.pwd.value)
	{
		alert("비밀번호를 입력 해주세요");
		return;
	}
	if (!document.joinmember.name.value)
	{
		alert("이름을 입력 해주세요");
		return;
	}
  	if (!document.joinmember.ns.value)
        {
                alert("네임스페이스를 입력 해주세요");
                return;
        }

	document.joinmember.submit();
}
