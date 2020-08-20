<?php
include("connection.php"); 
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="shortcut icon" href="./assets/img/logo.jpg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="admin/dist/css/adminlte.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="assets/css/grid-gallery.css"> 
    <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">
    <link rel="stylesheet" href="./assets/css/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/67626951b2.js" crossorigin="anonymous"></script>
    <title>City Livelihood Centre Kokrajhar</title>
  </head>
  <body>  

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#" onclick="openContent(event, 'home')"><i class="fas fa-home"></i> Home</a>
      <a href="#" onclick="openContent(event, 'about')"><i class="fas fa-address-card"></i> About</a>
      <a href="#" onclick="openContent(event, 'notice')"><i class="far fa-newspaper"></i> Notice</a>
      <a href="#" onclick="openContent(event, 'jobs')"><i class="fas fa-user-md"></i> Jobs</a>
      <a href="#" onclick="openContent(event, 'services')"><i class="fab fa-servicestack"></i> Services</a>
      <a href="#" onclick="openContent(event, 'products')"><i class="fab fa-product-hunt"></i> Products</a>
      <a href="#" onclick="openContent(event, 'faq')"><i class="fas fa-question-circle"></i> FAQ</a>
      <a href="#" onclick="openContent(event, 'gallery')"><i class="fas fa-image"></i> Gallery</a>
      <a href="#" onclick="openContent(event, 'contact')"><i class="fas fa-address-book"></i> Contact</a>
      <a href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
    </div>





    <!-- Tab links -->    
<div class="tab sticky" style="background: rgb(255,255,255);
background: linear-gradient(72deg, rgba(255,255,255,1) 0%, rgba(247,249,250,1) 100%);">     
  <button class="brand__logo" style="outline: none;"><img src="./assets/img/logo.jpg" width="60%"></button>
  <button class="tablinks alignment" onclick="openContent(event, 'home')" id="defaultOpen">Home</button>
  <button class="tablinks alignment" onclick="openContent(event, 'about')">About</button>
  <button class="tablinks alignment" onclick="openContent(event, 'services')">Services</button>
  <button class="tablinks alignment" onclick="openContent(event, 'products')">Products</button>
  <button class="tablinks alignment" onclick="openContent(event, 'faq')">FAQ</button>
  <button class="tablinks alignment" onclick="openContent(event, 'gallery')">Gallery</button>
  <button class="tablinks alignment" onclick="openContent(event, 'contact')">Contact</button>  
  <button class="ui circular blue button" onclick="openContent(event, 'login')" style="margin-top: 2.2rem; float:right; margin-right: 3vw; font-size: 12px;"> Login
  </button>
  <button class="ui circular facebook icon button" style="margin-top: 2.2rem; float:right; margin-right: 3vw; font-size: 12px;">
   <i class="facebook icon"></i>
  </button>
  <button class="ui circular twitter icon button" style="margin-top: 2.2rem; float:right; margin-right: 1vw; font-size: 12px;">
    <i class="twitter icon"></i>
  </button>
  </div>



  <div class="mobile_first">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> <img src="assets/img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
   CLC Kokrajhar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" onclick="openContent(event, 'home')">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="openContent(event, 'about')">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="openContent(event, 'services')">Services</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" onclick="openContent(event, 'products')">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="openContent(event, 'faq')">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="openContent(event, 'gallery')">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="openContent(event, 'contact')">Contact</a>
        </li>
    </ul>
  
  </div>
</nav>
  
  </div>



<!-- Tab content -->



<!-------------------------------------------------------carousel-section---------------------------------------------------------------------------------------->
<div id="home" class="tabcontent">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./assets/img/w1.jpg" class="d-block w-100" alt="..." >
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./assets/img/w2.jpg" class="d-block w-100" alt="..." >
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="./assets/img/w3.jpg" class="d-block w-100" alt="..." >
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!------------------------------------------------------------ NOTICE-SECTION---------------------------------------------------------------------------------- -->

<div class="jumbotron" style="background:#F5F5F5">
  
  <div class="notice__section">
    <div class="ui container">
      <div class="ui grid">
        <div class="three column row">
          <div class="sixteen wide mobile  five wide computer column">
            <div class="notice" style="background:#fcfcfc;  border-radius: 15px 50px;">
            <div class="ui black message" style="border-radius: 20px 40px 0px 0px; font-weight: bold; background-color: #F45661;">NOTICE</div>
            
            <ul>
              <marquee direction="up" scrollamount="3" height="150rem" onMouseOver="this.stop()" onMouseOut="this.start()">

                <?php
                $sql = "SELECT * FROM news";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) { ?>
                    <b>

                      <li class="text-blue"><i class="fas fa-bell"></i><?php echo $row['notice_title'] ?> </a></li>
                      <li style="color: green; font-size: small;"><i class="far fa-calendar-alt"></i> <?php echo $row['date'] ?></li>
                      <p style="font-size:small"><?php echo $row['notice_text'] ?></p>

                      <br>

                    </b>
                <?php
                  }
                }
                ?>
              </marquee>
            </ul>   

              <button  onclick="openContent(event, 'notice')" class="mini ui primary button mb-2" style="margin-left: 3rem;">View All</button>
          </div>
        </div>

        <div class="sixteen wide mobile  five wide computer column">
        <div class="notice" style="background:#fcfcfc;  border-radius: 15px 50px;">
            <div class="ui message" style="border-radius: 10px 40px 0px 0px;  font-weight: bold;background-color: rgb(255, 194, 9); color: white;">News & Events</div>
            <ul>
              <marquee direction="up" scrollamount="3" height="150rem" onMouseOver="this.stop()" onMouseOut="this.start()">
                <?php
                $sql = "SELECT * FROM news_event";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) { ?>
                    <b>
                      <li class="text-blue"><i class="fas fa-check-square"></i> <?php echo $row['TITLE'] ?> </a></li>
                      <li style="color: green; font-size: small;"><i class="far fa-calendar-alt"></i> <?php echo $row['DATE'] ?></li>
                      <p style="font-size:small"><?php echo $row['TEXT'] ?></p>
                      <br>


                    </b>
                <?php
                  }
                }
                ?>
              </marquee>
            </ul>
            <button  onclick="openContent(event, 'news')" class="mini ui primary button mb-2" style="margin-left: 3rem;">View All</button>  

          </div>

        </div>
        <div class="sixteen wide mobile  five wide computer column">
        <div class="notice" style="background:#fcfcfc;  border-radius: 15px 50px;">
            <div class="ui black message" style="border-radius: 20px 40px 0px 0px;  font-weight: bold;background-color: #0D5189;">Jobs</div>
            <ul>
              <marquee direction="up" scrollamount="3" height="150rem" onMouseOver="this.stop()" onMouseOut="this.start()">
                <?php
                $sql = "SELECT * FROM job";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) { ?>
                    <b>
                      <li class="text-blue"><i class="fas fa-bullhorn"></i> <?php echo $row['job_titlle'] ?> </a></li>
                      <li style="color: green; font-size: small;"><i class="far fa-calendar-alt"></i> <?php echo $row['last_date'] ?></li>
                      <p><?php echo $row['job_description'] ?></p>
                      <br>



                    </b>
                <?php
                  }
                }
                ?>
              </marquee>
            </ul>
            <button  onclick="openContent(event, 'job')" class="mini ui primary button mb-2" style="margin-left: 3rem;">View All</button>  
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>


<!------------------------------------------------------- PERSION-SECTION ------------------------------------------------------------------------------------------>

     <div class="img__bg" style="background-image: url(./assets/img/back.png);">    
        <div class="container" style="padding-top: 4rem;">

          <div class="row">
    
          
              <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card">
                <img id="media" src="./assets/img/elliot.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"> <a class="ui red ribbon label" id="media__title">Dipan Barman, ACS</a></h5>
                    <p class="card-text">City Project Officer/Executive Officer DAY-NULM, ASULMS CMMU-Kokrajhar, Kokrajhar Municipal Board</p>
                    <button class="ui circular facebook icon button" style="font-size: 9px;">
                      <i class="facebook icon"></i>
                    </button>
                    <button class="ui circular twitter icon button" style="font-size: 9px;">
                      <i class="twitter icon"></i>
                    </button>
                    <button class="ui circular linkedin icon button" style="font-size: 9px;">
                      <i class="linkedin icon"></i>
                    </button>
                  </div>
                </div>
              </div> 
              
                    
   
        </div>      
     </div>

<!-- -----------------------------------------------------ABOUT-SECTION ------------------------------------------------------------------------------------------>


      <div class="container underline"></div>
       <div class="img__bg"  style="background-image: url(./assets/img/faq.png); background-repeat: no-repeat">
        <div class="container" style="margin-top: 7rem;">
          <h1><b>Our Mission & Vision</b></h1>    
         <p style="text-align: justify; margin-top: 3rem;">Our ambition Mission of City Livelihood Centre is to provide information and service to City dwellers in a structured and organized manner and provide a sustainable income to poor service. CLC seeks to provide a platform combining direct service delivery, advocacy, research and technical support in advancement of its work on issues of urb an poor. CLC intends to provide a broad range of services directly benefiting the urban poor households. Typically,these services will include registration and issuance of Photo ID, skill training and placement, legal aid, collectivization, social security, financial services and family support.</p>
        <button class="ui blue button tablinks" style="margin-top: 2rem;" onclick="openContent(event, 'about')">Read More</button>
      </div>
    



          <div class="container" style="margin-top: 7rem;">
            <h2><b>Deendayal Antyodaya Yojana-National Urban Livelihoods Mission (DAY-NULM)</b></h2>

            <p style="text-align: justify; margin-top: 3rem;">What is it? It is an endevour of the Indian Government to reduce poverty and vulnerability of the urban poor households by enabling them to access gainful self employment and skilled wage employment opportunities,resulting in an appreciable improvement in their livelihoods on a sustainable basis,through building strong grassroots level institutions of the poor.The mission would aim at providing shelters equipped with essential services to the urban homeless in a phased manner.In addition,the mission would also address livelihood concerns of the urban street vendors by facilitating access to suitable spaces,institutional credit,social security and skills to the urban street vendors for accessing emerging market opportunities.</p>
          </div>
     

  <div class="container underline"></div>


<div class="footer">
    <P style="text-align: center; margin-top: 3rem;">
    © 2020 City Livelihoods Centre | Design & Developed By | <span> <img src="assets/4b.jpeg" width="30rem" alt=""> </span>IT solution</P>
</div>
<div class="container underline"></div>

</div>
</div>
</div>



<!------------------------------------------------------ ABOUT-TAB-SECTION ----------------------------------------------------------------------------------------->

<div id="about" class="tabcontent">
  <div class="img__bg" >
   <div class="container" style="margin-top: 4rem;">
     <h1><b>About City Livelihoods Centre, Kokrajhar:</b></h1> 
     <p style="margin-top: 3rem; text-align: justify;">City Livelihoods Centre (CLC) is a platform for urban poor where by the urban poor can market their services and access information and other benefits. The CLC will act as a “one-stop shop’ for those seeking services from the informal sector as well as for the urban poor promoting their services and product. CLCs will be positioned as resource centre for those seeking information related to employment and skills training opportunities etc.
    </p>
  </div>  
    <div class="container" style="margin-top: 4rem;">
      <h1><b>Our Vision:</b></h1> 
       <p style="margin-top: 3rem; text-align: justify;">To enable the urban poor can offer their goods in an organized manner to the potential buyers
        To enable the urban poor to access information and business support services as when needed
        To enable the middle and higher income groups to access various services, at competitive rates, from urban poor which in turn will generate or augment livelihoods for the urban poor.
        To ensure that the beneficiaries who are trained for Employment through skill training and placement can be provided with a market for self-employment, after registering with CLC.
        To develop various livelihood opportunities for urban poor
        To provide the best support practically possible, to urban poor wherever required.
       </p>
   </div>
</div>
<div class="container underline"></div>
<div class="footer">
    <P style="text-align: center; margin-top: 3rem;">
    © 2020 City Livelihoods Centre | Design & Developed By | <span> <img src="assets/4b.jpeg" width="30rem" alt=""> </span>IT solution</P>
</div>
<div class="container underline"></div>
</div> 





<!-- ----------------------------------------SERVICES-TAB ---------------------------------------------------------------------------------------------- -->

<div id="services" class="tabcontent"  style="background-image: url(./assets/img/faq.png); background-repeat: no-repeat">
  <div class="container" style="margin-top: 4rem;">    
  <h1 style="text-align: center;"><b>Services By CLC Kokrajhar</b></h1>
  <?php
       $sql = "SELECT * FROM service";
        
       $result = $conn->query($sql);

       if ($result->num_rows > 0)
       {
        while($row = $result->fetch_assoc()) 
      { ?>

<div class="card mt-5">
  <div class="card-header">
   <h3> <i class="fa fa-check-circle"></i> <b><?php echo $row["service_title"]; ?></b></h3>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p class="text-justify"><?php echo $row["service_description"] ?></p>
      <footer class="blockquote-footer">Date: <?php echo $row['date'] ?></footer>
    </blockquote>
  </div>
</div>


<?php
 }
  }
   else 
  { 
    ?> 
    <div class="container" style="margin-top: 4rem;">
    <div class="ui large icon message">
      <i class="inbox icon"></i>
      <div class="content">
        <div class="header">
          SERVICES
        </div>
        <p>NO SERVICES HAS BEEN POSTED.</p>
      </div>
    </div>
   </div>

  <?php
  }

?>   

   <div class="container underline"></div>
   <div class="footer">
     <P style="text-align: center; margin-top: 3rem;">
     © 2020 City Livelihoods Centre | Design & Developed By | <span> <img src="assets/4b.jpeg" width="30rem" alt=""> </span>IT solution</P>
   </div>
   <div class="container underline"></div>
</div>
</div>





<!-------------------------------------------------------PRODUCT-SECTION-TAB----------------------------------------------------------------------------- -->

<div id="products" class="tabcontent" style="background-image: url(./assets/img/faq.png); background-repeat: no-repeat">

<div class="container" style="margin-top: 4rem;">
<h1 style="text-align: center;"><b>Products</b></h1>
<?php
       $sql = "SELECT * FROM product";
        
       $result = $conn->query($sql);

       if ($result->num_rows > 0)
       {
        while($row = $result->fetch_assoc()) 
      { ?>

<div class="card mt-5">
  <div class="card-header">
   <h3><i class="fas fa-dolly"></i><b><?php echo $row['product_title'] ?></b></h3>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p class="text-justify"><?php echo $row["product_description"] ?></p>
      <footer class="blockquote-footer">Date: <?php echo $row['date'] ?></footer>
    </blockquote>
  </div>
</div>

<?php
 }
  }
   else 
  { 
    ?> 
    <div class="container" style="margin-top: 4rem;">
    <div class="ui large icon message">
      <i class="inbox icon"></i>
      <div class="content">
        <div class="header">
          PRODUCTS
        </div>
        <p>NO PRODUCT HAS BEEN UPLOADED.</p>
      </div>
    </div>
   </div>

  <?php
  }

?>   



   <div class="container underline"></div>
   <div class="footer">
     <P style="text-align: center; margin-top: 3rem;">
     © 2020 City Livelihoods Centre | Design & Developed By | <span> <img src="assets/4b.jpeg" width="30rem" alt=""> </span>IT solution</P>
   </div>
   <div class="container underline"></div>
</div>
</div>



<!-----------------------------------------------FAQ-TAB-SECTION------------------------------------------------------------------------------------------------- -->

<div class="img__bg" style="background-image: url(./assets/img/faq.png) ;">
<div id="faq" class="ui container tabcontent">
  

  <h1 style="padding-top: 5rem; text-align: center;"><b>Frequently Asked Questions</b></h1>

  <div class="ui large feed" style="margin-top: 3rem;">  
    <div class="event">
      <div class="label">
        <img src="./assets/img/elliot.jpg">
      </div>
      <div class="content">
        <div class="summary">
          <a class="user">
            What is CLC?
        </div>
        <div class="meta">
          <a class="like">
          
          </a>
        </div>
      </div>
    </div>
    <div class="event">
      <div class="label">
        <i class="pencil icon"></i>
      </div>
      <div class="content">
        <div class="summary">
          City livelihood centre Kokrajhar
          <!-- <div class="date">
            3 days ago
          </div> -->
        </div>
        <div class="text">
          City Livelihoods Centre (CLC) will be a platform where the urban poor can offer their goods and services in an organized manner to potential buyers and where they can access business and information support services.
        </div>
        <!-- <div class="meta">
          <a class="like">
            <i class="like icon"></i> 11 Likes
          </a>
        </div> -->
      </div>
    </div>

    <div class="event">
      <div class="label">
        <img src="./assets/img/elliot.jpg">
      </div>
      <div class="content">
        <div class="summary">
          <a class="user">
            What kind of services CLC will offer?
         
          <div class="date">            
          </div>
        </div>
        <div class="meta">
          <a class="like">          
          </a>
        </div>
      </div>
    </div>
    <div class="event">
      <div class="label">
        <i class="pencil icon"></i>
      </div>
      <div class="content">
        <div class="summary">
          City livelihood centre Kokrajhar
          <!-- <div class="date">
            3 days ago
          </div> -->
        </div>
        <div class="extra">
          CLC will offer the following services in the Kokrajhar Municipal ward areas: Plumber, Electrician, Housekeeping, Beautician, Sales personnel, Appliances/Hardware Repairing, Cook/Tiffin Services, Tailoring/Knitting, Driver, etc.
        </div>
        <!-- <div class="meta">
          <a class="like">
            <i class="like icon"></i> 11 Likes
          </a>
        </div> -->
      </div>
    </div>
    <div class="event">
      <div class="label">
        <img src="./assets/img/elliot.jpg">
      </div>
      <div class="content">
        <div class="summary">
          <a class="user">
            What kind of products CLC will offer?         
          <div class="date">            
          </div>
        </div>
        <div class="meta">
          <a class="like">          
          </a>
        </div>
      </div>
    </div>
    <div class="event">
      <div class="label">
        <i class="pencil icon"></i>
      </div>
      <div class="content">
        <div class="summary">
          City livelihood centre Kokrajhar
          <!-- <div class="date">
            3 days ago
          </div> -->
        </div>
        <div class="extra">
          CLC will offer products made by SHGs of Kokrajhar Municipal area like handicrafts, paintings, decorative candles, traditional snacks and food items, traditional clothes and attires, decorative items for home, water hyacinth made products, etc.
       </div>
        <!-- <div class="meta">
          <a class="like">
            <i class="like icon"></i> 11 Likes
          </a>
        </div> -->
      </div>
    </div>
    <div class="event">
      <div class="label">
        <img src="./assets/img/elliot.jpg">
      </div>
      <div class="content">
        <div class="summary">
          <a class="user">
            How to make payment for CLC services or products?
         
          <div class="date">            
          </div>
        </div>
        <div class="meta">
          <a class="like">          
          </a>
        </div>
      </div>
    </div>
    <div class="event">
      <div class="label">
        <i class="pencil icon"></i>
      </div>
      <div class="content">
        <div class="summary">
          City livelihood centre Kokrajhar
          <!-- <div class="date">
            3 days ago
          </div> -->
        </div>
        <div class="extra">
          At present, the payment for all services and products is available only in the offline mode.
       </div>
        <!-- <div class="meta">
          <a class="like">
            <i class="like icon"></i> 11 Likes
          </a>
        </div> -->
      </div>
    </div>
     <div class="event">
      <div class="label">
        <img src="./assets/img/elliot.jpg">
      </div>
      <div class="content">
        <div class="summary">
          <a class="user">
            Where is the CLC located?
         
          <div class="date">            
          </div>
        </div>
        <div class="meta">
          <a class="like">          
          </a>
        </div>
      </div>
    </div>
    <div class="event">
      <div class="label">
        <i class="pencil icon"></i>
      </div>
      <div class="content">
        <div class="summary">
          City livelihood centre Kokrajhar
          <!-- <div class="date">
            3 days ago
          </div> -->
        </div>
        <div class="extra">
          The CLC is in the office premise of the City Mission Management Unit (CMMU) Kokrajhar, DAY-NULM.
       </div>
        <!-- <div class="meta">
          <a class="like">
            <i class="like icon"></i> 11 Likes
          </a>
        </div> -->
      </div>
    </div>
    <div class="event">
      <div class="label">
        <img src="./assets/img/elliot.jpg">
      </div>
      <div class="content">
        <div class="summary">
          <a class="user">
            What is the hour of operation of the CLC?
         
          <div class="date">            
          </div>
        </div>
        <div class="meta">
          <a class="like">          
          </a>
        </div>
      </div>
    </div>
    <div class="event">
      <div class="label">
        <i class="pencil icon"></i>
      </div>
      <div class="content">
        <div class="summary">
          City livelihood centre Kokrajhar
          <!-- <div class="date">
            3 days ago
          </div> -->
        </div>
        <div class="extra">
          The CLC will be open from 10 AM to 5PM on all weekdays except on Sunday.
       </div>
        <!-- <div class="meta">
          <a class="like">
            <i class="like icon"></i> 11 Likes
          </a>
        </div> -->
      </div>
    </div>
    <div class="container underline"></div>
  </div>

<div class="footer">
    <P style="text-align: center; margin-top: 3rem;">
    © 2020 City Livelihoods Centre | Design & Developed By | <span> <img src="assets/4b.jpeg" width="30rem" alt=""> </span>IT solution</P>
</div>
<div class="container underline"></div>
</div>
  </div>


<!-- ---------------------------------------------------GALLARY SECTION ---------------------------------------------------------------------------------------->


<!-- <div id="gallery" class="tabcontent"> -->
  <!-- <div class="container" style="margin-top: 4rem;"> -->
  <?php 

$result = $conn->query("SELECT * FROM gallary");



?>
  <section id="gallery" class="gallery-block grid-gallery tabcontent">
  <div class="container">
                <div class="heading">
                    <h2>Gallery</h2>
                </div>
                <div class="row">
                    <?php while($row = $result->fetch_assoc()): ?>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="#">
                            <img class="img-fluid image scale-on-hover" src="admin/<?php echo $row['IMG'] ?>">
                           
                        </a>
                  
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
   <!-- </div> -->

   <div class="container underline"></div>
   <div class="footer">
     <P style="text-align: center; margin-top: 3rem;">
     © 2020 City Livelihoods Centre | Design & Developed By | <span> <img src="assets/4b.jpeg" width="30rem" alt=""> </span>IT solution</P>
   </div>
   <div class="container underline"></div> 
<!-- </div> -->

</section>




<!-------------------------------------------------------------------------- contact-section -------------------------------------------------------------->

<div class="img__bg" style="background-image: url(./assets/img/back.png);">    
<div id="contact" class="tabcontent">
   <div class="container" style="margin-top: 4rem;">
     <div class="row">
       <div class="col-md-2 col-lg-2">
         <img src="./assets/img/logo.jpg" alt="">
       </div>
         <div class="col-md-5 col-lg-5 mb-4">
           <h3>City Livelihood Centre, Kokrajhar</h3>
           <p>Dist: Kokrajhar State: Assam-783370</p>
          </div>
      
       <div class="col-md-5 col-lg-5">
          <h3>Mail us at</h3>
          <div class="ui form">
            <div class="required field">
              <label>Name</label>
              <input type="text" placeholder="Full Name">
            </div>
            <div class="required field">
              <label>Phone Number </label>
              <input type="text" placeholder="(+91-xxx)">
            </div>
            <div class="required field">
              <label>E-mail</label>
              <input type="email" placeholder="youremail@gmail.com">
            </div>
            <div class="required field">
              <label>Text</label>
              <textarea></textarea>
            </div>
        
            <button class="ui blue  button">Send Message</button>
        </div>
       </div>
     </div>
    </div>


    <div class="container underline"></div>
      <div class="footer">
        <P style="text-align: center; margin-top: 3rem;">
        © 2020 City Livelihoods Centre | Design & Developed By | <span> <img src="assets/4b.jpeg" width="30rem" alt=""> </span>IT solution</P>
      </div>
    <div class="container underline"></div>
   </div>
</div>


<!-- LOGIN-SECTION -->


<div class="img__bg" style="background-image: url(./assets/img/back.png);">    
<div id="login" class="tabcontent">
   <div class="container" style="margin-top: 4rem;">
   <div class="login-form">
   <form action="code.php" method="POST">
		<div class="avatar">
			<img src="assets/img/avatar-png-1.png" alt="Avatar" />
		</div>
        <h2 class="text-center">Admin Login</h2>

		<div class="or-seperator"><i>on</i></div>
        <div class="form-group">
        	<input type="text" class="form-control" name="uname" placeholder="Username" required="required">		
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="psw" placeholder="Password" required="required">	
        </div>        
        <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-btn loading" value="Login"/>       
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-lg btn-block login-btn" onclick="window.location.href='index.php'"><i class="fas fa-home"></i></button>
        </div>
    </form>


 
</div>
</div>
    <div class="container underline"></div>
      <div class="footer">
        <P style="text-align: center; margin-top: 3rem;">
        © 2020 City Livelihoods Centre | Design & Developed By | <span> <img src="assets/4b.jpeg" width="30rem" alt=""> </span>IT solution</P>
      </div>
    <div class="container underline"></div>
   </div>
</div>

<!-- VIEW-NOTICE -->


<div class="img__bg" style="background-image: url(./assets/img/back.png);">    
<div id="notice" class="tabcontent">
   <div class="container" style="margin-top: 4rem;">


<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-database"></i> DataTables of Notice.</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Notice</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <?php

    $result = $conn->query("SELECT * FROM news");
    ?>


    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> <i class="fas fa-edit"></i></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Notice title</th>
                                    <th>Notice</th>                                  
                               
                                </tr>
                            </thead>
                            <?php while ($row = $result->fetch_assoc()) : ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['notice_title']; ?></td>
                                        <td><?php echo $row['notice_text']; ?></td>                                     

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


</div>
    <div class="container underline"></div>
      <div class="footer">
        <P style="text-align: center; margin-top: 3rem;">
        © 2020 City Livelihoods Centre | Design & Developed By | <span> <img src="assets/4b.jpeg" width="30rem" alt=""> </span>IT solution</P>
      </div>
    <div class="container underline"></div>
   </div>
</div>

<!-- VIEW-NOTICE -->


<div class="img__bg" style="background-image: url(./assets/img/back.png);">    
<div id="news" class="tabcontent">
   <div class="container" style="margin-top: 4rem;">


<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-database"></i> DataTables of News & Events.</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">News & Events</a></li>
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
                        <h3 class="card-title"> <i class="fas fa-edit"></i></h3>
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
                                
                                   
                                </tr>
                            </thead>
                            <?php while ($row = $result->fetch_assoc()) : ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['ID']; ?></td>
                                        <td><?php echo $row['DATE']; ?></td>
                                        <td><?php echo $row['TITLE']; ?></td>
                                        <td><?php echo $row['TEXT']; ?></td>                     
                                    
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


</div>
    <div class="container underline"></div>
      <div class="footer">
        <P style="text-align: center; margin-top: 3rem;">
        © 2020 City Livelihoods Centre | Design & Developed By | <span> <img src="assets/4b.jpeg" width="30rem" alt=""> </span>IT solution</P>
      </div>
    <div class="container underline"></div>
   </div>
</div>

<!-- VIEW-JOB -->


<div class="img__bg" style="background-image: url(./assets/img/back.png);">    
<div id="job" class="tabcontent">
   <div class="container" style="margin-top: 4rem;">


<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-database"></i> DataTables of JOB.</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Job</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <?php

$result = $conn->query("SELECT * FROM job");
    ?>


    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> <i class="fas fa-edit"></i></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>ID</th>                                   
                                    <th>Job title</th>
                                    <th>Job Description</th>
                                    <th>Last Date</th>                             
                             
                                </tr>
                            </thead>
                            <?php while ($row = $result->fetch_assoc()) : ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['job_titlle'] ?></td>
                                        <td><?php echo $row['job_description'] ?></td>
                                        <td><?php echo $row['last_date'] ?></td>                                     
                                     
                                    </tr>
                                </tbody>
                            <?php endwhile; ?>
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


</div>
    <div class="container underline"></div>
      <div class="footer">
        <P style="text-align: center; margin-top: 3rem;">
        © 2020 City Livelihoods Centre | Design & Developed By | <span> <img src="assets/4b.jpeg" width="30rem" alt=""> </span>IT solution</P>
      </div>
    <div class="container underline"></div>
   </div>
</div>



    

    <!-- Optional JavaScript -->
    <script src="./node_modules/sal.js/dist/sal.js"></script>
    <script>sal()</script>
    <script src="./assets/js/app.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
        </script> -->
           <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
          <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
          <script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
          <script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#example3').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#example4').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
  </body>
</html>