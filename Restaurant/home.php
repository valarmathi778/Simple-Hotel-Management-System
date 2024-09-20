<?php
session_start();
$EmailId = isset($_SESSION['emailid']) ? $_SESSION['emailid'] : '';
$Password = isset($_SESSION['password']) ? $_SESSION['password'] : '';
$id = $_REQUEST["id"];
?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Fresh Food a Hotel Category Bootstrap responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Fresh Food a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->

<link rel="stylesheet" href="css/easy-responsive-tabs.css"><!-- easy responsive tabs css -->

<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all"><!-- date-picker css-->

<!-- gallery -->
	<link href="css/lsb.css" rel="stylesheet" type="text/css">
<!-- //gallery -->

<!-- banner text effect css files -->
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style3.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
<!-- banner text effect css files -->

<!-- logo text effect css files -->
	<link rel="stylesheet" type="text/css" href="css/demo1.css" />
	<link rel="stylesheet" type="text/css" href="css/linkstyles.css" />
<!-- //logo text effect css files -->
	
<!-- default css files -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- default css files -->
	
<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<!--//web font-->
	
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->
<style>
/* Container for food details */
.food-details-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Image styling */
.food-image img {
    width: 100%;
    max-width: 300px;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

/* Food info section */
.food-info {
    margin-top: 20px;
    text-align: center;
}

.food-price,
.food-description {
    margin-bottom: 15px;
}

.food-price label,
.food-description label {
    font-weight: bold;
    color: #333;
}

.food-price p,
.food-description p {
    margin-top: 5px;
    color: #666;
}

/* Buy Now button styling */
.buy-now {
    margin-top: 20px;
}

.buy-now-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background-color: #28a745; /* Green background */
    border: none;
    border-radius: 5px;
    text-decoration: none;
    text-align: center;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.buy-now-button:hover {
    background-color: #218838; /* Darker green on hover */
    transform: scale(1.05); /* Slightly enlarge on hover */
}

.buy-now-button:active {
    background-color: #1e7e34; /* Even darker green when clicked */
}

</style>
<style>
        /* Simple styles for the forms */
        .form-container {
            display: none;
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #f9f9f9;
            width: 300px;
            margin: 100px auto;
        }
    </style>
</head>

<!-- Body -->
<body>

<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header">
				<div class="container-fluid">
					<div class="header-left">
						<div class="w3layouts-logo grid__item">
							<h1>
								<a class="link link--ilin" href="#"><span>Fresh</span><span>Food</span></a>
							</h1>
						</div>
					</div>
					<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active" href="foodselect.php">Home</a></li>
									<li><a href="#about" class="scroll">About</a></li>
									<li><a href="#services" class="scroll">Services</a></li>
									<li><a href="#chefs" class="scroll">Food Types</a></li>
									<li><a href="#gallery" class="scroll">Gallery</a></li>	
									<li><a href="#customer" class="scroll">Customers</a></li>
									<li><a href="#fooddescription" class="scroll">Food Description</a></li>
									
								</ul>
						
					<div class="clearfix"> </div>						
							</div>	
						</nav>
						<div class="agileinfo-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
								<li><a href="#"><i class="fa fa-vk"></i></a></li>
							</ul>
						</div>
						
				</div>		
					</div>
					
			</div>
			<div class="agileits-banner-info">
				<h3>welcome to</h3>
					<h2 class="rw-sentence">
					<span>Food tastes better, eat with your </span>
					<div class="rw-words rw-words-1">
						<span>Family</span>
						<span>Friends</span>
						<span>happiness</span>
						<span>Love</span>
						<span>Gratefulness</span>
						<span>happiness</span>
					</div>
					</h2>
					<a href="#" data-toggle="modal" data-target="#myModal2">Book Your Table</a>
			</div>
		</div>
	</div>
<!-- //banner -->
	
	
<!-- popup for sign up form -->
<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div id="small-dialog2" class="mfp-hide book-form">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3>Book A Table Now</h3>
					<form action="registerlogin.php" method="post">
						<input type="text" name="Name"  placeholder="Reservation Name"/>
						<input type="tel" name="number"  placeholder="Mobile Number" />
						<input type="email" name="Email"  class="email" placeholder="Email" />
						<div class="select-block1">
							<select required="" name="guest">
								<option value="manyguests">Number Of Guests</option>
								<option value="1Guest">1Guest</option>
								<option value="2Guests">2Guests</option>
								<option value="3Guests">3Guests</option>
								<option value="4Guests">4Guests</option>
								<option value="5Guests">5Guests</option>
								<option value="moreguest">More Than 5</option>
							</select>
						</div>
						<input class="date" type="text" id="datepicker2"  name="datepicker2"  placeholder="Date Of Arrival" title="Please enter your Arrival Date " required=""/>
						<textarea name="Message"  placeholder="Additional Information (Optional)" ></textarea>
						<input type="submit" value="Book table">
					</form>
			</div>
		</div>
	</div>
</div>
<!-- //popup for sign up form -->

<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title">Fresh Food</h4>
						<h5>1 april 2017</h5>
					</div> 
					<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/s1.jpg" alt="" />
						<p>Morbi eget mollis erat, sit amet feugiat nulla. In hac habitasse platea dictumst. Sed ac fermentum eros. Pellentesque tincidunt nisi sit amet dui lobortis, pulvinar pellentesque dui tempor. Sed iaculis, nisl a eleifend porttitor, diam mauris gravida arcu, suscipit ullamcorper nulla diam vitae lorem..</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //modal -->
	

	



	
<!-- contact form -->
	<div class="contact-w3ls" id="fooddescription">
		<div class="container">
				<h3><b>Food Description</b></h3>
			    <?php
					require("connect.php");

					$id = $_REQUEST["id"];

					$res = $con->query("select Food_Id,Food_Image,Image_Type,Description from food where Food_Id = '$id'");
		
					$row = $res->fetch_assoc();
				?>
					
				<div class="food-details-container">
				<div class="food-image">
					<img src="admin/images/<?php echo $row['Food_Image']?>" alt="Food Image">
				</div>
				<div class="food-info">
					<div class="food-price">
					<label><u>Food Price:</u></label>
					<p><?php echo $row['Image_Type']?></p>
				</div>
				<div class="food-description">
					<label><u>Description:</u></label>
					<p><?php echo $row['Description']?></p>
				</div>
				</div>
				
				<div class="buy-now">
                  <button class="buy-now-button" onclick="buttonfun()">Buy Now</button>
                </div>
				</div>
				
				
		</div>  
	</div>  
<!-- //contact form -->

<!-- map -->

<!-- //map -->
<!-- footer -->
<div class="footer">
		<div class="col-md-6 footer-left">
			<h3>Fresh Food</h3>
			<p>Morbi eget mollis erat, sit amet feugiat nulla. In hac habitasse platea dictumst. Sed ac fermentum eros.Pellentesque tincidunt nisi sit amet dui lobortis.Pulvinar pellentesque dui tempor</p>
			<p>Sed iaculis, nisl a eleifend porttitor, diam mauris gravida arcu, suscipit ullamcorper nulla diam vitae lorem..</p>
		</div>
		<div class="col-md-6 footer-right">
			<section class="subscribe" id="subscribe">
					<h3>Newsletter</h3>
				<form action="#" method="post" class="newsletter">
					<input class="email" type="email" placeholder="Your email..." required="">
					<input type="submit" class="submit" value="">
				</form>
			</section>
			<h4>Follow us</h4>
				<div class="wthree-icon">
					<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
					<a href="#" class="google"><i class="fa fa-google-plus"></i></a> 
					<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> 
				</div>  
		</div>
		<div class="clearfix"></div>
</div>
<!-- //footer -->

<!-- copyright -->
<div class="copyright-agile">
	<p>&copy; 2017 Fresh Food. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!-- //copyright -->

<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
<script>
    var emailid = "<?php echo $EmailId; ?>";
    var password = "<?php echo $Password; ?>";
    var foodId = "<?php echo $id; ?>";
    function buttonfun() {
		
        if (emailid !== '' && password !== '') {
            location.href = 'form.php?id=<?php echo $row['Food_Id'];?>';
        } else {
			alert('Please log in to proceed');
            location.href = 'index.php';
        }
    }
</script>


	<script type="text/javascript">
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
	</script>
<!-- //here ends scrolling icon -->


<!-- Date-Picker-JavaScript -->
				<script src="js/jquery-ui.js"></script>
				<script>
					$(function() {
						$( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
					});
				</script>
<!-- //Date-Picker-JavaScript -->

<!-- banner text effect js file -->
		<script src="js/modernizr.custom.72111.js"></script>
<!-- banner text effect js file -->



</body>
<!-- //Body -->
</html>