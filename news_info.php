<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event info</title>
    <link rel="icon" type="image/png" href="assets/imgs/iconss.png">
    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="icon/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/johndoe.css">
    <style type="text/css">
        body {
            background-color: #d1cece6e;
        }
        .text_con {
            justify-content: space-between;
            margin-left: 46px;
            margin-top: 22px;
            padding-right: 50px;
        }
        .date {
            line-height: 0px;
            color: grey;
            font-weight: 550;
        }
        .tickets_buy {
            justify-content: space-evenly;
        }
        .payment {
            width: 25%;
            border: solid 1px grey;
            border-radius: 17px;
            padding: 18px;
            transition: 1s;
            background-color: #f5f3f3;
        }
        .payment:hover {
            box-shadow: 5px 8px 20px 5px #7f7e7e;
        }
        .text_dark {
            color: grey;
        }
        .modal-body>img {
            cursor: pointer;
            margin-left: 10px;
        }
        .active {
            transform: scale(1.4);  
        }
        .modal-footer {
            display: flex;
            flex-direction: column;
        }
        .modal-footer>input {
            margin-top: 15px;
        }
        .hotels_href {
            display: block;
            line-height: 30px;
            }
            .href_span {
                color: black;
              text-decoration: none;
            }


    </style>
    <link rel="stylesheet" type="text/css" href="assets/css/info.css">
</head>
<body>

     <div class="container-fluid p-5 m-auto mt-5">

    <?php 
        $id=$_GET['id'];
        include "dbcconn.php";
    $query="SELECT * FROM `news` WHERE `id` ='$id' ";
    $sql=mysqli_query($conn,$query);
    while ($pr=mysqli_fetch_assoc($sql)){
        $kku=<<<kku
        <center class="mb-4"><h1>$pr[header]</h1></center> <br>
            <div class="col-lg-12 col-sm-12 col-12 border p-2">
                <div class="d-flex">
                    <div class="img_con">
                        <img src="assets/news/$pr[img]" width="350px" class="img">
                    </div>
                    <div class="text_con">
                            <p>$pr[text1]</p>
                            <p class="date">$pr[date]</p>
                            <p>Nearly hotels</p>
                            <a href="https://www.booking.com/hotel/am/best-western-congress.en-gb.html?aid=356980&label=gog235jc-1DCAsoB0IVYmVzdC13ZXN0ZXJuLWNvbmdyZXNzSDNYA2gHiAEBmAEJuAEXyAEM2AED6AEBiAIBqAIDuALagPiyBsACAdICJDAyOTI2NTM1LTFlNDYtNDdjYS04OTc2LWI4YjY1NWFkM2YwYdgCBOACAQ&sid=5aea54e2a663487273e155f73f5fb48a&dist=0&keep_landing=1&sb_price_type=total&type=total&" class="hotels_href">Best Western Plus Congress Hotel Yerevan <span class="href_span"> - 10.000 AMD (day)</span></a>
                            <a href="https://www.booking.com/hotel/am/ibis-yerevan-center.ru.html" class="hotels_href">ibis Yerevan Center <span class="href_span">- 8.000 AMD (day)</span></a>
                            <a href="https://www.booking.com/hotel/am/holiday-inn-express-yerevan.ru.html" class="hotels_href">Holiday Inn Express <span class="href_span"> - Yerevan, an IHG Hotel - 6.000 AMD (day)</span></a>
                            <a href="https://www.booking.com/searchresults.ru.html?aid=315714&label=opera-suite-yqyg4Afn0I6xubTfqiKVOAS391725298942%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-12812370721%3Alp9070059%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YSz9NH8e0pLL8P74Y74XBIs&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8uyCEGfi4iNByyLqR-nOdsWOIjpAFjrkfC5L2UX6W77OeVymmGH6dUaAu7QEALw_wcB&highlighted_hotels=1348505&redirected=1&city=-2325645&hlrd=no_dates&source=hotel&expand_sb=1&keep_landing=1&sid=5aea54e2a663487273e155f73f5fb48a" class="hotels_href">Opera Suite Hotel <span class="href_span"> - Yerevan, an IHG Hotel - 12.000 AMD (day)</span></a>
                    </div>
                </div>
            </div>
kku;
        echo $kku;
}
     ?>
        
        <div class="tickets_buy col-lg-12 col-sm-8 col-md-12 col-12 p-5 mt-5 d-flex">
            <div class="econom payment">
                <center class="mb-4 mt-2"><h5>STANDARD ACCESS</h5></center>
                <p><i class="fa-solid fa-check"></i>  Regular Seating</p>
                <p><i class="fa-solid fa-check"></i>  Coffee Break</p>
                <p><i class="fa-solid fa-check"></i>  Custom Badge</p>
                <div class="text_dark">
                    <p><i class="fa-solid fa-xmark"></i>  Lunch</p>
                    <p><i class="fa-solid fa-xmark"></i>  Workshop Access</p>
                    <p><i class="fa-solid fa-xmark"></i>  After Party</p>
                </div>
                    <center><h3>25$</h3></center>
                <center><button class="btn btn-danger mt-3 mb-3 ticket_btn"  data-toggle="modal" data-target="#myModal1" data-btn='econom'>Buy a ticket</button></center> 
            </div>
            <div class="classic payment">
                <center class="mb-4 mt-2"><h5>PRO ACCESS</h5></center>
                <p><i class="fa-solid fa-check regular_xang"></i>  Regular Seating</p>
                <p><i class="fa-solid fa-check"></i>  Coffee Break</p>
                <p><i class="fa-solid fa-check"></i>  Custom Badge</p>
                <p><i class="fa-solid fa-check"></i>  Lunch</p>
                <div class="text_dark">
                    <p><i class="fa-solid fa-xmark"></i>  Workshop Access</p>
                    <p><i class="fa-solid fa-xmark"></i>  After Party</p>
                </div>
                    <center><h3>60$</h3></center>
                <center><button class="btn btn-danger mt-3 mb-3 ticket_btn" data-btn='classic'  data-toggle="modal" data-target="#myModal2">Buy a ticket</button></center> 
            </div>
            <div class="business payment">
                <center class="mb-4 mt-2"><h5>PREMIUM ACCESS</h5></center>
                <p><i class="fa-solid fa-check"></i>  VIP seating with a good view</p>
                <p><i class="fa-solid fa-check"></i>  Coffee Break</p>
                <p><i class="fa-solid fa-check"></i>  Premium Badge</p>
                <p><i class="fa-solid fa-check"></i>  Lunch and fruits</p>
                <p><i class="fa-solid fa-check"></i>  Workshop Access</p>
                <p><i class="fa-solid fa-check"></i>  After Party</p>
                <center><h3>110$</h3></center>
                <center><button class="btn btn-danger mt-3 mb-3 ticket_btn" data-btn='business' data-toggle="modal" data-target="#myModal3">Buy a ticket</button></center> 
            </div>
        </div>
     </div>

<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Payment methods</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Select banck</p>
        <img class="bancks" src="imgs/hsh.png" width="50px">
        <img class="bancks" src="imgs/cons.png" width="50px">
        <img class="bancks" src="imgs/amio.png" width="50px">
        <img class="bancks" src="imgs/arar.png" width="50px">
      </div>
      <div class="modal-footer">
            <input required class="form-control col-lg-12" type="number" placeholder="Card number *16 symbol" >
            <input required class="form-control col-lg-12" type="text" placeholder="Name,LastName" >
            <input required class="form-control col-lg-12" type="date" placeholder="Date" >
            <input required class="form-control col-lg-12" type="number" placeholder="Verify code" >
            <button class="btn btn-success ticket_butn mt-3">Success</button>
      </div>
    </div>

  </div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Payment methods</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Select banck</p>
        <img class="bancks" src="imgs/hsh.png" width="50px">
        <img class="bancks" src="imgs/cons.png" width="50px">
        <img class="bancks" src="imgs/amio.png" width="50px">
        <img class="bancks" src="imgs/arar.png" width="50px">
      </div>
      <div class="modal-footer">
            <input required class="form-control col-lg-12" type="number" placeholder="Card number *16 symbol" >
            <input required class="form-control col-lg-12" type="text" placeholder="Name,LastName" >
            <input required class="form-control col-lg-12" type="date" placeholder="Date" >
            <input required class="form-control col-lg-12" type="number" placeholder="Verify code" >
            <button class="btn btn-success ticket_butn mt-3">Success</button>
      </div>
    </div>

  </div>
</div>

<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Payment methods</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Select banck</p>
        <img class="bancks" src="imgs/hsh.png" width="50px">
        <img class="bancks" src="imgs/cons.png" width="50px">
        <img class="bancks" src="imgs/amio.png" width="50px">
        <img class="bancks" src="imgs/arar.png" width="50px">
      </div>
      <div class="modal-footer">
            <input required class="form-control col-lg-12" type="number" placeholder="Card number *16 symbol" >
            <input required class="form-control col-lg-12" type="text" placeholder="Name,LastName" >
            <input required class="form-control col-lg-12" type="date" placeholder="Date" >
            <input required class="form-control col-lg-12" type="number" placeholder="Verify code" >
            <button class="btn btn-success ticket_butn mt-3">Success</button>
      </div>
    </div>

  </div>
</div>

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
     


    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.ticket_butn').click(function() {
          alert('Success')
        })
        $('.bancks').click(function() {
          $('.bancks').removeClass('active')
          $(this).addClass('active')
        })
    </script>
    <script type="text/javascript" src="assets/js/johndoe.js"></script>

</body>
</html>