<?php 
include 'dbcconn.php';
if (isset($_POST['i1'])&&isset($_POST['i2'])&&isset($_POST['i3'])) {
	$p1=mysqli_real_escape_string($conn,$_POST['i1']);
	$p2=mysqli_real_escape_string($conn,$_POST['i2']);
	$p3=$_POST['i3'];

	$sql="INSERT INTO `carousell`(`text1`,`text2`,`img`) VALUES ('$p1','$p2','$p3') ";
	$a=mysqli_query($conn,$sql);
	header('location:index_admin.php');
}
if (isset($_POST['inp1'])&&isset($_POST['inp2'])&&isset($_POST['inp3'])&&isset($_POST['inp4'])) {

	$p1=mysqli_real_escape_string($conn,$_POST['inp1']);
	$p2=mysqli_real_escape_string($conn,$_POST['inp2']);
	$p3=$_POST['inp3'];
	$p4=mysqli_real_escape_string($conn,$_POST['inp4']);
	$ch1='';
	if (empty($_POST['ch1'])) {
		$ch1='no';
	}else{
		$ch1=$_POST['ch1'];
	}
	$sql="INSERT INTO `portfolio`(`text1`,`text2`,`img`,`type`,`top`) VALUES ('$p1','$p2','$p3','$p4','$ch1') ";
	$a=mysqli_query($conn,$sql);
	header('location:index_admin.php');
}
if (isset($_POST['q1'])&&isset($_POST['q2'])&&isset($_POST['dt1'])&&isset($_POST['q3'])) {
	$p1=mysqli_real_escape_string($conn,$_POST['q1']);
	$p2=mysqli_real_escape_string($conn,$_POST['q2']);
	$p3=$_POST['dt1'];
	$p4=$_POST['q3'];

	$sql="INSERT INTO `news`(`header`,`date`,`text1`,`img`) VALUES ('$p1','$p3','$p2','$p4')";
	$query=mysqli_query($conn,$sql);
	header('location:index_admin.php');
}
if (isset($_POST['in1'])&&isset($_POST['in2'])&&isset($_POST['in3'])&&isset($_POST['id'])) {
	$p1=mysqli_real_escape_string($conn,$_POST['in1']);
	$p2=mysqli_real_escape_string($conn,$_POST['in2']);
	$p3=mysqli_real_escape_string($conn,$_POST['in3']);
	$id=mysqli_real_escape_string($conn,$_POST['id']);

	$sql="UPDATE `carousell` SET `text1` = '$p1',`text2`='$p2', `img`='$p3' WHERE `id`='$id'";
	$query=mysqli_query($conn,$sql);
	header('location:index_admin.php');
}
if (isset($_POST['ip1'])&&isset($_POST['ip2'])&&isset($_POST['ip3'])&&isset($_POST['ip4'])&&isset($_POST['id1'])) {
	$p1=mysqli_real_escape_string($conn,$_POST['ip1']);
	$p2=mysqli_real_escape_string($conn,$_POST['ip2']);
	$p3=$_POST['ip3'];
	$p4=mysqli_real_escape_string($conn,$_POST['ip4']);
	$ch1='';
	if (empty($_POST['ch2'])) {
		$ch1='no';
	}else{
		$ch1=$_POST['ch2'];		
	}
	$id=$_POST['id1'];

	$sql="UPDATE `portfolio` SET `text1`='$p1',`text2`='$p2',`img`='$p3',`type`='$p4',`top`='$ch1' WHERE `id`='$id' ";
	$query=mysqli_query($conn,$sql);
	header('location:index_admin.php');
}
if (isset($_POST['iq1'])&&isset($_POST['iq2'])&&isset($_POST['iq3'])&&isset($_POST['news_date'])&&isset($_POST['news_id'])) {
	$p1=mysqli_real_escape_string($conn,$_POST['iq1']);
	$p2=mysqli_real_escape_string($conn,$_POST['iq2']);
	$p3=$_POST['iq3'];
	$p4=$_POST['news_date'];
	$id=$_POST['news_id'];

	$sql="UPDATE `news` SET `header`='$p1',`date`='$p4',`text1`='$p2',`img`='$p3' WHERE `id`='$id'  ";
	$query=mysqli_query($conn,$sql);
	header('location:index_admin.php');
}

if (isset($_POST['delete_id'])) {
	$id=$_POST['delete_id'];
	$tb_nm=$_POST['table_nm'];
	$img_src=$_POST['img_s'];
	$sql="DELETE FROM `$tb_nm` WHERE `id`='$id'";
	$a=mysqli_query($conn,$sql);
	if ($a) {
		unlink($img_src);
	}
}

if (isset($_FILES['flo2'])) {

	$trip=$_POST['trip'];
	$name=$_FILES['flo2']['name'];
	$f_tmp=$_FILES['flo2']['tmp_name'];

	$nm=explode('.',$name);
	$lname=time().".".end($nm);

	if (end($nm)=='jpg' || end($nm)=='png' || end($nm)=='webp') {
		$place='assets/'.$trip.'/'.$lname;
		move_uploaded_file($f_tmp, $place);
		echo $lname;
	}


}

if (isset($_POST['num'])) {
	$tiv1=$_POST['num'];	
	$end=(($tiv1-1)*3);
                $sql2="SELECT * FROM `news`  LIMIT $end,3";
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
	        <a href="#" class="read-more">Read more <i class="ti-angle-double-right"></i></a>
	    </div>
	</div>
kku;
        echo $q1;
    }
}
if (isset($_POST['t1'])) {
	$p1=$_POST['t1'];
                $sql2="SELECT * FROM `news` WHERE `header` LIKE '%$p1%'";
                $a2=mysqli_query($conn,$sql2);
                while ($pos=mysqli_fetch_assoc($a2)){
    $q1=<<<kku

<div class="blog-card">
    <div class="img-holder">
        <img src="assets/news/$pos[img]" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
    </div>
    <div class="content-holder">
        <h6 class="title">$pos[header]</h6>
        <h5>$pos[date]</h5> 
        <p>$pos[text1]</p>
        <a href="#" class="read-more">Read more <i class="ti-angle-double-right"></i></a>
    </div>
</div>
kku;
        echo $q1;
    }
}


 ?>