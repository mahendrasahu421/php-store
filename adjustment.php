<?php include('layout/header.php') ?>

<?php include('layout/sidebar.php') ?>
<!-- /.navbar -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Assets Adjustments</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Accounts</a></li>
                        <li class="breadcrumb-item active">Assets Adjustments</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- Default box -->
    <div class="card">
        <section class="content">
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Account Type</label>
                        <select id="inputStatus" class="form-control custom-select">
                            <option disable>Select Attribute</option>

                        </select>

                    </div>
                    <div class="form-group">                     
                        <select id="inputStatus" class="form-control custom-select">
                            <option disable>Select Account</option>
                            <option>Current</option>
                            <option>Saving</option>
                            <option>Paypal</option>
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="inputStatus">Transaction Type</label>
                            <select id="inputStatus" class="form-control custom-select">
                                <option disable>Select Attribute</option>
                                <option>Cr</option>
                                <option>Dr</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Amount</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Refrence</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </div>
                </div>
                <!-- /.card-body -->


            </form>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('layout/footer.php') ?>