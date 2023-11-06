<?php 
    session_start();
    include('server.php');?>

<?php

if (isset($_POST['submit'])) {
    $tclip1_1="วิชาภาษาไทย ป.6 เรื่อง ประโยคชนิดต่างๆ และกลุ่มคำ";
    $tclip1_2="วิชาภาษาไทย ป.6 เรื่อง การสังเกตความแตกต่างระหว่างประโยคและกลุ่มคำ";
    $tclip1_3="วิชาภาษาไทย ป.6 เรื่อง ประโยคสามัญ";
    $tclip1_4="วิชาภาษาไทย ป.6 เรื่อง ประโยครวม";

    $id = $_SESSION['id'] ;
    $hinsert= "INSERT INTO history (fid, namec) VALUES
    ($id, '$tclip1_1'),
    ($id, '$tclip1_2'),
    ($id, '$tclip1_3'),
    ($id, '$tclip1_4')";
    mysqli_query($conn, $hinsert);
    header("location: from-thai1.php");
    } else {
	echo "EMPTY DATA";
     }


mysqli_close($conn);
?>