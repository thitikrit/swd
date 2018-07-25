
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="Access-Control-Allow-Origin" content="*">
<title>Sawasdee Chonburi</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="xzcvskdj,sadasdsad" />
<meta name="author" content="บริษัท สวัสดีชลบุรี จำกัด" />
<!-- css -->
<link rel="icon" type="image/ico" sizes="16x16" href="<?php echo base_url(); ?>images/sawasdee.ico">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/materialize/css/materialize.min.css" media="screen,projection" />
<link href="<?php echo base_url();?>/assets/united-business/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>/assets/united-business/css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="<?php echo base_url();?>/assets/united-business/css/flexslider.css" rel="stylesheet" /> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/united-business/css/zoomslider.css" />
<link href="<?php echo base_url();?>/assets/united-business/css/style.css" rel="stylesheet" />
<link href="<?php echo base_url();?>/assets/united-business/css/gallery-1.css" rel="stylesheet">
<script type='text/javascript' src='<?php echo base_url();?>/assets/js/jquery-11.0.min.js'></script>   

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<style type="text/css">
.col-centered {
	display:inline-block;
	float:none;
	/* reset the text-align */
	text-align:center;
	/* inline-block space fix */
	vertical-align: text-top;
}
.zs-enabled .zs-slideshow .zs-bullets .zs-bullet.active {
    background-color: deepskyblue;
}

@font-face {
    font-family: 'swd';
    src: url('<?php echo base_url(); ?>assets/united-business/fonts/CLOUD-LIGHT.OTF');
    font-weight: normal;
    font-style: normal;
    }
html,body,h1,h2,h3,h4,h5,h6,a{
    font-family: 'swd' !important;
    }
.btn{
    margin-top: 0px;
    padding: 5px 10px;
}
.home-page header .navbar-default {
    background: rgba(0,0,0,0.5);
    position: absolute;
    width: 100%;
    box-shadow: none;
}
header .navbar-collapse ul.navbar-nav {
    float:right;
    margin-right:0%;
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus {
    color: deepskyblue;
    background:none;
    border-bottom: 3px solid deepskyblue !important; 
    border-radius: 2px;
    
}
.navbar .nav > li > a {
    color: white;
    text-shadow: none;
    font-size: 18px;
    margin-top: 8px !important;
}
.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus {
    color:deepskyblue;
    background-color: none;
    border-bottom: 3px solid deepskyblue !important; 
    border-radius: 2px;
}
.navbar .nav li .dropdown-menu {
    background: rgba(0, 0, 0, 0.8);
}
header .nav li .dropdown-menu li a {
    color:white;
     font-size: 18px;
}
.info-blocks {
    margin-bottom: 35px;
}
@media (max-width: 767px){
.navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: #002e5b;
    margin-top: 0px;
    background: rgba(0, 0, 0, 0.5);
}
.navbar-default .navbar-toggle {
    border-color: #ffffff;
    margin-top: 15px;
}
.navbar-default .navbar-toggle .icon-bar {
    background-color: #ffffff;
    border-radius: 0;
}
}

</style>
<body>
<div id="wrapper" class="home-page">


	<!-- start header -->
	<header>
		<?php echo $header; ?>
	</header>
	<!-- end header -->
	<?php echo $content; ?>
	
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">ติดต่อเรา</h5>
					<address>
					<strong>บริษัท สวัสดีชลบุรี จำกัด</strong><br>
					สถานที่ตั้ง : 660/44 ถนนสุขุมวิท ตำบลแสนสุข อำเภอเมือง จังหวัดชลบุรี 20110 <br/>
					เบอร์โทรศัพท์ : 038-064757 <br/>
					อีเมล : sawasdee.chonburi@hotmail.com <br/>
					<a href="<?php echo site_url();?>contact">ติดต่อสอบถาม</a>
				</div>
			</div>
			<!-- 
			<div class="col-md-3 col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a href="#">Latest Events</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Bootstrap Template 2050 All right reserved. Template By </span><a href="http://webthemez.com/free-website-templates/" target="_blank">WebThemez</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>

			</div>
		</div>
	</div>-->
	</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url();?>/assets/united-business/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url();?>/assets/united-business/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/united-business/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url();?>/assets/united-business/js/jquery.fancybox-media.js"></script>  
<script src="<?php echo base_url();?>/assets/united-business/js/jquery.flexslider.js"></script>
<script src="<?php echo base_url();?>/assets/united-business/js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="<?php echo base_url();?>/assets/united-business/js/modernizr.custom.js"></script>
<script src="<?php echo base_url();?>/assets/united-business/js/jquery.isotope.min.js"></script>
<script src="<?php echo base_url();?>/assets/united-business/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>/assets/united-business/js/animate.js"></script> 
<script src="<?php echo base_url();?>/assets/united-business/js/custom.js"></script>

</body>
</html>