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
                    <h1><i class="fas fa-database"></i> DataTables of News & Events</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="news.php">News</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <?php

    $result = $conn->query("SELECT * FROM news_event");
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
                                    <th>Date</th>
                                    <th>News title</th>
                                    <th>News</th>
                                
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <?php while ($row = $result->fetch_assoc()) : ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['ID']; ?></td>
                                        <td><?php echo $row['DATE']; ?></td>
                                        <td><?php echo $row['TITLE']; ?></td>
                                        <td><?php echo $row['TEXT']; ?></td>                      
                                        <td><a class="btn btn-danger btn-sm" href="code.php?news_delete=<?php echo $row['ID']; ?>">
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


    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="ui form">
                            <div class="field">
                                <label>News & Events Titile</label>
                                <textarea rows="2" name="title"></textarea>
                            </div>
                            <div class="field">
                                <label>Date</label>
                                <input type="date" name="date">
                            </div>

                            <div class="field">
                                <label>News & Events Description</label>
                                <textarea name="notice"></textarea>
                            </div>
                            <div class="field">
                                <label>Upload PDF </label>
                                <input type="file" name="news_pdf">
                            </div>
                            <div class="field">
                                <label>External Links</label>
                                <textarea rows="2" name="title" required></textarea>
                            </div>

                        </div>
                        <input type="submit" name="job_submit" class="positive ui button mt-2" value="Update News & Events">
                    </form>





                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->




    <!-- /.content -->
</div>


<?php include './includes/footer.php'; ?>