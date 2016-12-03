/**
 * Created by juniair on 2016-06-05.
 */
$(document).ready(function () {
    $("#btn_submit").click(function () {
        if($("#title").val()=="") {
            alert("제목을 입력하세요.");
            return;
        }
        
        if($("#message").val()=="") {
            alert("내용을 입력하세요!");
            return;
        }
        $("#form").submit();
    })
        
})