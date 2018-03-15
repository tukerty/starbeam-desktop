$(document).ready(function () {
    function formfadeaway() {

        $("#phone").fadeOut();
        $("#email").fadeOut();
        $("#submit_call").fadeOut();
        $("#submit_email").fadeOut();
        $("#makeorderh1").fadeOut();
        $("#makeorderh3").fadeOut();
        $("#tnx").fadeIn();
        setTimeout(function () {
            if (document.getElementsByClassName('closeangle').length != 0) {
                document.getElementsByClassName('closeangle')[0].click();
            } else {
                document.getElementsByClassName('closeangle_b')[0].click();
            }
        }, 1500)
    }
    function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(emailAddress);
    }


    $("#submit_call").click(
        function () {
            var d = new Date();
            var phone = $("#phone").val().replace(/\D/g,'');
            var time = d.getFullYear() + '-' + (parseInt(d.getMonth())+1).toString() + '-' + d.getDate() + 'T' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
            $.ajax({
                url: "https://api.pozvonim.com/widget/callback/v3/40097/call",
                type: 'post',
                data: {
                    phone: phone,
                    local_time: time,
                    source_call: "https://api.pozvonim.com/widget/onepage.php?id=b83a7ba7a463c449a4acf4da35971a01#callback-frame",
                    source_enter: "https://api.pozvonim.com/widget/onepage.php?id=b83a7ba7a463c449a4acf4da35971a01#callback-frame",
                    catch_type: "click"
                },
                success: function () {

                }
            });
        });

    $("#submit_email").click(
        function () {
            var email = $("#email").val();
            if(isValidEmailAddress(email)){
            $.ajax({
                url: "/email.php",
                type: 'get',
                data: {
                    refer: document.title,
                    email: email
                },
                success: function () {
                    formfadeaway()
                }
            });
            }else{
                alert('Введите E-mail корректно.');
            }
        });
});