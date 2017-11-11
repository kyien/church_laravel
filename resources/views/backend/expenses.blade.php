

 
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
                                    <i class="fa fa-calculator"></i>
                                    Expenses Form</h4>
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
                                                    <label class="control-label">Expense Name</label>
                                                    {{--  <input type="text" class="form-control" name="username" value="{{ old('username') }}">  --}}
                            <select name="service" class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7" tabindex="-98">
                                                      
                                                        <option disabled="" selected="">Choose service</option>
                                                         
                                                         <option value="">security</option>
                                                         <option value="">water</option>
                                                         <option value="">Electricity</option>
                                                         <option value="">stationery</option>
                                                         <option value="">Refreshments</option>
                                                         <option value="">Others</option>
                                                         <option value="">Youth</option>
                                                         <option value="">K.A.M.A</option>
                                                         <option value="">Mothers Union</option>
                                                         <option value="">Children</option>
                                                         <option value="">Donations</option>
                                                        
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
                                                <div class="form-group ">
                                                    <label class="control-label">Expense category</label>
                                                    
                            <select name="transaction_type" class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7" tabindex="-98">
                                                      
                                                        <option disabled="" selected="">Choose transaction_type</option>
                                                         
                                                        <option value="">RECURRENT EXPENSES</option>
                                                        <option value="">MINISTRY EXPENSES</option>
                                                      
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
