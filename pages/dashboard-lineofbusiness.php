<?php
    include('navbars_footers/header.php');
    include('navbars_footers/top-navbar.php');
?>

    <div class="col-lg-12">
        <div id="carierdetails-container" class="container">
            <div class="carrier-details">
                <!-- Header text -->
                <div class="header-notification">
                    <div id="hide-btn"><i class="show-hide fas fa-chevron-up fa-2x"></i></div>
                    <div id="toggle-notification" class="jumbotron">
                        <h3>Great! Now let's select your line of business</h3>
                        <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <!-- Header text -->
                <div class="lineofbusiness-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="my-container">
                                <div class="carrier-name">
                                    <p>Business Type</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                                    <br><hr id="hr">   
                                </div>
                                <div id="business-selection-btn" class="lineofbusiness-options">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <button id="on-exchange" class="btn btn-default btn-lg btn-block">Individual On Exchange</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <button id="off-exchange" class="btn btn-default btn-lg btn-block">Individual Off Exchange</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <button id="group-exchange" class="btn btn-default btn-lg btn-block">Group</button>
                                        </div>
                                    </div>                      
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="my-container">
                                <div class="carrier-name">
                                    <p>Line of Business</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                                    <hr id="hr">   
                                </div>
                                <div id="lineofbusiness-selection-btn" class="lineofbusiness-types">
                                    <div class="row">
                                        <?php foreach($lineOfBusiness as $line) { ?>
                                        <div class="col-lg-12 col-md-12">
                                            <button class="btn btn-default btn-lg btn-block selected-business"><?php echo $line['name']; ?></button>
                                        </div>
                                        <?php } ?>                                                                        
                                    </div>
                                    <div id="select-clear-container" class="row">
                                        <div class="col-lg-6 pull-right">
                                            <button id="clear-business-btn" class="btn btn-danger btn-lg">Clear All</button>
                                        </div>    
                                    </div>                                       
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="my-container">                       
                                <div class="carrier-name">
                                    <p>States</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                                    <hr id="hr">   
                                </div>
                                <div id="states-selection-btn" class="lineofbusiness-states">
                                    <div class="row">
                                        <?php foreach ($allStates as $shortName => $name) { ?>                        
                                        <div class="col-lg-3 col-md-2">                            
                                            <button class="btn btn-default btn-sm selected-states"><?php echo $shortName; ?></button>                    
                                        </div>            
                                        <?php } ?>
                                                                                                              
                                    </div>
                                    <div id="select-clear-container" class="row">
                                        <div class="col-lg-6 col-md-6 pull-left">
                                            <button id="select-allstates-btn" class="btn btn-warning btn-lg">Select All</button>
                                        </div>
                                        <div class="col-lg-6 col-md-6 pull-right">
                                            <button id="clear-states-btn" class="btn btn-danger btn-lg">Clear All</button>     
                                        </div>                                        
                                    </div>                      
                                </div>                         
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
				<div class="col-lg-12">
                    <a id="save-next-btn" href="dashboard-legalentity.php" class="btn btn-lg btn-primary pull-right">Next</a>
				</div>
		    </div>		
        </div>
    </div>
                

    <?php
    include('navbars_footers/footer.php');
?>