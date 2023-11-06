<!DOCTYPE html><!--http://localhost/grade6onlinelearning/subject.php-->
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
	</style><!-- Custom Login & Register CSS -->
    <link rel="stylesheet" href="custom.css">
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
                <li><a href="intro.php" class="nav-link px-2">แนะนำ</a></li>
                <li><a href="subject.php" class="nav-link px-2 link-secondary">รายวิชา</a></li>
                <li><a href="profile.php" class="nav-link px-2">โปรไฟล์</a></li>
                <li><a href="about_us.php" class="nav-link px-2">เกี่ยวกับเรา</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="sign-up.php">
                    <button type="button" class="btn btn-outline-primary me-2">logout</button></a>
            </div>
            </head>

            <main class="container"> <!--เปลี่ยนใหม่ได้-->
                <div class="p-4 p-md-5 mb-4 rounded text-body-center bg-body-secondary">
                    <div class="col-lg-6 px-0">
                        <h2 class="display-4 fst-center">หมวดหมู่รายวิชา</h2>
                        <p class="lead my-3">คณิตศาสตร์ , ภาษาไทย , วิทยาศาสตร์ , ภาษาอังกฤษ </p>
                    </div>
                </div>


                <!--เริ่มหมวดหมู่วิชา เปลี่ยนหัวข้อวิชาด้วย-->
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div
                            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h4 class="mb-0  text-primary-emphasis">วิชา คณิตศาสตร์</h4>
                                <div class="mb-1 text-body-secondary">ประถมศึกษาปีที่6</div>
                                <p class="card-text mb-auto">-จำนวนนับ และการบวก การลบ การคูณ การหาร<br>-สมการ</p>
                                <a href="maths.php"
                                    class="icon-link gap-1 icon-link-hover stretched-link"><!--ลิ้งค์มาใส่-->
                                    ดูเพิ่มเติม
                                </a>
                            </div>
                            <div class="col-auto d-none d-lg-block"><!--เอารูปย่อมาใส่-->
                                <img src="https://scontent.fbkk9-2.fna.fbcdn.net/v/t1.15752-9/396531113_335623175822331_556019788942424450_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=hDHpVptLo3UAX8Sny7G&_nc_ht=scontent.fbkk9-2.fna&oh=03_AdSrGfSBZ32BiXsvCzaT0FBZdID6LMQ39NCGnUzkJjIPCQ&oe=656CA17D"
                                    width="200" height="250" />
                            </div>
                        </div>
                    </div>
                    <!--เขียนแต่ละหัวข้อเพิ่ม จบหนึ่งวิชา-->
                    <div class="col-md-6">
                        <div
                            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h4 class="mb-0  text-primary-emphasis">วิชา ภาษาไทย</h4>
                                <div class="mb-1 text-body-secondary">ประถมศึกษาปีที่6</div>
                                <p class="mb-auto">-ชนิดของคำ<br>-ประโยค</p>
                                <a href="thai.php" class="icon-link gap-1 icon-link-hover stretched-link"><!--ลิ้งค์มาใส่-->
                                    ดูเพิ่มเติม
                                </a>
                            </div>
                            <div class="col-auto d-none d-lg-block"><!--เอารูปย่อมาใส่-->
                                <img src="https://scontent.fbkk12-2.fna.fbcdn.net/v/t1.15752-9/398269894_664177755517883_6644433737567421577_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=Xb_rer4kxtoAX-xq9VL&_nc_ht=scontent.fbkk12-2.fna&oh=03_AdRyUzRzgXDtV_goD5dwwK5DhdYXdfltZKlq8Hh4A7neLA&oe=656CC793"
                                    width="200" height="250" />
                            </div>
                        </div>
                    </div>
                </div>
                <!--เขียนแต่ละหัวข้อเพิ่ม จบหนึ่งวิชา-->
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div
                            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h4 class="mb-0  text-primary-emphasis">วิชา วิทยาศาสตร์</h4>
                                <div class="mb-1 text-body-secondary">ประถมศึกษาปีที่6</div>
                                <p class="card-text mb-auto">-อาหารและสารอาหาร<br>-ร่างกายมนุษย์</p>
                                <a href="sci.php" class="icon-link gap-1 icon-link-hover stretched-link"><!--ลิ้งค์มาใส่-->
                                    ดูเพิ่มเติม
                                </a>
                            </div>
                            <div class="col-auto d-none d-lg-block"><!--เอารูปย่อมาใส่-->
                                <img src="https://www.suksapunkalasin.net/book/wp-content/uploads/2021/12/1638016FC-%E0%B9%81%E0%B8%9A%E0%B8%9A%E0%B8%9D%E0%B8%B6%E0%B8%81%E0%B8%AB%E0%B8%B1%E0%B8%94-%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C-%E0%B8%9B.6-%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%A1-1.jpg"
                                    width="200" height="250" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div
                            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h4 class="mb-0  text-primary-emphasis">วิชา ภาษาอังกฤษ</h4>
                                <div class="mb-1 text-body-secondary">ประถมศึกษาปีที่6</div>
                                <p class="mb-auto">-Grammar Usage</p>
                                <a href="eng.php" class="icon-link gap-1 icon-link-hover stretched-link"><!--ลิ้งค์มาใส่-->
                                    ดูเพิ่มเติม
                                </a>
                            </div>
                            <div class="col-auto d-none d-lg-block"><!--เอารูปย่อมาใส่-->
                            <img src="https://www.suksapunkalasin.net/book/wp-content/uploads/2021/12/1612032FC-%E0%B8%9A%E0%B8%A3.Smile-%E0%B8%9B.6.jpg"
                                    width="200" height="250" />
                            </div>
                        </div>
                    </div>
                </div>
                <!--เขียนแต่ละหัวข้อเพิ่ม จบหนึ่งวิชา-->
</body>

</html>