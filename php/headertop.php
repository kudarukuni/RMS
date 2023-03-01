<!Doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $pageTitle; ?></title>
        <meta name="description" content="Results Management system">
		<meta name="author" content="Md Abul Kalam">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/stylesheet.css">
        <link rel="stylesheet" href="css/main.css">
		
		<link rel="stylesheet" href="plugins/file-uploader/css/jquery.fileupload.css">
		<link rel="stylesheet" href="plugins/file-uploader/css/jquery.fileupload-ui.css">
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <header class="container header_area" style="background-color:#00100f">
			<div id="sticker">
				<div class="head">
					<div style="color: #0CC2AA;;margin-left: 20px">
						<h2>Results Management System</h2>
					</div>
				</div>
				<div class="menu ">
					<div class="dateshow fix"><p><?php echo date("d M Y"); ?></p></div>
					<ul>
						<?php if($user->getsession()){ ?>
						<li><a href="st_logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
						<li><a href="st_change_pass.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Change Password</a></li>
						<li><a href="view_single_result.php?vr=<?php echo $sid?>&vn=<?php echo $sname?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Result</a></li>
						<li><a href="st_profile.php"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $sid; ?></a></li>
						<?php } ?>
						<?php if($user->get_faculty_session()){ ?>
								<li><a href="facultylogout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
								<li><a href="class_att_fc.php"><i class="fa fa-cog" aria-hidden="true"></i> Options</a></li>
								<li><a href="fct_single_profile.php"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $fname;
								?></a></li>
								
							<?php } ?>
					</ul>
				</div>
			</div>
		</header>
		<div class="info container fix">
