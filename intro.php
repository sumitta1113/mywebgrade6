<!DOCTYPE html><!--http://localhost/grade6onlinelearning/intro.php-->
<html Lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- ฟ้อนนน -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <!-- Custom Login & Register CSS -->
    <link rel="stylesheet" href="custom.css">
    <!-- ฟ้อนนน -->
    <style type="text/css">
		body{
			font-family: 'Prompt', sans-serif;
		} 
	</style>
</head>


<body>

    <div class="container">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    Grade6 Online Learning
                </a>
            </div>


            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="intro.php" class="nav-link px-2 link-secondary">แนะนำ</a></li>
                <li><a href="subject.php" class="nav-link px-2 ">รายวิชา</a></li>
                <li><a href="profile.php" class="nav-link px-2">โปรไฟล์</a></li>
                <li><a href="about_us.php" class="nav-link px-2">เกี่ยวกับเรา</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="sign-up.php">
                    <button type="button" class="btn btn-outline-primary me-2">logout</button></a>
            </div>
            </head>
            <section class="py-5 text-center container">
            
            <main>
                <section class="py-5 text-center container">
                    <div class="row py-lg-2">
                        <div class="col-lg-8 col-md-8 mx-auto">
                            <h1 class="fw-light">คลิกเลือกหัวข้อที่สนใจ</h1>
                            <p class="lead text-body-secondary">ช่วยแนะนำวิดิโอของรายวิชาที่สนใจ
                                เพื่อความรวดเร็วและสะดวกสบายในการค้นหาข้อมูล </p>
                        </div>
                    </div>
                    <!--ต้องสร้างหน้า intro2,3,4,5 ที่ใช่ขึ้นvideo-->
                    <div>
                        <a href="introM.php">
                            <button type="button" class="btn btn-danger">วิชา คณิตศาสตร์</button></a>
                        <a href="introT.php">
                            <button type="button" class="btn btn-success">วิชา ภาษาไทย</button></a>
                        <a href="introS.php">
                            <button type="button" class="btn btn-warning">วิชา วิทยาศาสตร์</button></a>
                        <a href="introE.php">
                            <button type="button" class="btn btn-info">วิชา ภาษาอังกฤษ</button></a>
                    </div>


           

</body>

</html>