<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ (request()->is('dashboard*')) ? 'active' : ''  }} ">
                    <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-bars"></i>Dashboard </a>
                </li>
                <li class="{{ (request()->is('patients*')) ? 'active' : ''  }} ">
                    <a href="{{ route('patients.index') }}"><i class="menu-icon fa fa-wheelchair"></i>Patients </a>
                </li>
                <li class="{{ (request()->is('doctors*')) ? 'active' : ''  }} ">
                    <a href="{{ route('doctors.index') }}"><i class="menu-icon fa fa-user-md"></i>Doctors </a>
                </li>
                <li class="{{ (request()->is('receptionists*')) ? 'active' : ''  }} ">
                    <a href="{{ route('receptionists.index') }}"><i class="menu-icon fa fa-user"></i>Receptionist </a>
                </li>
                <li class="{{ (request()->is('nurses*')) ? 'active' : ''  }} ">
                    <a href="{{ route('nurses.index') }}"><i class="menu-icon fa fa-user"></i>Nurses </a>
                </li>
                <li class="{{ (request()->is('drugs*')) ? 'active' : ''  }} ">
                    <a href="{{ route('drugs.index') }}"><i class="menu-icon fa fa-medkit"></i>Drugs </a>
                </li>
                <li class="{{ (request()->is('prescriptions*')) ? 'active' : ''  }} ">
                    <a href="{{ route('prescriptions.index') }}"><i class="menu-icon fa  fa-plus-square"></i>Prescriptions </a>
                </li>
                <li class="{{ (request()->is('appointments*')) ? 'active' : ''  }} ">
                    <a href="{{ route('appointments.index') }}"><i class="menu-icon fa  fa-comment"></i>Appointments </a>
                </li>
                <li class="{{ (request()->is('rooms*')) ? 'active' : ''  }} ">
                    <a href="{{ route('rooms.index') }}"><i class="menu-icon fa  fa-home"></i>Rooms </a>
                </li>
                <li class="{{ (request()->is('wards*')) ? 'active' : ''  }} ">
                    <a href="{{ route('wards.index') }}"><i class="menu-icon fa  fa-hospital-o"></i>Wards </a>
                </li>
                <li class="{{ (request()->is('examinations*')) ? 'active' : ''  }} ">
                    <a href="{{ route('examinations.index') }}"><i class="menu-icon fa  fa-stethoscope"></i>Examinations </a>
                </li>

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