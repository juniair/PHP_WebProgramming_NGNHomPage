/**
 * Created by juniair on 2016-06-04.
 */
$(document).ready(function () {
    $("#profile").addClass("active");

    rankEvent();
    phoneEvent();
    submitEvent();
});

function rankEvent() {
    // 셀렉트키 변경시 작업
    $(".form-select").change(function () {
        if($(this).val() == "교수" || $(this).val() == "졸업생") {
            $("#std_id").attr("disabled", "disabled");
        }
        else {
            $("#std_id").removeAttr("disabled");
        }
    })
}

function phoneEvent() {
    $("#phone").keyup(function () {

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
                console.log($(this).val().length);
                if($(this).val().length == 3 || $(this).val().length == 8 ) {
                    var num = $(this).val();
                    num += "-";
                    $(this).val(num);
                }
                $(this).val( $(this).val().replace(/[^0-9:\-]/gi,"") );
            }
            else {
                $(this).val( $(this).val().substring(0, 13));
            }
        }

    });
}

function submitEvent() {
    $('#btn_edit').click(function () {
        if($('#password').val() != $('#confirm_password').val()) {
            alert("비밀번호가 불일치 합니다.");
        }
        else if ($('#password').val() == $('#confirm_password').val()) {
            $('#edit_form').submit();
        }
    })
}
