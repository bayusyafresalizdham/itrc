<?php
	include_once 'Database.php';
	$db = new Database();

?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

 <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Page Title -->
	<title>ITRC 2016</title>
<!-- /Page title -->

<!-- Seo Tags -->
	<meta name="description" content="iSTTS Technology Robotic Competition" />
	<meta name="keywords" content="stts, itrc, surabaya, robotic, lomba, competition"/>
	<meta name="robots" content="index, follow">
<!-- /Seo Tags -->

<!-- Favicon and Touch Icons
========================================================= -->
	<link rel="shortcut icon" href="img/favicon2.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon2.ico" type="image/x-icon">
<!-- /Favicon
========================================================= -->

<!-- >> CSS
============================================================================== -->
	<!-- Bootstrap styles -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- /Bootstrap Styles -->
	<!-- Google Web Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Hind:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- /google web fonts -->
	<!-- owl carousel -->
	<link href="vendor/owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="vendor/owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">
	<!-- /owl carousel -->
	<!-- fancybox.css -->
	<link href="vendor/fancybox/jquery.fancybox.css" rel="stylesheet">
	<!-- /fancybox.css -->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	<!-- /Font Awesome -->
	<!-- Main Styles -->
	<link href="css/styles.css" rel="stylesheet">
	<!-- /Main Styles -->
<!-- >> /CSS
============================================================================== -->
</head>
<body>


<!-- Page Loader
========================================================= -->
<div class="loader-container" id="page-loader">
  <div class="loading-wrapper loading-wrapper-hide">
  	<div class="loader-animation" id="loader-animation">
  		<svg class="svg-loader" width=100 height=100>
		  <circle cx=50 cy=50 r=25 />
		</svg>
  	</div>
    <!-- Edit With Your Name -->
    <div class="loader-name" id="loader-name">
      <img src="img/loader-logo.png" alt="">
    </div>
    <!-- /Edit With Your Name -->
    <!-- Edit With Your Job -->
												<?php $result = $db->query('select * from lomba limit 1')?>
    <p class="loader-job" id="loader-job"><?php while($row = $result->fetch_assoc()){ echo $row['tgl'];} ?> di iSTTS</p>
    <!-- /Edit With Your Job -->
  </div>
</div>
<!-- /End of Page loader
========================================================= -->

<!-- Header
================================================== -->
<header id="header" class="">
	<div class="container">
		<!-- logo -->
		<a href="index.php">
			<div class="header-logo" id="header-logo">
				<img src="img/intro-logo4.png" alt=""/>
			</div>
		</a>
		<!-- /logo -->
		<!-- MAIN MENU -->
	    <nav class="">
	      <ul class="hd-list-menu">
			<li><a href="#section-schedule">Schedule</a></li>
			<li><a href="#section-fee">Registration Fee</a></li>
			<li><a href="#section-faq">FAQ</a></li>
	        <li><a href="#section-download">Download</a></li>
	        <li><a href="#section-contact">Contact Us</a></li>
	        <li><a href="http://form.jotform.me/62818977124466">Register</a></li>
	      </ul>
	    </nav>
	    <!-- /MAIN MENU -->
	</div>
</header>
<!-- /Header
================================================== -->

<div class="page-wrapper">

	<div id="body-content">

		<!-- SECTION: Intro
		================================================== -->
		<div class="owl-carousel main-carousel" id="main-carousel">

			<!-- slide -->
			<div class="main-intro" style="background-image: url('img/favicon.png');">
				<div class="container">
					<div class="intro-content-wrapper viewport">
						<!-- INTRO CONTENT -->
						<!-- Adjust the margin-top in style atribute according to content to keep always centered vertically-->
						<div class="intro-content intro-content-slide1">
							<!-- row -->
							<div class="row">
								<!-- col -->
								<div class="col-sm-12">
									<!-- event logo -->
									<div class="ic-logo">
										<img src="img/intro-logo4.png" alt="">
										<!--<img src="img/logo1.png" height="130">-->
									</div>
									<!-- /event logo -->
									<!-- Event Infos -->
									<div class="ic-infos">

										<?php $result = $db->query('select * from lomba limit 1')?>
										<p><?php while($row = $result->fetch_assoc()){ echo $row['tgl'];} ?> di iSTTS</p>
									</div>
									<!-- /Event Infos -->
									<!-- Register Form -->
									<div class="intro-register-form-text">
										<p>- Register now! -</p>
									</div>
									<form class="form" id="intro-register-form">


										<!-- Buttons -->
										<div class="ic-buttons">
											<a href="http://form.jotform.me/62818977124466" class="btn"><i class="fa fa-paper-plane" ></i> &nbsp; register now</a>
											<a href="download.php" class="btn"><i class="fa fa-download" ></i> &nbsp; Download Poster</a>
										</div>
										<!-- /buttons -->
									</form>
									<!-- /Register Form -->
								</div>
								<!-- /col -->
							</div>
							<!-- /row -->

						</div>
						<!-- /INTRO CONTENT -->
					</div>
				</div>
			</div>
			<!-- /slide -->

			<!-- slide -->
			<div class="main-intro" style="background-image: url('img/bg4.jpg');">
				<div class="container">
					<div class="intro-content-wrapper viewport">
						<!-- Main Title -->
						<!-- Adjust the margin-top in css according to content to keep always centered vertically-->
						<div class="intro-content countdown-wrapper intro-content-slide2">
							<p class="countdown-title">Remaining time for registration</p>
							<!-- countDown -->
							<div id="countdown" class="row"></div>
							<!-- /countDown -->
							<p class="countdown-title2"><a href="http://form.jotform.me/62818977124466" class="btn"><i class="fa fa-paper-plane"></i> &nbsp; register now</a></p>
						</div>
						<!-- /Main Title -->
					</div>
				</div>
			</div>
			<!-- /slide -->

			<!-- slide -->
			<div class="main-intro" style="background-image: url('img/bg3b.jpg');">
				<div class="container">
					<div class="intro-content-wrapper viewport">
						<!-- Adjust the margin-top in css according to content to keep always centered vertically-->
						<div class="intro-content intro-content-slide3">
							<!-- row -->
							<div class="row">
								<!-- col -->
								<div class="col-md-10 col-md-offset-1">
									<img src="img/globe.png" alt="">
									<h1 class="intro-title1">Robotic Competition in STTS</h1>
									<p>Hello High School Student!!<br>
									We want you to finish our robot challenge.<br>
									So be prepared with it. 😉<br>
									Be the first to win iSTTS Technology Robot Competition!</p>
									<!-- Buttons -->
									<div class="ic-buttons">
										 <a href="http://form.jotform.me/62818977124466" class="btn"><i class="fa fa-paper-plane"></i> &nbsp; register now</a>
									</div>
									<!-- /Buttons -->
								</div>
								<!-- /col -->
							</div>

							<!-- /row -->
						</div>
					</div>
				</div>
			</div>
			<!-- /slide -->
		</div>
		<!-- /SECTION: Intro
		================================================== -->

		<!-- SECTION: Event Infos
		================================================== -->
		<div class="section-event-infos inverted-section" id="section-schedule">
			<div class="container-fluid">
				<div class="event-infos row">
					<!-- date -->
					<div class="event-info-col">
						<div class="event-info-ico"><span class="fa fa-calendar"></span></div>
						<h3 class="main-title3">Location : iSTTS</h3>
						<p>
						Jalan Ngagel Jaya Tengah 73 - 77 Surabaya</p>
					</div>
					<!-- /date -->
					<!-- Time -->
					<div class="event-info-col">
						<div class="event-info-ico"><span class="fa fa-location-arrow"></span></div>
						<h3 class="main-title3">Total Prize :</h3>
						<p>IDR 5.500.000</p>
					</div>
					<!-- /Time -->
					<!-- Time -->

					<div class="event-info-col">
						<div class="event-info-ico"><span class="fa fa-ticket"></span></div>
						<h3 class="main-title3">SMA</h3>

						<?php $result = $db->query("select * from detail where title='SMA'");?>
						<p><strong><?php   while($row = $result->fetch_assoc()){ echo $row['peserta'];} ?></strong> Team Target</p>
					</div>
					<!-- /Time -->
					<!-- Time -->
					<div class="event-info-col">
						<div class="event-info-ico"><span class="fa fa-microphone"></span></div>
						<h3 class="main-title3">SMP</h3>
						<?php $result = $db->query("select * from detail where title='SMP'");?>
						<p><strong><?php   while($row = $result->fetch_assoc()){ echo $row['peserta'];} ?></strong> Team Target</p>
					</div>
					<!-- /Time -->
				</div>
			</div>
		</div>
		<!-- SECTION: /Event Infos
		================================================== -->


		<!-- SECTION: Event Schedule
		================================================== -->
		<div class="section-schedule section-bg-left" id="section-schedule">
			<div class="container">

				<?php $re1 = $db->query("select * from pemanang where role= '1'");
				$cei = 0;
				while($row = $re1->fetch_assoc()){
					if($row['nama'] != "" && $row['sekolah'] != ""){
						$cei += 1;
					}
					
				}
				if($cei >1){
				?>
				<div class="section-title-wrapper">
					<h2 class="title-section"><span class="title-section-bg">Pemenang SMA <small></small></span></h2>
				</div>
				
				<div class="row">

					<!-- item -->
					<?php $re = $db->query("select * from pemanang where role='1' limit ".$cei);?>
					<?php while($row = $re->fetch_assoc()){?>
					<div class="<?php if($cei == 2){ echo "col-sm-6";}else{echo "col-sm-4";}?>">
						<!-- price ticket -->
							<div class="price-ticket-item-wrapper">
								<!-- Front card -->
								<div class="price-ticket-item-front">
									<div class="price-ticket-item-border">
									<!-- row -->
									<div class="row">
										<!-- col -->
										<div class="col-sm-12">
											<!-- ticket price -->
											
											<h3 class="price-ticket-title"><?php echo $row['juara'];?> SMA</h3>
											<p class="price-ticket-type" style="font-size:20px;"><b><?php echo $row['nama'];?></b></p>
											<p class="price-ticket-type"><b>(<?php echo $row['sekolah'];?>)</b></p>
											<!-- /ticket-price -->
										</div>
										<!-- /col -->
									</div>
									<!-- /row -->
								</div>
							</div>
							<!-- /front-card -->
							</div>
						<!-- /price ticket -->
					</div>
					<?php }?>
					<!-- /item -->
				</div>
				<div class="section-title-wrapper">
					<h2 class="title-section"><span class="title-section-bg">Pemenang SMP <small></small></span></h2>
				</div>
				
				<div class="row">

					<!-- item -->
					<?php $re = $db->query("select * from pemanang where role='2' limit ".$cei);?>
					<?php while($row = $re->fetch_assoc()){?>
					<div class="<?php if($cei == 2){ echo "col-sm-6";}else{echo "col-sm-4";}?>">
						<!-- price ticket -->
							<div class="price-ticket-item-wrapper">
								<!-- Front card -->
								<div class="price-ticket-item-front">
									<div class="price-ticket-item-border">
									<!-- row -->
									<div class="row">
										<!-- col -->
										<div class="col-sm-12">
											<!-- ticket price -->
											
											<h3 class="price-ticket-title"><?php echo $row['juara'];?> SMP</h3>
											<p class="price-ticket-type" style="font-size:20px;"><b><?php echo $row['nama'];?></b></p>
											<p class="price-ticket-type"><b>(<?php echo $row['sekolah'];?>)</b></p>
											<!-- /ticket-price -->
										</div>
										<!-- /col -->
									</div>
									<!-- /row -->
								</div>
							</div>
							<!-- /front-card -->
							</div>
						<!-- /price ticket -->
					</div>
					<?php }?>
					<!-- /item -->
				</div>
				<?php }?>
				<!-- Section title -->
				<div class="section-title-wrapper">
					<h2 class="title-section"><span class="title-section-bg">Event Schedule <small></small></span></h2>
				</div>
				<!-- /Section title -->
	


				<!-- TABS -->
				<div class="tabs">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-2 schedule-tab-links-wrapper">
							<!-- Tab links -->
							<ul class="tab-links schedule-tab-links">
						        <li class="active"><a href="#schedule-tab1">
									<span class="fa fa-calendar"></span>&nbsp;&nbsp; Workshop</a></li>
									<li><a href="#schedule-tab2"><span class="fa fa-calendar"></span>&nbsp;&nbsp; Registration</a></li>
									<li><a href="#schedule-tab3"><span class="fa fa-calendar"></span>&nbsp;&nbsp; TM</a></li>
									<li><a href="#schedule-tab4"><span class="fa fa-calendar"></span>&nbsp;&nbsp; ITRC</a></li>
						    </ul>
						    <!-- /Tab Links -->
						</div>
					</div>


					<!-- Schedule Tabs -->
				    <div class="schedule-tabs">
						<!-- Schedule Tab -->
				    	<div class="schedule-tab tab" id="schedule-tab1">
				    		<!-- schedule list -->
				    		<div class="schedule-list">

								<!-- Schedule itens header -->
								<div class="schedule-item-header">
									<div class="row">
										<div class="col-sm-2">
											<!-- schedule item bar -->
											<div class="schedule-item-block schedule-item-block-top">
												<div class="schedule-item-bar schedule-item-bar-top"></div>
											</div>
											<!-- /schedule item bar -->
										</div>
										<div class="col-sm-10">
										</div>
									</div>
								</div>
								<!-- /Schedule itens header -->

								<!-- Schedule item -->
								<div class="schedule-item">
									<div class="row">
										<div class="col-sm-2">
											<!-- schedule item bar -->
											<div class="schedule-item-block">
												<div class="schedule-item-bar"></div>
											</div>
											<!-- /schedule item bar -->
										</div>
										<div class="col-sm-10 schedule-item-content-wrapper">
											<!-- schedule item content -->
											<?php $result1 = $db->query("select * from acara where category='1'");?>
											<?php   while($row = $result1->fetch_assoc()){ ?>
											<div class="schedule-item-content">
												<div class="row">
													<!-- col -->
													<div class="col-sm-12">
														<div class="schedule-item-infos">
															<h4 class="schedule-item-date"><?php echo $row['child_title'];?></h4>
															<h3 class="schedule-item-title"><?php echo $row['title'];?></h3>
															<div class="schedule-item-text">
																<p><?php echo $row['desc'];?></p>
															</div>
														</div>
													</div>
													<!-- /col -->
												</div>
											</div>
											<?php }?>
											<!-- schedule item content -->
										</div>
									</div>
								</div>
								<!-- /Schedule item -->
									<!-- Schedule itens footer -->
									<div class="schedule-item-footer">
										<div class="row">
											<div class="col-sm-2">
												<!-- schedule item bar -->
												<div class="schedule-item-block schedule-item-block-bottom">
													<div class="schedule-item-bar schedule-item-bar-bottom"></div>
												</div>
												<!-- /schedule item bar -->
											</div>
											<div class="col-sm-10">
											</div>
										</div>
									</div>
								<!-- /Schedule itens footer -->
							</div>
				    		<!-- /schedule list -->
				    	</div>
				    	<!-- /Schedule Tab -->

						<!-- Schedule Tab -->
				    	<div class="schedule-tab tab" id="schedule-tab2">
				    		<!-- schedule list -->
				    		<div class="schedule-list">

								<!-- Schedule itens header -->
								<div class="schedule-item-header">
									<div class="row">
										<div class="col-sm-2">
											<!-- schedule item bar -->
											<div class="schedule-item-block schedule-item-block-top">
												<div class="schedule-item-bar schedule-item-bar-top"></div>
											</div>
											<!-- /schedule item bar -->
										</div>
										<div class="col-sm-10">
										</div>
									</div>
								</div>
								<!-- /Schedule itens header -->

								<!-- Schedule item -->
								<div class="schedule-item">
									<div class="row">
										<div class="col-sm-2">
											<!-- schedule item bar -->
											<div class="schedule-item-block">
												<div class="schedule-item-bar"></div>
											</div>
											<!-- /schedule item bar -->
										</div>
										<div class="col-sm-10 schedule-item-content-wrapper">
											<!-- schedule item content -->
											<?php $result1 = $db->query("select * from acara where category='2'");?>
											<?php   while($row = $result1->fetch_assoc()){ ?>
											<div class="schedule-item-content">
												<div class="row">
													<!-- col -->
													<div class="col-sm-12">
														<div class="schedule-item-infos">
															<h4 class="schedule-item-date"><?php echo $row['child_title'];?></h4>
															<h3 class="schedule-item-title"><?php echo $row['title'];?></h3>
															<div class="schedule-item-text">
																<p><?php echo $row['desc'];?></p>
															</div>
														</div>
													</div>
													<!-- /col -->
												</div>
											</div>
											<?php }?>
											<!-- schedule item content -->
										</div>
									</div>
								</div>
								<!-- /Schedule item -->
									<!-- Schedule itens footer -->
									<div class="schedule-item-footer">
										<div class="row">
											<div class="col-sm-2">
												<!-- schedule item bar -->
												<div class="schedule-item-block schedule-item-block-bottom">
													<div class="schedule-item-bar schedule-item-bar-bottom"></div>
												</div>
												<!-- /schedule item bar -->
											</div>
											<div class="col-sm-10">
											</div>
										</div>
									</div>
								<!-- /Schedule itens footer -->
							</div>
				    		<!-- /schedule list -->
				    	</div>
				    	<!-- /Schedule Tab -->

				    	<!-- Schedule Tab -->
				    	<div class="schedule-tab tab" id="schedule-tab3">
				    		<!-- schedule list -->
				    		<div class="schedule-list">

								<!-- Schedule itens header -->
								<div class="schedule-item-header">
									<div class="row">
										<div class="col-sm-2">
											<!-- schedule item bar -->
											<div class="schedule-item-block schedule-item-block-top">
												<div class="schedule-item-bar schedule-item-bar-top"></div>
											</div>
											<!-- /schedule item bar -->
										</div>
										<div class="col-sm-10">
										</div>
									</div>
								</div>
								<!-- /Schedule itens header -->

								<!-- Schedule item -->
								<div class="schedule-item">
									<div class="row">
										<div class="col-sm-2">
											<!-- schedule item bar -->
											<div class="schedule-item-block">
												<div class="schedule-item-bar"></div>
											</div>
											<!-- /schedule item bar -->
										</div>
										<div class="col-sm-10 schedule-item-content-wrapper">
											<?php $result1 = $db->query("select * from acara where category='3'");?>
											<?php   while($row = $result1->fetch_assoc()){ ?>
											<div class="schedule-item-content">
												<div class="row">
													<!-- col -->
													<div class="col-sm-12">
														<div class="schedule-item-infos">
															<h4 class="schedule-item-date"><?php echo $row['child_title'];?></h4>
															<h3 class="schedule-item-title"><?php echo $row['title'];?></h3>
															<div class="schedule-item-text">
																<p><?php echo $row['desc'];?></p>
															</div>
														</div>
													</div>
													<!-- /col -->
												</div>
											</div>
											<?php }?>
											<!-- schedule item content -->
										</div>
									</div>
								</div>
								<!-- /Schedule item -->
									<!-- Schedule itens footer -->
									<div class="schedule-item-footer">
										<div class="row">
											<div class="col-sm-2">
												<!-- schedule item bar -->
												<div class="schedule-item-block schedule-item-block-bottom">
													<div class="schedule-item-bar schedule-item-bar-bottom"></div>
												</div>
												<!-- /schedule item bar -->
											</div>
											<div class="col-sm-10">
											</div>
										</div>
									</div>
								<!-- /Schedule itens footer -->
							</div>
				    		<!-- /schedule list -->
				    	</div>
				    	<!-- /Schedule Tab -->

				    	<!-- Schedule Tab -->
				    	<div class="schedule-tab tab" id="schedule-tab4">
				    		<!-- schedule list -->
				    		<div class="schedule-list">

								<!-- Schedule itens header -->
								<div class="schedule-item-header">
									<div class="row">
										<div class="col-sm-2">
											<!-- schedule item bar -->
											<div class="schedule-item-block schedule-item-block-top">
												<div class="schedule-item-bar schedule-item-bar-top"></div>
											</div>
											<!-- /schedule item bar -->
										</div>
										<div class="col-sm-10">
										</div>
									</div>
								</div>
								<!-- /Schedule itens header -->

								<!-- Schedule item -->
								<div class="schedule-item">
									<div class="row">
										<div class="col-sm-2">
											<!-- schedule item bar -->
											<div class="schedule-item-block">
												<div class="schedule-item-bar"></div>
											</div>
											<!-- /schedule item bar -->
										</div>
										<div class="col-sm-10 schedule-item-content-wrapper">
											<!-- schedule item content -->
											<?php $result1 = $db->query("select * from acara where category='4'");?>
											<?php   while($row = $result1->fetch_assoc()){ ?>
											<div class="schedule-item-content">
												<div class="row">
													<!-- col -->
													<div class="col-sm-12">
														<div class="schedule-item-infos">
															<h4 class="schedule-item-date"><?php echo $row['child_title'];?></h4>
															<h3 class="schedule-item-title"><?php echo $row['title'];?></h3>
															<div class="schedule-item-text">
																<p><?php echo $row['desc'];?></p>
															</div>
														</div>
													</div>
													<!-- /col -->
												</div>
											</div>
											<?php }?>
											<!-- schedule item content -->
										</div>
									</div>
								</div>
								<!-- /Schedule item -->

									<!-- Schedule itens footer -->
									<div class="schedule-item-footer">
										<div class="row">
											<div class="col-sm-2">
												<!-- schedule item bar -->
												<div class="schedule-item-block schedule-item-block-bottom">
													<div class="schedule-item-bar schedule-item-bar-bottom"></div>
												</div>
												<!-- /schedule item bar -->
											</div>
											<div class="col-sm-10">
											</div>
										</div>
									</div>
									<!-- /Schedule itens footer -->
							</div>
				    		<!-- /schedule list -->
				    	</div>
				    	<!-- /Schedule Tab -->

				    	<!-- Schedule Tab -->
				    	<!-- / Schedule Tab -->
				    </div>
					<!-- /Schedule Tabs -->

				</div>
				<!-- /TABS -->

			</div>
		</div>
		<!-- /SECTION: Event Schedule
		================================================== -->

		<!-- SECTION: Prices
		================================================== -->
		<div class="section-prices section-padding section-bg-left" id="section-fee">
			<div class="container">

				<!-- Section title -->
				<div class="section-title-wrapper">
					<h2 class="title-section">Registration Fee</h2>
				</div>
				<!-- /Section title -->

				<!-- Princing Tickets -->
				<div class="row">

					<!-- item -->
					<div class="col-sm-6">
						<!-- price ticket -->
							<div class="price-ticket-item-wrapper">
								<!-- Front card -->
								<div class="price-ticket-item-front">
									<div class="price-ticket-item-border">
									<!-- row -->
									<div class="row">
										<!-- col -->
										<div class="col-sm-6">
											<!-- ticket price -->
											<?php $result1 = $db->query("select * from detail where title='SMA'");?>
											<?php   while($row = $result1->fetch_assoc()){ ?>
											<h3 class="price-ticket-title"><?php echo $row['title'];?></h3>
											<p class="price-ticket-type"><?php echo $row['biaya'];?></p>
											<?php }?>
											<!-- /ticket-price -->
										</div>
										<!-- /col -->
										<!-- col -->
										<div class="col-sm-6 no-spadding">
											<div class="price-ticket-infos-wrapper">
												<p><strong>This Includes:</strong></p>
												<ul class="clean-list">
													<?php $result = $db->query("select * from idetail where jenis='1'");?>
													<?php while($row=$result->fetch_assoc()){?>
													<li><i class="fa fa-check"></i>&nbsp; <?php echo $row['desc'];?></li>
													<?php }?>
												</ul>
											</div>
										</div>
										<!-- /col -->
									</div>
									<!-- /row -->
								</div>
							</div>
							<!-- /front-card -->
							<!-- Back Card -->
							<div class="price-ticket-item-back" onclick="move()">
								<div class="price-ticket-item-border">
									<div class="price-ticket-buy">
										<p class="ticket-item-buy-ico"><i class="fa fa-ticket"></i></p>
										<h3 class="ticket-item-buy-text">Register Now!</h3>
										<p><i>just 1 click away!</i></p>
									</div>
								</div>
							</div>
							<!-- /Back Card -->
							</div>
						<!-- /price ticket -->
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="col-sm-6">
						<!-- price ticket -->
							<div class="price-ticket-item-wrapper">
								<!-- Front card -->
								<div class="price-ticket-item-front">
									<div class="price-ticket-item-border">
										<!-- row -->
										<div class="row">
											<!-- col -->
											<div class="col-sm-6">
												<!-- ticket price -->
												<?php $result1 = $db->query("select * from detail where title='SMP'");?>
												<?php   while($row = $result1->fetch_assoc()){ ?>
												<h3 class="price-ticket-title"><?php echo $row['title'];?></h3>
												<p class="price-ticket-type"><?php echo $row['biaya'];?></p>
												<?php }?>
												<!-- /ticket-price -->
											</div>
											<!-- /col -->
											<!-- col -->
											<div class="col-sm-6 no-spadding">
												<div class="price-ticket-infos-wrapper">
													<p><strong>This Includes:</strong></p>
													<ul class="clean-list">
														<?php $result = $db->query("select * from idetail where jenis='2'");?>
														<?php while($row=$result->fetch_assoc()){?>
														<li><i class="fa fa-check"></i>&nbsp; <?php echo $row['desc'];?></li>
														<?php }?>
													</ul>
												</div>
											</div>
											<!-- /col -->
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /front-card -->
								<!-- Back Card -->
								<div class="price-ticket-item-back" onclick="move()">
									<div class="price-ticket-item-border">
										<div class="price-ticket-buy">
											<p class="ticket-item-buy-ico"><i class="fa fa-ticket"></i></p>
											<h3 class="ticket-item-buy-text">Register Now!</h3>
											<p><i>just 1 click away!</i></p>
										</div>
									</div>
								</div>
								<!-- /Back Card -->
							</div>
						<!-- /price ticket -->
					</div>
					<!-- /item -->

				</div>
				<!-- /Princing Tickets -->

			</div>
		</div>
		<!-- /SECTION: Prices
		================================================== -->

		<!-- SECTION: FAQ
		================================================== -->
		<div class="section-faq section-padding section-bg-right" id="section-faq">
			<div class="container">
				<!-- Section title -->
				<div class="section-title-wrapper">
					<h2 class="title-section">Faq</h2>
				</div>
				<!-- /Section title -->

				<!-- FAQ list -->
				<div class="schedule-list">

					<!-- FAQ itens header -->
					<div class="schedule-item-header">
						<div class="row">
							<div class="col-sm-2">
								<!-- FAQ item bar -->
								<div class="schedule-item-block faq-item-block schedule-item-block-top">
									<div class="schedule-item-bar schedule-item-bar-top"></div>
								</div>
								<!-- /FAQ item bar -->
							</div>
							<div class="col-sm-10">
							</div>
						</div>
					</div>
					<!-- /FAQ itens header -->

					<!-- FAQ item -->

					<?php $result = $db->query("select * from faq");?>
					<?php while($row = $result->fetch_assoc()){?>
					<div class="schedule-item">
						<div class="row">
							<div class="col-sm-2">
								<!-- FAQ item bar -->
								<div class="schedule-item-block faq-item-block">
									<div class="schedule-item-bar"></div>
								</div>
								<!-- /FAQ item bar -->
							</div>
							<div class="col-sm-10 schedule-item-content-wrapper">
								<!-- FAQ item content -->
								<div class="schedule-item-content faq-item-content">
									<div class="row">
										<!-- col -->
										<div class="col-sm-12">
											<div class="schedule-item-infos">
												<!-- FAQ Question -->
												<h3 class="schedule-item-title faq-item-title"><?php echo $row['ask'];?></h3>
												<!-- /FAQ Question -->
												<!-- FAQ reply -->
												<div class="schedule-item-text">
													<?php echo $row['answer'];?>
												</div>
												<!-- /FAQ reply -->
											</div>
										</div>
										<!-- /col -->
									</div>
								</div>
								<!-- FAQ item content -->
							</div>
						</div>
					</div>
					<!-- /FAQ item -->

					<?php }?>
					<!-- FAQ itens footer -->
					<div class="schedule-item-footer">
						<div class="row">
							<div class="col-sm-2">
								<!-- FAQ item bar -->
								<div class="schedule-item-block faq-item-block schedule-item-block-bottom">
									<div class="schedule-item-bar schedule-item-bar-bottom"></div>
								</div>
								<!-- /FAQ item bar -->
							</div>
							<div class="col-sm-10">
							</div>
						</div>
					</div>
					<!-- /FAQ itens footer -->
				</div>
				<!-- /FAQ list -->
			</div>
		</div>
		<!-- /SECTION: FAQ
		================================================== -->

		<!-- /SECTION: Download
		================================================== -->
		<div class="section-team inverted-section2 section-padding" id="section-download">
			<div class="container">
				<!-- Section title -->
				<div class="section-title-wrapper">
					<h2 class="title-section">Download</h2>
					
					<a href="download1.php" class="btn"  style="margin-left:5px;"><i class="fa fa-download" ></i> &nbsp; Download Rules</a>
					<a href="download2.php" class="btn"  style="margin-left:5px;"><i class="fa fa-download" ></i> &nbsp; Download Soal</a>
					<a href="download.php" class="btn" style="margin-left:5px;"><i class="fa fa-download" ></i> &nbsp; Download Poster</a>
				</div>
				<!-- /Section title -->
			</div>
		</div>
		<!-- /SECTION: Download
		================================================== -->

		<!-- /SECTION: Contact Us
		================================================== -->
		<div class="section-prices section-padding section-bg-left" id="section-contact">
			<div class="container">
				<!-- Section title -->
				<div class="section-title-wrapper">
					<h2 class="title-section">Contact Us</h2>
						<?php $result = $db->query('select * from contact'); ?>
						<?php while($row = $result->fetch_assoc()){?>
						<p><a href="<?php echo $row['url'];?>" class="btn">&nbsp; <?php echo $row['title'];?> <?php echo $row['contact'];?></a></p>
						<?php }?>
				</div>
				<!-- /Section title -->
			</div>
		</div>
		<!-- /SECTION: Contact Us
		================================================== -->


		<!-- SECTION: Sponsors
		================================================== -->
		<div class="section-sponsors inverted-section2 section-padding " id="section-sponsors">
			<div class="container">
				<!-- Section title -->
				<div class="section-title-wrapper">
					<h2 class="title-section">Supported By</h2>
				</div>
				<!-- /Section title -->

				<div class="sponsors-list-wrapper">
					<div class="sponsors-list" id="sponsors-carousel">
						<!-- item -->
						<?php $result = $db->query('select * from sponsor'); ?>
						<?php while($row = $result->fetch_assoc()){?>
						<a href="<?php echo $row['redirect'];?>">
							<div class="sponsor-item">
								<img src="img/<?php echo $row['link'];?>"  height="70"  style="max-width:240px;">
							</div>
						</a>
						<?php }?>
						<!-- /item -->

					</div>
				</div>
			</div>
		</div>
		<!-- /SECTION: Sponsors
		================================================== -->

	</div>
</div>

<!-- /form-error -->
<!-- / Contact Form - Ajax Messages
========================================================= -->

<!-- >> JS
============================================================================== -->
<script>
function move(){

	document.location = "http://form.jotform.me/62818977124466";
}
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="vendor/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Crossbrowser-->
<script src="vendor/cross-browser.js"></script>
<!-- /Crossbrowser-->
<!-- CountDown -->
<script src="vendor/jquery.countdown.min.js"></script>
<!-- /CountDown -->
<!-- Waypoints-->
<script src="vendor/waypoints.min.js"></script>
<!-- /Waypoints-->
<!-- Validate -->
<script src="vendor/validate.js"></script>
<!-- / Validate -->
<!-- Fancybox -->
<script src="vendor/fancybox/jquery.fancybox.js"></script>
<!-- /fancybox -->
<!-- Owl Caroulsel -->
<script src="vendor/owl.carousel/owl-carousel/owl.carousel.js"></script>
<!-- /Owl Caroulsel -->
<!-- Main JS -->
<script src="js/main.js"></script>
<!-- /Main JS -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- >> /JS
============================================================================= -->
</body>
</html>
