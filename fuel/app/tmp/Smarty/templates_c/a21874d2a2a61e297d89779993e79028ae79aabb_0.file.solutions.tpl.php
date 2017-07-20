<?php
/* Smarty version 3.1.31, created on 2017-01-18 13:48:36
  from "/usr/local/apache2/htdocs/sunseer/lilu/fuelphp/fuel/app/views/weather/solutions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_587f01b424e317_12424160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a21874d2a2a61e297d89779993e79028ae79aabb' => 
    array (
      0 => '/usr/local/apache2/htdocs/sunseer/lilu/fuelphp/fuel/app/views/weather/solutions.tpl',
      1 => 1484718504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587f01b424e317_12424160 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<title>solutions</title>
<link href="/lilu/fuelphp/public/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php echo '<script'; ?>
 src="/lilu/fuelphp/public/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="/lilu/fuelphp/public/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mobile App Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<?php echo '<script'; ?>
 type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } <?php echo '</script'; ?>
>
<!--fonts-->
<link href='http://fonts.useso.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
<?php echo '<script'; ?>
 type="text/javascript" src="/lilu/fuelphp/public/assets/js/move-top.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/lilu/fuelphp/public/assets/js/easing.js"><?php echo '</script'; ?>
>
<!-- slide -->

</head>
<body>
<!--header-->
	<div class="header">
		<div class="container">	
			<div class="logo">
				<a href="index.html"><img src="/lilu/fuelphp/public/assets/img/log.png" alt=""></a>
			</div>
				<div class="top-nav">
					<span class="menu"><img src="/lilu/fuelphp/public/assets/img/menu.png" alt=""> </span>
					<ul >
						<li  ><a href="index.html" >HOME PAGE</a></li>
						<li ><a href="services.html" > SERVICES</a></li>
						<li class="active"><a href="solutions.html" >  SOLUTIONS  </a></li>
						<li><a href="prices.html" > PRICES </a></li>
						<li><a href="contact.html" >CONTACT</a></li>
					</ul>
					<!--script-->
				<?php echo '<script'; ?>
>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			<?php echo '</script'; ?>
>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!---->
	<div class="banner banner-in">
		 <div class="container">
			<div class="col-md-6 banner-matter-in">
				<h1>SOLUTIONS</h1>
			</div>
				<div class="col-md-6 banner-side side-banner">
					<div class="col-md-6 side">
						<img class="img-responsive" src="/lilu/fuelphp/public/assets/img/se1.jpg" alt="">
					</div>
					<div class="col-md-6 side">
						<img class="img-responsive" src="/lilu/fuelphp/public/assets/img/se.jpg" alt="">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>	
	</div>
	<!---->
	<div class="content">
		<div class="container">
			<div class="four">
				<h2>OOPS! - Could not Find it</h2>
				<h3>404 Error!</h3>
				<a href="index.html" class="just-do">Go Back </a>
			</div>
			</div>
		<div class="content-bottom">
			<div class="container">
				<h3>DO YOU HATE WITH ME?</h3>
				<p>we are the biggest haters on planet, fella.</p>
			</div>
			<i> </i>
		</div>
	</div>
	<!---->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-7 footer-left">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<p class="foot">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots piece </p>
				</div>
				<div class="col-md-5 submit">
					<form>
						<input type="text" value="your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your email address';}">
						<input type="submit" value="Subscribe">
						<div class="clearfix"> </div>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<?php echo '<script'; ?>
 type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					<?php echo '</script'; ?>
>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	</div>
</body>
</html>
<?php }
}
