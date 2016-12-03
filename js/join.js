/**
 * Created by juniair on 2016-06-06.
 */
$(document).ready(function () {
    rankEvent();
    phoneEvent();
    submitEvent();
});


function rankEvent() {
    // 셀렉트키 변경시 작업
    $(".form-select").change(function () {
        if($(this).val() == "교수" || $(this).val() == "졸업생") {
            $("#stdid").attr("disabled", "disabled");
        }
        else {
            $("#stdid").removeAttr("disabled");
        }
    })
}

function phoneEvent() {
    $("#phoned").keyup(function () {

        if(event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 16 ||
            event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 46 ) {
            if($(this).val().length == 3 || $(this).val().length == 8 ) {
                // 텍스트키를 제외한 키를 입력했을시 작업
                var num = $(this).val();
                num += "-";
                $(this).val(num);
            }
            return;
        }
        else {
            // 텍스트 키입력 작업
            if($(this).val().length != 14){
                if($(this).val().length == 3 || $(this).val().length == 8 ) {
                    var num = $(this).val();
                    num += "-";
                    $(this).val(num);
                }
                $(this).val( $(this).val().replace(/[^0-9:\-:\x00-\x1F\x7F]/gi,"") );
            }
            else {
                $(this).val( $(this).val().substring(0, 13));
            }
        }

    });
}

function submitEvent() {
    var re_id = /^[a-zA-Z0-9_-]{4,20}$/; // 아이디 검사식
    var re_pw = /^[a-z:A-Z:0-9:_:-]{8,20}$/; // 비밀번호 검사식
    var re_mail = /^([\w\.-]+)@([a-z\d\.-]+)\.([a-z\.]{2,6})$/; // 이메일 검사식

    var form = $('#signup-form');
    var uid = $('#id');
    var upw = $('#pass');
    var cofi_pw = $('#confirm_pass');
    var mail = $('#email');
    $("#signup_button").click(function () {
        if(!re_id.test(uid.val())) {
            alert('[ID 입력 오류] 유효한 ID를 입력해 주세요.');
            uid.focus();
            return;
        }
        else if(upw.val() != cofi_pw.val()) {
            alert('[Password 입력 오류] 비밀번호가 불일치합니다. 다시 입력하세요');
            upw.focus();
            return;
        }
        else if(re_mail.test(mail.val()) != true) { // 이메일 검사
            alert('[Email 입력 오류] 유효한 이메일 주소를 입력해 주세요.');
            mail.focus();
            return;
        }
        else if($(".form-select option:selected").val() == "-----") {
            alert('[직급 입력 오류] 직급을 선택하세요.');
            return;
        }
        else {
            form.submit();
        }

    });
}
