<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">


        <!-- User Profile-->


        <div class="user-profile">
            <div class="user-pro-body">
                <div><img src="/assets/images/users/2.jpg" alt="user-img" class="img-circle"></div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>


        <!-- END User Profile-->

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">--- PERSONAL</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-list"></i><span class="hide-menu">Reservations</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="app-email.html">Mailbox</a></li>
                        <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                        <li><a href="app-compose.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-truck"></i><span class="hide-menu">Cars </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Cars List</a></li>
                        <li><a href="{{ route('categories.index') }}">Car Categories </a></li>
                        <li><a href="{{ route('cartags.index') }}">Car Tags</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-user"></i><span class="hide-menu">Users</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="app-calendar.html">Calendar</a></li>
                        <li><a href="app-chat.html">Chat app</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-calendar"></i><span class="hide-menu">Calendar</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="app-calendar.html">Calendar</a></li>
                        <li><a href="app-chat.html">Chat app</a></li>

                    </ul>
                </li>

            </ul>
        </nav>