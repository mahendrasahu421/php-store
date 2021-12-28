<?php include ('layout/header.php');?>
<?php include('layout/sidebar.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Transaction</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Account</li>
                        <li class="breadcrumb-item active">ledger</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <section class="content">
                <div class="card">
                    <div class="row mx-3">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <div class="form-outline">
                                    <label class="form-label" for="form1">Search</label>
                                    <input type="search" id="form1" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Transaction Date</th>
                                            <th>Transaction description</th>
                                            <th>Account Name</th>
                                            <th>User</th>
                                            <th>Type</th>
                                            <th>Dr</th>
                                            <th>Cr</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        </tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>



<?php include('layout/footer.php') ?>