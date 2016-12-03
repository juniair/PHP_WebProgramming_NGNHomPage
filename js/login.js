/**
 *  로그인 파일
 * */
function login() {

    if($("#username").val() == "" || $("#password").val() == "") {
        alert("Please enter both ID or Password.");
    }
    else {// post 방식으로 로그인
        var url = "../lib/login.php";
        var data = {
            username: $("#username").val(),
            password: $("#password").val()
        };

        // 서버에 data를 post방식으로 전송 후 결과에 따른 처리를 한다.
        $.post(url, data).done(
            function(data) {
                 data = data.replace("\r\n", "");
                if(data == "success") {
                    location.href = "../index.php";
                }
                else {
                    alert("Please enter your ID or Password.");
                }
            }
        );

    }
}

