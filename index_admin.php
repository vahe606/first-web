<?php 

session_start();
@$sess=$_SESSION['log'];
if ($sess===true) {


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>Polytech Admin TheEvent</title>
    <link rel="icon" type="image/png" href="assets/imgs/admin.jpg">
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">



    <link rel="stylesheet" href="assets/css/johndoe.css">
    <!-- <link rel="stylesheet" href="st.css"> -->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
            <!--    SECTION START    -->

        <ul class="container-fluid text-right">
            <li>
                <a href="index.php">Log Out</a>
            </li>
        </ul>

    <section class="text-center">
        <center><h1 class=" mt-3 mb-4">CAROUSELL</h1></center>
        <button class="btn-1 " data-toggle="collapse" data-target="#dem">Collapse</button>
        <div id="dem" class="collapse mx-auto col-lg-4">
            <form action="action.php" method="post">
                <input type="text" name="i1" class="v1 form-control" placeholder="text1">
                <input type="text" name="i2" class="v2 form-control" placeholder="text2">
                <label class="carousell_lab">
                    <input type="file" class="f1 form-control" data-trip='carousell'>
                </label>
                <div class="len border col-lg-8 mx-auto mt-3"></div>
                <input type="hidden" name="i3" class="i3"><br>
                <button class="btn-primary">OKS</button>
            </form>
        </div>        
  <div class=" container">
        <table class="  table  mt-5">
            <tr>
                <th>text1</th>
                <th>text2</th>
                <th>img</th>
                <th>action</th>
            </tr>

        <?php 
        include 'dbcconn.php';
        $sql="SELECT * FROM `carousell`";
        $a=mysqli_query($conn,$sql);
        while ($post=mysqli_fetch_assoc($a)){
        $p1=<<<k
         <tr>
             <td>$post[text1]</td>
             <td>$post[text2]</td>
             <td><img src="assets/carousell/$post[img]" width="90px"></td>
             <td>
                <button class="btn-danger btn del" data-tab="carousell" id="$post[id]">DELETE</button>
                <button class="btn-danger btn insert" data-toggle="collapse" data-target="#a$post[id]">EDIT</button>
                <div id="a$post[id]" class="collapse mx-auto col-lg-10">
                    <form action="action.php" method="post">
                        <input type="text" name="in1" class="v1 form-control" placeholder="text1" value='$post[text1]'>
                        <input type="text" name="in2" class="v2 form-control" placeholder="text2" value='$post[text2]'>
                        <label class="carousell_lab">
                        <input type="file" class="f1 form-control"  data-trip='carousell'>
                </label>
                        <div class="len border col-lg-8 mx-auto mt-3"></div>
                        <input type="hidden" name="in3" class="i3"  value='$post[img]'><br>
                        <input type="hidden" name="id" value="$post[id]"><br>
                        <button class="btn-primary">OKS</button>
                    </form>
                </div>
             </td>
         </tr>

k;
    echo $p1;
}

         ?>

        </table>

  </div>
    
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
        <circle r="20" cy="22" cx="22" id="test">
    </symbol>
</svg>
</section>

         <!--           END OF SECTION         -->

    <section class="section bg-dark py-5">
        <div class="container text-center">
            <h2 class="text-light mb-5 font-weight-normal">I Am Available For FreeLance</h2>
            <button class="btn bg-primary w-lg" >Hire me</button>
        </div>
    </section>

    <!-- Portfolio Section -->
    <center><h1 class=" mt-3">PORTFOLIO</h1></center>
    
    <section class="section bg-custom-gray text-center">
        <div class="container mx-auto">    
        <button data-toggle="collapse" data-target="#dem1">Collapse</button>
        <div class="collapse" id="dem1">
            <form action="action.php" method="post">
                <input type="text" name="inp1" class="v1 form-control" placeholder="text1">
                <input type="text" name="inp2" class="v2 form-control" placeholder="text2">
                <input type="text" name="inp4" class="v4 form-control"  placeholder="type">
                <label class="carousell_lab">
                    <input type="file" class="f1 form-control" data-trip='portfolio'>
                </label>
                Top <br><input type="checkbox" name="ch1" value="yes" class="top11">
                <div class="len bd border col-lg-8 mx-auto mt-3"></div>
                <input type="hidden"  name="inp3" class="i3"  placeholder="nkar"><br>
                <button class="btn-primary">OKS</button>
            </form>
        </div>        
                    <table class="tab-1 table mt-5">
            <tr>
                <th>text1</th>
                <th>text2</th>
                <th>img</th>
                <th>top</th>
                <th>action</th>
            </tr>
                    <?php 
                    include 'dbcconn.php';
                    $sql1="SELECT * FROM `portfolio`";
                    $a1=mysqli_query($conn,$sql1);
                    while ($post1=mysqli_fetch_assoc($a1)){
                    $p1=<<<a
                    <tr>
                         <td>$post1[text1]</td>
                         <td>$post1[text2]</td>
                         <td><img src="assets/portfolio/$post1[img]" width="100px"></td>
                         <td>$post1[top]</td>
                         <td>
                         <button class="btn-danger btn del" data-tab="portfolio" id="$post1[id]">DELETE</button>
                        <button class="btn-danger btn insert" data-toggle="collapse" data-target="#a$post1[id]">EDIT</button>

                        <div id="a$post1[id]" class="collapse mx-auto col-lg-10">
                            <form action="action.php" method="post">
                                <input type="text" name="ip1" class="v1 form-control" placeholder="text1" value="$post1[text1]">
                                <input type="text" name="ip2" class="v2 form-control" placeholder="text2" value="$post1[text2]">
                                <input type="text" name="ip4" class="v4 form-control"  placeholder="type" value="$post1[type]">
                                <label class="carousell_lab">
                                <input type="file" class="f1 form-control" data-trip='portfolio'>
                </label>
                                Top <br><input type="checkbox" name="ch2" value="yes" class="$post1[top]">
                                <div class="len border col-lg-8 mx-auto mt-3"></div>
                                <input type="hidden" name="ip3" class="i3" value="$post1[img]"><br>
                                <input type="hidden" name="id1" class="" value="$post1[id]"><br>
                                <button class="btn-primary">OKS</button>
                            </form>
                        </div>
                         </td>
                     </tr>
a;

                    echo $p1;                        
                    }

                     ?>
</table>
          
    
        </div>            
    </section>
                <!-- WORK SECTION START -->
                <div class="container text-center">
                   <input type="text" name="i1" class="i1">
                   <button class="btn1">OK</button>
                    
                </div>
    
    <!-- End of portfolio section -->

    <section class="section" id="blog">
           <center>
                <h2 class="mb-5 mt-2">Latest <span class="text-danger">News</span></h2>
           </center>
        <div class="container text-center">
            <button data-toggle="collapse" data-target="#dem2">Collapse</button>
            <div class="collapse col-lg-5 mx-auto" id="dem2">
                <form action="action.php" method="post">
                    <input type="text" name="q1" class="c1 form-control">
                    <input type="date" name="dt1">
                    <input type="text" name="q2" class="c2 form-control">
                <label class="carousell_lab">
                    <input type="file" class="f1 form-control" data-trip='news'>
                </label>
                    <div class="len border col-lg-8 mx-auto mt-3"></div>
                    <input type="hidden" name="q3" class="i3"><br>
                    <button class="btn-primary">OKS</button>
                </form>
            </div>
            <div class="row tpich">
                <table class="tab-1 table mt-5">
            <tr>
                <th>header</th>
                <th>text1</th>
                <th>date</th>
                <th>img</th>
                <th>action</th>
            </tr>
                <?php 
                include 'dbcconn.php';
                $sql2="SELECT * FROM `news`";
                $a2=mysqli_query($conn,$sql2);
                while ($pos=mysqli_fetch_assoc($a2)){
                    $q1=<<<kku
                    <tr>
                        <td>$pos[header]</td>
                        <td>$pos[text1]</td>
                        <td>$pos[date]</td>
                        <td><img src="assets/news/$pos[img]" width="100px"></td>
                        <td>
                            <button class="btn-danger btn del" data-tab="news" id="$pos[id]">DELETE</button>
                            <button class="btn-danger btn insert" data-toggle="collapse" data-target="#a$pos[id]">EDIT</button>

                        <div id="a$pos[id]" class="collapse mx-auto col-lg-10">
                            <form action="action.php" method="post">
                                <input type="text" name="iq1" class="v1 form-control" placeholder="text1" value="$pos[header]">
                                <input type="text" name="iq2" class="v2 form-control" placeholder="text2" value="$pos[text1]">
                                <input type="date" name="news_date" class=" form-control" placeholder="date" value="$pos[date]">
                            <label class="carousell_lab">
                                <input type="file" class="f1 form-control"  data-trip='news'>
                            </label>
                                <div class="len border col-lg-8 mx-auto mt-3"></div>
                                <input type="hidden" name="iq3" class="i3" value="$pos[img]"><br>
                                <input type="hidden" name="news_id" class="" value="$pos[id]">
                                <button class="btn-primary">OKS</button>
                            </form>
                        </div>
                        </td>
                    </tr>
kku;
                    echo $q1;
                }

                 ?>
</table>
            </div>



        </div>
    </section>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>
    
    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    
    <script src="assets/js/johndoe.js"></script>

</body>
</html>
<?php 

}else{
    header('location:admin/');
}

 ?>