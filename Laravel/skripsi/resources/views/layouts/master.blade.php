<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>e-Library</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href=" {{ asset ('AdminBSB/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href=" {{ asset ('AdminBSB/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href=" {{ asset ('AdminBSB/plugins/animate-css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset ('AdminBSB/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href=" {{ asset ('AdminBSB/plugins/morrisjs/morris.css') }}" rel="stylesheet" />
    <link href=" {{ asset ('AdminBSB/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset ('AdminBSB/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset ('AdminBSB/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset ('AdminBSB/css/themes/all-themes.css') }}" rel="stylesheet" />
    <!-- Light Gallery Plugin Css -->
    <link href="{{ asset ('AdminBSB/plugins/light-gallery/css/lightgallery.css') }}" rel="stylesheet">
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    
{{-- Disini File (header.blade.php) --}}
@include('layouts.header')



{{-- Disini (sidemenu.blade.php) --}}
@include('layouts.sidemenu')


            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>
@yield('maincontent')
    
    <!-- Jquery Core Js -->
    <script src=" {{ asset ('AdminBSB/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src=" {{ asset ('AdminBSB/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <script src=" {{ asset ('AdminBSB/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/plugins/node-waves/waves.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/plugins/jquery-countto/jquery.countTo.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/plugins/raphael/raphael.min.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/plugins/morrisjs/morris.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/plugins/chartjs/Chart.bundle.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/plugins/flot-charts/jquery.flot.time.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>
     <script src="{{ asset ('AdminBSB/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset ('AdminBSB/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset ('AdminBSB/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset ('AdminBSB/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset ('AdminBSB/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset ('AdminBSB/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset ('AdminBSB/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset ('AdminBSB/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset ('AdminBSB/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>
    <script src="{{ asset ('AdminBSB/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
     <script src="{{ asset ('AdminBSB/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
         <!-- Light Gallery Plugin Js -->
    <script src="{{ asset ('AdminBSB/plugins/light-gallery/js/lightgallery-all.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset ('AdminBSB/js/pages/medias/image-gallery.js') }}"></script>
    <!-- Custom Js -->
  
    <script src="{{ asset ('AdminBSB/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/js/admin.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/js/pages/index.js') }}"></script>
    <script src=" {{ asset ('AdminBSB/js/demo.js') }}"></script>
</body>

</html>