<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Site favicon -->

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/vendors/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/vendors/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/vendors/images/favicon-16x16.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="https://www.cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" />


    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
    {{-- ------------------------------------------------ --}}
    <link href="{{ asset('css/feed.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adduser.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/editprofile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/feed.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    {{-- this belows links is for chart --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


    {{-- -------------------------------------------- --}}
    <!--summernote -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>

</head>

<body>
    <div class="header">
        <div class="header-left">
            <div class="menu-icon dw dw-menu"></div>
            <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
        </div>
        <div class="header-right">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                    <i class="dw dw-notification"></i>
                </a>
            </div>
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="{{ asset('admin/vendors/images/photo1.jpg') }}" alt="">
                        </span>
                        <span class="user-name">{{ auth()->User()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="{{ route('profile.index') }}"><i class="dw dw-user1"></i>
                            Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="dw dw-logout"></i>logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <div class="github-link">
                <a href="" target="_blank">
                    <img src="{{ asset('admin/vendors/images/github.svg') }}" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="">
                <img src="{{ asset('admin/vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo">
                <img src="{{ asset('admin/vendors/images/deskapp-logo-white.svg') }}" alt=""
                    class="light-logo">
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="{{ route('Feed.index') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-house-1">
                            </span><span class="mtext">News Feed</span>
                        </a>
                    </li>
                    @can('Attendance-record')
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">
                                <span class="micon dw dw-name"></span><span class="mtext">Attendence</span>
                            </a>


                            <ul class="submenu">
                                <li><a href="{{ route('attendance.create') }}">Check In | Check Out</a></li>
                                <li><a href="#">Check out</a></li>
                                <li><a href="{{ route('attendance.index') }}">History</a></li>

                            </ul>
                        </li>
                    @endcan

                    <li class="dropdown">
                        <a href="{{ route('users.index') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-calendar-5">
                            </span><span class="mtext">Events</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="{{ route('users.index') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-user">
                            </span><span class="mtext">Users</span>
                        </a>
                    </li>

                    @can('Roles & permission')
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-user"></span><span class="mtext">Roles And
                                    Permission</span>
                            </a>
                            <ul class="submenu">

                                <li><a href="{{ route('roles.index') }}">Roles</a></li>
                                <li><a href="{{ route('permissions.index') }}">Permission</a></li>

                            </ul>
                        </li>
                    @endcan
                    {{-- ======================================== --}}

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-house"></span><span class="mtext">Leave</span>
                        </a>
                        <ul class="submenu">

                            <li><a href="{{ route('leave.create') }}">Leave Request</a></li>
                            <li><a href="{{ route('leave.index') }}">History & Status</a></li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="{{ route('task.index') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-slideshow"></span>
                            <span class="mtext">Task</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('payroll.index') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-money-2"></span>
                            </span><span class="mtext">Payroll</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
        @yield('main-content')
    </div>



    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>







    <!-- js -->
    <script src="{{ asset('admin/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('admin/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('admin/vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/scripts/dashboard.js') }}"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>




    <script>
        $(document).ready(function() {
            $('#usersdatatable').DataTable();
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#rolesdatatable').DataTable();
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        })
    </script>

    <script>
        $('#description').summernote({
            height: 100
        });
    </script>




</body>

</html>
