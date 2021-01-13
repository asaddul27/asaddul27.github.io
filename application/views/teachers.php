<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Maju Mundur High school</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="<?php echo base_url('assets/css/style.css') ?>">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

	<header id="header">
		<?php $this->load->view('navbar') ?>
	</header>
	<!-- / header -->

	<div class="divider"></div>

	<div class="content">
		<div class="container">
			<h1 class="single">Guru - guru Di Maju Mundur High School</h1>

			<div class="main-content">
				<div class="slider-con">
					<ul class="bxslider">
						<li>
							<div class="slide">
								<ul>
									<li><a href="#"><img src="<?php echo base_url('assets/images/1.png') ?>" alt=""></a></li>
									<li><a href="#"><img src="<?php echo base_url('assets/images/b.png') ?>" alt=""></a></li>
									<li><a href="#"><img src="<?php echo base_url('assets/images/c.png') ?>" alt=""></a></li>
									<li><a href="#"><img src="<?php echo base_url('assets/images/d.png') ?>" alt=""></a></li>
									<li><a href="#"><img src="<?php echo base_url('assets/images/e.png') ?>" alt=""></a></li>
									<li><a href="#"><img src="<?php echo base_url('assets/images/f.png') ?>" alt=""></a></li>
									<li><a href="#"><img src="<?php echo base_url('assets/images/g.png') ?>" alt=""></a></li>
									<li><a href="#"><img src="<?php echo base_url('assets/images/h.png') ?>" alt=""></a></li>
									<li><a href="#"><img src="<?php echo base_url('assets/images/i.png') ?>" alt=""></a></li>
									<li><a href="#"><img src="<?php echo base_url('assets/images/j.png') ?>" alt=""></a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<?php $this->load->view('sidebarguru') ?>
			<!-- / sidebar -->

		</div>
		<?php $this->load->view('footer') ?>
</body>

</html>