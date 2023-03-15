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
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/college">College</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <h4 class="card-title"><?= $title ?></h4>
                    <h6 class="card-subtitle">Please fill the form</h6>
                    <form class="needs-validation mt-2" novalidate action="/college/save" method="post">
                        <?php $session = \Config\Services::session();?>
                        <?php if($session->getFlashdata('status')=='success'){ ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3> Record Inserted successfully
                            </div>
                        <?php  } ?>
                        <?php if($session->getFlashdata('status')=='danger'){?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                <h3 class="text-danger"><i class="fa fa-exclamation-triangle"></i> Failed</h3> Something went wrong
                            </div>
                        <?php } ?>  
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="name">College Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter College Name" required>
                                    <div class="invalid-feedback">College Name is required</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="email">Email Address</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address" required>
                                    <div class="invalid-feedback">Email Address is required</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="phone">Last Name</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" required>
                                    <div class="invalid-feedback">Last Name is required</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="address">Address</label>
                                    <input type="email" class="form-control" id="address" name="address" placeholder="Enter Address" required>
                                    <div class="invalid-feedback">Address is required</div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-danger px-5" type="submit">Save</button>
                    </form>
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