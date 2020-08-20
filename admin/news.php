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
                    <i class="fas fa-edit"></i> Click the button to check all News & Events.
                </div>
                <button onclick="location.href = 'news_data.php';" class="ui mini primary button"> <i class="fas fa-database"></i> Data Table </button>

            </div>
        </div>

        <div class="ui container">



        <form action="code.php" method="POST" style="margin-top:3rem">
                <div class="ui form">
                <div class="field">
                    <label>News & Event Date</label>
                   <input type="date" name="date" required>
                   </div>
                   <div class="field">
                    <label>News & Event Titile</label>
                    <textarea rows="2" name="title" required></textarea>
                        </div>
                  <div class="field">
                    <label>Text</label>
                    <textarea name="notice" required></textarea>
                 </div>
               </div>
            <input type="submit" name="news__event" class="positive ui button mt-2" value="Update News">
        </form>


        </div>
    </div>

</div>





<?php include './includes/footer.php'; ?>