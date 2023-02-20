
<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/  30 Nov 2019 03:42:43 GMT -->
<head>
<meta charset="utf-8">
<title>Stella Orr'e - Interior and Home Renovation HTML Template | Home Page 01</title>
<!-- Stylesheets -->
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
@livewireStyles
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header header-style-one">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    <div class="text"><span class="icon flaticon-call-answer"></span> Need help? Call Us Now : <a href="tel:1800-456-7890" class="number">1800 456 7890</a></div>
					
                </div>
                <div class="top-right clearfix">
					@auth
						<ul class="info-list">
							<li><a href="blog.html"> {{Auth::user()->name }} </a></li>
							<li class="quote"> 
								<form action="{{route('logout')}}" method="post">
									@csrf
									<a href="{{route('logout')}}"onclick="event.preventDefault();
									this.closest('form').submit();">Logout</a>
								</form>
							</li>
                    	</ul>
					@else 
						<!-- Info List -->
						<ul class="info-list">
							<li><a href="about.html">Our Story</a></li>
							<li><a href="blog.html">Inspiration</a></li>
							<li class="quote"><a href="{{route('login')}}">Login</a></li>
						</ul>
					@endif
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="index-2.html"><img src="{{asset('assets/images/logo.png')}}" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-1"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index-2.html">Home</a>
                                        <ul>
                                            <li><a href="index-2.html">Home page 01</a></li>
                                            <li><a href="index-3.html">Home page 02</a></li>
                                            <li><a href="index-4.html">Home page 03</a></li>
											<li><a href="index-5.html">Home page 04</a></li>
                                            <li><a href="index-6.html">Home page 05</a></li>
                                            <li class="dropdown"><a href="index-2.html">Header Styles</a>
                                                <ul>
                                                    <li><a href="index-2.html">Header Style One</a></li>
                                                    <li><a href="index-3.html">Header Style Two</a></li>
                                                    <li><a href="index-4.html">Header Style Three</a></li>
													<li><a href="index-5.html">Header Style Four</a></li>
                                                    <li><a href="index-6.html">Header Style Five</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
									<li class="dropdown"><a href="about.html">About us</a>
                                        <ul>
                                            <li><a href="about.html">Our Introduction</a></li>
											<li><a href="team.html">Our Team</a></li>
											<li><a href="testimonials.html">Testimonials</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="services-dark.html">Services</a>
                                        <ul>
											<li><a href="services-dark.html">Services Layout 01</a></li>
											<li><a href="services-light.html">Services Layout 02</a></li>
                                            <li><a href="residental-interior.html">Residential Interior</a></li>
                                            <li><a href="commercial-interior.html">Commercial Interior</a></li>
                                            <li><a href="office-interior.html">Office Design</a></li>
                                            <li><a href="hospitality-design.html">Hospitality Design</a></li>
                                            <li><a href="modern-furniture.html">Modern Furniture</a></li>
											<li><a href="modular-kitchen.html">Modular Kitchen</a></li>
											<li><a href="wardrobe.html">Wardrobe</a></li>
											<li><a href="false-celling-design.html">False Celling Design</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="projects-classic.html">Projects</a>
                                        <ul>
                                            <li><a href="projects-classic.html">Projects Classic</a></li>
                                            <li><a href="projects-masonry.html">Project Masonry</a></li>
                                            <li><a href="projects-fullwidth.html">Project Full Screen</a></li>
                                        </ul>
                                    </li>
									<li class="dropdown"><a href="shop.html">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Main shop page</a></li>
                                            <li><a href="product-detail.html">Product Detail Page</a></li>
                                            <li><a href="cart-page.html">Cart Page</a></li>
											<li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
									<li class="dropdown"><a href="blog.html">My Account</a>
										@auth
											@if (Auth::user()->utype == 'ADM')
											<ul>
												<li><a href="{{route('admin.dashboard')}}">Admin Dashboard</a></li>
												<li><a href="blog-2.html">Post</a></li>
												<li><a href="blog-detail.html">Users</a></li>
											</ul>
											@else
											<ul>
												<li><a href="{{route('user.dashboard')}}">User Dashboard</a></li>
												<li><a href="blog-2.html">blog 2 column</a></li>
												<li><a href="blog-detail.html">Blog Details</a></li>
											</ul>
											@endif
										@endif
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
						
						<!-- Outer Box -->
                        <div class="outer-box clearfix">
                            <div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="{{asset('assets/images/logo.png')}}" alt="" title=""></a></div>
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!-- Main Slider -->
	<section class="main-slider">
		<div class="slider-box">
		
			<!-- Banner Carousel -->
			<div class="banner-carousel owl-theme owl-carousel">
			
				<!-- Slide -->
				<div class="slide">
                	<div class="image-layer" style="background-image:url({{asset('assets/images/main-slider/1.jpg')}})"></div>
					<div class="auto-container">
						<div class="content">
							<h2>We make dream <br> home a reality</h2>
							<div class="text">Since 1989, We inspired fragments of your life stories with the finest kitchens, wardrobes, bedroom sets and living & dining.</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slide -->
				<div class="slide">
                	<div class="image-layer" style="background-image:url({{asset('assets/images/main-slider/2.jpg')}})"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Designs Benefitting <br> Your Persona</h2>
							<div class="text">Since 1989, We inspired fragments of your life stories with the finest kitchens, wardrobes, bedroom sets and living & dining.</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slide -->
				<div class="slide">
                	<div class="image-layer" style="background-image:url({{asset('assets/images/main-slider/3.jpg')}})"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Solution for <br> Modern Kitchen</h2>
							<div class="text">Since 1989, We inspired fragments of your life stories with the finest kitchens, wardrobes, bedroom sets and living & dining.</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Banner Section -->
	
	{{$slot}}
	<!-- Services Section Two -->
	<section class="services-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2>Our Services</h2>
				<div class="text">Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt.</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-desk-1"></span>
							</div>
							<h3><a href="office-interior.html">Office Interior</a></h3>
							<div class="text">Lorem Ipsum is  simply my text of the printing and Ipsum is the Ipsum is simply.</div>
							<a href="office-interior.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-house-1"></span>
							</div>
							<h3><a href="office-interior.html">House Interior</a></h3>
							<div class="text">Lorem Ipsum is  simply my text of the printing and Ipsum is the Ipsum is simply.</div>
							<a href="office-interior.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-shop"></span>
							</div>
							<h3><a href="office-interior.html">Restaurant Interior</a></h3>
							<div class="text">Lorem Ipsum is  simply my text of the printing and Ipsum is the Ipsum is simply.</div>
							<a href="office-interior.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-hospital"></span>
							</div>
							<h3><a href="office-interior.html">Hospital Interior</a></h3>
							<div class="text">Lorem Ipsum is  simply my text of the printing and Ipsum is the Ipsum is simply.</div>
							<a href="office-interior.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-apartment-1"></span>
							</div>
							<h3><a href="office-interior.html">Appartment Interior</a></h3>
							<div class="text">Lorem Ipsum is  simply my text of the printing and Ipsum is the Ipsum is simply.</div>
							<a href="office-interior.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-hotel"></span>
							</div>
							<h3><a href="office-interior.html">Hospitality Interior</a></h3>
							<div class="text">Lorem Ipsum is  simply my text of the printing and Ipsum is the Ipsum is simply.</div>
							<a href="office-interior.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Services Section Two -->
	
	<!-- Project Section -->
	<section class="project-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Our Latest Projects</h2>
			</div>
		</div>
		
		<div class="outer-container">
			
			<!--Isotope Galery-->
            <div class="sortable-masonry">
                
                <!--Filter-->
                <div class="filters clearfix">
                	
                	<ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All Projects</li>
						<li class="filter" data-role="button" data-filter=".residential">Residential</li>
						<li class="filter" data-role="button" data-filter=".commercial">Commercial</li>
						<li class="filter" data-role="button" data-filter=".hospital">Hospitality</li>
						<li class="filter" data-role="button" data-filter=".office">Office</li>
                    </ul>
                    
                </div>
                
				<div class="items-container row clearfix">
				
					<!-- Gallery Item -->
					<div class="gallery-item large-block masonry-item all hospital commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/1.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{asset('assets/images/gallery/1.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all hospital commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/2.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{asset('assets/images/gallery/2.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all residential office commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/3.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{asset('assets/images/gallery/3.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/4.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{asset('assets/images/gallery/4.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Item -->
					<div class="gallery-item large-block masonry-item all hospital office residential">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/7.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{asset('assets/images/gallery/7.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all residential">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/5.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{asset('assets/images/gallery/5.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all hospital office">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/6.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{asset('assets/images/gallery/6.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
				</div>
				
			</div>
		
			<!-- More Projects -->
			<div class="more-projects">
				<a href="projects-classic.html" class="projects">View All Projects</a>
			</div>
		
		</div>
	</section>
	<!-- End Project Section -->
	
	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-two centered">
				<h2>What our customers says</h2>
				<div class="title-text">Thousands of people done interior</div>
			</div>
			
			<div class="testimonial-carousel owl-carousel owl-theme">
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{asset('assets/images/resource/author-1.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{asset('assets/images/resource/author-2.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{asset('assets/images/resource/author-1.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{asset('assets/images/resource/author-2.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	<!-- Featured Section -->
	<section class="featured-section" style="background-image: url({{asset('assets/images/background/2.jpg')}})">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Our Work Process</h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-hand-shake"></span>
							</div>
							<div class="feature-number">1</div>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">Meet Customers</a></h3>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one volu ptatem sequi nesciunt.</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-answer"></span>
							</div>
							<div class="feature-number">2</div>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">Design Discussion</a></h3>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one volu ptatem sequi nesciunt.</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-sketch"></span>
							</div>
							<div class="feature-number">3</div>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">Drafting Design</a></h3>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one volu ptatem sequi nesciunt.</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-house-1"></span>
							</div>
							<div class="feature-number">4</div>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">Implimentation</a></h3>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one volu ptatem sequi nesciunt.</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Featured Section -->
	
	<!-- News Section -->
	<section class="news-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2>Need a design fix? Read our magazine</h2>
				<div class="text">Stay updated with latest trends, inspiration, expert tips, DIYs and more</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="{{asset('assets/images/resource/news-1.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li>By <span>Michale</span></li>
								<li>Modular Kitchen</li>
							</ul>
							<h3><a href="blog-detail.html">15 Vastu ideas for the main door emphasizes on every par ...</a></h3>
							<a href="blog-detail.html" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="{{asset('assets/images/resource/news-2.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li>By <span>Michale</span></li>
								<li>Interior, awesome</li>
							</ul>
							<h3><a href="blog-detail.html">Storage ideas for the bedroom by interior designers ...</a></h3>
							<a href="blog-detail.html" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="{{asset('assets/images/resource/news-3.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li>By <span>Michale</span></li>
								<li>Interior, awesome</li>
							</ul>
							<h3><a href="blog-detail.html">Kids bedroom design ideas by interior designers in NY</a></h3>
							<a href="blog-detail.html" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End News Section -->
	
	<!-- Call To Action Section -->
	<section class="call-to-action-section" style="background-image: url({{asset('assets/images/background/1.jpg')}})">
		<div class="auto-container">
			<h2>Think Interior. Think Stella Orr'e</h2>
			<div class="text">Interiors for all styles and budgets, Choose from thousands of <br> designs. Heart your favorites to shortlist.</div>
			<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">contact us</span></a>
		</div>
	</section>
	<!-- End Call To Action Section -->
	
	<!--Main Footer-->
    <footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index-2.html"><img src="{{asset('assets/images/footer-logo.png')}}" alt="" /></a>
                                    </div>
                                    <div class="text">Stella Orr'e is a WordPress theme to build Interior websites. It has good features and you will love.</div>
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                    </ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                	<h2>Quick links</h2>
									<div class="widget-content">
										<ul class="list">
                                        	<li><a href="#">About Gaille</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Conditionis</a></li>
                                            <li><a href="#">Faq</a></li>
                                        </ul>
                                    </div>
								</div>
							</div>
						
						</div>
					</div>
					
					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<h2>Contact Info</h2>
									<div class="widget-content">
										<a href="tel:1800-574-9687" class="contact-number">(1800) 574 9687</a>
										<ul>
											<li>256, Stella Orr'e, New York 24</li>
											<li>Email :<a href="mailto:info@stellaorre.com"> info@stellaorre.com</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                	<h2>Newsletter</h2>
									<div class="text">Get Special offers & Discounts</div>
									<!-- Newsletter Form -->
									<div class="newsletter-form">
										<form method="post" action="templateshub.net">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Enter your email address" required>
												<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe</span></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						
						</div>
					</div>
					
				</div>
			</div>
			
			<!--Footer Bottom-->
            <div class="footer-bottom clearfix">
                <div class="pull-left">
                    <div class="copyright"><a href="templateshub.net">Templates Hub</a></div>
                </div>
                <div class="pull-right">
                    <a href="templateshub.net">Templates Hub</a>
                </div>
            </div>
			
		</div>
	</footer>
	
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="templateshub.net">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            
            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Home Interiors</a></li>
                <li><a href="#">Offices Interiors</a></li>
                <li><a href="#">Showroom Interiors</a></li>
                <li><a href="#">Building Interiors</a></li>
                <li><a href="#">Shops Interiors</a></li>
            </ul>
        
        </div>
        
    </div>
</div>

<!--Scroll to top-->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/js/isotope.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/scrollbar.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
</body>

<!-- stella-orre/  30 Nov 2019 03:45:45 GMT -->
@livewireScripts
</html>