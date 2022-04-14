<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Responsive Bootstrap HTML Template - Sports</title>
	<meta name="description" content="A free responsive website template made exclusively for Frittt by Themesforce and Sarfraz Shaukat">
	<meta name="keywords" content="website template, css3, one page, bootstrap, app template, web app, start-up">
	<meta name="author" content="Themesforce and Sarfraz Shaukat for Frittt">
	<link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/fonts/font-awesome-4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/all.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color:black;">
<div id="wrapper">
		<header id="header">
			<div class="container">
				<div class="logo"><a href="#"><img src="/images/logo.png" alt="Sports" height="60px" width="60px"></a></div>
				<nav id="nav">
					<div class="opener-holder">
						<a href="#" class="nav-opener"><span></span></a>
					</div>
					<!-- <a href="javascript:" class="btn btn-primary rounded">Enroll Today</a> -->
					<div class="nav-drop">
						<ul>
							<!-- <li class="active visible-sm visible-xs"><a href="#">Home</a></li> -->
							<li><a href="/userindex">home</a></li>
							<li><a href="/userview">Mydetails</a></li>
							<li><a href="/userviewbooking">view/booking</a></li>
							<li><a href="/viewbooking">view booking</a></li>
							<li><a href="/bookinghistory">Booking History</a></li>
							<li><a href="/userfeedback">feedback</a></li>
							<li><a href="/ugallery">Gallery</a></li>
							<li><a href="/logout">logout</a></li>
						</ul>
						<div class="drop-holder visible-sm visible-xs">
							<span>Follow Us</span>
							<ul class="social-networks">
								<li><a class="fa fa-github" href="#"></a></li>
								<li><a class="fa fa-twitter" href="#"></a></li>
								<li><a class="fa fa-facebook" href="#"></a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>
              
        @yield('usermainbody')


        <footer id="footer">
		<div class="container" style="padding-top:10%;">
			<div class="footer-holder">
				<div class="row  text-center">
					<div class="col-md-12">
						<a href="#"><img src="/images/logo.png"height="150px" width="150px"></a>
					</div>
					  
				</div>
                <div class="row">
                	<div id="cta" class="cta-footer">
                        <p>Every day is a challenge, change your life now.</p>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-6">
                    	<h3>We live your galaxy</h3>
                        
                        <p>
                        	15 New Street, Badass Suite, Greyland, Wetworld.
                        </p>
                    </div>
                    
                    <div class="col-md-6 text-right">
                    	<ul class="social">
                        	<li><a href="javascript:"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="javascript:"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="javascript:"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
			</div>
		</div>
	</footer>
</div>
<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/jquery.main.js"></script> 
</body>
</html>