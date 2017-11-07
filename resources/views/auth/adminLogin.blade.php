
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
                                    <h4 class="title">Backend Login</h4>
                                    <p class="category">Complete all fields</p>
                                </div>
                                <div class="card-content">
                                    <form action="{{route('admin.login.submit')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-3">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating {{$errors->has('username') ?' has-error' : '' }}">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}">

                                                            @if($errors->has('username'))

                                                     <span><strong>{{$errors->first('username')}}</strong></span>
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
                                                <div class="form-group label-floating {{$errors->has('password') ? 'has-error': ''}}">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" name="password" >
                                                      @if($errors->has('password'))

                                                     <span><strong>{{$errors->first('password')}}</strong></span>
                                                            @endif
                                                </div>
                                            </div>
                                             <div class="col-md-3">
                                                
                                            </div>
                                        </div>
                                     {{--  <div class="row">
                                        
                                        <div class="col-md-7 col-md-offset-3">
                               
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    
                                                     Remember Me
                                                </label>
                                            </div>
                                    </div>  --}}
                        {{--  </div>
                                        </div>
                                          --}}
                                        <button type="submit" class="btn btn-primary pull-right">Login &nbsp;<span class="fa fa-sign-in "></span> </button>
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