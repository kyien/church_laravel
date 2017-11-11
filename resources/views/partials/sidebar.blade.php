 <div class="sidebar side-color" data-color="green" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="{{route('admin.dash')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="#componentsExamples" data-toggle="collapse" class="collapsed" aria-expanded="false">
                            <i class="material-icons">supervisor_account</i>
                           
                            <p>Users Management
                               <b class="caret"></b>
                               </p>
                        </a>
                        <div class="collapse" id="componentsExamples" aria-expanded="false" style="height: 0px;">
                            <ul class="nav">
                                <li>
                                    <a href="{{route('admin.usersview')}}">
                                        <span class="sidebar-normal">Backend Users</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="{{route('admin.add.userview')}}">
                                        <span class="sidebar-normal">Assign role</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('user.index')}}">
                                        <span class="sidebar-normal">All Users</span>
                                    </a>
                                </li>
                                
                                
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('transaction.view')}}">
                            <i class="material-icons">shopping_basket</i>
                            <p>Income Basket</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('expense.view')}}">
                            <i class="material-icons">content_paste</i>
                            <p>Vote Heads</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('payment.view')}}">
                            <i class="material-icons">attach_money</i>
                            <p>Consolidated Wages</p>
                        </a>
                    </li>
                  
                   
                    <li>
                        <a href="#">
                            <i class="material-icons">insert_chart</i>
                            <p>Reports</p>
                        </a>
                    </li>
                    <li>
                        <a href="./typography.html">
                            <i class="material-icons">library_books</i>
                            <p>Quota</p>
                        </a>
                    </li>
                   
                    <li>
                        <a href="./notifications.html">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                  
                </ul>
            </div>
        </div>