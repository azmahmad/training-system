<?php  
     session_start();

if (empty($_SESSION['id_supervisor'])) {
        header('Location: http://localhost/btps/homePage.php');
        die();
        }    
      ?>  
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TraingSeek</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<!-- Main Stylesheet -->
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body id="home">
		<!-- ============ NAVBAR START ============ -->
		<div class="fm-container">
			<!-- Menu -->
			<div class="menu">
				<div class="button-close text-right">
		<a class="fm-button"><i class="fa fa-close fa-2x"></i></a>
				</div>
				<ul class="nav">
<li class="active" ><a href="profilesupervisor.php">Homepage</a></li>
			<li><a href="profilesupervisor.php">Profile</a></li>
			<li><a href="trainees.php">trainees</a></li>
	<li><a href="recivesuper.php">Evaluate Reports</a></li>
            <li><a href="logout.php">Logout</a></li>
				</ul>		
			</div>
			<!-- end Menu -->
		</div>
		<!-- ============ NAVBAR END ============ -->

		<!-- ============ HEADER START ============ -->

		<header>
			<div id="header-background"></div>
			<div class="container">
				<div class="pull-left">
					<div id="menu-open" >
		<a class="fm-button"><i class="fa fa-bars fa-lg"></i></a>
				</div>
				</div>
				<div class="pull-right">
				<a href="logout.php">
	<img src="images/248930.png" width="50" height="50" id="logout"></a>
			</div>
		<div id="logo" class="pull-right">

			</div>
			
			</div>
		</header>

		<!-- ============ HEADER END ============ -->

		<!-- ============ SLIDES START ============ -->

		<div id="slider" class="sl-slider-wrapper">

			<div class="sl-slider">
			
		<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
					<div class="sl-slide-inner">
						<div class="bg-img bg-img-1"></div>
						<div class="tint"></div>
						<div class="slide-content">
							<h2>Manage your trainees</h2>
							<h3>CSIS collage</h3>
						</div>
					</div>
				</div>
			
				<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
					<div class="sl-slide-inner">
						<div class="bg-img bg-img-2"></div>
						<div class="tint"></div>
						<div class="slide-content">
							<h2>Submit Training Reports</h2>
							<h3>Best way to make sure delivered</h3>
						</div>
					</div>
				</div>
			
				<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
					<div class="sl-slide-inner">
						<div class="bg-img bg-img-3"></div>
						<div class="tint"></div>
						<div class="slide-content">
							<h2>Select your Domain</h2>
							<h3>Develop your skills</h3>
							
						</div>
					</div>
				</div>

			</div>

			<nav id="nav-arrows" class="nav-arrows">
				<span class="nav-arrow-prev">Previous</span>
				<span class="nav-arrow-next">Next</span>
			</nav>

			<nav id="nav-dots" class="nav-dots">
				<span class="nav-dot-current"></span>
				<span></span>
				<span></span>
			</nav>

		</div>

		<!-- ============ SLIDES END ============ -->

		<!-- ============ HOW DOES IT WORK START ============ -->

		<section id="how">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2>How does it work</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
<p>Professional practical training is major part of education in order to create specialists in the study domain. Many times, the relation between university and industry is analyzed in the way of looking for alternatives to better connect education to labor market. 
Our system offers attractive open positions to both starter level and professional students. Many vacancies are available in, Android development, iOS development, Web design, Software Development, Application Development, Graphics Designers, UI/UE Designers, Database Administrator, Network Engineer, Security Specialists and Business development positions etc.</p>
					</div>
					<div class="col-sm-6">
			<div class="video-wrapper">
	<iframe width="420" height="345" 
	src="https://www.youtube.com/embed/JbHxmyn7qj4"
	allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ============ HOW DOES IT WORK END ============ -->

		<!-- ============ TESTIMONIALS START ============ -->

		<section id="testimonials" class="parallax text-center">
			<div class="tint"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1>Testimonials</h1>
						<h4>Kind words from happy members</h4>
						<div class="owl-carousel">

							<!-- Testimonial 1 -->
							<div>
								<div class="col-sm-3 col-md-2">
	<img src="images/hamam.PNG" class="img-circle img-responsive" alt="testimonial" />
								</div>
								<div class="col-sm-9 col-md-10">
									<blockquote>
			<p>Thanks for the great service. traininggeek has completely surpassed our expectations.
			trainingseek is the most valuable fill with companies resource.</p>
										<footer>
											Hamam Ali Jaber
		<cite title="Brand Manager in Ebay Inc.">previous Student.</cite>
										</footer>
									</blockquote>
								</div>
							</div>

							<!-- Testimonial 2 -->
							<div>
				<div class="col-sm-3 col-md-2">
<img src="images/ffالتقاط.PNG" class="img-circle img-responsive" alt="testimonial" />
								</div>
								<div class="col-sm-9 col-md-10">
									<blockquote>
<p>I couldn't have asked for more than this.
It really saves me time and effort. trainingseek is exactly what our need has been lacking.
I would be lost without trainingseek.</p>
										<footer>
											Ahmed AlOtabi
	<cite title="HR Manager in Apple Inc.">hr Manager in STC.</cite>
										</footer>
									</blockquote>
								</div>
							</div>

							<!-- Testimonial 3 -->
							<div>
				<div class="col-sm-3 col-md-2">
<img src="images/oPoXUqVD_400x400.jpg" class="img-circle img-responsive" alt="testimonial" />
								</div>
								<div class="col-sm-9 col-md-10">
									<blockquote>
<p>I realy like it, it's very helpfull.</p>
										<footer>
											Abdulaziz almhamied
	<cite title="HR Manager in Apple Inc.">PHD and supervisior for trainingeek.</cite>
										</footer>
									</blockquote>
								</div>
							</div>

							<!-- Testimonial 4 -->
							<div>
								<div class="col-sm-3 col-md-2">
<img src="images/ssssالتقاط.PNG" class="img-circle img-responsive" alt="testimonial" />
								</div>
								<div class="col-sm-9 col-md-10">
									<blockquote>
<p>I just can't get enough of trainingseek. This is simply unbelievable!</p>
										<footer>
											Abdullah AlQurashy
<cite title="Key Account Manager in Twitter Inc.">previous Student.</cite>
										</footer>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ============ TESTIMONIALS END ============ -->

		<!-- ============ BLOG START ============ -->

		<section id="blog">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-12">
						<h1>Latest News</h1>
						<h4>Specially posts everyday</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="owl-carousel">

							<!-- Blog post 1 -->
							<div>
		<img src="images/180122150803_1_540x360.jpg" 
		class="img-responsive" alt="Blog Post" />
<h4>Engineers design artificial synapse for 'brain-on-a-chip'
 hardware</h4>
								<h5>
									<span><i class="fa fa-calendar"></i>28.02.2018</span>
								</h5>
<p>Engineers have designed an artificial synapse in such a way that they can precisely control the strength of an electric current flowing across it, similar to the way ions flow between neurons. The team has built a small chip with artificial synapses, made from silicon germanium. In simulations, the researchers found that the chip and its synapses could be used to recognize samples of handwriting, with 95 percent accuracy.</p>
<p><a href="https://www.sciencedaily.com/releases/2018/01/180122150803.htm" class="btn btn-primary">Read more</a></p>
							</div>

							<!-- Blog post 2 -->
							<div>
	<img src="images/ring.jpg" class="img-responsive" alt="Blog Post" />
								<h4>Ring Provides Whole Home Security Like Never Before With Latest Security Devices</h4>
								<h5>
		<span><i class="fa fa-calendar"></i>02.03.2015</span>
									
								</h5>
<p>For the first time, Ring introduces smart lights and indoor/outdoor cameras to the Ring of Security.he Ring product line, along with the Ring Neighborhoods network, enable Ring to offer affordable, complete home and neighborhood security in a way no other company has before.</p>
<p><a href="https://www.businesswire.com/news/home/20180108006393/en/CES-2018-Ring-Home-Security-Latest-Security" class="btn btn-primary">Read more</a></p>
							</div>

							<!-- Blog post 3 -->
							<div>
								<img src="images/11-Top-Programming-Trends-To-Look-For-In-20172.jpg" alt="Blog Post" />
			<h4>Top Programming Trends To Look For In 2018</h4>
								<h5>
									<span><i class="fa fa-calendar"></i>28.12.2017</span>
									
								</h5>
<p>millennial customers are going digital. As much as they want to surf the Internet, they like to spend their time on Smartphones too. Hence, as a business owner, it’s your time to make a stronger online presence for a better brand image.  How about building a state-of-the-art website? Or a mobile app to stay one touch away from your customers? Seems profitable. Right? But, before you decide to build your app, take a look at the programming trends that most of the IT outsourcing companies are following in 2018. It will help you getting a brief idea about which programming language should be perfect for your project.
</p>
								<p><a href="https://www.valuecoders.com/blog/technology-and-apps/programming-trends-2017-it-outsourcing-companies/#" class="btn btn-primary">Read more</a></p>
							</div>

							<!-- Blog post 4 -->
							<div>
								<img src="images/Server-and-Network-Management.jpg" class="img-responsive" alt="Blog Post" />
<h4>Best IT Certifications For 2018</h4>
								<h5>
									<span><i class="fa fa-calendar"></i>02.01.2018</span>
								</h5>
<p>Getting certified is a surefire way to advance your career in the IT industry. Whether you work for an enterprise, a small business, government, healthcare or any other place that employs IT professionals, your best bet for career advancement is to validate your skills and knowledge through a carefully chosen combination of certifications.</p>
<p><a href="http://www.tomsitpro.com/articles/best-it-certifications,1-1352.html
" class="btn btn-primary">Read more</a></p>
							</div>

							<!-- Blog post 5 -->
							<div>
								<img src="images/180208120835_1_540x360.jpg" class="img-responsive" alt="Blog Post" />
<h4>Researchers help robots 'think' and plan in the abstract</h4>
								<h5>
									<span><i class="fa fa-calendar"></i>28.11.2017</span>
								</h5>
								<p>New research shows how robots can autonomously construct abstract representations of their surroundings and use them to plan for multi-step tasks.</p>
								<p><a href="https://www.sciencedaily.com/releases/2018/02/180208120835.htm" class="btn btn-primary">Read more</a></p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ============ BLOG END ============ -->


		<!-- ============ STATS START ============ -->

		<section id="stats" class="parallax text-center">
			<div class="tint"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1>TRAINING Stats</h1>
						<h4>How many people we’ve helped</h4>
					</div>
				</div>
				<div class="row" id="counter">
					
					<div class="counter">
						<div class="number">40</div>
						<div class="description">Users</div>
					</div>
				
					<div class="counter">
						<div class="number">35</div>
						<div class="description">Jobs</div>
					</div>
						
					<div class="counter">
						<div class="number">20</div>
						<div class="description">Companies</div>
					</div>
					
				</div>
			</div>
		</section>

		<!-- ============ STATS END ============ -->
		
		<!-- ============ CONTACT START ============ -->

		<section id="contact" class="color2">
			
		</section>

		<!-- ============ CONTACT END ============ -->

		<!-- ============ FOOTER START ============ -->

		<footer>
			<div id="credits">
				<div class="container text-center">
					<div class="row">
						<div class="col-sm-12">
							&copy; 2018 trainseek<br>
Designed &amp; Developed by	<br><b>Ahmed Alazm <br>Taysear Swadain 
	<br> Rakan Alkhatib</b>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- ============ FOOTER END ============ -->

		<!-- Modernizr Plugin -->
		<script src="js/modernizr.custom.79639.js"></script>

		<!-- for slides pic in HP-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.2.min.js"></script>

		<!-- for slides pic in HP-->

		<!-- Bootstrap Plugins -->
		
		<!-- Retina Plugin -->
		

		<!-- ScrollReveal Plugin -->
		

		<!-- Flex Menu Plugin -->
		<script src="js/jquery.flexmenu.js"></script>

		<!-- Slider Plugin -->
		<script src="js/jquery.ba-cond.min.js"></script>
		<script src="js/jquery.slitslider.js"></script>

		<!-- Carousel Plugin -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- for latest news-->

		<!-- Parallax Plugin -->
		

		<!-- Counterup Plugin -->
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>

		<!-- No UI Slider Plugin -->
		<script src="js/jquery.nouislider.all.min.js"></script>
		<!-- TRAINING STATS to show u its increaming-->

		<!-- Flickr Plugin -->
		<script src="js/jflickrfeed.min.js"></script>

		<!-- Fancybox Plugin -->
		<script src="js/fancybox.pack.js"></script>

		<!-- Magic Form Processing -->
		<script src="js/magic.js"></script>

		<!-- jQuery Settings -->
		<script src="js/settings.js"></script>
	</body>
</html>