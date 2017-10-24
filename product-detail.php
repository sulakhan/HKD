<!DOCTYPE html>                																				<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>index</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" href="source/jquery.fancybox.css"/>
	<link rel="stylesheet" type="text/css" href="css/detailslider/jcarousel.connected-carousels.css">
    <link rel="stylesheet" type="text/css" href="css/detailslider/jcarousel.responsive.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/detailslider/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="js/detailslider/jcarousel.connected-carousels.js"></script>
    <script type="text/javascript" src="js/detailslider/jcarousel.responsive.js"></script>
    <script type="text/javascript" src=lib/jquery-1.10.1.min.js></script>
	<script type="text/javascript" src=source/jquery.fancybox.js></script>
</head>
<body>
<?php 
  include "header.php";
?>
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<div class="connected-carousels caru-slider">
				<div class="stage">
					<div class="carousel carousel-stage">
						<ul>
							<li><img src="images/img1.jpg" width="600" height="400" alt="img"></li>
							<li><img src="images/img2.jpg" width="600" height="400" alt="img"></li>
							<li><img src="images/img3.jpg" width="600" height="400" alt="img"></li>
							<li><img src="images/img4.jpg" width="600" height="400" alt="img"></li>
							<li><img src="images/img5.jpg" width="600" height="400" alt="img"></li>
							<li><img src="images/img6.jpg" width="600" height="400" alt="img"></li>
						</ul>
					</div>
					<p class="photo-credits">
						Photos by <a href="http://www.mw-fotografie.de">Marc Wiegelmann</a>
					</p>
					<a href="#" class="prev prev-stage"><span>&lsaquo;</span></a>
					<a href="#" class="next next-stage"><span>&rsaquo;</span></a>
				</div>

				<div class="navigation">
					<a href="#" class="prev prev-navigation">&lsaquo;</a>
					<a href="#" class="next next-navigation">&rsaquo;</a>
					<div class="carousel carousel-navigation">
						<ul>
							<li><img src="images/img1_thumb.jpg" width="50" height="50" alt="img"></li>
							<li><img src="images/img2_thumb.jpg" width="50" height="50" alt="img"></li>
							<li><img src="images/img3_thumb.jpg" width="50" height="50" alt="img"></li>
							<li><img src="images/img4_thumb.jpg" width="50" height="50" alt="img"></li>
							<li><img src="images/img5_thumb.jpg" width="50" height="50" alt="img"></li>
							<li><img src="images/img6_thumb.jpg" width="50" height="50" alt="img"></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="breadcrumbs">
			<div>
				<span><a href="#">PRODUCTS DESCRIPTION</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp/</span>
				<span class="download"><a href="#">DOWNLOAD CENTRE</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp/</span>
				<span><a href="#">COMMENTS AND REVIEWS</a></span>
			</div>
			</div>
			<div class="row">
				<div class="col-md-6 pdf-images">
					<img src="images/pdf.png" alt="pdf">
					<span>TECHNICAL SPECFICATION (PDF)</span>
				</div>
				<div class="col-md-6 pull-right download-text"><a href="#">Download</a></div>
			</div>
			<div class="row">
				<div class="col-md-6 pdf-images">
					<img src="images/pdf.png" alt="pdf">
					<span>USER MUNNAL (PDF)</span>
				</div>
				<div class="col-md-6 pull-right download-text"><a href="#">Download</a></div>
			</div>
		</div>
		<!--Asidebar Section-->
			<aside class="col-md-4 asidebar">
				<h3 class="aside-devil">DEVIL</h3>
				<div class="aside-ceilling">Ceilling lamp</div>
				<div class="row">
					<div class="col-md-6 brand-div col-xs-6">
						<span class="brand-ceilling">Brand: </span>
						<span class="slamp-text"><u>SLAMP</u></span>
					</div>
					<div class="col-md-6 text-right col-xs-6">
						<strike class="strike">HK$ 3,200</strike>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 brand-div col-xs-6">
						<span class="slamp-text-rate">HK$ 2340.00</span>
					</div>
					<div class="col-md-6 text-right aside-pagi col-xs-6 hidden-sm">
						<nav aria-label="Page navigation">
							<ul class="pagination aside-pagi-list">
								<li><a href="#">-</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">+</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div>
					<div class="aside-input">
						<input type="text" size="53" value="SELECT A COLOR">
					</div>
					<div class="toggle">
						<img src="images/toggle.png" alt="toggle">
					</div>
				</div>
				<div class="aside-list">
					<ul type="none">
						<li>Delivery: Immediate</li>
						<li>Delivery cost calculator</li>
					</ul>
					<div class="row aside-star">
						<div class="col-md-6 col-sm-6">
							<span>Rate this Product</span>
						</div>
						<div class="col-md-6 text-right col-sm-6">
							<img src="images/5star.png" alt="star">
						</div>
					</div>
					<ul type="none">
						<li>View Comments(2)</li>
						<li>Sold by <span class="aside-every"><u>EVERYTHING UNDER THE SUN</u></span></li>
					</ul>
				</div>
				<div class="add-to-cart">
					<a href="#">ADD TO CART</a>
				</div>
				<div class="add-to-wish">
					<a href="#">ADD TO WHISTLIST</a>
				</div>
				<p class="para-text">Need Help? email us at info@hongkongdeco.com</p>
				<div class="social-icon-text">
					<p>SHARE WITH YOUR FRIENDS</p>
					<span>
						<img src="images/face.png" alt="fb">
					</span>
					<span>
						<img src="images/gplus.png" alt="g">
					</span>
					<span>
						<img src="images/blucamera.png" alt="blu">
					</span>
					<span>
						<img src="images/meassage.png" alt="msg">
					</span>
				</div>
				<div class="aside-retailer">
					<p>Find a retailer</p>
				</div> 
				<div class="row aside-contact">
					<div class="col-md-6">
						<h6>ARTIMEDIE FLAGSHIP STORE</h6>
						<p class="aside-address">
							12,Queen's road central <br>
							Central,HONK KONG<br>
							TEL: +852-8888 9999
						</p>
					</div>
					<div class="col-md-6 add-to-shop pull-right">
						<a href="#">ADD TO SHOPPING MAP</a>
					</div>
				</div>
			</aside>
		<!--Asidebar Section-->
	</div>
</div>
<!--Section Start-->
<section class="container sec-heading">
	<h4>YOU MAY ALSO  LIKE</h4>
</section>
<!--/Section End-->
<!--Section Start-->
<section class="pro-detail-slider">
	<!--Gallery Part-->
		<div class="container carousel2">
		<div class="jcarousel-wrapper">
        <div class="jcarousel">
            <ul>
            	<li><a href="images/img5.jpg" class="fancybox" data-fancybox-group="hills"><img src="images/img5.jpg" alt="Image 5"></a></li>
                <li><a href="images/img6.jpg" class="fancybox" data-fancybox-group="hills"><img src="images/img6.jpg" alt="Image 6"></a></li>
                <li><a href="images/img5.jpg" class="fancybox" data-fancybox-group="hills"><img src="images/img5.jpg" alt="Image 5"></a></li>
                <li><a href="images/img5.jpg" class="fancybox" data-fancybox-group="hills"><img src="images/img5.jpg" alt="Image 5"></a></li>
                <li><a href="images/img5.jpg" class="fancybox" data-fancybox-group="hills"><img src="images/img5.jpg" alt="Image 5"></a></li>
                <li><a href="images/img6.jpg" class="fancybox" data-fancybox-group="hills"><img src="images/img6.jpg" alt="Image 6"></a></li>
            </ul>
        </div>
        <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
        <a href="#" class="jcarousel-control-next">&rsaquo;</a>
        <p class="jcarousel-pagination"></p>
    </div>
	</div>
	<!--/Gallery Part-->
</section>
<!--/Section End-->
<!--Banner form-->
	<div class="banner-red">
		<h4>JOIN OUR NEWSLETTER AND SAVE 100HK$  *</h4>
		<div>
			<form class="search-bar">
				<input type="text" size="28" placeholder="ENTER YOUR EMAIL ADDRESS">
				<button>SIGN UP</button>
			</form>
		</div>
	</div>
<!--/Banner form-->
<?php 
  include "footer.php";
?>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
</body>
</html>