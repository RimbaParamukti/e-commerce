<!-- Start Login Register Area -->
        <div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(<?php echo BASEURL; ?>/images/bg/5.jpg) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <ul class="login__register__menu nav justify-contend-center" role="tablist">
                            <li role="presentation" class="login active"><a class="active" href="#login" role="tab" data-toggle="tab">Login</a></li>
                            <li role="presentation" class="register"><a href="#register" role="tab" data-toggle="tab">Register</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Start Login Register Content -->
                <div class="row tab-content">
                    <div class="col-md-6  ml-auto mr-auto">
                        <div class="htc__login__register__wrap">
                            <!-- Start Single Content -->
                            <div id="login" role="tabpanel" class="single__tabs__panel tab-pane active">
                                <form action="<?php echo BASEURL;?>/user_data/Loginakun" class="login" method="POST">
                                    <input type="text" placeholder="User Name*" name="username">
                                    <input type="password" placeholder="Password*" name="password">
                                    <div class="htc__login__btn mt--30">
                                    <button type="submit">Login</button>
                                </div>
                                </form>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div id="register" role="tabpanel" class="single__tabs__panel tab-pane">
                                <form action="<?php echo BASEURL;?>/user_data/tambahAkun" class="login" method="post">
                                    <input type="text" placeholder="User Name*" name="username">
                                    <input type="password" placeholder="Password*" name="password" >
                                    <input type="password" placeholder="RePassword*" name="RePassword">
                                    <input type="number" placeholder="NoTelepon" name="notelp">
                                    <div class="htc__login__btn">
                                    <button type="submit">REGISTER</button>
                                </div>
                                </form>
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
                <!-- End Login Register Content -->
            </div>
        </div>
        <!-- End Login Register Area -->