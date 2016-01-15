<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Medical Staff Portal | Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <!-- Calendar -->

        <script type="text/javascript">
            $(document).ready(function() {
                // page is now ready, initialize the calendar...
                $('#calendar').fullCalendar({
                    eventSources: [
                        {
                            events: [
                                {
                                    title : 'Holiday Fundraising',
                                    start : '2015-12-18'

                                },
                                {
                                    title : 'Event Title',
                                    start : '2015-12-19'

                                },
                                {
                                    title : 'Event Title',
                                    start : '2015-12-20'

                                },
                                {
                                    title : 'Event Title',
                                    start : '2015-12-21'

                                },
                                {
                                    title : 'Event Title',
                                    start : '2015-12-22'

                                },
                                {
                                    title : 'Event Title',
                                    start : '2015-12-24'

                                }

                            ],
                            color: '#3E7698',
                            textColor: '#ffffff'
                        }
                    ]
                });
            });
        </script>

        <link rel="stylesheet" type="text/css" href="bower_components/fullcalendar/dist/fullcalendar.min.css">
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/moment/min/moment.min.js"></script>
        <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    </head>

    <body id="home">
            <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
        <div class="status-bar"></div>
        <!-- Nav -->
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.php"><img class="logo"src="images/logo.png" alt="Winthrop Logo">
                                <span class="title">Winthrop Medical Staff</span></a>
                        </div>
                        <div class="header-btn">
                            <a href="http://doctors.winthrop.org/" class="btn btn-default find-doctor" role="button" target="_blank">Find A Doctor</a>
                            <a href="login.php" class="btn btn-default member-login" role="button">Member Login</a>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="membership.php">Membership</a></li>
                            <li><a href="leadership.php">Leadership</a></li>
                            <li><a href="events.php">Events</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <div class="border"></div>
        </nav>
        <!-- End Nav -->