<?php include('layout/header.php') ?>

<?php include('layout/sidebar.php') ?>
<!-- /.navbar -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Assets Adjustments</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Accounts</li>

                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <div class="col-sm-12">
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputStatus">Account Type</label>
                                    <select id="inputStatus" class="form-control custom-select">
                                        <option>Assets</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select id="inputStatus" class="form-control custom-select">
                                        <option disabled>Select Account</option>
                                        <option>Case</option>
                                        <option>Bank</option>
                                        <option>PayPal/select</option>
                                        <option>Stripe</option>
                                        <option>Supply</option>
                                        <option>Account Recipeble</option>
                                        <option>Happy Pocket</option>
                                        <option>Uiik</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4">
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputStatus">
                                        Transaction Type
                                    </label>
                                    <select id="inputStatus" class="form-control custom-select">
                                        <option>Cr</option>
                                        <option>Dr</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Amount</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Refrence</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.card -->
<!-- /.content-wrapper -->
<?php include('layout/footer.php') ?>