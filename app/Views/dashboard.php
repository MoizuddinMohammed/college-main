<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-5 align-self-center">
                <h4 class="text-themecolor"><?= $title ?></h4>
            </div>
            <div class="col-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                    <a href="blank.html" class="btn btn-danger d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Add Blank Page</a>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row mt-4">
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title dash_heading">TOTAL STUDENTS</h5>
                        <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                            <div id="total-students" class="total_dash"></div>
                            <div class="ml-auto dashboard_graph">
                                <h2 class="text-success"><i class="ti-arrow-up"></i> <span class="counter">8659</span></h2>
                            </div>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title dash_heading">MALE STUDENTS</h5>
                        <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                            <div id="total-male-students" class="total_dash"></div>
                            <div class="ml-auto dashboard_graph ">
                                <h2 class="text-info"><i class="ti-arrow-up"></i> <span class="counter">4200</span></h2>
                            </div>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title dash_heading">FEMALE STUDENTS</h5>
                        <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                            <div id="total-female-students" class="total_dash"></div>
                            <div class="ml-auto dashboard_graph">
                                <h2 class="text-primary"><i class="ti-arrow-up"></i> <span class="counter">4459</span></h2>
                            </div>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
        
            <!-- Column -->
            <div class="col-lg-3 col-md-6 d-none">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title dash_heading">TOTAL MEETINGS</h5>
                        <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                            <div id="total-meetings" class="total_dash"></div>
                            <div class="ml-auto dashboard_graph">
                                <h2 class="text-warning"><i class="ti-arrow-up"></i> <span class="counter">500</span></h2>
                            </div>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6 d-none">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title dash_heading">EARNINGS</h5>
                        <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                            <div id="total_earnings" class="total_dash"></div>
                            <div class="ml-auto dashboard_graph">
                                <h2 class="text-warning"><i class="ti-arrow-up"></i> <span class="counter">18%</span></h2>
                            </div>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title dash_heading">TOTAL STAFF</h5>
                        <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                            <div id="total-staff" class="total_dash"></div>
                            <div class="ml-auto dashboard_graph">
                                <h2 class="text-warning"><i class="ti-arrow-up"></i> <span class="counter">1469</span></h2>
                            </div>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title dash_heading">TOTAL TEACHING STAFF</h5>
                        <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                            <div id="total-teaching-staff" class="total_dash"></div>
                            <div class="ml-auto dashboard_graph">
                                <h2 class="text-purple"><i class="ti-arrow-up"></i> <span class="counter">1469</span></h2>
                            </div>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title dash_heading">TOTAL NON-TEACHING STAFF</h5>
                        <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                            <div id="total-non-teaching-staff" class="total_dash"></div>
                            <div class="ml-auto dashboard_graph">
                                <h2 class="text-dark"><i class="ti-arrow-up"></i> <span class="counter">1469</span></h2>
                            </div>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
            <!-- Column --><!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title dash_heading">TOTAL DRIVERS</h5>
                        <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                            <div id="total-drivers" class="total_dash"></div>
                            <div class="ml-auto dashboard_graph">
                                <h2 class="text-danger"><i class="ti-arrow-up"></i> <span class="counter">1469</span></h2>
                            </div>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title dash_heading">TOTAL CLEANERS</h5>
                        <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                            <div id="total-cleaners" class="total_dash"></div>
                            <div class="ml-auto dashboard_graph">
                                <h2 class="text-megna"><i class="ti-arrow-up"></i> <span class="counter">1469</span></h2>
                            </div>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <div class="row">
            <!-- column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quick Links</h4>
                        <div class="row justify-content-md-center m-t-30">
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="roles.html" class="box bg-color-1 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Admin Options</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="maintanence.html" class="box bg-color-2 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Maintanence</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="employee-management.html" class="box bg-color-1 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Employee Managment</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="student-management.html" class="box bg-color-2 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Student Managment</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="fee-management.html" class="box bg-color-1 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Term / Bus Fee Entry</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="blank.html" class="box bg-color-2 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Exam Fee Entry</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="blank.html" class="box bg-color-1 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Fee Intimation Slips</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="blank.html" class="box bg-color-2 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Library</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="reports.html" class="box bg-color-1 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Reports</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="expenses.html" class="box bg-color-2 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Expenses</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="money_in.html" class="box bg-color-1 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Money In</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="blank.html" class="box bg-color-2 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Calendar</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="blank.html" class="box bg-color-1 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Departments</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="blank.html" class="box bg-color-2 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Courses</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="blank.html" class="box bg-color-1 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Documents</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-2">
                                <div class="card">
                                    <a href="blank.html" class="box bg-color-2 text-center px-2 py-4">
                                        <h4 class="font-light text-white mb-0 py-2 dash_quick">Send Bulk SMS</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
        </div>
        <div class="row mb-4">
            <!-- column -->
            <div class="col-lg-8">
                <div class="card h-100 mb-0">
                    <div class="card-body">
                        <h4 class="card-title">Money In / Money Out</h4>
                        <div id="moneyINmoneyOUT"></div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Announcements/News</h4>
                        <div class="message-box announcement-box scrollbar">
                            <div class="message-widget message-scroll">
                                <!-- Message -->
                                <a href="javascript:void(0)">
                                    <div class="user-img">
                                        <img src="assets/images/users/profile-picture.jpg" alt="user" class="img-circle">
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem
                                            Ipsum has been.</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)">
                                    <div class="user-img">
                                        <img src="assets/images/users/profile-picture.jpg" alt="user" class="img-circle">
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Reddy</h5>
                                        <span class="mail-desc">Lorem Ipsum is simply dummy text</span>
                                        <span class="time">9:10 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)">
                                    <div class="user-img">
                                        <img src="assets/images/users/profile-picture.jpg" alt="user" class="img-circle">
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Lorem Ipsum is simply dummy text</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)">
                                    <div class="user-img">
                                        <img src="assets/images/users/profile-picture.jpg" alt="user" class="img-circle">
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Lorem Ipsum is simply dummy text</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)">
                                    <div class="user-img">
                                        <img src="assets/images/users/profile-picture.jpg" alt="user" class="img-circle">
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Reddy</h5>
                                        <span class="mail-desc">Lorem Ipsum is simply dummy text</span>
                                        <span class="time">9:10 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)">
                                    <div class="user-img">
                                        <img src="assets/images/users/profile-picture.jpg" alt="user" class="img-circle">
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Singh</h5>
                                        <span class="mail-desc">Lorem Ipsum is simply dummy text</span>
                                        <span class="time">9:08 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)">
                                    <div class="user-img">
                                        <img src="assets/images/users/profile-picture.jpg" alt="user" class="img-circle">
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Lorem Ipsum is simply dummy text</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Staff Overview</h5>
                        <div class="table-responsive m-t-30 print_table">
                            <table id="staff-overview" class="table color-table inverse-table product-overview">
                                <thead>
                                    <tr>
                                        <th>Staff ID</th>
                                        <th>Name</th>
                                        <th>Profile</th>
                                        <th>Designation</th>
                                        <th>Report To</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#85457898</td>
                                        <td>Ravi Kumar</td>               
                                        <td>
                                            <img src="assets/images/users/profile-picture.jpg" alt="" width="30">
                                        </td>
                                        <td><span class="label label-info">System Admin</span></td>
                                        <td>Super Admin</td>
                                        <td>
                                            <a href="edit_login.html" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> 
                                            <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="View"><i class="ti-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#85457168</td>
                                        <td>Ravi Kumar</td>               
                                        <td>
                                            <img src="assets/images/users/profile-picture.jpg" alt="" width="30">
                                        </td>
                                        <td><span class="label label-info">Director</span></td>
                                        <td>Super Admin</td>
                                        <td>
                                            <a href="edit_login.html" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> 
                                            <a href="javascript:void(0)" class="text-inverse sa-confirm" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#85457212</td>
                                        <td>Ravi Kumar</td>               
                                        <td>
                                            <img src="assets/images/users/profile-picture.jpg" alt="" width="30">
                                        </td>
                                        <td><span class="label label-info">Teacher</span></td>
                                        <td>Director</td>
                                        <td>
                                            <a href="edit_login.html" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a>
                                            <a href="javascript:void(0)" class="text-inverse sa-confirm" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#85457898</td>
                                        <td>Ravi Kumar</td>               
                                        <td>
                                            <img src="assets/images/users/profile-picture.jpg" alt="" width="30">
                                        </td>
                                        <td><span class="label label-info">System Admin</span></td>
                                        <td>Super Admin</td>
                                        <td>
                                            <a href="edit_login.html" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> 
                                            <a href="javascript:void(0)" class="text-inverse sa-confirm" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <!-- column -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Calendar</h4>
                        <div class="card-body b-l calender-sidebar">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->