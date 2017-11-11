

 
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
                                    Income Form</h4>
                                    <p class="category">Complete all fields</p>
                                </div>
                                <div class="card-content">
                                    <form id="transaction_form">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-3">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">User</label>
                                                    
                            <select name="transaction_type" class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7" tabindex="-98">
                                                      
                                                        <option disabled="" selected="">Choose transaction_type</option>
                                                          @foreach($transaction_types as $type)
                                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                                        @endforeach
                                                    </select>                                                    
                                                 
                                                            {{--  @if($errors->has('user'))

                                                     <span><strong>{{$errors->first('user')}}</strong></span>
                                                            @endif  --}}
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                    
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Service</label>
                                                    {{--  <input type="text" class="form-control" name="username" value="{{ old('username') }}">  --}}
                            <select name="service" class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7" tabindex="-98">
                                                      
                                                        <option disabled="" selected="">Choose service</option>
                                                         @foreach($services as $service)
                                                         <option value="{{$service->id}}">{{$service->name}}</option>
                                                           @endforeach
                                                    </select>                                                    
{{--                                                   
                                                            @if($errors->has('role'))

                                                     <span><strong>{{$errors->first('role')}}</strong></span>
                                                            @endif  --}}
                                                </div>
                                            </div>
                                             <div class="col-md-3">
                                                
                                            </div>
                                        </div>
                                    <div class="row">
                                            <div class="col-md-3">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Amount</label>
                                                    <input type="text" class="form-control" name="amount" value="{{ old('username') }}">
                                                                           
                                                 
                                                            {{--  @if($errors->has('role'))

                                                     <span><strong>{{$errors->first('role')}}</strong></span>
                                                            @endif  --}}
                                                </div>
                                            </div>
                                             <div class="col-md-3">
                                                
                                            </div>
                                        </div>
                                       
                                       

                                        <button type="submit" id="trans_add_btn" class="btn btn-primary pull-right">ADD &nbsp;<span class="fa fa-plus "></span> </button>
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
