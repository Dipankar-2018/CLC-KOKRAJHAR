<?php
session_start();
$user_profile =  $_SESSION['user_name'];
if($user_profile == true)
{

}
else
{
  header('location:../index.php');
}

?>
<?php include './includes/side_nav.php'; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-database"></i> DataTables Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <?php

    $result = $conn->query("SELECT * FROM product");
    ?>



    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-edit"></i> You can update the data from the edit button</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <?php while ($row = $result->fetch_assoc()) : ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['product_title']; ?></td>
                                        <td><?php echo $row['product_description']; ?></td>
                                        <td><?php echo $row['date']; ?></td>                      
                                        <td><a class="btn btn-danger btn-sm" href="code.php?product_delete=<?php echo $row['id']; ?>">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                                </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>






    <!-- /.content -->
</div>


<?php include './includes/footer.php'; ?>