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
	<?php $this->load->view('navbar') ?>
	<!-- / header -->
	<div class="divider"></div>
	<div class="slider">
		<ul class="bxslider">
			<li>
				<div class="container">
					<div class="info">
						<h2>It’s Time to <br><span>Get back to school</span></h2>
					</div>
				</div>
				<!-- / content -->
			</li>
		</ul>
		<div class="bg-bottom"></div>
	</div>

	<section class="posts">
		<div class="container">
			<article>
				<div class="pic"><img width="121" src="assets/images/2.png" alt=""></div>
				<div class="info">
					<h3>The best learning methods</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architecto beatae vitae dicta sunt explicabo. </p>
				</div>
			</article>
			<article>
				<div class="pic"><img width="121" src="assets/images/3.png" alt=""></div>
				<div class="info">
					<h3>Awesome results of our students</h3>
					<p>Vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.</p>
				</div>
			</article>
		</div>
		<!-- / container -->
	</section>

	<section class="news">
		<div class="container">
			<h2>Latest news</h2>
			<article>
				<div class="pic"><img src="assets/images/sekolah.png" alt=""></div>
				<div class="info">
					<h4>Sekolah Terbaik Se-Indonesia Raya</h4>
					<p class="date">14 APR 2020, Asad Rifqi</p>
					<p>Maju Mundur High School didirikan pada tanggal 01 Januari 1993, dengan surat dari Kepala Kantor Wilayah Depdikbud Propinsi Amerika Tengah (...)</p>
					<a class="more" href="welcome/tentangkami">Read more</a>
				</div>
			</article>
			<article>
				<div class="pic"><img src="assets/images/1_1.png" alt=""></div>
				<div class="info">
					<h4>PENCAPAIAN TERBAIK DIGISCHOOLS AWARD 2020</h4>
					<p class="date">14 Desember 2020, Lukman Hakim</p>
					<p>Maju Mundur High Schools mendapatkan penghargaan sebagai Pencapaian Terbaik Digischools Award 2020 tingkat menengah atas dalam kategori inovasi penyelenggaraan pembelajaran dari rumah (BDR) selama masa pandemi dari aktivitas yang dibagikan di media resmi sekolah (...)</p>
					<a class="more" href="berita/pencapaian">Read more</a>
				</div>
			</article>
			<div class="btn-holder">
				<li><a class="btn" href="<?php echo base_url('berita') ?>">See archival news</a></li>
			</div>
		</div>
		<!-- / container -->
	</section>

	<section class="events">
		<div class="container">
			<h2>Upcoming events</h2>
			<article>
				<div class="current-date">
					<p>April</p>
					<p class="date">15</p>
				</div>
				<div class="info">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

				</div>
			</article>
			<article>
				<div class="current-date">
					<p>April</p>
					<p class="date">17</p>
				</div>
				<div class="info">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

				</div>
			</article>
			<article>
				<div class="current-date">
					<p>April</p>
					<p class="date">25</p>
				</div>
				<div class="info">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

				</div>
			</article>
			<article>
				<div class="current-date">
					<p>April</p>
					<p class="date">29</p>
				</div>
				<div class="info">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>

				</div>
			</article>
			<div class="btn-holder">
				<a class="btn blue" href="welcome/events">See all upcoming events</a>
			</div>
		</div>
	</section>
	<div class="container">
		<a href="#fancy" class="info-request">
			<span class="holder">
				<span class="title">Request information</span>
				<span class="text">Do you have some questions? Fill the form and get an answer!</span>
			</span>
			<span class="arrow"></span>
		</a>
	</div>
	<?php $this->load->view('footer') ?>
</body>

</html>