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
    <div class="col-lg-12">
        <div class="ui container pt-3">
            <div class="ui info message">
                <div class="header mb-2">
                    <i class="fas fa-edit"></i> Click the button to check all Products.
                </div>
                <button onclick="location.href ='product_data.php';" class="ui mini primary button"> <i class="fas fa-database"></i> Data Table </button>

            </div>
        </div>



        <div class="ui container">

        <form action="code.php" method="POST" style="margin-top:3rem">
<div class="ui form">
<div class="field">
    <label>Product Titile</label>
    <textarea rows="2" name="title"></textarea>
  </div>

  <div class="field">
    <label>Product Details</label>
    <textarea name="notice"></textarea>
  </div>
 
</div>
<input type="submit" name="product_submit" class="positive ui button mt-2" value="Update Product">
</form>

        </div>
    </div>

</div>





<?php include './includes/footer.php'; ?>