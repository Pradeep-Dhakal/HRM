<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Site favicon -->


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/vendors/images/hr-logos_white.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/vendors/images/hr-logos_white.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/vendors/images/hr-logos_white.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    {{-- <link rel="stylesheet" href="https://www.cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" /> --}}


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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />



    {{-- ------------------------------------------------ --}}
    <link href="{{ asset('css/feed.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adduser.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/editprofile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/feed.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/userdetails.css') }}" rel="stylesheet">

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

            <div class="dashboard-setting user-notification">
                {{-- <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div> --}}
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
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('admin/vendors/images/hr-logos_white.png') }}" alt="" class="dark-logo">
                <img src="{{ asset('admin/vendors/images/hr-logos_white.png') }}" alt="" class="light-logo">
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    @can('Newsfeed Module')
                        <li class="dropdown">
                            <a href="{{ route('Feed.index') }}" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-house-1">
                                </span><span class="mtext">News Feed</span>
                            </a>
                        </li>
                    @endcan
                    @can('Attendance Module')
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

                    {{-- <li class="dropdown">
                        <a href="{{ route('calender') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-calendar-5">
                            </span><span class="mtext">Events</span>
                        </a>
                    </li> --}}
                    @can('User Module')
                        <li class="dropdown">
                            <a href="{{ route('users.index') }}" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-user">
                                </span><span class="mtext">Users</span>
                            </a>
                        </li>
                    @endcan

                    @can('Roles & permission module')
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
                    @can('Leave Module')
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-house"></span><span class="mtext">Leave</span>
                            </a>
                            <ul class="submenu">

                                <li><a href="{{ route('leave.create') }}">Leave Request</a></li>
                                <li><a href="{{ route('leave.index') }}">History & Status</a></li>

                            </ul>
                        </li>
                    @endcan
                    <li class="dropdown">
                        <a href="{{ route('task.index') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-slideshow"></span>
                            <span class="mtext">Task</span>
                        </a>
                    </li>
                    @can('Payrol Module')
                        <li class="dropdown">
                            <a href="{{ route('payroll.index') }}" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-money-2"></span>
                                </span><span class="mtext">Payroll</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
        @yield('main-content')
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script> --}}
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
    <script src="{{ asset('js/userdetails.js') }}"></script>
    <script src="{{ asset('admin/vendors/scripts/newrowadd.js') }}"></script>

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    {{-- <script src="{{ asset('admin/vendors/scripts/event.js') }}"></script> --}}





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
            $('.example').DataTable();
        })
    </script>

    {{-- <script>
        $('#description').summernote({
            height: 100
        });
    </script> --}}

    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function() {
                var calendar = $('#calendar').fullCalendar({
                    editable: true,
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    events: '/full-calender',
                    selectable: true,
                    selectHelper: true,
                    select: function(start, end, allDay) {
                        var title = prompt('Event Title:');

                        if (title) {
                            var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');

                            var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

                            $.ajax({
                                url: "/full-calender/action",
                                type: "POST",
                                data: {
                                    title: title,
                                    start: start,
                                    end: end,
                                    type: 'add'
                                },
                                success: function(data) {
                                    calendar.fullCalendar('refetchEvents');
                                    alert("Event Created Successfully");
                                }
                            })
                        }
                    },
                    editable: true,
                    eventResize: function(event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                        var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                        var title = event.title;
                        var id = event.id;
                        $.ajax({
                            url: "/full-calender/action",
                            type: "POST",
                            data: {
                                title: title,
                                start: start,
                                end: end,
                                id: id,
                                type: 'update'
                            },
                            success: function(response) {
                                calendar.fullCalendar('refetchEvents');
                                alert("Event Updated Successfully");
                            }
                        })
                    },
                    eventDrop: function(event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                        var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                        var title = event.title;
                        var id = event.id;
                        $.ajax({
                            url: "/full-calender/action",
                            type: "POST",
                            data: {
                                title: title,
                                start: start,
                                end: end,
                                id: id,
                                type: 'update'
                            },
                            success: function(response) {
                                calendar.fullCalendar('refetchEvents');
                                alert("Event Updated Successfully");
                            }
                        })
                    },

                    eventClick: function(event) {
                        if (confirm("Are you sure you want to remove it?")) {
                            var id = event.id;
                            $.ajax({
                                url: "/full-calender/action",
                                type: "POST",
                                data: {
                                    id: id,
                                    type: "delete"
                                },
                                success: function(response) {
                                    calendar.fullCalendar('refetchEvents');
                                    alert("Event Deleted Successfully");
                                }
                            })
                        }
                    }
                });

            });
        });
    </script>




</body>

</html>
