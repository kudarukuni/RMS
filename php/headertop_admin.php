<!Doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $pageTitle; ?></title>
        <meta name="description" content="University Management system">
		<meta name="author" content="Md Abul Kalam">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/stylesheet.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="plugins/file-uploader/css/jquery.fileupload.css">
		<link rel="stylesheet" href="plugins/file-uploader/css/jquery.fileupload-ui.css">
		<link rel="icon" type="image/x-icon" href="img/favicon.png" />
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    	<header class="container header_area" style="background-color: #00100f">
			<div id="sticker">
				<div class="head">
					<div style="color: #0CC2AA; margin-left: 10px">
						<h2>Results Management System</h2>
					</div>
				</div>
				<div class="menu ">
					<div class="dateshow fix"><p><?php echo date("d M Y"); ?></p></div>
					<ul>
						<?php if($user->get_admin_session()){ ?>
						<li><a href="admin_logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Logout</a></li>
						<li><a href="admin.php"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Options&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
						<li style="text-transform:uppercase;"><a href="admin.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php echo $admin_name; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>	
						<?php } ?>
					</ul>
				</div>
			</div>
		</header>
		<div class="info container fix">
