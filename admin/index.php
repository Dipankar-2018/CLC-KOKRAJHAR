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
include './includes/side_nav.php'; ?>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                    <h1 class="m-0 text-dark"> Welcome :<i> <?php echo $result['user_name']; ?> </i> </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3> <?php echo date("l") ?></h3>

                            <p> <?php echo date("l jS \of F Y") ?></p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-cloud-sun"></i>
                        </div>                      
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                 
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Notice</h3>
                            <p>View and delete Notices </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>                
                        <a href="notice.php" class="small-box-footer">Click Here <i class="fas fa-arrow-circle-right"></i></a>                    
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>News</h3>

                            <p>View and delete Events </p>
                        </div>
                        <div class="icon">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <?php if($user_type != admission): ?>
                        <a href="news.php" class="small-box-footer">Click Here<i class="fas fa-arrow-circle-right"></i></a>
                        <?php endif;?>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>Jobs</h3>

                            <p>View and delete Jobs</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <?php if($user_type != admission): ?>
                        <a href="job.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        <?php endif;?>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">

                    <!-- TO DO List -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ion ion-clipboard mr-1"></i>
                                Important Website Links
                            </h3>

                            <div class="card-tools">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="todo-list" data-widget="todo-list">
                                <li>
                                    <!-- drag handle -->
                                    <span class="handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <!-- checkbox -->
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                        <label for="todoCheck1"></label>
                                    </div>
                                    <!-- todo text -->
                                    <span class="text"><a href="http://kokrajharjudiciary.gov.in/">kokrajharjudiciary</a> </span>
                                    <!-- Emphasis label -->

                                    <!-- General tools such as edit or delete-->
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo2" id="todoCheck2">
                                        <label for="todoCheck2"></label>
                                    </div>
                                    <span class="text"><a href="http://kokrajhar.gov.in/">kokrajhar.gov.in</a></span>
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                        <label for="todoCheck3"></label>
                                    </div>
                                    <span class="text"><a href="http://kokrajhar.gov.in/admin_officers_list.html">DC Office Kokrajhar</a></span>
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash-o"></i>
                                    </div>
                                </li>                         
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <!-- <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i>
                                Add item</button> -->
                        </div>
                    </div>
                    <!-- /.card -->
                </section>             
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>



<?php include './includes/footer.php'; ?>