<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="">
    <title>Admin Dashboard</title>

    <!-- Start Global plugin css -->
    <link href="{{URL::asset('css/global-plugins.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/jquery-icheck/skins/all.css')}}" rel="stylesheet" />
    <!-- <link href="../../../assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="../../../assets/css/bootstrap-reset.css" rel="stylesheet"> -->
    <!-- <link href="../../../assets/vendors/font-awesome/css/font-awesome.css" rel="stylesheet"> -->
    <!-- <link href="../../../assets/vendors/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" /> -->
    <!-- <link href="../../../assets/vendors/pe-icon-7-stroke/css/helper.css" rel="stylesheet"/> -->
    <!-- <link href="../../../assets/vendors/jquery-notific8/jquery.notific8.css" rel="stylesheet"> -->
    <!-- <link href="../../../assets/vendors/line-icons/line-icons.css" rel="stylesheet" /> -->
    <!-- <link href="../../../assets/vendors/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
    <!-- <link href="../../../assets/vendors/dropdowns-enhancement/css/dropdowns-enhancement.css" rel="stylesheet"> -->
    <!-- <link href="../../../assets/vendors/hover/hover.css" rel="stylesheet"> -->
    <!-- <link href="../../../assets/vendors/animate/animate.css" rel="stylesheet"> -->
    <!-- <link href="../../../assets/vendors/tooltipster/css/tooltipster.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="../../../assets/vendors/tooltipster/css/themes/tooltipster-light.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="../../../assets/vendors/tooltipster/css/themes/tooltipster-noir.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="../../../assets/vendors/tooltipster/css/themes/tooltipster-punk.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="../../../assets/vendors/tooltipster/css/themes/tooltipster-shadow.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="../../../assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet" /> -->
    <!-- End Global plugin css -->
    

    <!-- Custom styles for this template -->
    <link href="{{URL::asset('css/theme.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style-responsive.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('css/class-helpers.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('css/site.css')}}" rel="stylesheet"/>

    <!--Color schemes-->
    {{-- <link href="../../../assets/css/colors/green.css" rel="stylesheet"> --}}
    {{-- <link href="{{URL::asset('css/colors/turquoise.css')}}" rel="stylesheet"> --}}
    {{-- <link href="../../../assets/css/colors/blue.css" rel="stylesheet"> --}}
    {{-- <link href="../../../assets/css/colors/amethyst.css" rel="stylesheet"> --}}
    {{-- <link href="../../../assets/css/colors/cloud.css" rel="stylesheet"> --}}
    {{-- <link href="../../../assets/css/colors/sun-flower.css" rel="stylesheet"> --}}
    {{-- <link href="../../../assets/css/colors/carrot.css" rel="stylesheet"> --}}
    {{-- <link href="../../../assets/css/colors/alizarin.css" rel="stylesheet"> --}}
    {{-- <link href="../../../assets/css/colors/concrete.css" rel="stylesheet"> --}}
    <link href="{{URL::asset('css/colors/wet-asphalt.css')}}" rel="stylesheet">

    <!--Fonts-->
    <link href="{{URL::asset('fonts/Indie-Flower/indie-flower.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('fonts/Open-Sans/open-sans.css?family=Open+Sans:300,400,700')}}" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<!--
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* Thema Color Schemes
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

* Just add the attribute value to the attribute ID in <body> element
* List of color scheme values that supported to this theme
    - default-scheme - the default is green color
    - alizarin-scheme
    - amethyst-scheme
    - blue-scheme
    - carrot-scheme
    - cloud-scheme
    - concrete-scheme
    - sun-flower-scheme
    - turquoise-scheme
    - wet-asphalt-scheme

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
-->


<body id="wet-asphalt-scheme">

    <!--======== Start Style Switcher ========-->    
    {{-- <i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
    <div class="style-switcher">
        <div class="style-swticher-header">
            <div class="style-switcher-heading fg-white">Color Switcher</div>            
            <div class="theme-close"><i class="icon-close"></i></div>
        </div>

        <div class="style-swticher-body">
            <ul class="list-unstyled">
                <li class="theme-default theme-active" data-style="default"></li>
                <li class="theme-turquoise" data-style="turquoise"></li>
                <li class="theme-blue" data-style="blue"></li>
                <li class="theme-amethyst" data-style="amethyst"></li>
                <li class="theme-cloud" data-style="cloud"></li>
                <li class="theme-sun-flower" data-style="sun-flower"></li>
                <li class="theme-carrot" data-style="carrot"></li>
                <li class="theme-alizarin" data-style="alizarin"></li>
                <li class="theme-concrete" data-style="concrete"></li>
                <li class="theme-wet-ashphalt" data-style="wet-ashphalt"></li>
            </ul>         
        </div>
    </div> --}}
    <!--======== End Style Switcher ========-->

    <section id="container">

        <!--header start-->
        @include('shared.nav')    
        <!--header end-->

        <!--sidebar start-->
        @include('shared.sidebar')
        <!--sidebar end-->


        <!--main content start-->
        <section id="main-content">

                
            <section class="wrapper">
                    
                <!--======== Grid Menu Start ========-->
                @include('shared.gridmenu')             
                <!--======== Grid Menu End ========-->

                <!--======== Page Title and Breadcrumbs Start ========-->
               {{--  @component('shared.pageheader')
                Dashboard
                @endcomponent --}}
                <!--======== Page Title and Breadcrumbs End ========-->

                @yield('content')


            </section>
        </section>
        <!--======== Main Content End ========-->


        <!--===== Right sidebar nofications start ========-->
        @include('shared.rightsidebar')
        <!--===== Right sidebar nofications end ========-->

    </section><!--/.container-->

<!--===== Footer Start ========-->

<!-- Placed js at the end of the document so the pages load faster -->

<!--##################################################################################
#
# Thema GLOBAL JS PLUGINS
# 
# NOTE: These libraries are neccessary to run the template so don't remove one of these libraries. 
# You can uncomment the following libraries commented and comment the global-plugins.js but it will may cause slow performance of the template because of many links should be load from the server.
#
##################################################################################-->
<script src="{{URL::asset('js/global-plugins.js')}}"></script>


<!--##################################################################################
#
# COMMON SCRIPT FOR THIS PAGE
#
##################################################################################-->

<!--common script init for all pages-->
<script src="{{URL::asset('js/theme.js')}}" type="text/javascript" ></script>
<script src="{{URL::asset('js/site.js')}}" type="text/javascript" ></script>

<script type="text/javascript">


    $(document).ready(function(){
        new WOW().init();

        App.initPage();
        App.initLeftSideBar();
        App.initCounter();
        App.initNiceScroll();
        App.initPanels();
        App.initProgressBar();
        App.initSlimScroll();
        App.initNotific8();
        App.initTooltipster();
        App.initStyleSwitcher();
        App.initMenuSelected();
        App.initRightSideBar();
        App.initSummernote();
        App.initAccordion();
        App.initModal();
        App.initPopover();

    });
</script>


</body>

</html>

<!--===== Footer End ========-->