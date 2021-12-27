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
                        <li class="breadcrumb-item active">Return</li>
                        <li class="breadcrumb-item active">Add Purchase Return</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- Default box -->
    <div class="card">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              
                <!-- /.card-header -->
                <!-- form start -->
                <form>                  
                        <div class="form-group">
                            <label for="inputStatus">Chose Purchase</label>
                            <select id="inputStatus" class="form-control custom-select">                                                           
                               <option>Product1</option>
                               <option>Product2</option>
                               <option>Product3</option>
                               <option>Product4</option>
                               <option>Product5</option>
                               <option>Product6</option>
                               <option>Product7</option>
                               <option>Product8</option>
                               <option>Product9</option>                           
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
            <!-- /.content-wrapper -->
            <?php include('layout/footer.php') ?>