<!Doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $pageTitle; ?></title>
        <meta name="description" content="Student Results Management system">
		<meta name="author" content="Kuda Rukuni">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/stylesheet.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="icon" type="image/x-icon" href="img/favicon.png" />        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <header class="container header_area fix" style="background-color: #00100f">
			<div id="sticker" style="background-color: #00100f">
				<div class="head">
					<a href="#"><div class="logo" fix>
						<img src="img/logo.png" alt="" />
					</div></a>
				</div>
					<div style="color: #0CC2AA; margin-left: 610px">
						<h2>Student Results Management System</h2>
					</div>
				</div>
				<div class="menu fix">
					<div class="dateshow fix"><p><?php echo date("d M Y"); ?></p></div>
				</div>
			</div>
		</header>
		<div class="maincontent container fix">
			<div id="stickerside" style="background-color: #00100f">
				<div class="sidebar fix" style="background-color: #00100f"><br>
						<ul style="margin-right: 20px;">
							<li><span class="spcl"><i class="fa fa-server" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Administrator</span></li>
								<ul>
									<li><a href="index.php"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Login</a></li>
								</ul>							
							<li><span class="spcl"><i class="fa fa-male" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Faculty Area</span></li>
								<ul>
									<li><a href="facultylogin.php"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Login</a></li>
									<li><a href="facultylogin.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Profile</a></li>
									<li><a href="facultylogin.php"><i class="fa fa-database" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Attendance</a></li>
								</ul>							
							<li><span class="spcl"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Student Area</span></li>
								<ul>
									<li><a href="st_login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Login</a></li>
									<li><a href="st_reg.php"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Register</a></li>
									<li><a href="st_login.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Profile</a></li>
									<li><a href="st_login"><i class="fa fa-outdent" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Result</a></li>
								</ul>					
						</ul>					
					</div>
				</div>
				<div class="content fix">