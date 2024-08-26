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
                        <li class="active"><a href="dashboard-account-info.php"><i class="fa fa-chevron-right"></i> Account Info</a></li>
                        <li><a href="dashboard-userlist.php"><i class="fa fa-chevron-right"></i> User List</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="detail-dashboard add-form">
                    <h2 class="d-headline">Edit Account</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-row row">
                            <div class="form-group col-md-6">
                                <label for="">First Name <span>*</span></label>
                                <input type="text" class="form-control" name="title" placeholder="First Name" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Last Name <span>*</span></label>
                                <input type="text" class="form-control" name="title" placeholder="Last Name" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Email Address <span>*</span></label>
                                <input type="text" class="form-control" name="title" placeholder="Email Address" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Phone Number <span>*</span></label>
                                <input type="text" class="form-control" name="title" placeholder="Phone Number" value="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Address <span>*</span></label>
                                <input type="text" class="form-control" name="address" placeholder="Address" value="">
                            </div>
                            <div class="form-group col-md-6 option-item">
                                <label for="">Country <span>*</span></label>
                                <select class="form-control select2" name="Country">
                                    <option value="">--Select Country--</option>
                                    <option value="1">USA</option>
                                    <option value="2">Bangladesh</option>
                                    <option value="3">Canada</option>
                                    <option value="4">Bangladesh</option>
                                    <option value="5">Canada</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 option-item">
                                <label for="">State <span>*</span></label>
                                <select class="form-control select2" name="State">
                                    <option value="">--Select State--</option>
                                    <option value="1">London</option>
                                    <option value="2">Dhaka</option>
                                    <option value="3">Dhaka</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 option-item">
                                <label for="">City <span>*</span></label>
                                <select class="form-control" name="City">
                                    <option value="">--Select City--</option>
                                    <option value="1">London</option>
                                    <option value="2">Dhaka</option>
                                    <option value="3">Dhaka</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Postal Code <span>*</span></label>
                                <input type="text" class="form-control" name="p-code" placeholder="Postal Code" value="">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="">Featured Photo  <span>*</span></label>
                                <input type="file" class="form-control-file" name="featured_photo">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Password <span>*</span></label>
                                <input type="text" class="form-control" name="p-code" placeholder="Password" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Confirm Password <span>*</span></label>
                                <input type="text" class="form-control" name="pc-code" placeholder="Confirm Password" value="">
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!--Dashboard End-->

<?php require_once('footer.php'); ?>