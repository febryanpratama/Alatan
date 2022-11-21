@extends("layouts.front")
@section("custom-style")
<style>
    .blog-detail .inner-box .lower-content p{
        margin-bottom: 0 !important;
    }
</style>
@endsection

@section("container")
<style>
    ol > li{
        list-style: normal;
    }
</style>
<!-- Page Title Section -->
<div class="page-title-section style-two">
    <div class="auto-container">
        <ul class="post-meta">
            <li><a href="{{ route('blog') }}">Other</a></li>
            <li>Detail</li>
        </ul>
        <div style="max-width: 800px;">
            <h2>{{ $post->title }}</h2>
        </div>
    </div>
</div>
<!-- End Page Title Section -->

<!--Sidebar Page Container-->
<div class="sidebar-page-container padding-top style-two">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="blog-detail">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/thumbnail/'.$post->thumbnail) }}" alt="" />
                        </div>
                        <div class="lower-content">
                            <div class="post-info"><span class="theme_color">{{ $post->category->name }}</span> - {{ dateID($post->created_at) }} by <i>{{ $post->user->name }}</i></div>
                            
                            <div class="content">
                                {!! $post->content !!}
                            </div>
                            <!-- Post Share Options-->
                            <div class="post-share-options">
                                <div class="tags">
                                    @foreach($keywords as $key => $keyword)
                                    <a class="mb-2">{{ $keyword }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <p class="mt-2">
                                Telah dikunjungi <b>{{ $visited }}</b> kali.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Related Projects -->
                <!-- <div class="related-projects">
                    <div class="title-box">
                        <h3>Related Posts</h3>
                    </div>
                    <div class="row clearfix">

                        <div class="news-block-four col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="blog-detail.html"><img src="images/resource/news-4.jpg" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <div class="title">business</div>
                                    <h4><a href="blog-detail.html">Problems About Social Insurance For Truck Drivers</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="news-block-four col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="blog-detail.html"><img src="images/resource/news-5.jpg" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <div class="title">News</div>
                                    <h4><a href="blog-detail.html">5 Steps To Build Strategy Planning</a></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> -->

            </div>

            <!--Sidebar Side-->
            @include("includes.front.sidebar")

        </div>
    </div>

    <!-- Lower Section -->
    <div class="lower-section">
        <div class="auto-container">
            <!-- Comment Form -->
            <div class="comment-form">
                <div class="group-title">
                    <h3>Leave A Reply</h3>
                    <div class="comment-text">Your email address will not be published</div>
                </div>
                <!--Comment Form-->
                <form method="post" action="{{ route('comments.store', [$post->id]) }}">
                    <div class="row clearfix">
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <input type="text" name="name" placeholder="Name *" required>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <input type="email" name="email" placeholder="Emaill Address *" required>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <input type="text" name="subject" placeholder="Subject (Optional)" required>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                            <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Post Comment</span></button>
                        </div>

                    </div>
                </form>

            </div>
            <!--End Comment Form -->
        </div>
    </div>
    <!-- End Lower Section -->

</div>
@endsection