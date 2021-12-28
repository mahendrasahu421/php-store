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
                    <h1>Add Purchase Return</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Returns</li>
                        <li class="breadcrumb-item active">Add Purchase Return</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <!-- general form elements -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <a href="product_attribute.php" class="btn btn-primary">Product List</a>
                </div>              
                <form>
                    <div class="card-body">                     
                        <div class="form-group">
                            <label for="inputStatus">Chose Purchase</label>
                            <select id="inputStatus" class="form-control custom-select">
                                <option>Selecte Purchase</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                            </select>
                        </div>
                    </div>                  
                </form>
            </div>
        </div>
    </section>
</div>
<!-- /.card -->
<!-- /.content-wrapper -->
<?php include('layout/footer.php') ?>