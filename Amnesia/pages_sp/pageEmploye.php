<?php
    session_start();
    if(!isset($_SESSION['categorie'])){
        header((string) 'Location: ../index_sp.php');

        exit();
    }else{
        $cat=$_SESSION['categorie'];
        //if($cat == "admin")
            //header((string) 'Location: pageAdmin.php');
        if($cat == "admin"){
            header((string) 'Location: pageAdmin.php');
            exit();
        }else if($cat == "client"){
            header((string) 'Location: pageClient.php');
            exit();
        }
        
    }

?>
<!DOCTYPE html>
<html lang="sp">
<head>
<title>Employe</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->


    
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<!--===============================================================================================-->	
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->	
<link href="https://fonts.googleapis.com/css?family=Aclonica&display=swap" rel="stylesheet">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/datepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
<link rel="stylesheet" type="text/css" href="../styles/util.css">
<link rel="stylesheet" type="text/css" href="../styles/main.css">
<!--===============================================================================================-->	


</head>

<body onload="profilUtil();">

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<!--div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="#"><i class="fa fa-globe "  aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-facebook " aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-instagram " aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-youtube " aria-hidden="true"></i></a></li>
							</ul>
						</div>

						<div class="user_box ml-auto ">
                            <div class="user_box_login user_box_link"><button onclick="location.href='profilUtilisateur.php';">Compte</button></div>
							<!--div class="user_box_login user_box_link"><button  href="../index_sp.php">Deconnexion</button></div-->
                           <!--div class="user_box_login user_box_link"><button onclick="location.href='../index_sp.phpl';">Déconnexion</button></div>

						</div>

					</div>
				</div>
			</div>		
		</div-->
        <div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="nav-item avatar dropdown">
                        <a class="user_box_link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <img id="langImg" src="../images/multilangicon7.jpg" class="rounded-circle avatar1"
                            alt="avatar image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">
                            <a id="Francais" class="dropdown-item" href="../index.php" onclick="userLanguage('fr');">Français</a>
                            <a class="dropdown-item" href="../index_en.php" onclick="userLanguage('en');">English </a>
                            <a class="dropdown-item" href="#">Español</a>
                        </div>
                        </div>
						<div class="social">
							<ul class="social_list">
								<!--li class="social_list_item"><a href="#"><i class="fa fa-globe "  aria-hidden="true"></i></a></li-->
								<li class="social_list_item"><a href="#"><i class="fa fa-facebook " aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-instagram " aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-youtube " aria-hidden="true"></i></a></li>
							</ul>
						</div>

						<div class="user_box ml-auto ">
                            <div class="user_box_login user_box_link">
                            <!-- Basic dropdown -->
                            <button class="dropdown-toggle" type="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">tareas</button>

                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Gérer les réservations</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                            <!-- Basic dropdown -->
                            </div>
							<!--div class="user_box_login user_box_link"><button  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">connexion</button></div-->
                            <div class="user_box_login user_box_link"><button onclick="location.href='profilUtilisateur.php';">Mi cuenta</button></div>
                            <div class="user_box_login user_box_link"><button onclick="location.href='logout.php';effacerCategorie();">cerrar sesión</button></div>
                            <div class="user_box_login user_box_link">
                                <div class="nav-item avatar dropdown">
                                    <a class="user_box_link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">
                                      <img id="userImg" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle avatar1"
                                        alt="avatar image">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">
                                        <a id="userName" class="dropdown-item"></a>
                                        <a class="dropdown-item" href="#" type="button" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">perfil</a>
                                        <a class="dropdown-item" href="logout.php" onclick="effacerCategorie();">cerrar sesión</a>
                                     </div>
                                 </div>
                             </div>
						</div>
                        
					</div>
				</div>
			</div>		
		</div>
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="../images/LogoA.png" alt="">amnesia</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="#">bienvenida</a></li>
                                <li class="main_nav_item"><a href="about.php">a proposito</a></li>
                                <li class="main_nav_item"><a href="offers.php">ofertas</a></li>
                                <li class="main_nav_item"><a href="blog.php">nuevo</a></li>
                                <li class="main_nav_item"><a href="contact.php">contactar</a></li>
								<li class="main_nav_item"><a href=""></a></li>
								<!--li class="main_nav_item"><a href="profilUtilisateur.html">Profil</a></li-->
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="../images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="#">bienvenida</a></li>
				<li class="menu_item"><a href="about.php">a proposito</a></li>
				<li class="menu_item"><a href="offers.php">ofertas</a></li>
				<li class="menu_item"><a href="blog.php">nuevo</a></li>
				<li class="menu_item"><a href="contact.php">contactar</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(../images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>descubre</h1>
							<h1>el mundo</h1>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(../images/home_slider_1.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>descubre</h1>
							<h1>el mundo</h1>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(../images/home_slider_2.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>descubre</h1>
							<h1>el mundo</h1>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<!-- <div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div> -->
			
		</div>

	</div>

	<!-- Search -->

	
		

		<!-- Search Contents -->
		
		

	<!-- Intro -->
	
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="intro_title text-center">We have the best tours</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
					</div>
				</div>
			</div>
			<div class="row intro_items">

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@dnevozhai -->
						<div class="intro_item_background" style="background-image:url(../images/intro_1.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>Mauritius</h1>
								<div class="intro_price">From $1450</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@hellolightbulb -->
						<div class="intro_item_background" style="background-image:url(../images/intro_2.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>Greece</h1>
								<div class="intro_price">From $1450</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@willianjusten -->
						<div class="intro_item_background" style="background-image:url(../images/intro_3.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>Scotland</h1>
								<div class="intro_price">From $1450</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<!-- Image by https://unsplash.com/@thanni -->
		<div class="cta_background" style="background-image:url(../images/cta.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- CTA Slider -->

					<div class="cta_slider_container">
						<div class="owl-carousel owl-theme cta_slider">

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title">maldives deluxe package</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
							</div>

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title">maldives deluxe package</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
							</div>

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title">maldives deluxe package</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
							</div>
							
						</div>

						<!-- CTA Slider Nav - Prev -->
						<div class="cta_slider_nav cta_slider_prev">
							<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 "/>
							</svg>
						</div>
						
						<!-- CTA Slider Nav - Next -->
						<div class="cta_slider_nav cta_slider_next">
							<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 "/>
							</svg>
						</div>

					</div>

				</div>
			</div>
		</div>
					
	</div>

	<!-- Offers -->

	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">the best offers with rooms</h2>
				</div>
			</div>
			<div class="row offers_items">

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@kensuarez -->
									<div class="offers_image_background" style="background-image:url(../images/offer_1.jpg)"></div>
									<div class="offer_name"><a href="#">grand castle</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">$70<span>per night</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="../images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="../images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="../images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="../images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="offers.php">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by Egzon Bytyqi -->
									<div class="offers_image_background" style="background-image:url(../images/offer_2.jpg)"></div>
									<div class="offer_name"><a href="#">turkey hills</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">$50<span>per night</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="../images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="../images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="../images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="../images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="offers.php">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@nevenkrcmarek -->
									<div class="offers_image_background" style="background-image:url(../images/offer_3.jpg)"></div>
									<div class="offer_name"><a href="#">island dream</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">$90<span>per night</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="../images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="../images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="../images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="../images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="offers.php">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@mantashesthaven -->
									<div class="offers_image_background" style="background-image:url(../images/offer_4.jpg)"></div>
									<div class="offer_name"><a href="#">travel light</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">$30<span>per night</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="../images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="../images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="../images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="../images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="offers.php">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="test_border"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">what our clients say about us</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<!-- Testimonials Slider -->

					<div class="test_slider_container">
						<div class="owl-carousel owl-theme test_slider">

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="../images/test_1.jpg" alt="https://unsplash.com/@anniegray"></div>
									<div class="test_icon"><img src="../images/backpack.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="../images/test_2.jpg" alt="https://unsplash.com/@tschax"></div>
									<div class="test_icon"><img src="../images/island_t.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="../images/test_3.jpg" alt="https://unsplash.com/@seefromthesky"></div>
									<div class="test_icon"><img src="../images/kayak.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="../images/test_2.jpg" alt=""></div>
									<div class="test_icon"><img src="../images/island_t.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="../images/test_1.jpg" alt=""></div>
									<div class="test_icon"><img src="../images/backpack.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="../images/test_3.jpg" alt=""></div>
									<div class="test_icon"><img src="../images/kayak.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

						</div>

						<!-- Testimonials Slider Nav - Prev -->
						<div class="test_slider_nav test_slider_prev">
							<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='test_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 "/>
							</svg>
						</div>
						
						<!-- Testimonials Slider Nav - Next -->
						<div class="test_slider_nav test_slider_next">
							<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='test_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 "/>
							</svg>
						</div>

					</div>
					
				</div>
			</div>

		</div>
	</div>

	<!--<div class="trending">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">trending now</h2>
				</div>
			</div>
			<div class="row trending_container"> -->

				<!-- Trending Item -->
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_1.png" alt="https://unsplash.com/@fransaraco"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">grand hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

				<!-- Trending Item -->
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_2.png" alt="https://unsplash.com/@grovemade"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

				<!-- Trending Item -->
				<!--<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_3.png" alt="https://unsplash.com/@jbriscoe"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">queen hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

				<!-- Trending Item -->
				<!--<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_4.png" alt="https://unsplash.com/@oowgnuj"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

				<!-- Trending Item -->
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_5.png" alt="https://unsplash.com/@mindaugas"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">grand hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

				<!-- Trending Item -->
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_6.png" alt="https://unsplash.com/@itsnwa"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

				<!-- Trending Item -->
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_7.png" alt="https://unsplash.com/@rktkn"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">queen hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

				<!-- Trending Item -->
				<!--  <div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_8.png" alt="https://unsplash.com/@thoughtcatalog"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div> -->

			<!--</div>
		</div>
	</div>  -->

	<div class="contact">
		<div class="contact_background" style="background-image:url(../images/backContact3.jpg)"></div>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 ">
					<div class="contact_form_container ">
						<div class="contact_title">Contatez nous</div>
						<form action="#" id="contact_form" name="contact_form" class="contact_form">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Nom" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Objet" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button">Envoyer<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="../images/LogoA.png" alt="">amnésia</a></div>
							</div>
							
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="#">bienvenida</a></li>
                                <li class="footer_nav_item"><a href="about.php">a proposito</a></li>
                                <li class="footer_nav_item"><a href="offers.php">ofertas</a></li>
                                <li class="footer_nav_item"><a href="blog.php">nuevo</a></li>
                                <li class="footer_nav_item"><a href="contact.php">contactar</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- MODAL PROFIL-->

<div id="id03" class="modal">
	<div class=" ">
		<form class="modal-content2 animate  validate-form p-l-2 p-r-2 p-t-5 p-b-5" >
			<!--<span class="login100-form-title p-b-30">
			PROFIL
			</span> -->
            <div class="imgcontainer">
                <span onclick="document.getElementById('id03').style.display='none'" class="close1" title="Close Modal">&times;</span>
            </div>
			<div id="wrapper">
				<div id="content">
					<div id="card">
						
						<div id="front">

							<div id="top-pic">
								<span class="login100-form-title p-b-20"></span>
							</div>
							<div id="avatar"></div>
							<div id="info-box">
								<div class="info">
									<h1 class="detail" id="profil_nom"></h1>
									<h2 class="detail1" id="profil_prenom"></h2>
								</div>
							</div>
							<div id="social-bar">
								<a href="profilUtilisateur.php" target="" class="bntProfil" id="detailCompe">
									<i class="fa fa-user" aria-hidden="true"></i>
									Détail du compte
								</a>
                                <a href="#" target="" class="bntProfil" id="supprimerPhotoProfil" onclick="supprimerPhotoProfil();">
									<i class="fa fa-user" aria-hidden="true"></i>
									Eliminar foto
								</a>
								<a href="#" target="" class="bntProfil" onclick="document.getElementById('id03').style.display='none'; document.getElementById('imageUtil').style.display='block'">
									<i class="fa fa-pencil-square" aria-hidden="true"></i>
									Cambiar foto
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div> 
    
    
<div id="imageUtil" class="modal">
	<div class=" ">
		<form name="imageUtilForm" id="imageUtilForm" class="modal-content2 animate  validate-form p-l-2 p-r-2 p-t-5 p-b-5" >


				<div id="content23">
					<label for="image">imagen</label>
                    <input type="file" name="imageUtil" class="form-control" id="imageUtil">
				</div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Anular" onclick="document.getElementById('id03').style.display='block'; document.getElementById('imageUtil').style.display='none'">
                    <input type="button" class="btn btn-primary" id="modal-save" value="Guardar" onclick="imageProfil();">
            </div>

            
		</form>
	</div>
</div>

</body>
   
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../js/profil.js"></script>
<!--script language="javascript" src="../js/jquery-3.3.1.min.js"></script-->
<script language="javascript" src="../Requests/Requetes.js"></script>
<script language="javascript" src="../Requests/requestsControleurVue.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>

<!--===============================================================================================-->
<script src="../js/main.js"></script>
<!--===============================================================================================-->
<script src="../vendor/datepicker/moment.min.js"></script>
<script src="../vendor/datepicker/daterangepicker.js"></script>
<script src="../js/custom.js"></script>
<!--===============================================================================================-->
<script src="../js/validation.js"></script>
</html>