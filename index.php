<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <link rel="icon" type="image/png" href="assets/imgs/iconss.png">
    <title>TheEvent</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href='assets/css/owl.carousel.min.css'>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">



    <link rel="stylesheet" href="assets/css/johndoe.css">
    <link rel="stylesheet" href="st.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">


    <!--- <div class="weatherss">
        <input type="text" class="blog_input" value="Yerevan">
        <div class="lcnox">
            
        </div>
    </div> --->


    <section class="banner__slider">

  <div class="slider stick-dots">

        <?php 
        include 'dbcconn.php';
        $sql="SELECT * FROM `carousell`";
        $a=mysqli_query($conn,$sql);
        while ($post=mysqli_fetch_assoc($a)){
        $p1=<<<k
    <div class="slide">
      <div class="slide__img">
        <img src="assets/carousell/$post[img]" width="100%">
      </div>
      <div class="slide__content ">
        <div class="slide__content--headings text-center">
           
           <p class="animated top-title" data-animation-in="fadeInUp" data-delay-in="0.3">$post[text1]</p>
                    <h2 class="animated title" data-animation-in="fadeInUp">$post[text2]</h2>
        </div>
      </div>
    </div>
k;
    echo $p1;
}

         ?>
  </div>
    
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
        <circle r="20" cy="22" cx="22" id="test">
    </symbol>
</svg>
</section>


         <!--           END OF SECTION         -->

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about_us.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Resume</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="assets/imgs/5pp.jpg" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">TheEvent</h5>
                        <div class="brand-subtitle">For events and rent bars</div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item last-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item last-item">
                        <a href="admin" class="nav-link">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section class="section bg-dark text-center">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="row ">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-alarm-clock icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">600</h1>
                            <p class="text-light mb-1">Hours Worked</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-layers-alt icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">800+</h1>
                            <p class="text-light mb-1">Project Finished</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-face-smile icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">200K</h1>
                            <p class="text-light mb-1">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-heart-broken icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">2k</h1>
                            <p class="text-light mb-1">Coffee Drinked</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="carousel-wrap">
  <div class="owl-carousel">

    <?php 
    include 'dbcconn.php';
    $sql="SELECT * FROM `portfolio` WHERE `top`='no'";
    $query=mysqli_query($conn,$sql);
    while($post=mysqli_fetch_assoc($query)){
        $txt=<<<kku
    <div class="item img_items"><img src="assets/portfolio/$post[img]" ></div>
kku;
    echo $txt;
    }
     ?>
    

  </div>
</div>

    <section class="section" id="service">
        <div class="container">
            <h2 class="mb-5 pb-4"><span class="text-danger">My</span> Services</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-vector text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Ullam</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-write text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Asperiores</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-package text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Tempora</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-map-alt text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Provident</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-bar-chart text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Consectetur</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-support text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Veritatis</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-dark py-5">
        <div class="container text-center">

        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">My</span> Portfolio</h1>
            <div class="portfolio">
                <div class="filters">
                    <a href="#" data-filter=".new" class="active">
                        New
                    </a>
                    <a href="#" data-filter=".advertising">
                        Advertising
                    </a>
                    <a href="#" data-filter=".branding">
                        Branding
                    </a>
                    <a href="#" data-filter=".web">
                        Web
                    </a>
                </div>
                <div class="portfolio-container"> 
                    <?php 
                    include 'dbcconn.php';
                    $sql1="SELECT * FROM `portfolio`";
                    $a1=mysqli_query($conn,$sql1);
                    while ($post1=mysqli_fetch_assoc($a1)){
                    $p1=<<<a
                    <div class="col-6 mx-auto col-md-6 col-lg-4 $post1[type] new" data-toggle="modal" data-target="#mod$post1[id]">
                        <div class="portfolio-item">
                            <img src="assets/portfolio/$post1[img]" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">$post1[text1]</h6>
                                    <p class="subtitle">$post1[text2]</p>
                                </div>
                            </div>   
                        </div>             
                    </div>
                    <div class="modal fade" id="mod$post1[id]">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal">X</button>
                                </div>
                                <div class="modal-body">
                                        <img src="assets/portfolio/$post1[img]" class="img-fluid slide-img" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                                        <div class="content-holder">
                                            <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                                            <div class="text-holder">
                                                <h6 class="title">$post1[text1]</h6>
                                                <p class="subtitle">$post1[text2]</p>

                <input type="hidden" class="id_form" value="$post1[id]">


                            <button class="port_btn btn-success">Learn More</button> 
                                            </div>
                                        </div> 
                                </div>
                            </div>
                        </div>
                    </div>
a;
                    echo $p1;                        
                    }
                     ?>
                </div>
            </div>
        </div> 
    </section>
        <div class="mv_trash">
            <i class="ti-trash"></i>
        </div>
        <div class="slidebar-right">
            
        </div>           
                <div class="container text-center">
                   <input type="text" name="i1" class="i1">
                   <button class="btn1">OK</button>
                    
                </div>
    <!-- End of portfolio section -->
<div class="weatherss text-center container mt-5 mx-auto">
        <input type="text" class="blog_input" value="Yerevan">
        <div class="lcnox">
            
        </div>
    </div> 
    <section class="section" id="blog">
        <div class="container">
            <h2 class="mb-5">Latest <span class="text-danger">News</span></h2>
            <div class="row tpich">
                <?php 
                include 'dbcconn.php';
                $sql2="SELECT * FROM `news`  LIMIT 0,3";
                $a2=mysqli_query($conn,$sql2);
                while ($pos=mysqli_fetch_assoc($a2)){


                    $q1=<<<kku

                <div class="blog-card w-100">
                    <div class="img-holder">
                        <img src="assets/news/$pos[img]" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="content-holder">
                        <h6 class="title">$pos[header]</h6>

                        <h5>$pos[date]</h5>
                        
                        <p>$pos[text1]</p>
                        

                        <a href="news_info.php?id=$pos[id]" class="read-more news_info_click">Read more <i class="ti-angle-double-right"></i></a>
                    </div>
                </div>

kku;
                    echo $q1;
                }
                 ?>

            </div>
        </div>

        <center>
            <?php 
                  include 'dbcconn.php';
                    $sql2="SELECT * FROM `news`";
                    $a2=mysqli_query($conn,$sql2);
                    $tox=mysqli_num_rows($a2);
                    for ($i=1; $i <= ceil($tox/3); $i++) { 
                    $btn=<<<kku
                        <button class="btn-primary news_click">$i</button>
kku; 
                    echo $btn;
                    }
             ?>
        </center>
    </section>

    <div class="section contact" id="contact">
        <div id="map" class="map"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <h4 class="contact-title">Send a message</h4>
                        <form action="contact.php">
                            <div class="form-group">
                                <input  class="form-control input_val name_inp" name="username" type="text" placeholder="Name *" required>
                                <p>Username must be and contain 5 - 12 characters</p>
                            </div>
                            <div class="form-group">
                                <input class="form-control input_val email_inp" name="email" type="email" placeholder="Email *" required>
                                <p>Email must be a valid address, e.g. me@mydomain.com</p>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input_val textar_inp" name="slug" id="" placeholder="Message *" rows="7" required></textarea>
                                <p>
        Message has ben min 8 characters
      </p>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="sub_btn1 form-control btn btn-primary" >Send Message</button>
                            </div>
                            <div class="tpel col-lg-12">
                                
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <h4 class="contact-title">Get in touch</h4>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-mobile icon-md"></i>
                            </div>
                            <div class="col-10 ">
                                <h6 class="d-inline">Phone : <br> <span class="text-muted">+ (374) 43 720-710</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-map-alt icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Address :<br> <span class="text-muted">122 Teryan St. yerevan,Armenia</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-envelope icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Email :<br> <span class="text-muted">vahe.sagatelyannn@gmail.com</span></h6>
                            </div>
                        </div>
                        <ul class="social-icons pt-4">
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                        </ul> 
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By <a href="facebook.com" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards">Vahe 04-6</span></a> 
            </p>
        </div>
    </footer>

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>
    
    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    
    <script src="assets/js/johndoe.js"></script>
    <script>
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,

  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 2
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})
const btns=document.querySelectorAll('.news_click')
btns[0].classList.add('active-page')

    </script>

</body>
</html>
