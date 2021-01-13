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
            <h1 class="single">Guru - guru DI MAJU MUNDUR HIGH SCHOOL</h1>

            <div class="main-content">
                <div class="slider-con">
                    <ul class="bxslider">
                        <li>
                            <div class="slide">
                                <ul>
                                    <li><a href="#"><img src="<?php echo base_url('assets/images/guru01.png') ?>" alt=""></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <?php $this->load->view('sidebarguru') ?>
            <!-- / sidebar -->

        </div>
        <!-- / container -->
    </div>

    <footer id="footer">
        <div class="container">
            <section>
                <article class="col-1">
                    <h3>Contact</h3>
                    <ul>
                        <li class="address"><a href="#">151 W Adams St<br>Detroit, MI 48226</a></li>
                        <li class="mail"><a href="#">contact@harrisonuniversity.com</a></li>
                        <li class="phone last"><a href="#">(971) 536 845 924</a></li>
                    </ul>
                </article>
                <article class="col-2">
                    <h3>Forum topics</h3>
                    <ul>
                        <li><a href="#">Omnis iste natus error sit</a></li>
                        <li><a href="#">Nam libero tempore cum soluta</a></li>
                        <li><a href="#">Totam rem aperiam eaque </a></li>
                        <li><a href="#">Ipsa quae ab illo inventore veritatis </a></li>
                        <li class="last"><a href="#">Architecto beatae vitae dicta sunt </a></li>
                    </ul>
                </article>
                <article class="col-3">
                    <h3>Social media</h3>
                    <p>Temporibus autem quibusdam et aut debitis aut rerum necessitatibus saepe.</p>
                    <ul>
                        <li class="facebook"><a href="#">Facebook</a></li>
                        <li class="google-plus"><a href="#">Google+</a></li>
                        <li class="twitter"><a href="#">Twitter</a></li>
                        <li class="pinterest"><a href="#">Pinterest</a></li>
                    </ul>
                </article>
                <article class="col-4">
                    <h3>Newsletter</h3>
                    <p>Assumenda est omnis dolor repellendus temporibus autem quibusdam.</p>
                    <form action="#">
                        <input placeholder="Email address..." type="text">
                        <button type="submit">Subscribe</button>
                    </form>
                    <ul>
                        <li><a href="#"></a></li>
                    </ul>
                </article>
            </section>
            <p class="copy">Copyright 2014 Harrison High School. Designed by <a href="http://www.vandelaydesign.com/" title="Designed by Vandelay Design" target="_blank">Vandelay Design</a>. All rights reserved.</p>
        </div>
        <!-- / container -->
    </footer>
    <!-- / footer -->

    <div id="fancy">
        <h2>Request information</h2>
        <form action="#">
            <div class="left">
                <fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
                <fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
                <fieldset class="subject"><select>
                        <option>Choose subject...</option>
                        <option>Choose subject...</option>
                        <option>Choose subject...</option>
                    </select></fieldset>
            </div>
            <div class="right">
                <fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
            </div>
            <div class="btn-holder">
                <button class="btn blue" type="submit">Send request</button>
            </div>
        </form>
    </div>

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>