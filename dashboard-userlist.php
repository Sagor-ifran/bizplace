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
                        <li><a href="dashboard.php"><i class="fa fa-chevron-right"></i> Dashboard</a></li>
                        <li><a href="dashboard-account-info.php"><i class="fa fa-chevron-right"></i> Account Info</a></li>
                        <li class="active"><a href="dashboard-userlist.php"><i class="fa fa-chevron-right"></i> User List</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="detail-dashboard">
                <h2 class="d-headline">User List</h2>
                <table class="coustom-dashboard dashboard-table display" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th>Startus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Hasibul</td>
                                <td>hb@gmail.com</td>
                                <td>Sub Admin</td>
                                <td><a class="db-bt-ed" href="#">Edit</a>  <a class="db-bt-ed bgc" href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Hasibul</td>
                                <td>hb@gmail.com</td>
                                <td>Sub Admin</td>
                                <td><a class="db-bt-ed" href="#">Edit</a>  <a class="db-bt-ed bgc" href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Hasibul</td>
                                <td>hb@gmail.com</td>
                                <td>Sub Admin</td>
                                <td><a class="db-bt-ed" href="#">Edit</a>  <a class="db-bt-ed bgc" href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Hasibul</td>
                                <td>hb@gmail.com</td>
                                <td>Sub Admin</td>
                                <td><a class="db-bt-ed" href="#">Edit</a>  <a class="db-bt-ed bgc" href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Hasibul</td>
                                <td>hb@gmail.com</td>
                                <td>Sub Admin</td>
                                <td><a class="db-bt-ed" href="#">Edit</a>  <a class="db-bt-ed bgc" href="#">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                
                

<!--
                    <table id="example" class="dashboard-table display" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th>Startus</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th>Startus</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Hasibul</td>
                                <td>hb@gmail.com</td>
                                <td>Sub Admin</td>
                                <td><a class="db-bt-ed" href="#">Edit</a>  <a class="db-bt-ed bgc" href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Hasibul</td>
                                <td>hb@gmail.com</td>
                                <td>Sub Admin</td>
                                <td><a class="db-bt-ed" href="#">Edit</a>  <a class="db-bt-ed bgc" href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Hasibul</td>
                                <td>hb@gmail.com</td>
                                <td>Sub Admin</td>
                                <td><a class="db-bt-ed" href="#">Edit</a>  <a class="db-bt-ed bgc" href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Hasibul</td>
                                <td>hb@gmail.com</td>
                                <td>Sub Admin</td>
                                <td><a class="db-bt-ed" href="#">Edit</a>  <a class="db-bt-ed bgc" href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Hasibul</td>
                                <td>hb@gmail.com</td>
                                <td>Sub Admin</td>
                                <td><a class="db-bt-ed" href="#">Edit</a>  <a class="db-bt-ed bgc" href="#">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
-->

                </div>
            </div>
        </div>
    </div>
</div>
<!--Dashboard End-->

<?php require_once('footer.php'); ?>