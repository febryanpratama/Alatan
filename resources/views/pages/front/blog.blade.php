@extends("layouts.front")
@section("container")
<!-- Page Title Section -->
<div class="page-title-section">
    <div class="auto-container">
        <ul class="post-meta">
            <li><a href="{{ route('landing') }}">Index</a></li>
            <li><a href="{{ route('blog') }}">Other</a></li>
            {!! (isset($selected_category)) ? '<li>'.$selected_category.'</li>' : '' !!}
        </ul>
        @if(Route::currentRouteName() == "blog.search")
        <h2><span>Search</span> Result</h2>
        @elseif(Route::currentRouteName() == "blog.index")
        <h2><span>Latest</span> From Our Blog</h2>
        @elseif(Route::currentRouteName() == "blog.categories")
        <h2><span>{{ (isset($selected_category)) ? $selected_category : '' }}</span></h2>
        @endif
    </div>
</div>
<!-- End Page Title Section -->

<!--Sidebar Page Container-->
<div class="sidebar-page-container padding-top">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="our-blogs">

                    <!-- News Block Three -->
                    @foreach($posts as $key => $post)
                    <div class="news-block-three">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{ route('blog.detail', [$post->slug]) }}"><img src="{{ asset('images/thumbnail/'.$post->thumbnail) }}" alt="" /></a>
                            </div>
                            <div class="title">{{ $post->category->name }}</div>
                            <h4><a href="{{ route('blog.detail', [$post->slug]) }}">{{ $post->title }}</a></h4>
                            <div class="post-date">{{ dateID($post->created_at) }} by <span>{{ $post->user->name }}</span></div>
                        </div>
                    </div>
                    @endforeach

                    @if(count($posts) == 0)
                    <h4>Post not found.</h4>
                    @endif


                </div>
                {{ $posts->links('includes.front.pagination') }}
                <!-- Post Share Options -->
                <div class="styled-pagination">
                    <!-- <ul class="clearfix">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li class="next"><a href="#"><span class="ti-angle-right"></span> </a></li>
                    </ul> -->
                </div>

            </div>

            <!--Sidebar Side-->
            @include("includes.front.sidebar")

        </div>
    </div>
</div>
@endsection