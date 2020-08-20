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

require_once("../connection.php");



if(isset($_POST["notice_submit"])){
        
    $notice_date = $_POST['date'];

    $notice_title = $_POST['title'];

    $notice_text = $_POST['notice'];

    $conn->query("INSERT INTO news (date, notice_title, notice_text) VALUES ('$notice_date', '$notice_title', '$notice_text')") or die($conn->error);

    echo '<script>alert("Data Has been Inserted Successfully")</script>';

    echo "<script>window.location.assign('notice.php')</script>";
    
 



}

if(isset($_POST["news__event"])){
        
    $notice_date = $_POST['date'];

    $notice_title = $_POST['title'];

    $notice_text = $_POST['notice'];

    $conn->query("INSERT INTO news_event (TITLE, TEXT, DATE) VALUES ('$notice_title', '$notice_text', '$notice_date')") or die($conn->error) ;

    echo '<script>alert("Data Has been Inserted Successfully")</script>';

    echo "<script>window.location.assign('news.php')</script>";
    
 



}







if(isset($_POST["job_submit"])){

    $job_title = $_POST['title'];
   
    $job_date = $_POST['date'];
  
    $job_text = $_POST['notice'];
  
    $conn->query("INSERT INTO job (job_titlle, last_date, job_description) VALUES ('$job_title', '$job_date', '$job_text')") or die($conn->error);

    echo '<script>alert("Data Has been updated Successfully")</script>';
    echo "<script>window.location.assign('job.php')</script>";
    
   
  
  }



  if(isset($_POST["service_submit"])){

    $service_title = $_POST['title'];
  
    $service_text = $_POST['notice'];

    $date = date("d-m-Y");
  
    $conn->query("INSERT INTO service(service_title, service_description, date) VALUES ('$service_title', '$service_text', '$date')") or die($conn->error);

    echo '<script>alert("Data Has been updated Successfully")</script>';
    echo "<script>window.location.assign('services.php')</script>";
    

  }



  if(isset($_POST["product_submit"])){

    $product_title = $_POST['title'];
  
    $product_text = $_POST['notice'];

    $date = date("d-m-Y");
  
    $conn->query("INSERT INTO product (product_title, product_description, date) VALUES ('$product_title', '$product_text', '$date')") or die($conn->error);

    echo '<script>alert("Data Has been updated Successfully")</script>';
    echo "<script>window.location.assign('products.php')</script>";
    

  }



  if(isset($_POST['gallary'])){

    $photo = $_FILES['photo']['name'];
    
    $photo_temp = $_FILES['photo']['tmp_name'];
    
    $photo_folder = "gallary/" . $photo;
    
    move_uploaded_file($photo_temp, $photo_folder);
    
    $conn->query("INSERT INTO `gallary` (`IMG`) VALUES ('$photo_folder')") or die($conn->error);
    
    header("location:gallary.php");
    
    }


// delete_image

    if(isset($_GET['delete_image'])) {

        $id = $_GET['delete_image'];
        $conn->query("DELETE FROM gallary WHERE id = $id");
        header("location:gallary.php");
        }


        //--------------------------------------------------------notice delete-----------------------------------------------------------------
if (isset($_GET['notice_delete'])) {
    $id = $_GET['notice_delete'];
    $conn->query("DELETE FROM news WHERE id = $id") or die($conn->error);
    header("location:notice_data.php");
}

        //--------------------------------------------------------news delete-----------------------------------------------------------------
        if (isset($_GET['news_delete'])) {
            $id = $_GET['news_delete'];
            $conn->query("DELETE FROM news_event WHERE ID = $id") or die($conn->error);
            header("location:news_data.php");
        }

           //--------------------------------------------------------Job delete-----------------------------------------------------------------
           if (isset($_GET['job_delete'])) {
            $id = $_GET['job_delete'];
            $conn->query("DELETE FROM job WHERE id = $id") or die($conn->error);
            header("location:job_data.php");
        }
        
              //--------------------------------------------------------service delete-----------------------------------------------------------------
              if (isset($_GET['service_delete'])) {
                $id = $_GET['service_delete'];
                $conn->query("DELETE FROM service WHERE id = $id") or die($conn->error);
                header("location:services_data.php");
            }
                 //--------------------------------------------------------Product delete-----------------------------------------------------------------
                 if (isset($_GET['product_delete'])) {
                    $id = $_GET['product_delete'];
                    $conn->query("DELETE FROM product WHERE id = $id") or die($conn->error);
                    header("location:product_data.php");
                }
            


?>