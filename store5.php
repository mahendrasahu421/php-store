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
                    <h1>Add category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Category</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- Default box -->
    <section class="content">
            <div class="card">
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
                    </div>
                   
                <div class="form-group">
                        <label for="inputStatus">Parent Category</label>
                        <select id="inputStatus" class="form-control custom-select">
                            <option disable>Select Category </option>
                            <option>cat1</option>
                            <option>cat2</option>
                            <option>sub1</option>
                            <option>subcat2</option>
                            <option>subcat3</option>
                            <option>subcat4</option>                          
                        </select>
                    </div>
                   
					<div class="form-group">
                        <label for="exampleInputPassword1">Sluge</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>


        </div>
        </section>
        <!-- /.content -->
    <!-- /.content-wrapper -->
    <?php include('layout/footer.php') ?>