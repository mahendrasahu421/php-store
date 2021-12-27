<?php include('layout/sidebar.php') ?>
<?php include('layout/header.php') ?>
<!-- /.navbar -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Stock Transfer</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Stock Transfer</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!-- Edit Modal HTML -->
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <div class="col-sm-6">
                        <section class="content">
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputStatus">Warehouses From</label>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option disable>Select from warehouse</option>
                                            <option>warehouse1</option>
                                            <option>warehouse2</option>
                                            <option>warehouse3</option>
                                            <option>warehouse4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Refrence No</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                </div>
                    </div>
                    </section>
                    <div class="col-sm-6">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Stock Transfer Date">Warehouses To</label>
                                <select id="inputStatus" class="form-control custom-select">
                                    <option disable>Select Attribute</option>
                                    <option>warehouse1</option>
                                    <option>warehouse2</option>
                                    <option>warehouse3</option>
                                    <option>warehouse4</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Stock Transfer Date</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" placeholder="">
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Stock Transfer Date">Products</label>
                                <select id="inputStatus" class="form-control custom-select">
                                    <option disable>Select Attribute</option>
                                    <option>product1</option>
                                    <option>product2</option>
                                    <option>product3</option>
                                    <option>product4</option>
                                </select>
                            </div>
                            <div class="">
                                <button class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputStatus">Note</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
        
                            </div>
                            <div class="">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- Edit Modal HTML -->
<!-- Delete Modal HTML -->
</body>

</html>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->

<?php include('layout/footer.php') ?>