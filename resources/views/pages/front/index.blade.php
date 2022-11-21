@extends("layouts.front")
@section("container")
<!-- Banner Section -->
<div class="banner-section">
    <div class="main-slider-carousel owl-carousel owl-theme">

        <div class="slide" data-bg-image="images/main-slider/IMG_7500-scaled.jpg">
            <div class="auto-container w-100">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title">Alatan Indonesia</div>
                            <h1><span>Integrity</span> in carrying out the activities</h1>
                            <div class="text">Always strives to maintain the trust of clients and users by maintaining work quality, being honest and open in submitting recommendations or in carrying out work.</div>
                            <div class="btn-box">
                                <a href="https://wa.me/6281226234340" class="theme-btn btn-style-one"><span class="txt">Work With Us</span></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="slide" data-bg-image="images/main-slider/IMG_8089-scaled.jpg">
            <div class="auto-container w-100">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title">Alatan Indonesia</div>
                            <h1><span>Professional</span> in every provision of services</h1>
                            <div class="text">Always assigns qualified experts who have proven work experience and expertise and have broad insight and are oriented towards meeting the needs of clients, government and society.</div>
                            <div class="btn-box">
                                <a href="https://wa.me/6281226234340" class="theme-btn btn-style-one"><span class="txt">Work With Us</span></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="slide" data-bg-image="images/main-slider/20210426_101839-scaled.jpg">
            <div class="auto-container w-100">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title">Alatan Indonesia</div>
                            <h1>Always providing <span>Service Excellence</span> to our client</h1>
                            <div class="text">Client satisfaction is the main goal of every service provided by Alatan Asasta Indonesia. Providing the best service is the main principle carried out by experts when working and supporting clients in achieving the
                                expected goals.</div>
                            <div class="btn-box">
                                <a href="https://wa.me/6281226234340" class="theme-btn btn-style-one"><span class="txt">Work With Us</span></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>


</div>
<!-- End Banner Section -->

<!-- CTA Section Start -->
@include("includes.front.cta")
<!-- CTA Section End -->

<!-- About Section -->
<div class="about-section" id="about">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row align-items-center clearfix">
                <!-- Image Column -->
                <div class="image-column col-lg-6">
                    <div class="about-image">
                        <div class="about-inner-image">
                            <img src="images/about/home-about.png" alt="about">
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
                    <div class="about-column">
                        <div class="sec-title">
                            <div class="title">about us</div>
                            <h2><span>Alatan</span> Indonesia</h2>
                        </div>
                        <div class="text">
                            <p>Alatan Asasta Indonesia has a professional team, integrity and has a broad vision and always prioritizes service excellence as a motto in providing its services. </p>
                            <p>Client satisfaction is the main goal of every service provided by PT Alatan Asasta Indonesia. Providing the best service is the main principle carried out by experts when working and supporting clients in achieving
                                the expected goals.</p>
                        </div>
                        <div class="signature">Alatan <span>Team Alatan</span></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End About Section -->

<!-- Services Section -->
<div class="services-section" id="services">
    <div class="auto-container">
        <div class="sec-title">
            <div class="title">our services</div>
            <h2><span>Best Solutions</span> For Your Business</h2>
        </div>
        <div class="inner-container">
            <div class="row g-0">

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon ti-blackboard"></span>
                        </div>
                        <h5><a href="#">Consultant</a></h5>
                        <div class="text">Providing public policy consulting services to clients in the public sector such as ministries and regional governments in formulating policies related to goods and services procurement projects in order to accelerate the
                            implementation of procurement of government goods/ services.</div>
                        <a class="read-more" href="{{ route('blog.categories', 'consultant') }}">More <span class="ti-angle-right"></span></a>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon ti-stats-up"></span>
                        </div>
                        <h5><a href="#">Research</a></h5>
                        <div class="text">We provide quality research results with methods and analysis that are right on target. Our advantages in providing integrated solutions as a valid and reliable follow-up process are supported by the right design and research
                            methodology, a reliable research team and adequate supporting facilities.</div>
                        <a class="read-more" href="{{ route('blog.categories', 'research') }}">More <span class="ti-angle-right"></span></a>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon ti-cup"></span>
                        </div>
                        <h5><a href="#">Capacity Building and Training</a></h5>
                        <div class="text">Our trainers are trainers who have a high track record in the field of training to managers and staff for the supply of goods and services. The training we provide is modern, creative and innovative. We also guarantee the
                            progress capacity of individuals procurement managers and staff in each training.</div>
                        <a class="read-more" href="{{ route('blog.categories', 'capacity-building-and-training') }}">More <span class="ti-angle-right"></span></a>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
<!-- End Services Section -->

<!-- Testimonial Section -->
<div class="testimonial-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <div class="title">testimonials</div>
            <h2><span>Satisfied </span>Clients</h2>
        </div>
        <div class="testimonial-carousel owl-carousel owl-theme">
            <!-- Testimonial Block -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="quote icofont-quote-right"></div>
                    <div class="author">BRIGJEN POL Drs. ROCHMAD <span class="d-block">Ex - Karoada B/J Slog Polri</span></div>
                    <div class="text">Saya mengucapkan terimakasih banyak atas dukungan USDOJ / ICITAP Indonesia melalui tim Alatan Indonesia yang telah membantu Slog Polri mewujudkan UKPBJ Polri yang menjadi Pusat unggulan (CoE).</div>
                </div>
            </div>
            <!-- Testimonial Block -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="quote icofont-quote-right"></div>
                    <div class="author">Brigjen. Pol. Drs. Halim Pagarra, S.H., M.H. <span class="d-block">Ex - Karoada B/J Slog Polri</span></div>
                    <div class="text">Saya mengucapkan terimakasih yang tak terhingga atas dukungan USDOJ / ICITAP Indonesia melalui tim Alatan Indonesia yang telah memberikan sumbangsih/gagasan baik teknis maupun konseptional kepada Slog Polri.
                        <a href="{{ asset('videos/karoada.mp4') }}" class="d-block mt-4">See the Video</a>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Testimonial Section -->

<!-- Sponsors Section -->
<div class="sponsors-section">
    <div class="auto-container">

        <div class="carousel-outer">
            <!--Sponsors Slider-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li>
                    <div class="image-box">
                        <a href="http://www.lkpp.go.id/v3/"><img src="https://p3i.or.id/wp-content/uploads/2018/07/lkpp.png" alt="LKPP"></a>
                    </div>
                </li>
                <li>
                    <div class="image-box">
                        <a href="https://siadapresisi.polri.go.id/"><img src="{{ asset('images/slog-logo.jpg') }}" alt="SLOG POLRI" width="70"></a>
                    </div>
                </li>
                <li>
                    <div class="image-box">
                        <a href="https://www.justice.gov/criminal-icitap"><img src="{{ asset('images/logo-icitap.jpg') }}" alt="ICITAP" width="70"></a>
                    </div>
                </li>
                <li>
                    <div class="image-box">
                        <a href="https://eproc.lkpp.go.id/dashboard/home"><img src="{{ asset('images/eproc.jpg') }}" alt="E-PROC LKPP" width="70"></a>
                    </div>
                </li>
                <li>
                    <div class="image-box">
                        <a href="https://www.kemkes.go.id/"><img src="{{ asset('images/kemenkes.jpg') }}" alt="KEMENKES" width="70"></a>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</div>
<!--End Sponsors Section-->

<!-- Reputation Section Two -->
<div class="reputation-section-two style-two" id="contact">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Form Column -->
            <div class="form-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="form-boxed">
                        <h5>free consultation</h5>

                        <div class="consult-form">
                            <form method="post">

                                <!--Form Group-->
                                <div class="form-group">
                                    <label>full name</label>
                                    <input type="text" name="name" id="name" value="" placeholder="Alfan Syahada" required>
                                </div>
                                <!--Form Group-->
                                <div class="form-group">
                                    <label>topics</label>
                                    <select class="custom-select-box">
                                        <option>Choose topic</option>
                                        <option value="pengadaan">Procurement</option>
                                        <option value="bisnis">Business</option>
                                        <option value="teknologi">Technogolies</option>
                                        <option value="lainnya">Other</option>
                                    </select>
                                </div>
                                <!--Form Group-->
                                <div class="form-group">
                                    <label>message</label>
                                    <textarea name="message" id="message" placeholder="Write your message here"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-one" type="button" id="send"><span class="txt">send your messenger</span></button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <div class="title">why choose us</div>
                        <h2><span>Your Successful </span>Is<br> Our Reputation</h2>
                    </div>
                    <div class="blocks-outer">

                        <!-- Reputation Block -->
                        <div class="reputation-block">
                            <div class="inner-box">
                                <h5>Service Excellence</h5>
                                <div class="text">Client satisfaction is the main goal of every service provided by Alatan Asasta Indonesia. Providing the best service is the main principle carried out by experts when working and supporting clients in achieving the expected goals.</div>
                            </div>
                        </div>

                        <!-- Reputation Block -->
                        <div class="reputation-block">
                            <div class="inner-box">
                                <h5>Integrity</h5>
                                <div class="text">Always strives to maintain the trust of clients and users by maintaining work quality, being honest and open in submitting recommendations or in carrying out work.</div>
                            </div>
                        </div>

                        <!-- Reputation Block -->
                        <div class="reputation-block">
                            <div class="inner-box">
                                <h5>Professional</h5>
                                <div class="text">Always assigns qualified experts who have proven work experience and expertise and have broad insight and are oriented towards meeting the needs of clients, government and society.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Reputation Section -->

<!-- Experts Section -->
<div class="experts-section">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="title">our experts</div>
                    <h2>We Are <span>Friendly & Profressional</span></h2>
                </div>
                <!-- <div class="pull-right">
                            <a href="service.html" class="experts">all experts <span class="arrow ti-angle-right"></span></a>
                        </div> -->
            </div>
        </div>

        <div class="clearfix experts-carousel owl-carousel owl-theme">

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-6 col-12" style="width: 100%">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="images/resource/T01.jpg" alt="" /></a>
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li>
                                <a href="https://twitter.com/" class="icofont-twitter"></a>
                            </li>
                            <li>
                                <a href="http://facebook.com/" class="icofont-facebook"></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="icofont-instagram"></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" class="icofont-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="lower-box mt-0">
                        <h4><a href="#">Lamhot Naibaho, Ph.D</a></h4>
                        <div class="designation">President Director - Researcher</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-6 col-12" style="width: 100%">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="images/resource/T02.jpg" alt="" /></a>
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li>
                                <a href="https://twitter.com/" class="icofont-twitter"></a>
                            </li>
                            <li>
                                <a href="http://facebook.com/" class="icofont-facebook"></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="icofont-instagram"></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" class="icofont-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="lower-box mt-0">
                        <h4><a href="#">Adam Nugroho</a></h4>
                        <div class="designation">Consultant</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-6 col-12" style="width: 100%">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="images/resource/GANTI-FOTO.jpg" alt="" /></a>
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li>
                                <a href="https://twitter.com/" class="icofont-twitter"></a>
                            </li>
                            <li>
                                <a href="http://facebook.com/" class="icofont-facebook"></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="icofont-instagram"></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" class="icofont-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="lower-box mt-0">
                        <h4><a href="#">Harmada Sibuea</a></h4>
                        <div class="designation">Consultants and Researchers</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-6 col-12" style="width: 100%">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="images/resource/T04.jpg" alt="" /></a>
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li>
                                <a href="https://twitter.com/" class="icofont-twitter"></a>
                            </li>
                            <li>
                                <a href="http://facebook.com/" class="icofont-facebook"></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="icofont-instagram"></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" class="icofont-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="lower-box mt-0">
                        <h4><a href="#">Arief Hidayat</a></h4>
                        <div class="designation">Consultant</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-6 col-12" style="width: 100%">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="images/resource/T05.jpg" alt="" /></a>
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li>
                                <a href="https://twitter.com/" class="icofont-twitter"></a>
                            </li>
                            <li>
                                <a href="http://facebook.com/" class="icofont-facebook"></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="icofont-instagram"></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" class="icofont-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="lower-box mt-0">
                        <h4><a href="#">Muhammad Nur Yahya</a></h4>
                        <div class="designation">Trainer</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-6 col-12" style="width: 100%">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="images/resource/T06.jpg" alt="" /></a>
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li>
                                <a href="https://twitter.com/" class="icofont-twitter"></a>
                            </li>
                            <li>
                                <a href="http://facebook.com/" class="icofont-facebook"></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="icofont-instagram"></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" class="icofont-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="lower-box mt-0">
                        <h4><a href="#">Elfrida Sormin</a></h4>
                        <div class="designation">Researcher</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Experts Section -->

<!-- Blog Section -->
<div class="blog-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">our blog</div>
            <h2><span>Latest </span>From Our Blog</h2>
        </div>
        <div class="inner-container">
            <div class="clearfix row g-0">
                <!-- Column -->
                <div class="column col-lg-8 col-md-12 col-sm-12">

                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="clearfix">
                                <!-- Image Column -->
                                <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image" style="background-image: url({{ asset('images/thumbnail/'.$posts[0]->thumbnail) }}); background-size: cover; width: 100%; height: 390px">
                                        </div>
                                    </div>
                                </div>
                                <!-- Content Column -->
                                <div class="content-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-column">
                                        <div class="arrow-one"></div>
                                        <div class="title">{{ $posts[0]->category->name }}</div>
                                        <h4><a href="{{ route('blog.detail', [$posts[0]->slug]) }}">{{ $posts[0]->title }}</a></h4>
                                        <div class="post-date">{{ dateID($posts[0]->created_at) }} by <span>{{ $posts[0]->user->name }}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="clearfix row g-0">
                                <!-- Content Column -->
                                <div class="content-column col-lg-6 col-md-6 col-sm-12 order-lg-1 order-2">
                                    <div class="inner-column">
                                        <div class="arrow-two"></div>
                                        <div class="title">{{ $posts[1]->category->name }}</div>
                                        <h4><a href="{{ route('blog.detail', [$posts[1]->slug]) }}">{{ $posts[1]->title }}</a></h4>
                                        <div class="post-date">Decmber 14th, 2020 by <span>{{ $posts[1]->user->name }}</span></div>
                                    </div>
                                </div>
                                <!-- Image Column -->
                                <div class="image-column col-lg-6 col-md-6 col-sm-12 order-lg-2 order-1">
                                    <div class="inner-column">
                                        <div class="image" style="background-image: url({{ asset('images/thumbnail/'.$posts[1]->thumbnail) }}); background-size: cover; width: 100%; height: 395px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Column -->
                <div class="column col-lg-4 col-md-12 col-sm-12">
                    <!-- News Block Two -->
                    <div class="news-block-two">
                        <div class="inner-box">
                            <div class="image" style="background-image: url({{ asset('images/thumbnail/'.$posts[2]->thumbnail) }}); background-size: cover; width: 100%; height: 390px">
                                <div class="arrow"></div>
                            </div>
                            <div class="lower-content">
                                <div class="title">{{ $posts[2]->category->name }}</div>
                                <h4><a href="{{ route('blog.detail', [$posts[2]->slug]) }}">{{ $posts[2]->title }}</a></h4>
                                <div class="post-date">Decmber 14th, 2020 by <span>{{ $posts[2]->user->name }}</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Blog Section -->

<!-- Map Section -->
<div class="map-section">
    <div class="contact-map-area">
        <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.505073586435!2d106.8421384!3d-6.1807511!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x657817a663751d7!2saaa!5e0!3m2!1sid!2sid!4v1644464111561!5m2!1sid!2sid" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
<!-- End Map Section -->
@endsection

@section('custom-script')
<script>
$(document).ready(()=>{
	$('#send').click(()=>{
		var name = $('#name').val();
		var topics = $('.custom-select-box').val();
		if(topics == 'Choose topic'){
			topics = "umum";
		}
		if(name == ''){
			name = 'Anonim';
		}
		var message = 'Halo! Saya ' + name + ' ingin konsultasi seputar topik ' + topics + '. ' +$('#message').val();
		window.location.href = 'https://api.whatsapp.com/send?phone=+6281226234340&text=' + message;
	});
});
</script>
@endsection