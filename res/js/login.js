<script>
    $('#admin-login').click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: $(this).attr('href'),
            data: {
            },
            success: function(resp)
            {
                $("#modalLoginForm").show();
            }
        });
    });
    $(document).on('click', '#login', function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '/',
            data: {
                'username': $('#username').val(),
                'password': $('#password').val(),
                'mode': 'login'
            },
            success: function(resp)
            {
                $("#modalLoginForm").hide();
                $("#form1").trigger('reset');
                window.location.reload();
            }
        });
    });
    $('#admin-logout').click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '/',
            data: {
                'mode': 'logout'
            },
            success: function(resp)
            {
                window.location.reload();
            }
        });
    });
</script>