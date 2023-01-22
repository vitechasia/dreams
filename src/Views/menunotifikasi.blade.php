{{-- <li class="nav-item">
    <div class="top-nav-search">
        <a href="javascript:void(0);" class="responsive-search">
            <i class="fa fa-search"></i>
        </a>
        <form action="#">
            <div class="searchinputs">
                <input type="text" placeholder="Search Here ...">
                <div class="search-addon">
                    <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                </div>
            </div>
            <a class="btn" id="searchdiv"><img src="assets/img/icons/search.svg" alt="img"></a>
        </form>
    </div>
</li> --}}


<li class="nav-item dropdown has-arrow flag-nav">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
        <img src="{{url('assets/img/flags/us1.png')}}" alt="" height="20">
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <a href="javascript:void(0);" class="dropdown-item">
            <img src="{{url('assets/img/flags/us.png')}}" alt="" height="16"> English
        </a>
        <a href="javascript:void(0);" class="dropdown-item">
            <img src="{{url('/assets/img/flags/fr.png')}}" alt="" height="16"> French
        </a>
        <a href="javascript:void(0);" class="dropdown-item">
            <img src="{{url('/assets/img/flags/es.png')}}" alt="" height="16"> Spanish
        </a>
        <a href="javascript:void(0);" class="dropdown-item">
            <img src="{{url('/assets/img/flags/de.png')}}" alt="" height="16"> German
        </a>
    </div>
</li>

<li class="nav-item dropdown">
    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
        <img src="{{url('/assets/img/icons/notification-bing.svg')}}" alt="img"> <span class="badge rounded-pill">4</span>
    </a>
    <div class="dropdown-menu notifications">
        <div class="topnav-dropdown-header">
            <span class="notification-title">Notifications</span>
            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
        </div>
        <div class="noti-content">
            <ul class="notification-list">
                <li class="notification-message">
                    <a href="activities.html">
                        <div class="media d-flex">
                            <span class="avatar flex-shrink-0">
                                <img alt="" src="assets/img/profiles/avatar-02.jpg')}}">
                            </span>
                            <div class="media-body flex-grow-1">
                                <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="notification-message">
                    <a href="activities.html">
                        <div class="media d-flex">
                            <span class="avatar flex-shrink-0">
                                <img alt="" src="{{url('/assets/img/profiles/avatar-03.jpg')}}">
                            </span>
                            <div class="media-body flex-grow-1">
                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="notification-message">
                    <a href="activities.html">
                        <div class="media d-flex">
                            <span class="avatar flex-shrink-0">
                                <img alt="" src="{{url('/assets/img/profiles/avatar-06.jpg')}}">
                            </span>
                            <div class="media-body flex-grow-1">
                                <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="notification-message">
                    <a href="activities.html">
                        <div class="media d-flex">
                            <span class="avatar flex-shrink-0">
                                <img alt="" src="{{url('/assets/img/profiles/avatar-17.jpg')}}">
                            </span>
                            <div class="media-body flex-grow-1">
                                <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="notification-message">
                    <a href="activities.html">
                        <div class="media d-flex">
                            <span class="avatar flex-shrink-0">
                                <img alt="" src="{{url('/assets/img/profiles/avatar-13.jpg')}}">
                            </span>
                            <div class="media-body flex-grow-1">
                                <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="topnav-dropdown-footer">
            <a href="activities.html">View all Notifications</a>
        </div>
    </div>
</li>

<li class="nav-item dropdown has-arrow main-drop">
    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
        <span class="user-img"><img src="{{url('/assets/img/logo.jpg')}}" alt="">
            <span class="status online"></span></span>
    </a>
    <div class="dropdown-menu menu-drop-user">
        <div class="profilename">
            <div class="profileset">
                <span class="user-img"><img src="{{url('/assets/img/logo.jpg')}}" alt="">
                    <span class="status online"></span></span>
                <div class="profilesets">
                    <h6>{{Session::get('name')}}</h6>
                    <h5>{{Session::get('role')}}</h5>
                </div>
            </div>
            <hr class="m-0">
            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profileModal"> <i class="me-2" data-feather="user"></i> My Profile</a>
            <hr class="m-0">
            <a class="dropdown-item logout pb-0" href="{{url('/logout')}}"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
        </div>
    </div>
</li>

@push('html')
    @include('template.dreams.modal_profile',['userid'=>Session::get('id')])
@endpush
