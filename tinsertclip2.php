<?php 
    session_start();
    include('server.php');?>

<?php

if (isset($_POST['submit'])) {
    $tclip2_1="วิชาภาษาไทย ป.6 เรื่อง คำนาม";
    $tclip2_2="วิชาภาษาไทย ป.6 เรื่อง สรรพนาม ";
    $tclip2_3="วิชาภาษาไทย ป.6 เรื่อง คำกริยา";
    $tclip2_4="วิชาภาษาไทย ป.6 เรื่อง คำวิเศษณ์ ";
    $tclip2_5="วิชาภาษาไทย ป.6 เรื่อง ราชาศัพท์";

    $id = $_SESSION['id'] ;
    $hinsert= "INSERT INTO history (fid, namec) VALUES
    ($id, '$tclip2_1'),
    ($id, '$tclip2_2'),
    ($id, '$tclip2_3'),
    ($id, '$tclip2_4'),
    ($id, '$tclip2_5')";
    mysqli_query($conn, $hinsert);
    header("location: from-thai2.php");
    } else {
	echo "EMPTY DATA";
     }


mysqli_close($conn);
?>