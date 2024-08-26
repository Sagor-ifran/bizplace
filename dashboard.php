<?php require_once('header.php'); ?>

<!--Banner Start-->
<div class="banner-area flex" style="background-image:url(img/banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-text">
                    <h1>Dashboard</h1>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><span>Dashboard</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Dashboard Start-->
<div class="dashboard-area pt_70 pb_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="dashboard-widget">
                   <div class="dashboard-account-info">
                       <img src="img/c1.jpg" alt="">
                       <h3>Hasibul Islam</h3>
                       <p>Web Developer</p>
                   </div>
                    <ul>
                        <li class="active"><a href="dashboard.php"><i class="fa fa-chevron-right"></i> Dashboard</a></li>
                        <li><a href="dashboard-account-info.php"><i class="fa fa-chevron-right"></i> Account Info</a></li>
                        <li><a href="dashboard-userlist.php"><i class="fa fa-chevron-right"></i> User List</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="detail-dashboard">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="dash-item db-green flex mb_30">
                                <i class="fa fa-drivers-license-o"></i>
                                <h4>Total Order</h4>
                                <h2>42</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="dash-item db-red flex mb_30">
                                <i class="fa fa-handshake-o"></i>
                                <h4>Completed Order</h4>
                                <h2>20</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="dash-item db-red flex mb_30">
                                <i class="fa fa-newspaper-o"></i>
                                <h4>Pending Order</h4>
                                <h2>20</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Dashboard End-->

<?php require_once('footer.php'); ?>