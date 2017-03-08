<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if ( $_SESSION['user'] == Null){

}else{
include ('connection.php')?>
<!-- Mirrored from steelcoders.com/alpha/v1.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Jan 2017 09:52:01 GMT -->
<head>

    <!-- Title -->
    <title>Afra Group</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
    <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="loader-bg"></div>
<div class="loader">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-teal lighten-1">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
<div class="mn-content fixed-sidebar">
    <header class="mn-header navbar-fixed">
        <nav class="red darken-1">
            <div class="nav-wrapper row">
                <section class="material-design-hamburger navigation-toggle">
                    <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                        <span class="material-design-hamburger__layer"></span>
                    </a>
                </section>
                <div class="header-title col s3 m3">
                    <span class="chapter-title">Afra Group</span>

                </div>




            </div>
        </nav>
    </header>



    <aside id="slide-out" class="side-nav white fixed">
        <div class="side-nav-wrapper">
            <div class="sidebar-profile">
                <div class="sidebar-profile-image">
                    <img src="assets/images/afra.png" class="circle" alt="" >
                    <br>
                </div>
                <div class="sidebar-profile-info">
                    <a href="javascript:void(0);" class="account-settings-link">
                        <p>Admin<i class="material-icons right">arrow_drop_down</i></p>

                    </a>
                </div>

            </div>
            <div class="sidebar-account-settings">
                <ul>

                    <li class="divider"></li>
                    <li class="no-padding">
                        <a href="logout.php" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                    </li>
                </ul>
            </div>
            <ul id="menu" class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                <li class="no-padding "><a class="waves-effect waves-grey " href="home.php"><i class="material-icons">settings_input_svideo</i>Home</a></li>
                <li class="no-padding " >
                    <a href="form-wizard.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>New Barcode</a>

                </li>
                <li class="no-padding active">
                    <a  href="adduser.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">add</i>Add New User</a>

                </li>

            </ul>
            <div class="footer">
                <p class="copyright">Tech Cloud Ltd. ©</p>
                <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
            </div>
        </div>
    </aside>
    <main class="mn-inner">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <form id="example-form" action="adduserphp.php" method="POST">
                            <div>
                                <h5>Add New User</h5>
                                <section>
                                    <div class="wizard-content">
                                        <div class="row">
                                            <div class="col m6">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <label >Username</label>
                                                        <input  name="username" type="text" class="required validate">
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <label >Password</label>
                                                        <input  name="password" type="text" class="required validate">
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <label >Type</label>
                                                        <input  name="type" type="text" class="required validate">
                                                    </div>


                                                    <div class="input-field col s12">
                                                        <input class="waves-effect waves-light btn red"  type="submit" value="Submit">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <div class="page-footer">
        <div class="footer-grid container">
            <div class="footer-l white">&nbsp;</div>
            <div class="footer-grid-l white">
            </div>
            <div class="footer-r white">&nbsp;</div>

        </div>
    </div>
</div>







<!-- Javascripts -->
<script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="assets/plugins/materialize/js/materialize.min.js"></script>
<script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="assets/plugins/chart.js/chart.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="assets/plugins/curvedlines/curvedLines.js"></script>
<script src="assets/plugins/peity/jquery.peity.min.js"></script>
<script src="assets/js/alpha.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>



<script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/plugins/jquery-steps/jquery.steps.min.js"></script>
<script src="assets/js/pages/form-wizard.js"></script>



<script>

    $(function() {

        var pgurl = window.location.href.
        substr(window.location.href.lastIndexOf("/")+1);

        $(".menu li").each(function(){

            if(pgurl==''){
                $(".nav li:eq(1)").addClass("active");
            }else
            if($('a',this).attr("href") == pgurl || $('a', this).attr("href") == '')
                $(this).addClass("active");
        })
    });
</script>
</body>


</html>

<?php } ?>