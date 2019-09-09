<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="thema bootstrap template, thema admin, bootstrap, admin template, bootstrap admin">

    <meta name="author" content="LanceCoder">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="">
    <title>Thema Admin Boostrap Template</title>

    <!-- Start Global plugin css -->
    <link href="{{URL::asset('css/global-plugins.css')}}" rel="stylesheet">
    <link href="../../../assets/vendors/jquery-icheck/skins/all.css" rel="stylesheet" />
    

    <!-- Custom styles for this template -->
    <link href="{{URL::asset('css/theme.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style-responsive.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('css/class-helpers.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('css/site.css')}}" rel="stylesheet"/>

    <!--Color schemes-->
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
<body id="wet-asphalt-scheme" class="form-background">

    <!--main content start-->
    <div class="bg-overlay"></div>
    <section class="registration-login-wrapper">

        <!--======== START LOGIN ========-->
        <div class="row page-login">

            <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2"> 
                <div class="form-header bg-white padding-10 text-center">
                    <h2><strong>Login</strong> to your account</h2>
                </div>

                <div class="form-body bg-white padding-20">
                    <div class="row">
                        <div class="col-md-12">

                            <form action="/admin/login" method="post">
                                @csrf
                                <div class="inner-addon right-addon margin-bottom-15">
                                    <i class="fa fa-envelope"></i>
                                    <input type="text" name="email" class="form-control" placeholder="Email" />
                                </div>

                                <div class="inner-addon right-addon margin-bottom-15">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" name="password" class="form-control" placeholder="Password" />
                                </div>
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="icheck-aero"> Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <button type="submit" class="btn btn-wet-asphalt btn-raised btn-flat">Login</button>
                                    </div>
                                </div>
                                
                            </form>

                        </div>

                    </div>

                    <hr/>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>Forgot Password?</h4>
                            <p><a href="#">Click here to reset password</a></p>
                        </div>
                    </div>

                </div>
                
            </div>

        </div><!--/row-->
        <!--======== END LOGIN ========-->

    </section>
    <!--======== Main Content End ========-->


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
    <script src="../../../assets/js/global-plugins.js"></script>
    
    <!--##################################################################################
    #
    # COMMON SCRIPT FOR THIS PAGE
    #
    ##################################################################################-->

    <!--common script init for all pages-->
    <script src="../../../assets/js/theme.js" type="text/javascript" ></script>

    <!-- For Form Elements Page Only -->
    <script src="../../../assets/js/forms.js"></script>
    <script src="../../../assets/js/form-validation.js"></script>
    {{-- <script src="../../../assets/js/form-wizard.js"></script>
    <script src="../../../assets/js/form-plupload.js"></script>
    <script src="../../../assets/js/form-x-editable.js"></script> --}}

    <!-- For Login and registration page Only -->
    {{-- <script src="../../../assets/vendors/backstretch/jquery.backstretch.min.js"></script>
    <script src="../../../assets/js/registration-login.js"></script> --}}

    <script type="text/javascript">


        $(document).ready(function(){
            new WOW().init();

            // App.initPage();
            // App.initLeftSideBar();
            // App.initCounter();
            // App.initNiceScroll();
            // App.initPanels();
            // App.initProgressBar();
            // App.initSlimScroll();
            // App.initNotific8();
            // App.initTooltipster();
            // App.initStyleSwitcher();
            // App.initMenuSelected();
            // App.initRightSideBar();
            // App.initSummernote();
            // App.initAccordion();
            // App.initModal();
            // App.initPopover();

        });
    </script>


</body>

</html>

<!--===== Footer End ========-->