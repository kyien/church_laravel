

 
        @extends('layouts.backend')
 
        @section('content')
 <div class="content">
                <div class="container-fluid">
                    <div class="row">
                   
                            
                        </div>
                        <div class="col-sm-12">
                           <div class="card ">
                        

                          
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">All Backend users</h4>
                                    
                                </div>
                                <div class="card-content table-responsive table-full-width">
                                    <table class="table table-hover">
                                    
                                        <thead class="text-warning">
                                           
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th>phone</th>
                                            <th>Email</th>
                                            <th>Residence</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                          
                                        </thead>
                                         @forelse($users as $user)
                                        <tbody>
                                        
                                            <tr id="user{{$user->user_id}}">
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->username}}</td>
                                                <td>{{$user->role}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->residence}}</td>
                                                <td><button  class="btn btn-info" 
                                                data-toggle="modal" 
                                                data-target="#editModal"
                                                data-email="{{$user->email}}"
                                                data-userrole="{{$user->role}}"
                                                data-phone="{{$user->phone}}"
                                                data-username="{{$user->username}}"
                                                data-name="{{$user->name}}"
                                                data-residence="{{$user->residence}}"
                                                data-id="{{$user->user_id}}"
                                                
                                                >
                                                EDIT &nbsp;<span class="fa fa-edit "></span> </button>
                                                </td>
                                                <td><button  id="delete_sys_user" class="btn btn-danger pull-right" value="{{$user->user_id}}">
                                                DELETE &nbsp;<span class="fa fa-trash "></span> </button>
                                                </td>
                                               
                                            </tr>
                                            
                                        </tbody>
                                        @empty
                            <h1>No Records Present</h1>
                           
                          @endforelse
                                    </table>
                                </div>
                                 
                            </div>
                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body ">
      <form id="edit_user_form" action="{{route('admin.update.user')}}">

        <input type="hidden" id="id" name="id" value="">
       <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
        <div class="form-group ">
            <label for="name" class="control-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="">
          </div>
        <div class="form-group">
            <label for="username" class="control-label">Username</label>
            <input type="text"name="username" class="form-control" id="username" value="">
          </div>
        <div class="form-group ">
            <label for="email" class="control-label">email</label>
            <input type="text"name="email" class="form-control" id="email" value="">
          </div>
        <div class="form-group">
            <label for="residence" class="control-label">Residence</label>
            <input type="text" name="residence" class="form-control" id="residence" value="">
          </div>
        <div class="form-group ">
            <label for="phone" class="control-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone">
          </div>
        <div class="form-group label-floating">
            <label for="recipient-name" class="control-label">role</label>
            <select id="role" name="role" class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7" tabindex="-98">
                    <option disabled="" selected="">Choose Role</option>
                     <option value="Superadmin">Superadmin</option>
                    <option value="Chair">Chair</option>
                    <option value="secretary">Secretary</option>
                    <option value="Accountant">Accountant</option>
                
            </select>
          </div>
           <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
        <button type="submit" id="user_edit_btn" class="btn btn-primary pull-right">Save changes</button>
          </div>
           <div class="col-sm-2">
        </div>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>

                        </div>
                        
                    </div>
                    </div>
          </div>
          @endsection
