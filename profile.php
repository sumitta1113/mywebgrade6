<?php
session_start();
include('server.php'); ?>

Chonticha Prae
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
        body {
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
                <li><a href="intro.php" class="nav-link px-2">แนะนำ</a></li>
                <li><a href="subject.php" class="nav-link px-2">รายวิชา</a></li>
                <li><a href="profile.php" class="nav-link px-2 link-secondary">โปรไฟล์</a></li>
                <li><a href="about_us.php" class="nav-link px-2 ">เกี่ยวกับเรา</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="login.php">
                    <button type="button" class="btn btn-outline-primary me-2">logout</button></a>
            </div>
            </head>
    </div>
    <main>
        <div class="col-lg-2 col-md-8 mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" fill="currentColor"
                class="bi bi-person-vcard" viewBox="0 0 16 16">
                <path
                    d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                <path
                    d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
            </svg>
        </div><br>
        <section class="py-5 text-center container">
            <div class="row py-lg-2">
                <div class="col-lg-8 col-md-8 mx-auto">
                    <h1 class="fw-light">ข้อมูลของฉัน</h1>
                    <!--<p class="lead text-body-secondary">ชื่อ </p>-->
                </div>
            </div>
            <?php $id = $_SESSION['id'] ?>
            <p class="lead text-body-secondary">id :
                <?php echo $id; ?>

            <p class="lead text-body-secondary">Firstname :
                <?php echo $_SESSION['firstname']; ?>
            </p>
            <p class="lead text-body-secondary">Lastname :
                <?php echo $_SESSION['lastname']; ?>
            </p>
            <p class="lead text-body-secondary">email :
                <?php echo $_SESSION['email']; ?>
            </p><br><br>

	<?php
	$id = $_SESSION['id'];

	$sql = "
	SELECT namec 
	FROM user,history 
	WHERE user.id = '$id' AND user.id = history.fid ;
	";
	$result = mysqli_query($conn, $sql);
	?>
	

		<thead>
			<tr>
	
				<th><div class="col-lg-8 col-md-8 mx-auto"><h1 class="fw-light">ประวัติคลิปที่เรียนแล้ว</h1></div></th>
			</tr>
		</thead>
		<hr>
		<?php
		$i = 1;
		while ($objresult = mysqli_fetch_array($result)) {
			?>
			<tbody>
				<tr>
					<td>
                    <p class="lead text-body-secondary"><?php echo $objresult["namec"]; ?></p>
						<hr>
					</td>
				</tr>
				<?php
				$i++;
		}
		?>
			</table>
            

			<?php
			mysqli_close($conn); // ปิดฐานข้อมูล
			echo "<br><br>";
			echo "--- END ---";
			?>









</body>

</html>