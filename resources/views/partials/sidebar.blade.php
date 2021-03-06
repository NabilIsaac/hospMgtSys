<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if(Auth::user()->hasRole(['admin']))
                    <li class="{{ (request()->is('admin/dashboard*')) ? 'active' : ''  }} ">
                        <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-bars"></i>Dashboard </a>
                    </li>
                    <li class="{{ (request()->is('admin/patients*')) ? 'active' : ''  }} ">
                        <a href="{{ route('patients.index') }}"><i class="menu-icon fa fa-wheelchair"></i>Patients </a>
                    </li>
                    
                    <li class="{{ (request()->is('admin/doctors*')) ? 'active' : ''  }} ">
                        <a href="{{ route('doctors.index') }}"><i class="menu-icon fa fa-user-md"></i>Doctors </a>
                    </li>
                    
                    <li class="{{ (request()->is('admin/receptionists*')) ? 'active' : ''  }} ">
                        <a href="{{ route('receptionists.index') }}"><i class="menu-icon fa fa-user"></i>Receptionist </a>
                    </li>
                    
                    <li class="{{ (request()->is('admin/nurses*')) ? 'active' : ''  }} ">
                        <a href="{{ route('nurses.index') }}"><i class="menu-icon fa fa-user"></i>Nurses </a>
                    </li>
                    
                    <li class="{{ (request()->is('admin/pharmacies*')) ? 'active' : ''  }} ">
                        <a href="{{ route('pharmacies.index') }}"><i class="menu-icon fa fa-medkit"></i>Pharmacy </a>
                    </li>

                    <li class="{{ (request()->is('admin/prescriptions*')) ? 'active' : ''  }} ">
                        <a href="{{ route('prescriptions.index') }}"><i class="menu-icon fa  fa-plus-square"></i>Prescriptions </a>
                    </li>

                    <li class="{{ (request()->is('admin/records*')) ? 'active' : ''  }} ">
                        <a href="{{ route('records.index') }}"><i class="menu-icon fa  fa-comment"></i>Records </a>
                    </li>

                    <li class="{{ (request()->is('admin/rooms*')) ? 'active' : ''  }} ">
                        <a href="{{ route('rooms.index') }}"><i class="menu-icon fa  fa-home"></i>Rooms </a>
                    </li>

                    {{-- <li class="{{ (request()->is('admin/wards*')) ? 'active' : ''  }} ">
                        <a href="{{ route('wards.index') }}"><i class="menu-icon fa  fa-hospital-o"></i>Wards </a>
                    </li> --}}

                    
                    <li class="{{ (request()->is('admin/users*')) ? 'active' : ''  }} ">
                        <a href="{{ route('users.index') }}"><i class="menu-icon fa  fa-user"></i>Users </a>
                    </li>

                    {{-- <li class="{{ (request()->is('admin/roles*')) ? 'active' : ''  }} ">
                        <a href="{{ route('roles.index') }}"><i class="menu-icon fa  fa-user"></i>Roles </a>
                    </li> --}}
                @elseif(Auth::user()->hasRole(['receptionist']))
                    <li class="{{ (request()->is('admin/dashboard*')) ? 'active' : ''  }} ">
                        <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-bars"></i>Dashboard </a>
                    </li>

                    <li class="{{ (request()->is('admin/patients*')) ? 'active' : ''  }} ">
                        <a href="{{ route('patients.index') }}"><i class="menu-icon fa fa-wheelchair"></i>Patients </a>
                    </li>

                @elseif(Auth::user()->hasRole(['nurse']))
                    <li class="{{ (request()->is('admin/dashboard*')) ? 'active' : ''  }} ">
                        <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-bars"></i>Dashboard </a>
                    </li>

                    <li class="{{ (request()->is('admin/patients*')) ? 'active' : ''  }} ">
                        <a href="{{ route('patients.index') }}"><i class="menu-icon fa fa-wheelchair"></i>Patients </a>
                    </li>
                    
                @else
                    <li class="{{ (request()->is('admin/prescriptions*')) ? 'active' : ''  }} ">
                        <a href="{{ route('prescriptions.index') }}"><i class="menu-icon fa  fa-plus-square"></i>Prescriptions </a>
                    </li>

                    <li class="{{ (request()->is('admin/records*')) ? 'active' : ''  }} ">
                        <a href="{{ route('records.show') }}"><i class="menu-icon fa  fa-comment"></i>Records </a>
                    </li>

                @endif
               

               

                {{-- <li class="menu-item-has-children dropdown {{ (request()->is('patients*')) ? 'active' : ''  }} ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Patients</a>
                    <ul class="sub-menu children dropdown-menu">                           
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{route('patients.store') }}">Create</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{route('patients.index') }}">View</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->