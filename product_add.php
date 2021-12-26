<?php include('layout/sidebar.php') ?>
<?php include('layout/header.php') ?>
<!-- /.navbar -->
<!-- Content Wrapper. Contains page content -->

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
    <style>
    .switch {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 28px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 20px;
        width: 20px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .input-group-text {

        background-color: #fffdfc !important;

    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
    </style>
</head>

<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Add Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Product</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <!-- Edit Modal HTML -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-five-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-five-overlay-tab" data-toggle="pill"
                                        href="#custom-tabs-five-overlay" role="tab"
                                        aria-controls="custom-tabs-five-overlay" aria-selected="true"><i
                                            class="far fa-file-alt">&nbsp;Basic info</i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-five-overlay-dark-tab" data-toggle="pill"
                                        href="#custom-tabs-five-overlay-dark" role="tab"
                                        aria-controls="custom-tabs-five-overlay-dark" aria-selected="false"><i
                                            class="far fa-file-alt">&nbsp;Advance info</i></a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-five-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-five-overlay" role="tabpanel"
                                    aria-labelledby="custom-tabs-five-overlay-tab">
                                    <div class="overlay-wrapper">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Name</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                placeholder="Enter name">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Catogery</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Cat1</option>
                                                            <option>Cat2</option>
                                                            <option>Subcat1</option>
                                                            <option>Subcat2</option>
                                                            <option>Subcat3</option>
                                                        </select>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Product Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    placeholder="">
                                                            </div>
                                                            <div class="form-outline">
                                                                <label class="form-label"
                                                                    for="textAreaExample">Description </label>
                                                                <textarea class="form-control" id="textAreaExample"
                                                                    rows="4"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Vido URL</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    placeholder="URL">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button"
                                                        class="btn btn-primary float-right">continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-five-overlay-dark" role="tabpanel"
                                    aria-labelledby="custom-tabs-five-overlay-dark-tab">
                                    <div class="overlay-wrapper">
                                        <div class="">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">Product
                                                                    Type</label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect1">
                                                                    <option>Select Status</option>
                                                                    <option>simple</option>
                                                                    <option>variable</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">IS point</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    placeholder="Enter name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">Unit</label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect1">
                                                                    <option></option>
                                                                    <option>Pcs</option>
                                                                    <option>kg</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Product Weight</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    placeholder="Enter weight">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Discount Price</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    placeholder="Enter price">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Maximum Order</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    placeholder="maximum order">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="input-group-prepend">
                                                                <label class="switch">
                                                                    <input type="checkbox" checked>
                                                                    <span class="slider round"></span>
                                                                </label>
                                                                Is Active?
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">Select
                                                                    Brand</label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect1">
                                                                    <option>brand1</option>
                                                                    <option>vip</option>
                                                                    <option>catburt</option>
                                                                    <option>demo</option>
                                                                    <option>product</option>
                                                                    <option>product</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">price</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    placeholder="price">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Minimum Order</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    placeholder="manimum order">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">
                                                                    SKU</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    placeholder="SKU">
                                                            </div>

                                                            <button href="product_add.php" class="btn btn-primary">Back</button>
                                                            <button class="btn btn-primary">Continue</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <!-- Delete Modal HTML -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
</body>

</html>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<!-- /.control-sidebar -->

<?php include('layout/footer.php') ?>