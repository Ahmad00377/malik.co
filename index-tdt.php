<!DOCTYPE html>
<html lang="en">

<head>
<title>TDT FOUNDATION</title> 
<script src="<?php echo $sk['config']['theme_url']; ?>/js/jquery-3.2.1.js"></script>
<script src="<?php echo $sk['config']['theme_url']; ?>/javascript/jquery.form.min.js"></script>

	<script>
		var timezone_offset_minutes = new Date().getTimezoneOffset();
		timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;

		// Timezone difference in minutes such as 330 or -360 or 0
		console.log(timezone_offset_minutes);

		$(document).ready(function() {

			$(".timezone").val(timezone_offset_minutes);
		});
		//  $(".timezone").val(timezone_offset_minutes);
	</script>
	
	

    <!-- Main Font -->
    
    
	<script src="<?php echo $sk['config']['theme_url']; ?>/js/webfontloader.min.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>


	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $sk['config']['theme_url']; ?>/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $sk['config']['theme_url']; ?>/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $sk['config']['theme_url']; ?>/Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $sk['config']['theme_url']; ?>/css2_tdt/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $sk['config']['theme_url']; ?>/css2_tdt/fonts.min.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:300&display=swap" rel="stylesheet">

    <?php
    if ($sk['config']['smooth_links'] == 1) {
        echo '<script>function SK_source(){return \'' . $sk['config']['ajax_path'] . '\';}</script>';
    } else {
        echo '<script>function SK_source(){return \'ajax.php\';}</script>';
    } ?>
    
    <script src="<?php echo $sk['config']['theme_url']; ?>/javascript/welcome.js"></script>



</head>

<body class="body-bg-white">


	<!-- Preloader -->

	<div id="hellopreloader">
		<div class="preloader">
			<svg width="45" height="45" stroke="#fff">
				<g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
					<circle cx="22" cy="22" r="6" stroke="none">
						<animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22" />
						<animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0" />
						<animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0" />
					</circle>
					<circle cx="22" cy="22" r="6" stroke="none">
						<animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22" />
						<animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0" />
						<animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0" />
					</circle>
					<circle cx="22" cy="22" r="8">
						<animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6" />
					</circle>
				</g>
			</svg>

			<div class="text">Loading ...</div>
		</div>
	</div>

	<!-- ... end Preloader -->
	<div class="main-header main-header-fullwidth main-header-has-header-standard" style="position:relative">


		<!-- Header Standard Landing  -->

		<div class="header--standard header--standard-landing" id="header--standard">

			<div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-12">


				<div class="col-xl-4  col-lg-4 col-md-4 col-sm-7 col-7" style="float:left;">
					<div class="header--standard-wrap" style="float:left"><a href="#" class="logo">
							<img src="<?php echo $sk['config']['theme_url']; ?>/img/logo.png" alt="Olympus">
					</div>

				</div>

				<div class="col-sm-5 col-5" style="float:left;">
					</a> <a href="#" class="open-responsive-menu js-open-responsive-menu"> <svg class="olymp-menu-icon" style="float: right;">
							<use xlink:href="<?php echo $sk['config']['theme_url']; ?>/svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
						</svg> </a>
				</div>


				<div class="col-xl-8  col-lg-8 col-md-8 col-sm-8 col-8" style="float:left;">

					<div class="nav nav-pills nav1 header-menu expanded-menu">
						<div class="mCustomScrollbar">
							<ul id="HouschkaAltLightRegular">
								<li class="nav-item"> <a href="<?php echo SK_smoothLink('index.php?tab1=tdt-home'); ?>#home" id="HouschkaAltLightRegular" class="nav-link">HOME</a> </li>
								<li class="nav-item"> <a href="<?php echo SK_smoothLink('index.php?tab1=tdt-home'); ?>#about" id="HouschkaAltLightRegular" class="nav-link">ABOUT</a> </li>
								<li class="nav-item"> <a href="<?php echo SK_smoothLink('index.php?tab1=tdt-home'); ?>#member" id="HouschkaAltLightRegular" class="nav-link">MEMBERS</a> </li>

								<li class="nav-item"> <a href="<?php echo SK_smoothLink('index.php?tab1=tdt-home'); ?>#board-of-directors" id="HouschkaAltLightRegular" class="nav-link">BOARD OF DIRECTORS</a> </li>
								<li class="nav-item"> <a href="<?php echo SK_smoothLink('index.php?tab1=tdt-home'); ?>#education" id="HouschkaAltLightRegular" class="nav-link">EDUCATION</a> </li>
								<li class="nav-item"> <a href="<?php echo SK_smoothLink('index.php?tab1=tdt-home'); ?>#donations" id="HouschkaAltLightRegular" class="nav-link">DONATIONS</a> </li>
								<li class="nav-item"> <a href="<?php echo SK_smoothLink('index.php?tab1=tdt-home'); ?>#contact" id="HouschkaAltLightRegular" class="nav-link">CONTACT</a> </li>
								<li class="btn-border-think c-green" style="margin:5px;"> <a id="HouschkaAltLightRegular" href="<?php echo SK_smoothLink('index.php?tab1=welcome'); ?>" class="nav-link" style="padding:8px;">BECOME A MEMBER</a> </li>
								<li class="btn-border-think c-green"> <a id="HouschkaAltLightRegular" href="<?php echo SK_smoothLink('index.php?tab1=tdt-home'); ?>#donate" class="nav-link" style="padding:8px;">MAKE A DONATION</a> </li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>




		<!-- ... end Header Standard Landing  -->



		<div class="header-spacer--standard"></div>

		<div class="content-bg-wrap bg-landing">
		</div>
		<div class="col col-xl-12  col-lg-12 col-md-12 col-sm-12 col-12 " style="position:relative">

			<div class="row display-flex">

				<div class="col col-xl-4  col-lg-4 col-md-4 col-sm-12 col-12">
				</div>

				<div class="col col-xl-4  col-lg-4 col-md-4 col-sm-12 col-12" style="float:left;padding-top:23px">



					<div class="landing-content">

						<h2 id="adorncondensedsans">A Financial and Emotional Support System for
							Organ Transplant Patients.</h2>
						<p id="HouschkaAltLightRegular">Whether you’re a patient, family member, friend, outsider looking in or just looking to help
							those in need there’s a place for you at TDT Foundation
						</p>

						<div class="row" style="float:left;" style="margin:0px;">

							<div id="HouschkaAltLightRegular" style="text-color:white;padding-left:16px">
								BECOME A MEMBER <a href="<?php echo SK_smoothLink('index.php?tab1=welcome'); ?>"><img style="margin-left:12px" src="<?php echo $sk['config']['theme_url']; ?>/testimages/arrow.png" height="90" width="30" alt="screen"></a>
							</div>
							<div id="HouschkaAltLightRegular" style="color:white; padding: 0px 10px 0px 16px;">
								MAKE A DONATION <a href="#donations"><img style="margin-left:16px" src="<?php echo $sk['config']['theme_url']; ?>/testimages/arrow.png" height="90" width="30" alt="screen"></a>
							</div>
							
						</div>
							

					</div>
					
				</div>

				<div class="col col-xl-4  col-lg-4 col-md-4 col-sm-12 col-12" style="z-index:19">
					<div>

						<div id="adorncondensedsans" style="color:white;padding-bottom:10px;">Login to your Account</div>
						<div>
							<?php

							if (isset($_REQUEST['status'])) {



								if ($_REQUEST['status'] == 'UmVnaXN0cmF0aW9uIHN1Y2Nlc3NmdWwuIFlvdSBjYW4gbG9naW4gbm93') {

									echo '<div class="h6" style="color:#8abe67; padding:10px; text-align:center">' . base64_decode($_REQUEST['status']) . '</div>';
								} else {

									echo '<div class="h6" style="color:red; padding:10px; text-align:center">' . base64_decode($_REQUEST['status']) . '</div>';;
								}
							}

							?>
						</div>
						<form class="content login-form" method="post">

							<div class="row">

								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

									<div class="form-group label-floating">

										<label class="control-label">Your Email</label>

										<input class="form-control" placeholder="" type="text" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required="" required-title="please enter email" name="login_id" style="color:white">

									</div>

									<div class="form-group label-floating">

										<label class="control-label">Your Password</label>

										<input class="form-control" placeholder="" required="" required-title="please enter password" name="login_password" type="password" style="color:white">

									</div>

									<div class="remember">

										<div class="checkbox">

											<label>

												<input name="keep_logged_in" type="checkbox" value="1">

												Remember Me </label>

										</div>

										<a href="#" class="forgot" data-toggle="modal" data-target="#restore-password">Forgot my Password</a>
									</div>
									 <div style="color : red;" class="form-header"></div>
									<button type="submit" class="btn btn-primary btn-lg full-width submit-btn">Login</button>
									<div role="tablist">
										<p style="color:white;">Don’t you have an account? <a style="color:#8abe67;" href="<?php echo SK_smoothLink('index.php?tab1=welcome'); ?>">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
									</div>
								</div>

							</div>

							<input type="hidden" class="timezone" name="timezone">

						</form>

					</div>

				</div>
				<div class= "col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top:70px;color:white;font-size:16px;padding-left:482px">
					
					<p id="HouschkaAltLightRegular">We have designed a private social media site for organ transplant patients to securely and privately converse with other people in situations like theirs. Users create an account and then can add friends, join/create groups and share stories, remedies and insights to help other people navigate the journey of organ transplant.  Many transplant patients have questions that do not get answered by Doctors and going to local support groups can be quite cumbersome (assuming you even have a local group near you).  Many times transplant patients either don’t feel well enough to attend the meetings, or can’t make it work with their schedule. We want to quell that issue. 
					</p><p id="HouschkaAltLightRegular">  
					TDT Foundation offers the online environment to come together, talk about medicines, medical scenarios, fears, triumphs and more.  We hope to become a community that brings people together to fight common battles and to connect people that are walking, or have walked, a similar path to the one you may be experiencing.  Maybe you are having weird side effects from a medication, or you are experiencing shortness of breath (unexpectedly), we want you to be able to reach out to people who have experienced these fears firsthand.  Join a group of transplant patients with similar transplants or experiences to connect and empower each other.  This is an opportunity to truly help someone going through difficult times.   				
					</p>
				</div>		



			</div>
		</div>


	</div>




	<!-- Window-popup Restore Password -->



	<div class="modal fade" id="restore-password" tabindex="-1" role="dialog" aria-labelledby="restore-password" aria-hidden="true">

		<div class="modal-dialog window-popup restore-password-popup" role="document">

			<div class="modal-content"> <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close"> <svg class="olymp-close-icon">

						<use xlink:href="<?php echo $sk['config']['theme_url']; ?>/svg-icons/sprites/icons.svg#olymp-close-icon"></use>

					</svg> </a>

				<div class="modal-header">

					<h6 class="title">Restore your Password</h6>

				</div>

				<div class="modal-body">

				 <form class="welcome-form forgotpass-form" method="post">

                    <p>Enter your email and click the send  button. You’ll receive an  email. </p>
                        <div class="form-header"></div>
                    <div class="form-group label-floating">

                        <label class="control-label">Your Email</label>

                        <input class="form-control" placeholder="" type="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" name="forgotpass_id">

                    </div>

                    <button class="btn btn-purple btn-lg full-width" type="submit">Send me the Password</button>
                </form>
                
				</div>

			</div>

		</div>

	</div>



	<!-- ... end Window-popup Restore Password -->




	<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background-color: #98d96a;float:left;">
		<div class="col-xl-3 col-lg-3 col-md-3" style="float:left;">
		</div>
		<div class="col-xl-5 col-lg-5 col-md-5 col-sm-9 col-9" style="
    float: left;
    margin-top: -5%;
">
			<video height="350" width="100%" padding-top="20px" style="border:8px solid #fff;object-fit:inherit;" controls>

				<source src="/tdt/testimages/Video1.mp4" type="video/mp4">
			</video>
		</div>
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-3 " style="
	float: left; padding:20px 0 0 0;">
			<h2 id="adorncondensedsans" style="position:absolute; padding:5px 0 0 36px;">Press<br>Play</h2>
			<img src="<?php echo $sk['config']['theme_url']; ?>/testimages/pressPlay.png" height="50" width="50" alt="screen" style="padding: 80px 0px 0px 0px;">


		</div>
		<div class="col-xl-2 col-lg-2 col-md-2" style="
    float: left;">
		</div>
	</div>
	<!-- overision div -->
	<div class="container-full-width" style="background-color:#98d96a;clear:both;">
		<div class="row" style="margin:0px;">
			<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">


				<div style="padding: 0px 15px 28px 17px;">

				</div>
				<h2 id="adorncondensedsans" style="color:#03162F;padding: 0px 15px 0px 15px;">OUR VISION</h2>
				<p id="HouschkaAltLightRegular" style="color:#0000008a;padding: 0px 15px 0px 15px; font-size: 14px;line-height: initial;"> TDT Foundation is a 501c3 non-profit organization founded to provide emotional and financial support for those facing the challenges of life post organ
					transplant. We have developed an online support system where transplant patients can connect with one another to share, heal and express thier feelings in a
					safe, protected and comfortable space
				</p>
				<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-auto">

					<div id="HouschkaAltLightRegular" style="color:#000;float:right;">
						<h5 style="font-weight: 400; color: #141c5d;">MORE ABOUT US <a href="#board-of-directors"><img src="<?php echo $sk['config']['theme_url']; ?>/testimages/un.png" style="padding:0px 0px 6px 2px;" height="90" width="30" alt="screen"></a></h5>
					</div>



					<!-- <div style=" padding: 0px 10px 0px 10px;">

						<p><img src="testimages/arrow.png" height="90" width="30" alt="screen"></p>

					</div> -->


				</div>

			</div>
		</div>
	</div>
	<!-- overision div end here -->
	<!-- <br> -->

	<div class="container-full-width" style="background-color:#03162F;padding-top:10px" id="home">
		<div class="row" style="padding:25px 25px;margin:0px;">
			<div class="col col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 m-auto">


				<div class="row" style="margin:0px;">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">

						<img src="<?php echo $sk['config']['theme_url']; ?>/testimages/tracey.png" alt="screen" style="padding-top:14%;">



					</div>


					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
						<h2 id="adorncondensedsans" style="color:#98d96a;padding: 0px 15px 0px 15px;line-height: normal;">Tracey’s Story</h2>
						<p id="HouschkaAltLightRegular" style="color:white;padding: 0px 15px 0px 15px;line-height:19px">
						Tracey Turnbull was born April Fools Day 1954. Tracey was born with a brain tumor, in a time when that couldn’t have been better than a 50/50 chance of survival and a minute chance of thriving. Tracey survived, thrived and married a logger from Coeur d’ Alene, ID named Bart, with whom she had two boys. Bart died tragically in a logging accident leaving her widowed with two young boys. It was nothing she couldn’t handle; she was able to raise two young men to be college graduates, business owners and productive members of the community she helped to build.
							Tracey was diagnosed with a progressive form of Pulmonary Hypertension in 2007, which became more severe over time.
							Eventually, she needed a double lung transplant to survive and as fate would have it a perfect match appeared within 12 hours. She had her transplant September 21, 2013 at St. Josephs hospital in Phoenix, Arizona. Things went as great as they could have for a woman in her condition. She endured 56 days in ICU after the transplant fighting infections and getting the strength to begin her new normal. Tracey was able to go “glamping” and do many of the things she really enjoyed along with seeing both of her boys get married and the birth of her first granddaughter,which gave her a joy words can’t begin to explain. On December 3, 2017 she hung up the gloves and joined her soulmate in eternal rest.</p>
					</div>
				</div>
			</div>

		</div>

	</div>


	<!-- <br> -->

	<div id="member" class="container-full-width" style="background-image:url('testimages/background.png');background-repeat: no-repeat;background-position: center;">
		<div style="background-color:#E6E7E8;opacity: 0.8;" class="backgroundimage">
			<div class="row" style="position: relative;padding-bottom: 90px;padding-top: 90px;margin:0px;">
				<div class="col col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 m-auto">


					<h2 id="adorncondensedsans" style="color:#98d96a;text-align:center;padding: 0px 15px 0px 15px;">JOIN THE COMMUNITY</h2>
					<p id="HouschkaAltLightRegular" style="color:black;padding: 0px 15px 0px 15px;font-size: 0.780rem;line-height: 21px;">Organ Transplant can be a very traumatic experience on the mind and body. The emotional toll of relearning everyday tasks and struggling to do things that used to be second nature come with a variety of mental side effects that may not be addressed in the medical world. Doctors are so focused on your physical health, balancing your medicines and treating other patients that the mental health side of this transformation takes a back seat to physical health. Struggling to do things that were once so easy may cause humans to feel secluded, alone and give the feeling that “no one knows what you are going through”. The TDT Foundation is a family that helps everyone to hold on to their hope and remind them they are not alone. We hope to relieve that sense of the unknown and give each person a community to interact with, where similar experiences and situations may forge a healing bond.
					</p>
					<div class="row" style="float:right;padding:0 15px 0 15px;margin:0px;">

						<b>
							<p style="color:black; padding: 0px 10px 0px 10px;">
								<h5 id="HouschkaAltLightRegular">BECOME A MEMBER</h5>
							</p>
						</b>


						<div style="padding: 10px 27px 0px 11px;">

							<a href="<?php echo SK_smoothLink('index.php?tab1=welcome'); ?>">
								<p><img src="<?php echo $sk['config']['theme_url']; ?>/testimages/arrow.png" height="90" width="30" alt="screen"></p>
							</a>

						</div>


					</div>


				</div>

			</div>
		</div>

	</div>

	</div>
	<!-- Start of Support Encourage Donate DIV -->
	<div class="container-full-width" style="position: relative;margin-top: -56px;">
		<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
			<div class="col-xl-3 col-lg-3 col-md-3" style="float:left;">
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-4" style="text-align:center;float:left;">

				<img src="<?php echo $sk['config']['theme_url']; ?>/testimages/support.png" height="120" width="120" alt="screen">

				<p style="color:#03162F;padding: 0px 15px 0px 15px;">
					<h4 id="adorncondensedsans"><b style="color: #03162F; font-size: 26px;">SUPPORT</b></h4>
				</p>


				<p id="HouschkaAltLightRegular" style="padding: 0px 15px 0px 15px;">
					Creating a community of intertwined souls connecting in exceptional circumstances is what we strive to achieve. Having someone to talk to about experiences similar to yours and learning from those who have already been through it.</p>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-4" style="text-align:center;float:left;">

				<img src="<?php echo $sk['config']['theme_url']; ?>/testimages/encourage.png" height="120" width="120" alt="screen">
				<p style="color:#03162F;padding: 0px 15px 0px 15px;">
					<h4 id="adorncondensedsans"><b style="color: #03162F;font-size: 26px;">ENCOURAGE</b></h4>
				</p>

				<p id="HouschkaAltLightRegular" style="padding: 0px 15px 0px 15px;">Your donations work in a multitude of ways. Financial burdens may weigh a person down and sometimes little gestures can work wonders on the human spirit. A donation, no matter the size, is an encouragement token for someone who may need it most. </p>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-4" style="text-align:center;float:left;">
				<img src="<?php echo $sk['config']['theme_url']; ?>/testimages/donate.png" height="120" width="120" alt="screen">
				<p style="color:#03162F;padding: 0px 15px 0px 15px;">
					<h4 id="adorncondensedsans"><b style="color: #03162F;font-size: 26px;">DONATE</b></h4>
				</p>


				<p id="HouschkaAltLightRegular" style="padding: 0px 15px 0px 15px;">Charitable contributions will be used to help transplant patients pay for everyday expenses & medicines. TDT Foundation is a 501(c)(3) and qualifies for Federal Tax exemptions for donors who make charitable donations. </p>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3" style="float:left;">
			</div>
		</div>
	</div>

	<!-- End of Support Encourage Donate DIV -->

	<!-- Start of WHY WE'RE HERE -->

	<div class="container-full-width" id="about" name="about" style="clear:both;padding-top:15px;">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="col-xl-2 col-lg-2 col-md-2" style="float:left;">
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" style="float:left;">
				<img src="<?php echo $sk['config']['theme_url']; ?>/testimages/coryM.png" alt="screen">
			</div>
			<div class="col col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12" style="float:left;">
				<h2 id="adorncondensedsans" style="color:#03162F;padding: 15px 15px 0px 15px;">WHY WE'RE HERE</h2>
				<p id="HouschkaAltLightRegular" style="padding: 0px 15px 0px 15px;line-height: normal;">TDT Foundation was started in honor of my mother, Tracey Turnbull. She endured a
					double lung transplant in 2013, and battled until December 3, 2017. I saw firsthand all
					the burdens that come with a double lung transplant. These champions of organ
					transplant have a daily struggle that none of us can truly comprehend, then add in the
					financial burden, stress on family/ friends, travel, emotional toll and this becomes a
					cause that deserves support.</p>
				<h2 id="adorncondensedsans" style="color:#03162F;padding: 0px 15px 0px 15px;" style="float:left;">WHAT WE DO</h2>
				<p id="HouschkaAltLightRegular" style="padding: 0px 15px 0px 15px;line-height: normal;">TDT Foundation provides emotional and financial support for those going through the
					life altering process of post organ transplant. We will provide an online support system
					where transplant patients can connect with one another to talk, heal and express
					feelings in a protected and comfortable setting. We will also be raising money to help
					patients cover everyday costs as they need them.</p>
				<div class="row" style="float:right;margin:0px;">

					<b>
						<p style="color:black; padding: 0px 10px 0px 10px;">
							<h5 id="HouschkaAltLightRegular">PATIENT REQUEST FORM</h5>
						</p>
					</b>


					<div style=" padding: 11px 10px 0px 10px;">

						<p><img src="<?php echo $sk['config']['theme_url']; ?>/testimages/arrow.png" height="90" width="30" alt="screen"></p>

					</div>


				</div>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-3" style="float:left;">

			</div>

		</div>
	</div>
	<!-- End of WHY WE'RE HERE -->

	<!-- Start of WHY WE CHOOSE THE DANDELION TO REPRESENT US -->
	<div class="container-full-width" style="background-image:url('testimages/loop.png');background-repeat: no-repeat;background-color:#07162D;background-position: left;clear:both;background-size: 47%;padding: 60px 0 60px 0;">

		<div class="row" style="margin:0px;">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-1 col-1" style="float:left;">
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-10 col-10" style="float:left;">


				<b>
					<h2 id="adorncondensedsans" style="color:white;padding:0 15px 15px 15px;font-size:30px;">WHY WE CHOOSE THE DANDELION TO REPRESENT US</h2>
				</b>
				<p id="HouschkaAltLightRegular" style="padding:0 15px 0 15px;font-size:14px;line-height:13px;">Dandelions thrive in difficult conditions and its been said for many years that it symbolizes the abillity to rise above all lifes challenges. Not only that, dandelions
					represent healing from emotional pain and physical injury, warmth and power, surviving through all challenges and difficulties, long lasting happiness and wish
					fullfillment, Ultimately the message of the dandelion is to never give up.
				</p>

			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-1 col-1" style="float:left;">
			</div>
		</div>

	</div>

	<!-- End of WHY WE CHOOSE THE DANDELION TO REPRESENT US -->

	<!-- Start of Board of Directors -->
	<div class="container-full-width" id="board-of-directors">
		<div class="row" style="padding:45px 0 45px 0;margin:0px;">

			<div class="col col-xl-3 col-lg-3 col-md-3 col-sm-2 col-2" style="float:left;">
				<div>
					<h2 id="adorncondensedsans" class="vertical" style="float: left;color:#03162F;font-size: 40px;letter-spacing: 3px;writing-mode: vertical-lr;transform: rotate(-180deg);">THE TDT BOARD OF DIRECTORS</h2>
				</div>
			</div>

			<div class="col-xl-9 col-lg-9 col-md-9 col-sm-10 col-10" style="float:left;">

				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="float:left;">
					<div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7" style="float:left;">
						<h2 id="adorncondensedsans" style="color:#03162F;text-align:right;">CORY TURNBULL</h2>
						<div id="HouschkaAltLightRegular" style="color:#0D2B5A;text-align:right;line-height:21px;">
							Cory is the son of Bart & Tracey Turnbull, husband of Griffen Turnbull and Father to Joey Turnbull. Cory is the Founder of the TDT Foundation and moonlights as a full time Commercial Real Estate agent in Coeur d’ Alene, Idaho. Cory operates his business as CDA Commercial Real Estate specializing in Commercial Investments, Leasing and Property Management. Griffen owns & operates her own home décor/boutique in CDA called, White Brick Interiors.
							Cory & his wife Griffen, are very involved in community projects and fundraising efforts for good causes. In the last couple years they have worked with: Festival of Trees, Impact Club CDA, Hanks Law, Childrens Village and many other organizations to help impact the community.
						</div>
					</div>
					<span class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-5" style="float:left;">
						<img src="<?php echo $sk['config']['theme_url']; ?>/testimages/coryT.jpg" alt="screen">
					</span>

				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-bottom: 15px;float:left;">

					<div class="row" style="margin:0px;">
						<span class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-5" style="padding-bottom: 15px;float:left;">
							<img src="<?php echo $sk['config']['theme_url']; ?>/testimages/test2.png" alt="screen">
						</span>
						<div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7" style="float:left;">
							<h2 id="adorncondensedsans" style="color:#03162F;text-align:left;">COLE TURNBULL</h2>
							<div id="HouschkaAltLightRegular" style="color:#0D2B5A;text-align:left;line-height:21px;">
								Cole Turnbull is the Co-Founder of Impact Club® Coeur d’Alene where they have surgically injected over $63,000 and counting of funds into local charities and nonprofits in just a year and halfs time.Cole is also the host of Coeur d’Alene Advice Givers® Podcast where he interviews local business owners, thought leaders, and entrepreneurs.He is also a licensed Realtor® with Professional Realty Services Idaho.Fortunate enough to be one of the few who were born and raised in North Idaho Cole hangs his hat on making sure our community as a better place tomorrow than it is today. When he isn’t working he enjoys spending time with his family, hunting, playing softball, reffing high school football, and cheering on his Alma Mater Arizona State along with the Seahawks.
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-bottom: 15px;float:left;">

					<div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7" style="margin: auto 0;float:left;">
						<h2 id="adorncondensedsans" style="color:#03162F;text-align:right;">RANDALL HENRY</h2>
						<div id="HouschkaAltLightRegular" style="color:#0D2B5A;text-align:right;line-height:21px;">
							Randall Henry co-founder and Chief Technical Officer of Overload Golf.
							CGO/President of aboutGolf. CGO of Henry-Griffitts.Henry served the past 10 years in many roles holding the following titles President/GM of Henry-Griffitts, the world leader in custom fit golf clubs, while also serving over those years as Director of Business Innovations and Regional Manager for leading Golf. Simulator company aboutGolf. He brings with him a unique array of innovative ideas,
							technological experience, relationships, and a thorough familiarity with the golf
							industry.Overload Golf is an exclusive golf company that works with the industry's best--bringing together complementary businesses, ideas, products, and markets, while applying innovation from other industries to golf. We provide valuable and unique resources and technologies. If a business needs something, Overload Golf will connect them with the appropriate partners, whether they're in need of marketing, investment, distribution networks, or anything that will accelerate them to the next level. We are excited to create synergies between golf businesses
							aboutGolf is a world leader in golf simulator and golf performance technology and is
							proud to be The Official Golf Simulator Provider of the PGA TOUR and the Exclusive
							on-air simulator for the Golf Channel. The more than 25-year-old, Ohio-based
							company is committed to developing and applying innovative, state-of-the-art technology to enhance and improve the game for golfers at every level. Its products,
							including PGA TOUR Simulators, aG Studio and Henry-Griffitts Custom Fit Golf Clubs,
							enable substantive learning and improvement in the game of golf.Henry-Griffitts is the pioneer of dynamic clubfitting and originator of the lie board,
							interchangeable heads and dynamic fitting, as well as the clubfitting cart. Dedicated to

						</div>
					</div>
					<span class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-5" style="float:left;">
						<img src="<?php echo $sk['config']['theme_url']; ?>/testimages/test3.png" alt="screen">
					</span>


				</div>
			</div>
			<!-- <div class="col col-xl-1 col-lg-1 col-md-1" style="float:left;">
	</div> -->












		</div>

		<!-- End of Board of Directors -->
		<!-- education start -->
		<div class="container-full-width" style="background-color:#07162D;padding-top:45px;" id="education">
			<div class="row" style="margin:0px;">

				<div class="col col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
					<h2 id="adorncondensedsans" class="vertical" style="padding-bottom:60px;color:white;font-size:48px;writing-mode: vertical-lr;transform: rotate(-180deg);">EDUCATION</h2>
				</div>
				<div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
				<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-7 col-7" style="padding-bottom:45px;">


					<b>
						<h3 id="adorncondensedsans" style="color:#98d96a;">AMERICAN SOCIETY OF TRANSPLANTATION (AST)</h3>
					</b>
					<p id="HouschkaAltLightRegular" style="color:white;">The American Society of Transplantation is an organization dedicated to advancing the field of transplantation and improving patient care by promoting research, education, advocacy, organ donation, and service to the community. These resources address what patients may expect before, during, and after transplants, including their medications. These resources were created for informing transplant patients. Click Here to Read the Patient Education Packets:<a href="https://www.myast.org/patient-information/patient-education-packets#" target="_blank" style="color:#98d96a;"> https://www.myast.org/patient-information/patient-education-packets</a>
					</p>
					<b>
						<h3 id="adorncondensedsans" style="color:#98d96a;">UNITED NETWORK FOR ORGAN SHARING (UNOS)</h3>
					</b>
					<p id="HouschkaAltLightRegular" style="color:white;">United Network for Organ Sharing (UNOS) is the private, non-profit organization that manages the nation’s organ transplant system under contract with the federal government. In doing so, we bring together hundreds of transplant and organ procurement professionals and thousands of volunteers. This unique collaboration helps make life-saving organ transplants possible each day. Our system serves as the model for transplant systems around the world. For Tons of information on transplant living, visit: <a href="https://transplantliving.org/" target="_blank" style="color:#98d96a;">https://transplantliving.org</a>
					</p>
					<b>
						<h3 id="adorncondensedsans" style="color:#98d96a;">ORGAN DONATION ALLIANCE</h3>
					</b>
					<p id="HouschkaAltLightRegular" style="color:white;">The Alliance is the recognized leader within the organ donation and transplantation community dedicated to providing engaged learning, innovation and collaborative leadership for future advancements in organ donation and transplantation. Visit:<a href="https://organdonationalliance.org/ " target="_blank" style="color:#98d96a;">https://organdonationalliance.org</a>
					</p>
					<b>
						<h3 id="adorncondensedsans" style="color:#98d96a;">DONATE LIFE AMERICA</h3>
					</b>
					<p id="HouschkaAltLightRegular" style="color:white;">Donate Life America is a 501(c)3 nonprofit organization leading its national partners and Donate Life State Teams to increase the number of donated organs, eyes and tissues available to save and heal lives through transplantation while developing a culture where donation is embraced as a fundamental human responsibility.
					</p>
					<p id="HouschkaAltLightRegular" style="color:white;">DLA manages and promotes Donate Life℠, the national brand for the cause of donation; motivates the public to register as organ, eye and tissue donors; provides education about living donation; manages the National Donate Life Registry at RegisterMe.org; and develops and executes effective multi-media campaigns to promote donation.
					</P>
					<p id="HouschkaAltLightRegular" style="padding-bottom: 15px;color:white;">Founded as the Coalition on Donation in 1992 by the donation and transplantation community, Donate Life America changed its name in 2006 in response to extensive research and the desire to align the organization with the Donate Life brand. Over the past 25 years, Donate Life America and the Donate Life Community have registered 147 Million organ, eye and tissue donors in the United States – more than 58% of the adult population. Visit <a href="https://www.donatelife.net/" target="_blank" style="color:#98d96a;">https://www.donatelife.net</a>
					</P>

				</div>
				<div class="col col-xl-3 col-lg-3 col-md-3 col-sm-2 col-2">

				</div>
			</div>
			<!-- education end -->


			<div class="container-full-width" style="background-color:#ffffff;padding-top:45px;" id="donations">
				<div class="row" style="margin:0px;">

					<div class="col col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
						<h2 id="adorncondensedsans" class="vertical" style="letter-spacing: 40px;color:#03162F;font-size:48px;writing-mode: vertical-lr;transform: rotate(-180deg);">DONATIONS</h2>
					</div>
					<div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
					<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-7 col-7">



						<b>
							<h2 id="adorncondensedsans" style="color:#98d96a;">YOUR DONATIONS MAKE A DIFFERENCE</h2>
						</b>
						<p id="HouschkaAltLightRegular" style="color:black;">Donations are dispersed to organ transplant survivors that can demonstrate a need for assistance. This may include assistance with day to day costs, medicines, medical bills or other costs associated with organ transplant. In many cases, people are unable to return to work after transplant and become “disabled” leaving them financially strained and adding additional stress to an already tough situation.
						</p>
						<p id="HouschkaAltLightRegular" style="color:black;">TDT Foundation is recognized by the Federal Government as a 501 (c)(3), which offers donors tax deductions on any donations. We will provide donors with receipt and proof of donation for tax purposes. We will determine who receives the donations based on proof of need. If you want to make a donation for a specific cause (transplant type) they may also be considered. Helping people is what we are all here to do. </p>
						<b>
							<h2 id="adorncondensedsans" style="color:#98d96a;">SELECT YOUR DONATION AMOUNT</h2>
						</b>
						<p id="HouschkaAltLightRegular" style="color:black;">Prefer to write a check? If so, make checks payable to TDT Foundation and mail them to 5936 N 16th St., Dalton Gardens, ID 83815. Make sure to include return address information, so we can mail you receipt. Thanks for your consideration. </p>




						<form class="content" method="post" action="<?php echo SK_smoothLink('index.php?tab1=payment'); ?>">
							<div class="row">

								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ">
									<div class="radio" style="color:black;">
										<label class="radio-inline" style="font-size: 23px;font-weight: lighter;font-family: Lato;"><input type="radio" value='1000' name="optradio">$1000 (USD)</label>
									</div>
								</div>
								<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 ">
									<div class="radio" style="color:black;">
										<label class="radio-inline" style="font-size: 23px;font-weight: lighter;font-family: Lato;"><input type="radio" value='500' name="optradio">$500 (USD)</label>
									</div>
								</div>

								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ">
									<div class="radio" style="color:black;">
										<label class="radio-inline" style="font-size: 23px;font-weight: lighter;font-family: Lato;"><input type="radio" name="optradio" value='250'>$250 (USD)</label>
									</div>
								</div>

								<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 ">
									<div class="radio" style="color:black;">
										<label class="radio-inline" style="font-size: 23px;font-weight: lighter;font-family: Lato;"><input type="radio" name="optradio" value='100'>$100 (USD)</label>
									</div>
								</div>

								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ">
									<div class="radio" style="color:black;">
										<label class="radio-inline" style="font-size: 23px;font-weight: lighter;font-family: Lato;"><input type="radio" name="optradio" value='50'>$50 (USD)</label>
									</div>
								</div>

								<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 ">
									<div class="radio" style="color:black;">
										<label class="radio-inline" style="font-size: 23px;font-weight: lighter;font-family: Lato;"><input type="radio" name="optradio" value='35'>$35 (USD)</label>
									</div>
								</div>

								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
									<div class="radio" style="color:black;">
										<label class="radio-inline" style="font-size: 23px;font-weight: lighter;font-family: Lato;"><input type="radio" name="optradio" data-toggle="collapse" data-parent="#accordion" href="#collapse1">$Custom Donation</label>

										<div class="panel-group" id="accordion">
											<div class="panel panel-default">
												<div class="panel-heading">
													<div id="collapse1" class="panel-collapse collapse">



														<!-- <input type="text" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="$1,000,000.00"> -->

														<input id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" class="form-control" data-type="currency" placeholder="$1,000,000.00" type="text" name="custom_amount" style="border: 1px solid #98D96A;">
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>


							</div>

							<!-- <div class="col col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 left-align" style="padding-top: 10px">
						<button type="submit" class="btn btn-lg " style="background: #98d96a;width: 75%;;font-family: Lato;">$amount (USD)</button>

						<input type="hidden" name="task" value="Send">
					</div> -->

							<!-- </form> -->




							<!-- Tab panes -->


							<div class="tab-content" style="padding-top: 25px" id="donate">
								<div class="tab-pane active" id="donate" role="tabpanel" data-mh="log-tab">



									<div class="row">
										<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
											<div class="form-group label-floating">

												<input id="HouschkaAltLightRegular" class="form-control" placeholder="First Name" type="text" name="first_name" style="border: 1px solid #98D96A;text-align:center;" required="">
											</div>
										</div>
										<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
											<div class="form-group label-floating">

												<input id="HouschkaAltLightRegular" class="form-control" placeholder="Last Name" type="text" name="last_name" style="border: 1px solid #98D96A;text-align:center;" required="">
											</div>
										</div>

										<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
											<div class="remember">
												<div class="checkbox">
													<label>
														<input id="HouschkaAltLightRegular" name="make_donation_anonymous" type="checkbox" style="border: 2px solid #98D96A;">
														Make my donation anonymous </label>
												</div>
											</div>
										</div>

										<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
											<div class="form-group label-floating">

												<input id="HouschkaAltLightRegular" class="form-control" placeholder="Your Email for Receipt" type="text" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" name="email" style="border: 1px solid #98D96A;text-align:center;" required="">
											</div>

											<div class="row">
												<div class="col col-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
													<div class="form-group label-floating">

														<input id="HouschkaAltLightRegular" class="form-control" style="text-align:center;" placeholder="Phone Number" type="number" name="Phone" style="border: 1px solid #98D96A;" required="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="14">


													</div>
												</div>
												<div class="col col-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
													<div class="form-group label-floating">

														<input id="HouschkaAltLightRegular" style="text-align:center;" maxlength="5" class="form-control" placeholder="Zip Code" type="number" name="Zip" style="border: 1px solid #98D96A;" required="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="6">
													</div>


												</div>
											</div>


											<div class="form-group label-floating">

												<Textarea id="HouschkaAltLightRegular" class="form-control" placeholder="Leave a comment" type="Message" name="Message" style="border: 1px solid #98D96A;text-align:center;"></Textarea>
											</div>


											<div class="remember" style="text-align:center">
												<div class="checkbox">
													<label>
														<input style="color:black;" name="checkbox" type="checkbox" value="check">
														by continuing you are agreeing to TDT Foundations<a href="#"> Terms and Privacy Policy</a> </label>
												</div>
											</div>


											<?php
											//  $optradio = $_POST['optradio'];

											// 	if (empty($optradio)){

											// 		$message = "You didnot Select any Amount to donate.";
											// 		echo "<script type='text/javascript'>alert('$message');</script>";

											// 	}

											?>


											<div class="col col-10 col-xl-10 col-lg-12 col-md-12 col-sm-12 m-auto">
												<button id="adorncondensedsans" type="submit" class="btn btn-lg full-width" style="background: #98d96a;" onclick="if(!this.form.checkbox.checked){alert('You must agree to the terms and Privacy Policy first.');return false}">DONATE NOW</button>
											</div>
										</div>
										<input type="hidden" name="task" value="SEND">
									</div>

						</form>
					</div>
				</div>

			</div>
			<div class="col col-xl-3 col-lg-3 col-md-3 col-sm-2 col-2">
			</div>

		</div>

		<!-- <br> -->

		<!-- contact us -->
		<div class="container-full-width" id="contact" style="background-color:#07162D;padding:45px 0 45px 0;">

			<div class="row" style="margin:0px;">
				<div class="col col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
					<div>
						<h2 id="adorncondensedsans" class="vertical" style="padding-bottom:60px;color:#F1F2F2;font-size:48px;writing-mode: vertical-lr;transform: rotate(-180deg);">CONTACT US</h2>
					</div>
				</div>
				<div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
				<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-7 col-7" style="text-align:center">

					<div class="align-centre">
						<h4 id="adorncondensedsans" style="color:#98d96a;font-size:36px">
							<div><b>HAVE A QUESTION OR COMMENT?</b></div>
						</h4>
						<p id="HouschkaAltLightRegular" style="font-size:10px">Fill out the form below or email us at inof@tdtfoundation.com and we will get back to you ASAP</p>

					</div>

					<!-- Tab panes -->

					<!-- <div class="col col-xl-6 col-lg-6  col-md-12 col-sm-12 col-12 align-centre"> -->
					<div class="tab-content">
						<div class="tab-pane active" role="tabpanel" data-mh="log-tab">


							<form class="content" method="post" action="post">
								<div class="row">
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group label-floating">

											<input class="form-control" id="HouschkaAltLightRegular" style="text-align:center; color:white;" placeholder="First Name" type="text" required="" name="first_name">
										</div>
									</div>
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group label-floating">

											<input class="form-control" id="HouschkaAltLightRegular" style="text-align:center ;color: white;" placeholder="Last Name" type="text" required="" name="last_name">
										</div>
									</div>

									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating">

											<input class="form-control" id="HouschkaAltLightRegular" style="text-align:center; color: white;" placeholder="Your Email Address" type="text" required="" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" name="email">
										</div>

										<div class="row">
											<div class="col col-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
												<div class="form-group label-floating">

													<input class="form-control" id="HouschkaAltLightRegular" style="text-align:center; color: white;" placeholder="Phone" type="number" name="Phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="14">
												</div>
											</div>
											<div class="col col-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
												<div class="form-group label-floating">

													<input class="form-control" id="HouschkaAltLightRegular" style="text-align:center; color: white;" placeholder="Zip Code" type="number" name="Zip" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="6">
												</div>
											</div>
										</div>


										<div class="form-group label-floating">

											<textarea class="form-control" id="HouschkaAltLightRegular" style=" color: white;text-align:center;" required="" placeholder="Your Message" type="Message" name="Message"></textarea>
										</div>

										<div class="col col-10 col-xl-10 col-lg-12 col-md-12 col-sm-12 m-auto">
											<button id="adorncondensedsans" type="submit" class="btn btn-lg full-width" style="background: #98d96a;">SEND NOW</button>
										</div>
									</div>
									<input type="hidden" name="task" value="SEND">
								</div>

							</form>
						</div>

					</div>
				</div>
				<div class="col col-xl-3 col-lg-3 col-md-3 col-sm-2 col-2"></div>
			</div>
		</div>
		<!-- contact us end here -->


		<div class="container-full-width" style="background-color:#f1f2f2">
			<div class="row" style="padding:25px 0 0 25px;margin:0px;">

				<div class="col col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 m-auto">


					<div class="crumina-module crumina-heading">
						<div class="img-wrap" style="text-align:left"> <img src="<?php echo $sk['config']['theme_url']; ?>/testimages/TDT-logo.png" alt="Olympus" width="200"> </div>

					</div>

					<div class="row" style="padding-left: 40px;margin:0px;">
						<ul style="font-size: 12px;">
							<li class="nav-item" style="float: left; padding: 0px 5px 0px 5px;">
								<a id="HouschkaAltLightRegular" href="#home" style="color: #000;">HOME</a>
							</li>
							<li class="nav-item" style="float: left; padding: 0px 5px 0px 5px;">
								<a id="HouschkaAltLightRegular" href="#about" style="color: #000;">ABOUT</a>
							</li>
							<li class="nav-item" style="float: left; padding: 0px 5px 0px 5px;">
								<a id="HouschkaAltLightRegular" href="#member" style="color: #000;">MEMBERS</a>
							</li>

							<li class="nav-item" style="float: left; padding: 0px 5px 0px 5px;">
								<a id="HouschkaAltLightRegular" href="#board-of-directors" style="color: #000;">BOARD OF DIRECTORS</a>
							</li>
							<li class="nav-item" style="float: left; padding: 0px 5px 0px 5px;">

								<a id="HouschkaAltLightRegular" href="#education" style="color: #000;">EDUCATION</a>
							</li>
							<li class="nav-item" style="float: left; padding: 0px 5px 0px 5px;">

								<a id="HouschkaAltLightRegular" href="#donations" style="color: #000;">DONATIONS</a>
							</li>
							<li class="nav-item" style="float: left; padding: 0px 5px 0px 5px;">

								<a id="HouschkaAltLightRegular" href="#contact" style="color: #000;">CONTACT</a>
							</li>
							<li class="nav-item" style="float: left; padding: 0px 5px 0px 5px;">

								<a id="HouschkaAltLightRegular" href="<?php echo SK_smoothLink('index.php?tab1=welcome'); ?>" style="color: #000;">BECOME A MEMBER</a>
							</li>
							<li class="nav-item" style="float: left; padding: 0px 5px 0px 5px;">

								<a id="HouschkaAltLightRegular" href="#donate" style="color: #000;">MAKE A DONATION</a>
							</li>
						</ul>

					</div>

					<div style="padding-top:40px;color: #000;">
						<p id="HouschkaAltLightRegular" style="padding-left: 31px;font-size: 9px;">COPYRIGHT © 2019 TDT FOUNDATION - ALL RIGHTS RESERVED</p>
					</div>


				</div>

			</div>

		</div>

		<!-- End Here -->
		<script>
			$("input[data-type='currency']").on({
				keyup: function() {
					formatCurrency($(this));
				},
				blur: function() {
					formatCurrency($(this), "blur");
				}
			});


			function formatNumber(n) {
				// format number 1000000 to 1,234,567
				return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
			}


			function formatCurrency(input, blur) {
				// appends $ to value, validates decimal side
				// and puts cursor back in right position.

				// get input value
				var input_val = input.val();

				// don't validate empty input
				if (input_val === "") {
					return;
				}

				// original length
				var original_len = input_val.length;

				// initial caret position 
				var caret_pos = input.prop("selectionStart");

				// check for decimal
				if (input_val.indexOf(".") >= 0) {

					// get position of first decimal
					// this prevents multiple decimals from
					// being entered
					var decimal_pos = input_val.indexOf(".");

					// split number by decimal point
					var left_side = input_val.substring(0, decimal_pos);
					var right_side = input_val.substring(decimal_pos);

					// add commas to left side of number
					left_side = formatNumber(left_side);

					// validate right side
					right_side = formatNumber(right_side);

					// On blur make sure 2 numbers after decimal
					if (blur === "blur") {
						right_side += "00";
					}

					// Limit decimal to only 2 digits
					right_side = right_side.substring(0, 2);

					// join number by .
					input_val = "$" + left_side + "." + right_side;

				} else {
					// no decimal entered
					// add commas to number
					// remove all non-digits
					input_val = formatNumber(input_val);
					input_val = "$" + input_val;

					// final formatting
					if (blur === "blur") {
						input_val += ".00";
					}
				}

				// send updated string to input
				input.val(input_val);

				// put caret back in the right position
				var updated_len = input_val.length;
				caret_pos = updated_len - original_len + caret_pos;
				input[0].setSelectionRange(caret_pos, caret_pos);
			}

			$(document).ready(function() {

				// ... do something
				if (window.location.href.indexOf('#about') > 0) {
					// Handler for .ready() called.
					$('html, body').animate({
						scrollTop: $('#about').offset().top
					}, 'slow');
				}
				if (window.location.href.indexOf('#member') > 0) {
					// Handler for .ready() called.
					$('html, body').animate({
						scrollTop: $('#member').offset().top
					}, 'slow');
				}
				if (window.location.href.indexOf('#board-of-directors') > 0) {
					// Handler for .ready() called.
					$('html, body').animate({
						scrollTop: $('#board-of-directors').offset().top
					}, 'slow');
				}
				if (window.location.href.indexOf('#education') > 0) {
					// Handler for .ready() called.
					$('html, body').animate({
						scrollTop: $('#education').offset().top
					}, 'slow');
				}
				if (window.location.href.indexOf('#donations') > 0) {
					// Handler for .ready() called.
					$('html, body').animate({
						scrollTop: $('#donations').offset().top
					}, 'slow');
				}
				if (window.location.href.indexOf('#donate') > 0) {
					// Handler for .ready() called.
					$('html, body').animate({
						scrollTop: $('#donate').offset().top
					}, 'slow');
				}
				if (window.location.href.indexOf('#contact') > 0) {
					// Handler for .ready() called.
					$('html, body').animate({
						scrollTop: $('#contact').offset().top
					}, 'slow');
				}
			});
		</script>








		<!-- JS Scripts -->
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/jquery.appear.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/jquery.mousewheel.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/perfect-scrollbar.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/jquery.matchHeight.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/svgxuse.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/imagesloaded.pkgd.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/Headroom.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/velocity.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/ScrollMagic.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/jquery.waypoints.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/jquery.countTo.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/popper.min.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/material.min.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/bootstrap-select.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/smooth-scroll.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/selectize.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/swiper.jquery.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/moment.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/daterangepicker.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/simplecalendar.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/fullcalendar.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/isotope.pkgd.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/ajax-pagination.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/Chart.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/chartjs-plugin-deferred.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/circle-progress.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/loader.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/run-chart.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/jquery.magnific-popup.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/jquery.gifplayer.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/mediaelement-and-player.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/mediaelement-playlist-plugin.min.js"></script>
		<script src="<?php echo $sk['config']['theme_url']; ?>/js/ion.rangeSlider.js"></script>

		<script src="<?php echo $sk['config']['theme_url']; ?>/js/base-init.js"></script>
		<script defer src="<?php echo $sk['config']['theme_url']; ?>/fonts/fontawesome-all.js"></script>

		<script src="<?php echo $sk['config']['theme_url']; ?>/Bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>

</html>