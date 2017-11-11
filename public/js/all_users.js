        $(document).ready(function() {



            console.log('all users js....');




            //loading modal for creating new user

            $('.create_btn').click(function() {

                $('.type-task').val('add');
                $('.type-task').text('ADD');

                $('#all_users_input').trigger("reset");

                $('#all_users_modal').modal('show');





            });





            //load modal with values to edit user
            $('tbody.users-list').on("click", ".edit-btn", function() {
                console.log('hurray');
                // var button = '<button type="submit"  class="btn btn-primary pull-right">Save changes</button>';
                // $('#task-type').append(button);
                $('.type-task').val('edit');

                $('.type-task').text('SAVE CHANGES');
                $('#all_users_modal').modal('show');

                modal = $('#all_users_modal');

                email = $(this).data("email");
                name = $(this).data("name");
                phone = $(this).data("phone");
                residence = $(this).data("residence");
                id = $(this).data('id');

                modal.find("#email").val(email);
                modal.find("#name").val(name);

                modal.find("#phone").val(phone);
                modal.find("#residence").val(residence);
                modal.find("#user_id").val(id);
            });

            //create/edit  user

            $('div.users-modal').on("submit", ".all_users_input", function(e) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                e.preventDefault();
                var state = $('.type-task').val();
                console.log(state);
                $.showLoading({
                    name: 'circle-fade'
                });

                var formdata = $(this).serialize(); //automatically acquires all input field values
                console.log(formdata);
                var id = $('#user_id').val();
                console.log(id);


                if (state == "edit") {


                    type = "PUT"; //for updating existing resource
                    url = '/admin/user/' + id;
                } else {
                    type = "POST"; //for creating new  resource
                    url = '/admin/user';

                }
                console.log(type);

                $.ajax({
                    type: type,
                    url: url,
                    data: formdata, // our data object
                    dataType: 'json', // what type of data do we expect back from the server
                    success: function(data) {
                        console.log(data);

                        if (data.success) {
                            $.hideLoading();

                            // console.log(data.res);
                            var user = '<tr class="user' + data.res.id + '"><td>' + data.res.name + '</td><td>' + data.res.phone + '</td><td>' + data.res.email + '</td><td>' + data.res.residence + '</td>';
                            user += '<td><button class="btn btn-info edit-btn"  data-email="' + data.res.email + '" data-phone="' + data.res.phone + '"  data-name="' + data.res.name + '" data-residence="' + data.res.residence + '" data-id="' + data.res.id + '">EDIT &nbsp;<span class="fa fa-edit "></span></button></td>';
                            user += '<td><button class="btn btn-danger pull-right delete_user" value="' + data.res.id + '">DELETE &nbsp;<span class="fa fa-trash "></span> </button></button></td></tr>';

                            if (state == "add") { //if  new user record

                                $(user).insertBefore('tbody.users-list > tr:first');



                            } else { //if updating an existing record

                                $("." + data.res.id).replaceWith(user);

                            }
                            toastr.success(data.message);

                            $('#all_users_input').trigger("reset");
                            $('#all_users_modal').modal('hide');


                        } else {
                            $.hideLoading();

                            toastr.error(data.message);
                        }

                    },
                    error: function(data) {
                        $.hideLoading();

                        // $('#err-span').remove();
                        var errors = data.responseJSON.errors;
                        console.log('Error:', errors);
                        $.each(errors, function(key, value) {
                            console.log(value);
                            var msg = '<span class="err">' + value + '</span';
                            $('#' + key + '_field').addClass("has-error").append(msg);



                        });
                    }
                });


            });

            //delete user

            $('tbody.users-list').on("click", ".delete_user", function() {

                var user_id = $(this).val();

                console.log(user_id);

                $.ajax({

                    type: "DELETE",
                    url: '/admin/user/' + user_id,
                    success: function(data) {


                        if (data.success) {
                            toastr.success(data.message);

                            $("." + user_id).remove();
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