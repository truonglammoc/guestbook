<script>
	/**
	 * Add new guest book
	 */
    $('#add-guest-book').click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: $(this).attr('href'),
            data: {
            },
            success: function(resp)
            {
                $('#mode').val('add');
                $("#myModal").show();
            }
        });
    });

    /**
     * Save guestbook
     */
    $(document).on('click', '#save', function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: $(this).attr('href'),
            data: {
                'name': $('#name').val(),
                'message': $('#message').val(),
                'id': $("#hId").val(),
                'mode': $('#mode').val()
            },
            success: function(resp)
            {
                $("#myModal").hide();
                $("#form1").trigger('reset');
                window.location.reload();
            }
        });
    });

    /**
     * Delete
     */
    $('.delete').click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: $(this).attr('href'),
            data: {
                'id': $(this).attr("value"),
                'mode': 'delete'
            },
            success: function(resp)
            {
                window.location.reload();
            }
        });
    });

    /**
     * Edit
     */
    $(document).on('click', '.edit', function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: $(this).attr('href'),
            data: {
                'id': $(this).attr("value"),
                'mode': 'edit_form'
            },
            success: function(resp)
            {
                var obj = jQuery.parseJSON(resp);
                $("#name").val(obj.name);
                $("#message").val(obj.message);
                $("#hId").val(obj.id);
                $('#mode').val('edit');
                $("#myModal").show();
            }
        });
    });
</script>