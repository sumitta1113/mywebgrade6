<?php 
    session_start();
    include('server.php');?>

<?php

if (isset($_POST['submit'])) {
    $sclip2_1="วิทยาศาสตร์ ประถมศึกษาตอนปลาย ร่างกายของมนุษย์ โดยครูแบร์รี่ ";
    $sclip2_2="วิทยาศาสตร์ ประถมศึกษาตอนปลาย ระบบต่าง ๆ ของร่างกายมนุษย์ (ตะลุยโจทย์) โดยครูบิ๊ก";
    $sclip2_3="วิทยาศาสตร์ ประถมศึกษาตอนปลาย การเจริญเติบโตของมนุษย์ ";
    $sclip2_4="วิทยาศาสตร์ ประถมศึกษาตอนปลาย ระบบการหายใจ";
    $sclip2_5="วิทยาศาสตร์ ประถมศึกษาตอนปลาย ระบบขับถ่ายของเสีย ";
    $sclip2_6="วิทยาศาสตร์ ประถมศึกษาตอนปลาย ระบบไหลเวียนโลหิต ";

    $id = $_SESSION['id'] ;
    $hinsert= "INSERT INTO history (fid, namec) VALUES
    ($id, '$sclip2_1'),
    ($id, '$sclip2_2'),
    ($id, '$sclip2_3'),
    ($id, '$sclip2_4'),
    ($id, '$sclip2_5'),
    ($id, '$clip1_6')";
    mysqli_query($conn, $hinsert);
    header("location: from-sci2.php");
    } else {
	echo "EMPTY DATA";
     }


mysqli_close($conn);
?>