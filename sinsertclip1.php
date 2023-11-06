<?php 
    session_start();
    include('server.php');?>

<?php

if (isset($_POST['submit'])) {
    $sclip1_1="วิทยาศาสตร์ ประถมศึกษาตอนปลาย อาหารและสารอาหาร โดยครูแบร์รี่";
    $sclip1_2="วิทยาศาสตร์ ประถมศึกษาตอนปลาย อาหารและสารอาหาร (ตะลุยโจทย์) โดยครูแบร์รี่";

    $id = $_SESSION['id'] ;
    $hinsert= "INSERT INTO history (fid, namec) VALUES
    ($id, '$sclip1_1'),
    ($id, '$sclip1_2')";
    mysqli_query($conn, $hinsert);
    header("location: from-sci1.php");
    } else {
	echo "EMPTY DATA";
     }


mysqli_close($conn);
?>