<?php if ($data['admin'] == true) {
    echo "<script>
        document.location.href = '".BASEURL."/Admin'
    </script>";
}?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adminity : Widget</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="<?php echo BASEURL; ?>/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/assets/css/lib/unix.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo BASEURL; ?>/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php echo BASEURL; ?>/assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="<?php echo BASEURL; ?>/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
</head>

<body class="bg-primary">
    <div class="unix-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="login-content">
                        <div class="login-logo">
                            <span>Foodmin</span>
                        </div>
                        <div class="login-form">
                            <h4>Administratior Login</h4>
                            <form method="POST" action="<?php echo BASEURL; ?>/User_data/LoginAdmin" >
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="uname" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="pw" class="form-control" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
										<input type="checkbox"> Remember Me
									</label>
                                    <label class="pull-right">
										<a href="#">Forgotten Password?</a>
									</label>

                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>