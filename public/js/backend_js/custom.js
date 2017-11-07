$(document).ready(function() {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    console.log('custom js....');


    //edit users form

    $('#editModal').on('show.bs.modal', function(e) {
        console.log('hurray');
        var link = $(e.relatedTarget);
        modal = $(this);
        username = link.data("username");
        email = link.data("email");
        name = link.data("name");
        role = link.data("userrole");
        phone = link.data("phone");
        residence = link.data("residence");
        id = link.data('id');

        modal.find("#email").val(email).prop('readonly', true);
        modal.find("#username").val(username);
        modal.find("#name").val(name).prop('readonly', true);
        modal.find("#role").val(role);
        modal.find("#phone").val(phone).prop('readonly', true);
        modal.find("#residence").val(residence).prop('readonly', true);
        modal.find("#id").val(id);
    });

    //edit form submit
    $('#edit_user_form').submit(function(e) {

        e.preventDefault();
        $.LoadingOverlay("show");
        var mydata = $(this).serialize();
        console.log(mydata);

        $.ajax({
            type: 'PUT', // define the type of HTTP verb we want to use (POST for our form)
            url: '/user_edit_view', // the url where we want to POST
            data: mydata, // our data object
            dataType: 'json', // what type of data do we expect back from the server
            success: function(data) {

                if (data.success) {

                    $.loadingOverlay("hide", true);

                    toastr.success(data.message);
                    // var user = '<tr id="task' + data.res.user_id+ '"><td>' + data.id + '</td><td>' + data.task + '</td><td>' + data.description + '</td><td>' + data.created_at + '</td>';
                    // user += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value="' + data.id + '">Edit</button>';
                    // user += '<button class="btn btn-danger btn-xs btn-delete delete-task" value="' + data.res.user_id + '">Delete</button></td></tr>';


                    location.reload(true);

                } else {
                    $.loadingOverlay("hide", true);


                    toastr.error(data.message);

                }


            },
            error: function(jqxhr, status, error) {
                $('#err-span').remove();
                var errors = jqxhr.responseJSON;
                $.each(errors, function(field, text) {
                    var msg = '<span class="err" id="err-span">' + text + '</span';
                    $('#' + field + '_field').append(msg);
                });
                console.log(jqxhr);
                console.log(status);
                console.log(error);


            }

        });




    });


    //delete a system user

    $('#delete_sys_user').click(function() {

        var user_id = $(this).val();

        $.ajax({

            type: "DELETE",
            url: '/user_delete/' + user_id,
            success: function(data) {
                console.log(data);

                $("#user" + user_id).remove();
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });

    });

});