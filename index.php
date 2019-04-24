<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gaming Tremor</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/dark-red-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Montserrat for title -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  	<!-- Start Header -->
	<header id="mu-hero" class="" role="banner">
		<!-- Start menu  -->
		<nav class="navbar navbar-fixed-top navbar-default mu-navbar">
		  	<div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>

			      <!-- Logo -->
			      <a class="navbar-brand" href="index.html">Gaming Tremor</a>

			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      	<ul class="nav navbar-nav mu-menu navbar-right">
			      		<li><a href="#mu-hero">Home</a></li>
				        <li><a href="#mu-about">About Us</a></li>
				        <li><a href="#mu-schedule">Schedule</a></li>
			         <!--   <li><a href="#mu-speakers">Speakers</a></li> -->
			            <li><a href="#mu-pricing">Price</a></li>
			            <li><a href="#mu-register">Register</a></li>
			            <li><a href="#mu-sponsors">Sponsors</a></li>
			            <li><a href="#mu-contact">Contact</a></li>

                  <li wg-nav-item="" show-guest="false" title="Profile" class="profile-dropdown hidden-xs hidden-sm dropdown" uib-dropdown="">
                                    <a href="https://worldgaming.com/#" uib-dropdown-toggle="" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                                      <span ng-controller="UserDetailsController as ctrl">
                                        <div class="avatar-outline" hash="ctrl.user.avatar">
                                  <div id="avatar" class="avatar user-avatar-img ">
                                      <img ng-src="https://www.gravatar.com/avatar/2a9c5730d3e01055134948a706aacb05?d=https://worldgaming.com/images/profile-avatar-default-square.png" src="./The home of esports and competitive gaming by WorldGaming_files/2a9c5730d3e01055134948a706aacb05">
                                  </div>
                                  </div>
                                        <span class="username" ng-bind="ctrl.user.gamertags.wg">GT rayuga</span>
                                        <span class="caret"></span>
                                      </span>
                                    </a>
                            /*<ul class="dropdown-menu">*/
                                      <li title="View profile" ng-href="/profile" href="/profile">
                                        <a href="https://worldgaming.com/profile" translate=""><span>Profile</span></a>
                                      </li>
                                      <li title="Edit profile" ng-href="/profile/edit" href="/profile/edit">
                                        <a href="https://worldgaming.com/profile/edit" translate=""><span>Edit Profile</span></a>
                                      </li>
                                      <li title="Log out" ng-click="ctrl.logout()">
                                        <a href="https://worldgaming.com/#">
                                          <span translate="" translate-comment="Main Navigation"><span>Log out</span></span>
                                        </a>
                                      </li>
                                    </ul>

              </ul>
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container-fluid -->
		</nav>
		<!-- End menu -->

		<div class="mu-hero-overlay">
			<div class="container">
				<div class="mu-hero-area">

					<!-- Start hero featured area -->
					<div class="mu-hero-featured-area">
						<!-- Start center Logo -->
						<div class="mu-logo-area">
							<!-- text based logo -->
							<a class="mu-logo" href="#">Gaming Tremor</a>
							<!-- image based logo -->
							<!-- <a class="mu-logo" href="#"><img src="assets/images/logo.jpg" alt="logo img"></a> -->
						</div>
						<!-- End center Logo -->

						<div class="mu-hero-featured-content">

							<h1>HELLO! WELCOME TO GAMING TREMOR</h1>
							<h2>India's Biggest ESPORT Tournament Organisers</h2>

              <br>
               <br>

						</div>
					</div>
					<!-- End hero featured area -->

				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start main content -->
	<main role="main">
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<img class="" src="assets/images/main.jpg" alt="Men Speaker">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<h2>About </h2>
										<p>Just like every sport needs an arena, a playground . Esports needs a place where both regular gamers and aspiring esports athletes alike can come together, practice, compete and build their teams We built it to help gamers like you practice, compete and excel in your favorite esports. We offer players of all levels the opportunity to compete in their favorite game, win prizes, and be part of the esports community</p>

										<p></p>

										<p>Our mission is to make esports as accessible for non-professional gamers as regular sports are for regular people. We believe that's crucial for esports to become the world's biggest sport. Gamers that invest hundreds of hours into their favorite competitive games need to know that their efforts will be rewarded in the future</p>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		<!-- Start Video -->
		<section id="mu-video">
			<div class="mu-video-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mu-video-area">
								<h2>Watch Previous Event Video</h2>
								<a class="mu-video-play-btn" href="#"><i class="fa fa-play" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Start Video content -->
			<div class="mu-video-content">
				<div class="mu-video-iframe-area">
					<a class="mu-video-close-btn" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
					<iframe width="854" height="480" src="https://www.youtube.com/embed/n9AVEl9764s" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<!-- End Video content -->

		</section>
		<!-- End Video -->

		<!-- Start Schedule  -->
		<section id="mu-schedule">
			<div class="container">
				<div class="row">
					<div class="colo-md-12">
						<div class="mu-schedule-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Schedule Detail</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis unde, ut sapiente et voluptatum facilis consectetur incidunt provident asperiores at necessitatibus nulla sequi voluptas libero quasi explicabo veritatis minima porro.</p>
							</div>

							<div class="mu-schedule-content-area">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs mu-schedule-menu" role="tablist">
								    <li role="presentation" class="active"><a href="#first-day" aria-controls="first-day" role="tab" data-toggle="tab">Next Match</a></li>
						<!--		    <li role="presentation"><a href="#second-day" aria-controls="second-day" role="tab" data-toggle="tab">2 Day / 20 Feb</a></li>
								    <li role="presentation"><a href="#third-day" aria-controls="third-day" role="tab" data-toggle="tab">3 Day / 21 Feb</a></li> -->

								</ul>

								<!-- Tab panes -->
								<div class="tab-content mu-schedule-content">
								    <div role="tabpanel" class="tab-pane fade mu-event-timeline in active" id="first-day">
                        <a href=#>Register Here</a>
								    	<ul>
								    		<li>
								    			<div class="mu-single-event">
								    				<p class="mu-event-time">9.00 AM</p>
                            <h3>Registeration Ends</h3>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-1.jpg" alt="event speaker">
								    				<p class="mu-event-time">10.00 AM</p>
								    				<h3>Room ID And Password would be given</h3>
								    				<span>Through Phone Message</span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-2.jpg" alt="event speaker">
								    				<p class="mu-event-time">11.00 AM</p>
								    				<h3>Match Starts</h3>
								    				<span>*DON'T BE LATE*</span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-3.jpg" alt="event speaker">
								    				<p class="mu-event-time">12.00 AM</p>
								    				<h3>Results would be uploaded</h3>
								    				<span>Prize money will be given</span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<p class="mu-event-time">1.00 PM</p>
								    				<h3>Ends</h3>
								    			</div>
								    		</li>
								    	</ul>
								    </div>
							<!--	    <div role="tabpanel" class="tab-pane fade mu-event-timeline" id="second-day">
								    	<ul>
								    		<li>
								    			<div class="mu-single-event">
								    				<p class="mu-event-time">9.00 AM</p>
								    				<h3>Breakfast</h3>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-1.jpg" alt="event speaker">
								    				<p class="mu-event-time">10.00 AM</p>
								    				<h3>Advanced SVG Animations</h3>
								    				<span>By Karl Groves</span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-2.jpg" alt="event speaker">
								    				<p class="mu-event-time">11.00 AM</p>
								    				<h3>Presenting Work with Confidence</h3>
								    				<span>By Sarah Dransner</span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-3.jpg" alt="event speaker">
								    				<p class="mu-event-time">12.00 AM</p>
								    				<h3>Keynote on UX & UI Design</h3>
								    				<span>By Ned Stark</span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<p class="mu-event-time">1.00 PM</p>
								    				<h3>The End</h3>
								    			</div>
								    		</li>
								    	</ul>
								    </div>
								    <div role="tabpanel" class="tab-pane fade mu-event-timeline" id="third-day">
								    	<ul>
								    		<li>
								    			<div class="mu-single-event">
								    				<p class="mu-event-time">9.00 AM</p>
								    				<h3>Breakfast</h3>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-1.jpg" alt="event speaker">
								    				<p class="mu-event-time">10.00 AM</p>
								    				<h3>Advanced SVG Animations</h3>
								    				<span>By Karl Groves</span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-2.jpg" alt="event speaker">
								    				<p class="mu-event-time">11.00 AM</p>
								    				<h3>Presenting Work with Confidence</h3>
								    				<span>By Sarah Dransner</span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-3.jpg" alt="event speaker">
								    				<p class="mu-event-time">12.00 AM</p>
								    				<h3>Keynote on UX & UI Design</h3>
								    				<span>By Ned Stark</span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<p class="mu-event-time">1.00 PM</p>
								    				<h3>The End</h3>
								    			</div>
								    		</li>
								    	</ul>
								    </div> -->

								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Schedule -->

	<!-- Start Speakers
		<section id="mu-speakers">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-speakers-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Our Speakers</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis unde, ut sapiente et voluptatum facilis consectetur incidunt provident asperiores at necessitatibus nulla sequi voluptas libero quasi explicabo veritatis minima porro.</p>
							</div>

							<!-- Start Speakers Content
							<div class="mu-speakers-content">

								<div class="mu-speakers-slider">

									<!-- Start single speaker
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-1.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Karl Groves</h3>
											<p>Digital Artist</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker

									<!-- Start single speaker
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-2.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Sarah Dransner</h3>
											<p>Business Consultant</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker


									<!-- Start single speaker
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-3.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Ned Stark</h3>
											<p>UI/UX Specialist</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker


									<!-- Start single speaker
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-4.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Michaela Lehr </h3>
											<p>Digital Marketer</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker

									<!-- Start single speaker
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-1.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Karl Groves</h3>
											<p>Digital Artist</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker

									<!-- Start single speaker
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-2.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Sarah Dransner</h3>
											<p>Business Consultant</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker


									<!-- Start single speaker
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-3.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Ned Stark</h3>
											<p>UI/UX Specialist</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker


									<!-- Start single speaker
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-4.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Michaela Lehr </h3>
											<p>Digital Marketer</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker
								</div>
							</div>
							<!-- End Speakers Content

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Speakers -->

		<!-- Start Pricing  -->
		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Pricing plans</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis unde, ut sapiente et voluptatum facilis consectetur incidunt provident asperiores at necessitatibus nulla sequi voluptas libero quasi explicabo veritatis minima porro.</p>
							</div>

							<div class="mu-pricing-conten">
								<div class="row">

									<!-- single price item -->
									<div class="col-md-4">
										<div class="mu-single-price">

											<div class="mu-single-price-head">
												<span class="mu-currency">$</span>
												<span class="mu-rate">12</span>
												<span class="mu-time">/all days</span>
											</div>
											<h3 class="mu-price-title">BASIC</h3>
											<ul>
												<li>Basic Class Ticket</li>
												<li>Access to all sessions</li>
												<li>Free Breakfast</li>
											</ul>
											<a class="mu-register-btn" href="#"> Register Now</a>
										</div>
									</div>
									<!-- / single price item -->

									<!-- single price item -->
									<div class="col-md-4">
										<div class="mu-single-price mu-popular-price">
											<span class="mu-price-tag">Popular</span>
											<div class="mu-single-price-head">
												<span class="mu-currency">$</span>
												<span class="mu-rate">22</span>
												<span class="mu-time">/all days</span>
											</div>
											<h3 class="mu-price-title">STANDARD</h3>
											<ul>
												<li>Basic Class Ticket</li>
												<li>Access to all sessions</li>
												<li>Free Breakfast</li>
											</ul>
											<a class="mu-register-btn" href="#"> Register Now</a>
										</div>
									</div>
									<!-- / single price item -->

									<!-- single price item -->
									<div class="col-md-4">
										<div class="mu-single-price">

											<div class="mu-single-price-head">
												<span class="mu-currency">$</span>
												<span class="mu-rate">45</span>
												<span class="mu-time">/all days</span>
											</div>
											<h3 class="mu-price-title">PREMIUM</h3>
											<ul>
												<li>Basic Class Ticket</li>
												<li>Access to all sessions</li>
												<li>Free Breakfast</li>
											</ul>
											<a class="mu-register-btn" href="#"> Register Now</a>
										</div>
									</div>
									<!-- / single price item -->

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Pricing -->

		<!-- Start Register  -->
		<section id="mu-register">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-register-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Register Form</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis unde, ut sapiente et voluptatum facilis consectetur incidunt provident asperiores at necessitatibus nulla sequi voluptas libero quasi explicabo veritatis minima porro.</p>
							</div>

							<div class="mu-register-content">
			<form action="registration.php" class="mu-register-form" method="post">

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" name="F_name" placeholder="First Name*" id="Fname" required="">
											</div>
										</div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="L_name" placeholder="Last Name" id="Lname" >
                      </div>
                    </div>

                   <div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="email" class="form-control" name="E_mail" placeholder="Email-id*" id="email"  required="">
											</div>
										</div>

                   <div class="col-md-6">
                    <div class="form-group">
                      <input type="tel" minlength="10" pattern="[1-9]{1}[0-9]{9}" maxlength="10" class="form-control" name="C_id" placeholder="Character-id*" id="Cid" required="">
                    </div>
                  </div>
                </div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="tel" minlength="10" pattern="[1-9]{1}[0-9]{9}" maxlength="10" class="form-control" name="P_number" placeholder="Phone Number*" id="telephone" required="">
											</div>
										</div>

                    <div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" name="G_name" placeholder="Gamer Name*" id="Gname" required="">
											</div>
										</div>
									</div>

                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password*" id="Pass" required="">
                  </div>
                  </div>

                  <div class="col-md-6">
                  <div class="form-group">
                  <input type="password" name="Cpass" class="form-control" placeholder="Confirm Password*" id="Cass" required="">
                  </div>
                  </div>
                </div>
                  <button type="submit" class="mu-reg-submit-btn">SUBMIT</button>

					            </form>
                      <p></p>

<form action="validation.php" method="post">
  <div class="row">
    <div class="row">
     <div class="col-md-6">
       <div class="form-group">
         <input type="email" class="form-control" name="E_mail" placeholder="Email-id" id="lemail"  required="">
       </div>
     </div>

  <div class="col-md-6">
  <div class="form-group">
  <input type="password" name="password" class="form-control" placeholder="Password" id="lPass" required="">
  </div>
  </div>
<button type="submit" class="mu-reg-submit-btn">LOGIN</button>

</form>
              </div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Register -->

		<!-- Start FAQ -->
		<section id="mu-faq">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-faq-area">

							<div class="mu-title-area">
								<h2 class="mu-title">FAQ</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint assumenda ut molestias doloremque ipsam, fugit laborum totam, pariatur est cumque at, repudiandae officia ex dolores quas minus optio, iusto soluta?</p>
							</div>

							<div class="mu-faq-content">

								<div class="panel-group" id="accordion">

							        <div class="panel panel-default">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">
							                <span class="fa fa-angle-down"></span> Lorem ipsum dolor sit amet.
							              </a>
							            </h4>
							          </div>
							          <div id="collapseOne" class="panel-collapse collapse in">
							            <div class="panel-body">
							              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							            </div>
							          </div>
							        </div>

							        <div class="panel panel-default">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							                <span class="fa fa-angle-up"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							              </a>
							            </h4>
							          </div>
							          <div id="collapseTwo" class="panel-collapse collapse">
							            <div class="panel-body">
							              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							            </div>
							          </div>
							        </div>

							        <div class="panel panel-default">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							                <span class="fa fa-angle-up"></span> Lorem ipsum dolor sit amet, consectetur.
							              </a>
							            </h4>
							          </div>
							          <div id="collapseThree" class="panel-collapse collapse">
							            <div class="panel-body">
							              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							            </div>
							          </div>
							        </div>

							        <div class="panel panel-default">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
							                <span class="fa fa-angle-up"></span> Lorem ipsum dolor sit amet, consectetur adipisicing.
							              </a>
							            </h4>
							          </div>
							          <div id="collapseFour" class="panel-collapse collapse">
							            <div class="panel-body">
							              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							            </div>
							          </div>
							        </div>

							        <div class="panel panel-default">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
							                <span class="fa fa-angle-up"></span> Lorem ipsum dolor sit amet, consectetur.
							              </a>
							            </h4>
							          </div>
							          <div id="collapseFive" class="panel-collapse collapse">
							            <div class="panel-body">
							              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							            </div>
							          </div>
							        </div>


							    </div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End FAQ -->

		<!-- Start Sponsors -->
		<section id="mu-sponsors">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-sponsors-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Our Sponsors</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint assumenda ut molestias doloremque ipsam, fugit laborum totam, pariatur est cumque at, repudiandae officia ex dolores quas minus optio, iusto soluta?</p>
							</div>

							<!-- Start spnonsors brand logo -->
							<div class="mu-sponsors-content">
								<div class="row">

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-1.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-2.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-3.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-4.png" alt="Brand Logo">
										</div>
									</div>

										<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-5.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-6.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-7.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-8.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-9.png" alt="Brand Logo">
										</div>
									</div>

										<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-1.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-2.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-3.png" alt="Brand Logo">
										</div>
									</div>

								</div>
							</div>
							<!-- End spnonsors brand logo -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Sponsors -->


		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-title-area">
								<h2 class="mu-heading-title">Contact Us</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>

							<!-- Start Contact Content -->
							<div class="mu-contact-content">
								<div class="row">

								<div class="col-md-12">
									<div class="mu-contact-form-area">
										<div id="form-messages"></div>
											<form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
												</div>
												<div class="form-group">
													<input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required>
												</div>
												<div class="form-group">
													<textarea class="form-control" placeholder="Message" id="message" name="message" required></textarea>
												</div>
												<button type="submit" class="mu-send-msg-btn"><span>SUBMIT</span></button>
								            </form>
										</div>
									</div>
								</div>
							</div>
							<!-- End Contact Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

	</main>

	<!-- End main content -->


	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
			<div class="container">
				<div class="mu-footer-area">
					<div class="mu-footer-top">
						<div class="mu-social-media">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
					<div class="mu-footer-bottom">
						<p class="mu-copy-right">&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
					</div>
				</div>
			</div>

	</footer>
	<!-- End footer -->



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Event Counter -->
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>



    <!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>




  </body>
</html>
