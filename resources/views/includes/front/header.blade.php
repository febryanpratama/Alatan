
        <header class="main-header {{ (Route::currentRouteName() !== 'landing') ? 'style-three' : '' }}">

            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <!-- Top Left -->
                        <div class="top-left">
                            <!-- Info List -->
                            <ul class="info-list">
                                <li><a href="mailto:info@alatanindonesia.co.id"><span class="icon icofont-envelope"></span> info@alatanindonesia.co.id</a></li>
                                <li><a href="https://wa.me/6281226234340"><span class="icon icofont-phone"></span> +628-122-6234-340</a></li>
                                <li><a href="#"><span class="icon icofont-clock-time"></span> Mon - Sat: 8.00 - 17.00</a></li>
                            </ul>
                        </div>

                        <!-- Top Right -->
                        <div class="top-right pull-right">
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="share">Reach Us</li>
                                <li>
                                    <a target="_blank" href="https://twitter.com/alatanindonesia" class="icofont-twitter"></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100068854598469" class="icofont-facebook"></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/alatanindonesia" class="icofont-instagram"></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://wa.me/6281226234340" target="_blank" class="icofont-whatsapp"></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.youtube.com/channel/UCUVtm2dFEKEPCQxFcPLoqRQ" class="icofont-play-alt-1"></a>
                                </li>
								<li class="text-dark">
									<div id="google_translate_element"></div>
								</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container clearfix">

                        <div class="pull-left logo-box">
                            <div class="logo">
                                <a href="{{ route('landing') }}"><img src="https://alatanindonesia.co.id/wp-content/uploads/2021/04/LOGO-PT-ALATAN-ASASTA-INDONESIA-BIRU.png" width="200" alt="" title=""></a>
                            </div>
                        </div>

                        <div class="nav-outer pull-left clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                </div>

                                <div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="{{ (Route::currentRouteName() == 'landing') ? 'current' : '' }}"><a href="{{ route('landing') }}">Home</a></li>
                                        <li><a href="{{ route('landing').'#about' }}">About</a></li>
                                        <li class="dropdown">
											<a href="{{ route('landing').'#services' }}">Services</a>
											<ul class="from-left">
                                                <li><a href="{{ route('blog.categories', 'consultant') }}">Consultant</a></li>
												<li><a href="{{ route('blog.categories', 'research') }}">Research</a></li>
												<li><a href="{{ route('blog.categories', 'capacity-building-and-training') }}">Capacity Building and Training</a></li>
                                            </ul>
										</li>
                                        <li class="{{ (Route::currentRouteName() == 'regulation') ? 'current' : '' }}"><a href="{{ route('regulation') }}">Regulation</a></li>
                                        <li class="dropdown {{ (Route::currentRouteName() == 'blog') ? 'current' : '' }}">
                                            <a href="{{ route('blog') }}">Other</a>
                                            <ul class="from-left">
                                                @foreach(all_categories() as $key => $val)
													@if($val->slug == 'projects')
													<li class="dropdown">
														<a href="{{ route('blog.categories', $val->slug) }}">{{ $val->name }}</a>
														<ul class="form-left">
															<li><a href="{{ route('blog.categories', 'projects-by-donor') }}">By Donor</a></li>
															<li><a href="{{ route('blog.categories', 'projects-by-independent') }}">By Independent</a></li>
														</ul>
													</li>
													@else
														@if(!in_array($val->id, [8, 9, 10, 11, 12]))
														<li><a href="{{ route('blog.categories', $val->slug) }}">{{ $val->name }}</a></li>
														@endif
													@endif
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'recruitment') ? 'current' : '' }}"><a href="{{ route('recruitment') }}">Recruitment</a></li>
                                        <!-- <li class="dropdown"><a href="#">Regulation</a>
                                            <ul>
                                                <li><a href="service.html">Service</a></li>
                                                <li><a href="service-detail.html">Service Detail</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="project.html">Project</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown"><a href="#">Blog</a>
                                            <ul class="from-right">
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li><a href="#contact">Contact</a></li> -->
                                    </ul>
                                </div>

                            </nav>

                        </div>

                        <!-- Outer Box -->
                        <div class="outer-box">
                            <!-- Search Btn -->
                            <div class="search-box-btn search-box-outer"><span class="icon icofont-search text-white p-2" style="background: #354b8e; border-radius: 5px"></span></div>
                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon ti-menu"></span></div>
                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo">
                        <a href="{{ route('landing') }}"><img src="images/logo.png" alt="" title=""></a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

        </header>