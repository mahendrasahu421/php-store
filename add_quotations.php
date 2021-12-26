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
                    <h1>Add Quotation</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Quotation</li>
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
                        <label for="inputStatus">Quotation Type</label>
                        <select id="inputStatus" class="form-control custom-select">
                            <option disable>Select type</option>
                            <option>sale</option>
                            <option>purchaes</option>
                           
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->
            </form>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('layout/footer.php') ?>