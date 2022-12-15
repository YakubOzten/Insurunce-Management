<!doctype html>
<html lang="en">

<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Material Kit CSS -->
    <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <!-- Fonts -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- customcss -->
{{--    <link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet">--}}
    <link href="{{ asset('assets/css/custom1.css')}}" rel="stylesheet">


</head>

<body class="dark-edition">
<div class="wrapper ">
    @yield("sidebar")
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:void(0)"></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-default btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="material-icons">dashboard</i>
                                <p class="d-lg-none d-md-block">
                                    Stats
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="d-lg-none d-md-block">
                                    Some Actions
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                                <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                                <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                                <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                                <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                            <img class="h-8 w-8 rounded-full object-cover"
                                 src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('profile.show')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-100" aria-hidden="true"></i>
                                    Profile
                                </a>
{{--                                <x-jet-dropdown-link  href="{{ route('profile.show') }}">--}}
{{--                                                                            {{ __('Profile') }}--}}
{{--                                                                        </x-jet-dropdown-link>--}}
                                <div class="dropdown-divider"></div>
                               <a  class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                   <i class="fa-solid fa-right-from-bracket fa-sm fa-fw mr-2 text-gray-100" aria-hidden="true"></i>
                                  Logout

                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>





                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                </div>


                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>

        </div>
{{--                        <div class="ml-3 relative">--}}
{{--                            <x-jet-dropdown align="right" width="48">--}}
{{--                                <x-slot name="trigger">--}}
{{--                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())--}}
{{--                                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">--}}
{{--                                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />--}}
{{--                                        </button>--}}
{{--                                    @else--}}
{{--                                        <span class="inline-flex rounded-md">--}}
{{--                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">--}}
{{--                                        {{ Auth::user()->name }}--}}

{{--                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
{{--                                        </svg>--}}
{{--                                    </button>--}}
{{--                                </span>--}}
{{--                                    @endif--}}
{{--                                </x-slot>--}}

{{--                                <x-slot name="content">--}}
{{--                                    <!-- Account Management -->--}}
{{--                                    <div class="block px-4 py-2 text-xs text-gray-400">--}}
{{--                                        {{ __('Manage Account') }}--}}
{{--                                    </div>--}}

{{--                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">--}}
{{--                                        {{ __('Profile') }}--}}
{{--                                    </x-jet-dropdown-link>--}}

{{--                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())--}}
{{--                                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">--}}
{{--                                            {{ __('API Tokens') }}--}}
{{--                                        </x-jet-dropdown-link>--}}
{{--                                    @endif--}}

{{--                                    <div class="border-t border-gray-100"></div>--}}

{{--                                    <!-- Authentication -->--}}
{{--                                    <form method="POST" action="{{ route('logout') }}" x-data>--}}
{{--                                        @csrf--}}

{{--                                        <x-jet-dropdown-link href="{{ route('logout') }}"--}}
{{--                                                             @click.prevent="$root.submit();">--}}
{{--                                            {{ __('Log Out') }}--}}
{{--                                        </x-jet-dropdown-link>--}}
{{--                                    </form>--}}
{{--                                </x-slot>--}}
{{--                            </x-jet-dropdown>--}}
{{--                        </div>--}}


{{--                    <div class="-mr-2 flex items-center sm:hidden">--}}
{{--                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">--}}
{{--                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
{{--                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </div>--}}
                </div>

            </div>
<div class="whattsapp-chat">
    <a href="https://wa.me/+905377105834?text=Merhaba%20" target="_blank">
        <img src="{{asset('assets/img/whatsapp-icon.png')}}" alt="whattsapp-logo" height="50px" width="50px">
    </a>
</div>
</body>

        <!-- End Navbar -->
        <!-- End Navbar -->

{{--        <footer class="footer">--}}
{{--            <div class="container-fluid">--}}
{{--                <nav class="float-left">--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a href="https://www.creative-tim.com">--}}
{{--                                İdeal Sigorta--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
{{--                <div class="copyright float-right">--}}
{{--                    &copy;--}}
{{--                    <script>--}}
{{--                        document.write(new Date().getFullYear())--}}
{{--                    </script>, made with <i class="material-icons">favorite</i> by--}}
{{--                    <a href="https://www.creative-tim.com" target="_blank">İdeal Sigorta</a> for a better web.--}}
{{--                </div>--}}
{{--                <!-- your footer here -->--}}
{{--            </div>--}}
{{--        </footer>--}}
    </div>
</div>

<!--   Core JS Files   -->
<!-- Scripts -->
@yield('scripts')
<script src="./assets/js/core/jquery.min.js"></script>
<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/core/bootstrap-material-design.min.js"></script>
<script src="https://unpkg.com/default-passive-events"></script>
<script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6395df04daff0e1306dc1b2a/1gk0mub33';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="./assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="./assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-dashboard.js?v=2.1.0"></script>
@if(session('status'))
    <script>
        swal('{{session('status')}}')
    </script>
@endif
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="./assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            $('.fixed-plugin a').click(function(event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .background-color .badge').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function() {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function() {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').change(function() {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function() {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function() {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
</body>

</html>
