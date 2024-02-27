
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin dashboard, admin template, administration, analytics, bootstrap, disease, doctor, elegant, health, hospital admin, medical dashboard, modern, responsive admin dashboard">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="description" content="Welly is a clean-code, responsive Django Admin template that can be easily customized to fit the needs of various hospital, medical dashboard, health, doctor, and other businesses.">
	<meta property="og:title" content="Welly - Django Hospital Admin Dashboard Bootstrap Template">
	<meta property="og:description" content="Welly is a clean-code, responsive Django Admin template that can be easily customized to fit the needs of various hospital, medical dashboard, health, doctor, and other businesses.">
	<meta property="og:image" content="../social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title -->
	<title>Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{asset('backend_asset/assets/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend_asset/assets/vendor/chartist/css/chartist.min.css')}}"rel="stylesheet">
    <link href="{{asset('backend_asset/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend_asset/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend_asset/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend_asset/assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">


    {{-- custom links --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @yield('head')



    {{-- custom links --}}



    {{-- custon style --}}
    <style>
        .selected {
            color: #FF0000; /* Red color for selected icons */
        }
        .nav-header .brand-title {
    margin-left: 0px !important ;
    max-width: 100% !important;
    margin-top: 0px;
}

    </style>

    {{-- custon style --}}


    @livewireStyles
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{route('home')}}" class="brand-logo">


                <img class="brand-title" src="{{asset('backend_asset/assets/images/logoBLack.png')}}" alt="">

            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start

		<!--**********************************
            Chat box End
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">

                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile" >
                                <a href="{{route('sitemap')}}" class="btn btn-danger btn-rounded btn-xs">sitemap</a>
                            </li>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
                                    <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" style="width: 40px; height: 40px;" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    {{-- <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ms-2">Profile </span>
                                    </a> --}}



                                    <div>
                                        <a  href="{{ route('logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>

                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </div>





                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a href="{{route('home')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li><a href="{{route('category')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-controls-3"></i>
                        <span class="nav-text">Category</span>
                        </a>
                    </li>
                    <li><a href="{{route('config')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Config</span>
                        </a>
                    </li>
                    <li><a href="{{route('news')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>
                        <span class="nav-text">News</span>
                        </a>
                    </li>
                    <li><a href="{{route('social.link')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-internet"></i>
                        <span class="nav-text">Social Link</span>
                        </a>
                    </li>
                    <li><a href="{{route('blogs')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-layer-1"></i>
                        <span class="nav-text">Blogs</span>
                        </a>
                    </li>
                    <li><a href="{{route('contact.message')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-internet"></i>
                        <span class="nav-text">Contact</span>
                        </a>
                    </li>



                </ul>

				{{-- <div class="copyright">
					<p><strong>Welly Hospital Admin Dashboard</strong> © 2024 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by DexignZone</p>
				</div> --}}
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			@yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://synexdigital.com/" target="_blank">SynexDigital</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('backend_asset/assets/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('backend_asset/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('backend_asset/assets/vendor/chart-js/chart.bundle.min.js')}}"></script>
    <script src="{{asset('backend_asset/assets/js/custom.min.js')}}"></script>
	<script src="{{asset('backend_asset/assets/js/deznav-init.js')}}"></script>
	<script src="{{asset('backend_asset/assets/vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
	<script src="{{asset('backend_asset/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
	<!-- Chart piety plugin files -->
    <script src="{{asset('backend_asset/assets/vendor/peity/jquery.peity.min.js')}}"></script>

	<!-- Apex Chart -->
	<script src="{{asset('backend_asset/assets/vendor/apexchart/apexchart.js')}}"></script>

	<!-- Dashboard 1 -->
	<script src="{{asset('backend_asset/assets/js/dashboard/dashboard-1.js')}}"></script>

    <!-- Datatable -->
    <script src="{{asset('backend_asset/assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend_asset/assets/js/plugins-init/datatables.init.js')}}"></script>
    {{-- sweet alert --}}
    <script src="{{asset('backend_asset/assets/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script src="{{asset('backend_asset/assets/js/plugins-init/sweetalert.init.js')}}"></script>

    {{-- custom links --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js" ></script> --}}

 @livewireScripts
	<script>
		$(function () {
			$('#datetimepicker1').datetimepicker({
				inline: true,
			});
		});
	</script>
    @yield('script')

</body>
</html>
