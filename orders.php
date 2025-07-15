<link rel="stylesheet" href="assets/css/johndoe.css">
        <?php
            $id=$_POST['id'];
            include "dbcconn.php";
            $sql="SELECT * FROM `portfolio` WHERE `id`=$id ";
            $query=mysqli_query($conn,$sql);
            while ($print=mysqli_fetch_assoc($query)){
                $ord=<<<kku
                <center><h1>ORDERS</h1></center>
                <div class="container mt-5 text-center">
                <div class="row">
                <div class="col-3 mx-auto">
                    <img src="assets/portfolio/$print[img]" width="100%">
                </div>
                <div class="col-3 mx-auto">
                    <h6>$print[text1]</h6>
                </div>
                <div class="col-3 mx-auto">
                    <p>$print[text2]</p>
                </div>
    </div>
    </div>
kku;
            echo $ord;
            }
        ?>
