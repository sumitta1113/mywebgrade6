<?php 
    session_start();
    include('server.php');?>

<?php

if (isset($_POST['submit'])) {
    $mclip1_1="คณิตศาสตร์ ป. 6 จำนวนนับและสมบัติของจำนวนนับ ตอนที่ 1 (ตะลุยโจทย์) โดยครูเอ๋ ";
    $mclip1_2="คณิตศาสตร์ ป. 6 จำนวนนับและสมบัติของจำนวนนับ ตอนที่ 2 (ตะลุยโจทย์) โดยครูเอ๋";
    $mclip1_3="คณิตศาสตร์ ป. 6 แบบรูป (ตะลุยโจทย์) โดยครูภูมิ";
    
//***************** */
    $id = $_SESSION['id'] ;
    $hinsert= "INSERT INTO history (fid, namec) VALUES
    ($id, '$mclip1_1'),
    ($id, '$mclip1_2'),
    ($id, '$mclip1_3')";
    mysqli_query($conn, $hinsert);
    header("location: from-maths1.php");
    } else {
	echo "EMPTY DATA";
     }


mysqli_close($conn);
?>