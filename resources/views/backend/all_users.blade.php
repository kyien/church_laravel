

 
        @extends('layouts.backend')
 
        @section('content')
 <div class="content">
                <div class="container-fluid">
                    <div class="row">
                   
                            
                        
                        <div class="col-sm-12">
                           <div class="card ">
                        

                          
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">All Users</h4>
                                    
                                </div>
                              
                                <div class="container-fluid">
                                  <button class="btn btn-info create_btn"   
                                    
                                 
                                                >CREATE NEW &nbsp; <span class="fa fa-plus"></span></button>
                                </div>
                             
                                <div class="card-content table-responsive table-full-width">
                                    <table class="table table-hover">
                                    
                                        <thead class="text-warning">
                                           
                                            <th>Name</th>
                                            <th>phone</th>
                                            <th>Email</th>
                                            <th>Residence</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                          
                                        </thead>
                                         @forelse($users as $user)
                                        <tbody class="users-list">
                                        
                                            <tr class="{{$user->id}}">
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->residence}}</td>
                                                <td><button  class="btn btn-info edit-btn" 
                                             
                                               
                                                data-email="{{$user->email}}"
                                                data-phone="{{$user->phone}}"
                                                data-name="{{$user->name}}"
                                                data-residence="{{$user->residence}}"
                                                data-id="{{$user->id}}"
                                                
                                                >
                                                EDIT &nbsp;<span class="fa fa-edit "></span> </button>
                                                </td>
                                                <td><button  class="btn btn-danger pull-right delete_user" value="{{$user->id}}">
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
        <div class="modal fade users-modal" id="all_users_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">user management</h4>
                    </div>
                    <div class="modal-body ">
                    <form class="all_users_input" >

                      <input type="hidden" id="user_id" name="id" value="">
                    <div class="row">
                      <div class="col-sm-2">
                      </div>
                      <div class="col-sm-8">
                      <div class="form-group" id="name_field">
                          <label for="name" class="control-label">Name</label>
                          <input type="text" class="form-control" id="name" name="name" value="">
                        </div>
                    
                      <div class="form-group" id="email_field">
                          <label for="email" class="control-label">email</label>
                          <input type="text"name="email" class="form-control" id="email" value="">
                        </div>
                      <div class="form-group" id="reidence_field">
                          <label for="residence" class="control-label">Residence</label>
                          <input type="text" name="residence" class="form-control" id="residence" value="">
                        </div>
                      <div class="form-group" id="phone_field">
                          <label for="phone" class="control-label">Phone</label>
                          <input type="text" name="phone" class="form-control" id="phone">
                        </div>
                      
                        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                     <button type="submit"  class="btn btn-primary pull-right type-task" value=""></button>
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
          @endsection
