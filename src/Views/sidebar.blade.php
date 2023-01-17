<div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <small class="m-2 text-muted"> Main Menu</small>
            <hr class="m-2">
            <li class="">
                <a href="{{url('/')}}"><img src="{{url('/assets/img/icons/dashboard.svg')}}" alt="img"><span> Dashboard</span> </a>
            </li>
            {!! \Vdes\Menu\WMenu::buildSideMenu(\Vdes\Menu\WMenu::getByName('sssssss')) !!}
            <small class="m-2 text-muted"> Manajemen Menu</small>
            <hr class="m-2">
            <li class="">
                <a href="{{url('/menus')}}"><img src="{{url('/assets/img/icons/purchase1.svg')}}" alt="img"><span> Menu Manager</span> </a>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><img src="{{url('/assets/img/icons/settings.svg')}}" alt="img"><span> Permission Role</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="{{route('permissions.index')}}">Permission </a></li>
                    <li><a href="{{route('roles.index')}}">Role </a></li>
                </ul>
            </li>
            <li class="">
                <a href="{{url('/crudgenerator')}}"><i data-feather="box"></i><span> CRUD Generator</span> </a>
            </li>
        </ul>

    </div>
</div>
