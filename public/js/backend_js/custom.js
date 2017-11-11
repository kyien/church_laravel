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

        $.showLoading({
            name: 'circle-fade'
        });
        var mydata = $(this).serialize();
        console.log(mydata);

        $.ajax({
            type: "PUT", // define the type of HTTP verb we want to use (POST for our form)
            url: '/admin/sys_user_edit', // the url where we want to POST
            data: mydata, // our data object
            dataType: 'json', // what type of data do we expect back from the server
            success: function(data) {

                if (data.success) {

                    $.hideLoading();

                    toastr.success(data.message);
                    var user = '<tr id="user' + data.res.user_id + '"><td>' + name + '</td><td>' + data.res.username + '</td><td>' + data.res.role + '</td><td>' + phone + '</td>';
                    user += '<td>' + email + '</td><td>' + residence + '</td>';
                    user += '<td><button class="btn btn-info" data-toggle="modal" data-target="#editModal" data-email="{{$user->email}}"  data-userrole="{{$user->role}}" data-phone="{{$user->phone}}" data-username="{{$user->username}}" data-name="{{$user->name}}" data-residence="{{$user->residence}}" data-id="{{$user->user_id}}">EDIT &nbsp;<span class="fa fa-edit "></span></button></td>';
                    user += '<button id ="delete_sys_user" class="btn btn-danger pull-right" value="' + data.res.user_id + '">DELETE &nbsp;<span class="fa fa-trash "></span> </button></button></td></tr>';


                    $("#user" + data.res.user_id).replaceWith(user);

                    $('#edit_user_form').trigger("reset");

                    $('#editModal').modal('hide');

                } else {
                    $.hideLoading();


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

        console.log(user_id);

        $.ajax({

            type: "DELETE",
            url: '/admin/sys_user_delete/' + user_id,
            success: function(data) {
                console.log(data);

                if (data.success) {
                    toastr.success(data.message);

                    $("#user" + user_id).remove();
                } else {

                    toastr.error(data.message);
                }

            },
            error: function(data) {
                console.log('Error:', data.responseText);
            }
        });

    });

});