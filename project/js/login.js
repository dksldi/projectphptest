function check_input(){
        if (!document.login.id.value)
        {
                alert("아이디가 입력되지 않았습니다");
                return;
        }
        if (!document.login.pass.value)
        {
                alert("비밀번호가 입력되지 않았습니다");
                return;
        }
	
	
	document.login.submit();


}
