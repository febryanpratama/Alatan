        <footer class="main-footer {{ (Route::currentRouteName() !== 'landing') ? 'style-two' : '' }}">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!-- Column -->
                        <div class="big-column col-lg-6 col-md-12 col-sm-6 col-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo mt-4 mb-5">
                                            <a href="index.html"><img src="https://alatanindonesia.co.id/wp-content/uploads/2021/04/LOGO-PT-ALATAN-ASASTA-INDONESIA-BIRU.png" width="150" alt="" /></a>
                                        </div>
                                        <div class="call">
                                            Call us directly
                                            <!-- 081226234340 -->
                                            <a class="phone" href="tel:+6281226234340">+628-122-6234-340</a>
                                            <a class="email" href="mailto:info@alatanindonesia.co.id" style="text-transform: lowercase">info@alatanindonesia.co.id</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h5>Sitemap</h5>
                                        <ul class="list-link">
                                            <li><a href="{{ route('landing') }}#about">About Us</a></li>
                                            <li><a href="{{ route('landing') }}#services">Services</a></li>
                                            <li><a href="{{ route('regulation') }}">Regulation</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Column -->
                        <div class="big-column col-lg-6 col-md-12 col-sm-6 col-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h5>Other</h5>
                                        <ul class="list-link">
                                            @foreach(all_categories() as $key => $val)
                                            <li><a href="{{ route('blog.categories', $val->slug) }}">{{ $val->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget newsletter-widget">
                                        <h5>Our Newsletter</h5>
                                        <div class="text">Subscribe to our newsletter and we will inform you about latest updates and offers</div>
                                        <!-- Newsletter Form -->
                                        <div class="newsletter-form">
                                            <form method="post" action="">
                                                <div class="form-group">
                                                    <input type="email" name="email" value="" placeholder="Email Address..." required>
                                                    <button type="submit" class="theme-btn icofont-arrow-right"></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="auto-container">
                        <div class="bottom-inner">
                            <div class="row clearfix">

                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <div class="copyright">Copyright ©
                                        <script async="" src="../../../www.google-analytics.com/analytics.js"></script>
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | <a href="#">Alatan Indonesia</a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <ul class="social-nav">
                                        <li>
                                            <a href="https://twitter.com/alatanindonesia" class="icofont-twitter"></a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/profile.php?id=100068854598469" class="icofont-facebook"></a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/alatanindonesia" class="icofont-instagram"></a>
                                        </li>
                                        <li>
                                            <a href="https://wa.me/6281226234340" target="_blank" class="icofont-whatsapp"></a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/channel/UCUVtm2dFEKEPCQxFcPLoqRQ" class="icofont-play-alt-1"></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>