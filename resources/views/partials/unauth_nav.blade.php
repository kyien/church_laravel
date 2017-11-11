<nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">  Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                           
                            
                            {{--  <li >
                                <div class="dropdown">
                                    <a href="#" class="btn dropdown-toggle enzos" data-toggle="dropdown">
                                        Login
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('admin.loginform')}}">Backend Login</a></li>
                                        @if(!Auth::guard('web')->check())
                                        <li><a href="{{route('login')}}">Normal Login</a></li>
                                        @endif
                                        
                                    </ul>
                                </div>
                            </li>  --}}
                        
                        </ul>
                            </li>
                        
                        </ul>
                        
                    </div>
                </div>
            </nav>