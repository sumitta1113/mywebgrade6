<?php 
    session_start();
    include('server.php');?>

<?php

if (isset($_POST['submit'])) {
    $eclip1_1="ภาษาอังกฤษ ป. 6 : Noun ตะลุยโจทย์ โดย ครูพีชชี่";
    $eclip1_1="ภาษาอังกฤษ ป. 6 : Present Continuous Tense โดย ครูพลอย";
    $eclip1_1="ภาษาอังกฤษ ป. 6 : Past Simple Tense โดย ครูพลอย";
    $eclip1_1="ภาษาอังกฤษ ป. 6 : Pronoun ตะลุยโจทย์ โดย ครูพีชชี่";
    $eclip1_1="ภาษาอังกฤษ ป. 6 : Adjective ตะลุยโจทย์ โดย ครูพีชชี่";
    $eclip1_1="ภาษาอังกฤษ ป. 6 : Adverb ตะลุยโจทย์ โดย ครูพีชชี่";

    $id = $_SESSION['id'] ;
    $hinsert= "INSERT INTO history (fid, namec) VALUES
    ($id, '$eclip1_1'),
    ($id, '$eclip1_2'),
    ($id, '$eclip1_3'),
    ($id, '$eclip1_4'),
    ($id, '$eclip1_5'),
    ($id, '$clip1_6')";
    mysqli_query($conn, $hinsert);
    header("location: from-eng1.php");
    } else {
	echo "EMPTY DATA";
     }


mysqli_close($conn);
?>