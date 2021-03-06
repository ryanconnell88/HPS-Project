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
                        <h3>We would need a few details to get you started!</h3>
                        <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua.
                        </p>
                    </div>                   
                </div>
                <!-- Header text -->

                <div class="my-container">
                    <div class="carrier-name">
                        <p>Name of the Carrier</p>
                            <span id="icons">
                                <ul class="nav navbar-nav navbar-right">
                                        <li><a href=""><i class="far fa-envelope fa-1x" style="color:rgba(60, 222, 204, 0.91); padding-left:0px;"></i></a>
                                        </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-ellipsis-v" style="color:rgba(60, 222, 204, 0.91);"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#" data-toggle="modal" data-target="#notes"><i class="far fa-file-alt" style="color:rgba(60, 222, 204, 0.91); margin-right: 13px;"></i>Notes</a></li>
                                                <li><a href=""><i class= "fas fa-sliders-h" style="color:rgba(60, 222, 204, 0.91); margin-right: 8px;"></i>Customizations</a></li>
                                                <li><a href=""><i class="fas fa-clipboard-check" style="color:rgba(60, 222, 204, 0.91); margin-right: 13px;"></i>Add To-Do</a></li>
                                            </ul>
                                        </li>
                                </ul>
                            </span>
                        <hr id="hr"style="margin-top: 2px;">
                        <input id="carriername-input" type="text" class="form-control" placeholder="Enter name here...">
                        
                    </div>
                </div>

                <div class="my-container">
                    <div id="carrier-logo" class="carrier-name">
                        <p>Carrier Logo</p>
                            <span id="icons">
                                <ul class="nav navbar-nav navbar-right">
                                        <li><a href=""><i class="far fa-envelope fa-1x" style="color:rgba(60, 222, 204, 0.91); padding-left:0px;"></i></a>
                                        </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-ellipsis-v" style="color:rgba(60, 222, 204, 0.91);"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#" data-toggle="modal" data-target="#notes"><i class="far fa-file-alt" style="color:rgba(60, 222, 204, 0.91); margin-right: 13px;"></i>Notes</a></li>
                                                <li><a href=""><i class= "fas fa-sliders-h" style="color:rgba(60, 222, 204, 0.91); margin-right: 8px;"></i>Customizations</a></li>
                                                <li><a href=""><i class="fas fa-clipboard-check" style="color:rgba(60, 222, 204, 0.91); margin-right: 13px;"></i>Add To-Do</a></li>
                                            </ul>
                                </ul>
                            </span>
                            <hr id="hr">
                        <div id="drag-drop-container">
                            <div id="image-upload">
                                <label id="logo-drop-area">
                                    <label class="logo-upload" for="logo-input"></label>
                                    <input type="file" id="logo-input" size="400"><i id="img-upload-icon" class="fas fa-upload fa-5x"></i>
                                    <p class="file-name">Try dropping some files here, or click so select files to upload.</p>                                
                                </label> 
                                <img class="text-center" id="user-logo" src="#" alt="Carrier logo" data-toggle="modal" data-target="#logo-preview"/>
                            </div>   
                        </div>                                      
                    </div>
                </div>
                <a id="save-next-btn"  href="dashboard-businessdetails.php" class="btn btn-lg btn-primary pull-right">Next</a>
            </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="logo-preview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div id="image-preview-modal" class="modal-content">
            <img class="text-center thumbnail" id="user-logo-preview" src="#" alt="Carrier logo"/>
            <div class="modal-footer"><button type="button" class="btn btn-info float-right" data-dismiss="modal">Close</button></div>          
        </div>
    </div>    
</div>
<!-- Modal -->

<?php
    include('navbars_footers/footer.php');
?>
