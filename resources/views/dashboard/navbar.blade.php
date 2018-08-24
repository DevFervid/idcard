        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">National ID Application</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>{{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        {{-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li> --}}
                        {{-- <li><i class="fa fa-user fa-fw"></i>{{ Auth::user()->name }}
                        </li> --}}
                        {{-- <li class="divider"></li> --}}
                        <li>
                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}<i class="fa fa-sign-out fa-fw"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ url('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        @if(Auth::check())
                        @if(Auth::user()->admin)
                        <li>
                            <a href="{{ url('dashboard/applicants') }}"><i class="fa fa-users fa-fw"></i>Applicants</a>
                        </li>
                        <li>
                            <a href="{{ url('dashboard/reports') }}"><i class="fa fa-bar-chart fa-fw"></i> Reports</a>
                        </li>
                        @endif
                        {{-- @if(Auth::id()) --}}

                        <li>
                            <a href="{{ url('dashboard/new') }}"><i class="fa fa-credit-card fa-fw"></i>New Identity Card</a>
                        </li>                       
                        <li>
                            <a href="{{ url('dashboard/confirm1') }}"><i class="fa fa-copy fa-fw"></i> Replace</a>
                        </li>
                        <li>
                            <a href="{{ url('dashboard/confirm') }}"><i class="fa fa-edit fa-fw"></i>Edit Particulars</a>
                        </li>
{{--                         @else
 --}}                        <li>
                            <a href="{{ url('dashboard/new') }}"><i class="fa fa-credit-card fa-fw"></i>New Identity Card</a>
                        </li>
                        {{-- @endif --}}
                        @endif
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>