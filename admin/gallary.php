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

<style>

.gallery-block.grid-gallery{
  padding-bottom: 60px;
  padding-top: 60px;
}

.gallery-block.grid-gallery .heading{
    margin-bottom: 50px;
    text-align: center;
}

.gallery-block.grid-gallery .heading h2{
    font-weight: bold;
    font-size: 1.4rem;
    text-transform: uppercase;
}

.gallery-block.grid-gallery a:hover{
  opacity: 0.8;
}

.gallery-block.grid-gallery .item img{
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);
  transition: 0.4s;
}

.gallery-block.grid-gallery .item{
  margin-bottom: 20px;
}

@media (min-width: 576px) {

  .gallery-block.grid-gallery .scale-on-hover:hover{
    transform: scale(1.05);
    box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.15) !important;
  }
}

</style>



    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Photo Gallary:</h1>                    
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Gallary</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->


    <div class="container">


        <!-- right column -->
        <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title text-darker">
                       PLEASE COMPRESS IMAGES BEFORE POSTING IT: <a href="https://tinypng.com/" target="_blank"><button class="ui green small button">COMPRESS HERE </button></a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <form action="code.php" method="POST" enctype="multipart/form-data" role="form">                 
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="photo" required>
                                <label class="custom-file-label" for="customFile">Choose Photo</label>
                            </div>
                        </div>                     
                    
                        <input type="submit" name="gallary" class="ui primary button" value="Submit">
                </div>
                </form>
              
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>



    <!-- Gallary SEction ------------------------------------------------------------------------------------->
<?php 

$result = $conn->query("SELECT * FROM gallary");



?>

<section class="gallery-block grid-gallery">
            <div class="container">
                <div class="heading">
                    <h2>Gallery</h2>
                </div>
                <div class="row">
                    <?php while($row = $result->fetch_assoc()): ?>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="<?php echo $row['IMG']?>">
                            <img class="img-fluid image scale-on-hover" src="<?php echo $row['IMG'] ?>">
                           
                        </a>
                    <a href="code.php?delete_image=<?php echo $row['ID']?>"><button class="btn btn-danger mt-2">Delete</button></a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>


</div>































<!-- /.content -->
</div>

<?php include './includes/footer.php'; ?>