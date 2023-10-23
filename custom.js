$(document).ready(function() {
    $('#generate').submit(function(kirim) {
        var string = $('#string_c').val();
        $.ajax({
            method: "POST",
            url: "submit.php",
            data: {generate:'generate', string: string},
            cache: false,
            success: function(data){
               $("#password_c").val(data);
            }
        });
        kirim.preventDefault();
    });
});

$(document).ready(function() {
    $('#checkpass').submit(function(kirim) {
        var string = $('#string').val();
        var password = $('#password').val();
        $.ajax({
            method: "POST",
            url: "submit.php",
            data: {checkpass: 'check', string: string, password:password},
            cache: false,
            success: function(data){
               $("#hasil").val(data);
            }
        });
        kirim.preventDefault();
    });
});