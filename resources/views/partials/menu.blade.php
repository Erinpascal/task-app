<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    dashboard
                </a>
            </li>


         <!--    <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-car nav-icon">

                        </i>
                        Relocate
                    </a>
                    <ul class="nav-dropdown-items">
                            <li class="nav-item">
                            <a href="#" class="nav-link">

                                    <i class="fa-fw fas fa-bus-alt nav-icon">

                                    </i>
                                    Activies
                                </a>
                            </li>
                        
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="fa-fw fas fa-plus-circle nav-icon">

                                    </i>
                                    Add Vehicle
                                </a>
                            </li>
                        
                    </ul>
                </li> -->


           <!--  <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-car nav-icon">

                        </i>
                        Vehicles
                    </a>
                    <ul class="nav-dropdown-items">
                            <li class="nav-item">
                            <a href="#" class="nav-link">

                                    <i class="fa-fw fas fa-bus-alt nav-icon">

                                    </i>
                                    All Vehicles
                                </a>
                            </li>
                        
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="fa-fw fas fa-plus-circle nav-icon">

                                    </i>
                                    Add Vehicle
                                </a>
                            </li>
                        
                    </ul>
                </li> -->

                 @if(Auth::user()->role == '1')


               
                            <li class="nav-item">
                            <a href="{{route('organisation.index')}}" class="nav-link">

                                    <i class="fa-fw fas fa-bus-alt nav-icon">

                                    </i>
                                     Organisation
                                </a>
                            </li>
                            @endif


                             <li class="nav-item">
                            <a href="{{route('task.index')}}" class="nav-link">

                                    <i class="fa-fw fas fa-bus-alt nav-icon">

                                    </i>
                                     Task
                                </a>
                            </li>
                        
                        
          
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">
pascal
                        </i>
                    </a>
                </li>
          
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('admin/orders') || request()->is('admin/orders/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">
pascal
                        </i>
                    </a>
                </li> -->
          
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    logout
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>