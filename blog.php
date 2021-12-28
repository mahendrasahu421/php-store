<?php include ('layout/header.php');?>
<?php include('layout/sidebar.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Blog</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Catalog</li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="add_blog.php" class="btn btn-primary">Create New Blog</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                          <thead>
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Featured</th>
                                        <th> Image</th>
                                        <th>Description</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Trident</td>
                                        <td>InternetExplorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td>images</td>
                                        <th class="project-actions text-center">
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </th>
                                    </tr>
                                    <tr>
                                        
                                    </tr>
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
</div>

<?php include('layout/footer.php') ?>