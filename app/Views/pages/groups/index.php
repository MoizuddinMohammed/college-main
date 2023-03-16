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
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                    <a href="groups/create" class="btn btn-danger d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Add <?= $title ?></a>
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
                    <h6 class="card-subtitle">List of <?= $title ?></h6> 
                    <div class="row justify-content-md-center">
                        <div class="col-md-12 col-sm-6 col-12">
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
                            <div class="table-responsive print_table">                   
                                <?//=  print_r($groups);?>
                                <table id="login-table" class="table color-table inverse-table table-bordered table-striped">
                                    <thead>
                                        <tr>
											<th>#</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach($groups as $row):?>
                                            <tr>
                                                <td><?= $i++;?></td>
                                                <td><?= $row['name'];?></td>
                                                <td><?= $row['code'];?></td>
                                                <td class="action">
                                                    <a href="<?= base_url('groups/edit/'.$row['group_id']) ?>" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a>
                                                    <a href="<?= base_url('groups/delete/'.$row['group_id']) ?>" class="text-inverse sa-confirm" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
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