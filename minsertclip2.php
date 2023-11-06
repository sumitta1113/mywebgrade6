<?php 
    session_start();
    include('server.php');?>

<?php

if (isset($_POST['submit'])) {
    $mclip2_1="คณิตศาสตร์ ป. 6 สมการ (ตะลุยโจทย์) โดยครูภูมิ";
    $mclip2_2="คณิตศาสตร์ ป. 6 โจทย์ปัญหาสมการ (ตะลุยโจทย์) โดยครูภูมิ";
    $mclip2_3="คณิตศาสตร์ ป. 6 เรื่องสมการหลายตัวแปร (ตะลุยโจทย์) โดยครูภูมิ";
    $mclip2_4="คณิตศาสตร์ ป. 6 สมการและการแก้สมการ โดยครูเต้ย";

    $id = $_SESSION['id'] ;
    $hinsert= "INSERT INTO history (fid, namec) VALUES
    ($id, '$mclip2_1'),
    ($id, '$mclip2_2'),
    ($id, '$mclip2_3')";
    mysqli_query($conn, $hinsert);
    header("location: from-maths2.php");
    } else {
	echo "EMPTY DATA";
     }


mysqli_close($conn);
?>