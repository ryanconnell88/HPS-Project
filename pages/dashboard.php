<?php
    include('navbars_footers/header.php')
?>

    <div class="main-dashboard container">
        <!-- TOP header -->
        <div class="dashboard-header">
            <div class="row">
                <div class="col-lg-4 icons">
                    <a class="navbar-brand float-left" href="landing.php">
                        <i class="fas fa-th-large"></i>
                    </a>
                </div>
                <div class="col-lg-4">
                    <h1 class="text-center">HPS Configurator</h1>
                </div>
                <div class="col-lg-4 icons">
                    <a class="navbar-brand navbar-right float-right" href="#">
                        <span><i class="fas fa-cog"></i></span>                     
                    </a>
                    <a class="navbar-brand navbar-right float-right" href="#">
                        <i class="fas fa-ellipsis-h"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- TOP header -->

        <div class="dashboard-onboard-carriers">
            <div class="container-fluid">
                <div class="row">
                    <?php foreach($carriers as $carrier) { ?>
                    <div class="col-lg-3 col-md-3">
                        <div class="row">
                            <!-- <div class="col-lg-12"> -->
                                <div class="carrier">
                                    <!-- COLOR-CODED squares -->
                                    <div class="color-coding"></div>
                                    <!-- LOGOs -->
                                    <a href="dashboard-carrierdetails.php">
                                        <div class="thumbnail"><img src="../images/logos/<?php echo $carrier['logo']; ?>.png" alt=""></div>
                                    </a>
                                    <!-- Company's INFO -->
                                    <div class="carrier-info">
                                        <h3>
                                            <?php echo $carrier['name']; ?>
                                        </h3>
                                        <h5>Last Updated: 12/12/12</h5>
                                        <h5>Last Updated By: John Dow</h5>
                                    </div>
                                    <div class="carrier-status">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 btn btn-lg"><button class="btn btn-lg btn-block btn-danger">PROD</button></div>
                                            <div class="col-lg-3 col-md-6 btn btn-lg"><button class="btn btn-lg btn-block btn-info">QUI</button></div>
                                            <div class="col-lg-3 col-md-6 btn btn-lg"><button class="btn btn-lg btn-block btn-warning">SUI</button></div>
                                            <div class="col-lg-3 col-md-6 btn btn-lg"><button class="btn btn-lg btn-block btn-success">DEV</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    


        <?php } ?>





        <!-- =================== -->

        <!-- ONBOARDING Carriers -->
        <div class="onboarding-carriers">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 ">
                        <p class="lead">Current Onboarding</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="carrier">
                            <div class="color-coding"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="carrier"></div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>


        </div>
        <!-- ONBOARDING Carriers -->

        <!-- =================== -->



    </div>

    <?php
    include('navbars_footers/footer.php')
?>