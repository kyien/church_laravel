

 
        @extends('layouts.backend')
 
        @section('content')
 <div class="content">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-2">
                            
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">
                                    <i class="fa fa-plus"></i>
                                    Add User</h4>
                                    <p class="category">Complete all fields</p>
                                </div>
                                <div class="card-content">
                                    <form action="{{route('admin.add.user')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-3">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating {{$errors->has('user') ?' has-error' : '' }}">
                                                    <label class="control-label">User</label>
                                                    {{--  <input type="text" class="form-control" name="username" value="{{ old('username') }}">  --}}
                            <select name="user" class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7" tabindex="-98">
                                                        <option class="bs-title-option" value="">Single Select</option>
                                                      
                                                        <option disabled="" selected="">Choose User</option>
                                                          @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                        @endforeach
                                                    </select>                                                    
                                                 
                                                            @if($errors->has('user'))

                                                     <span><strong>{{$errors->first('user')}}</strong></span>
                                                            @endif
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                    
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating {{$errors->has('role') ?' has-error' : '' }}">
                                                    <label class="control-label">Role</label>
                                                    {{--  <input type="text" class="form-control" name="username" value="{{ old('username') }}">  --}}
                            <select name="role" class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7" tabindex="-98">
                                                        <option class="bs-title-option" value="">Single Select</option>
                                                      
                                                        <option disabled="" selected="">Choose Role</option>
                                                         <option value="Superadmin">Superadmin</option>
                                                         <option value="Chair">Chair</option>
                                                         <option value="secretary">Secretary</option>
                                                         <option value="Accountant">Accountant</option>
                                                    </select>                                                    
                                                 
                                                            @if($errors->has('role'))

                                                     <span><strong>{{$errors->first('role')}}</strong></span>
                                                            @endif
                                                </div>
                                            </div>
                                             <div class="col-md-3">
                                                
                                            </div>
                                        </div>
                                    <div class="row">
                                            <div class="col-md-3">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating {{$errors->has('role') ?' has-error' : '' }}">
                                                    <label class="control-label">Role</label>
                                                    {{--  <input type="text" class="form-control" name="username" value="{{ old('username') }}">  --}}
                            <select name="role" class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7" tabindex="-98">
                                                        <option class="bs-title-option" value="">Single Select</option>
                                                      
                                                        <option disabled="" selected="">Choose city</option>
                                                         <option value="Superadmin">Superadmin</option>
                                                         <option value="Chair">Chair</option>
                                                         <option value="secretary">Secretary</option>
                                                         <option value="Accountant">Accountant</option>
                                                    </select>                                                    
                                                 
                                                            @if($errors->has('role'))

                                                     <span><strong>{{$errors->first('role')}}</strong></span>
                                                            @endif
                                                </div>
                                            </div>
                                             <div class="col-md-3">
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating {{$errors->has('username') ?' has-error' : '' }}">
                                                    <label class="control-label">Role</label>
                                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                                                                              
                                                 
                                                            @if($errors->has('username'))

                                                     <span><strong>{{$errors->first('username')}}</strong></span>
                                                            @endif
                                                </div>
                                            </div>
                                             <div class="col-md-3">
                                                
                                            </div>
                                        </div>

                                        <button type="submit" id="user_add_btn" class="btn btn-primary pull-right">ADD &nbsp;<span class="fa fa-plus "></span> </button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                    </div>
                    </div>
          </div>
          @endsection
