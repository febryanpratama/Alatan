@extends("layouts.front")
@section("container")
<!-- Page Title Section -->
<div class="page-title-section">
    <div class="auto-container">
        @if(Route::currentRouteName() == "blog.search")
        <h2><span>Search</span> Result</h2>
        @elseif(Route::currentRouteName() == "blog.index")
        <h2><span>Latest</span> From Our Blog</h2>
        @elseif(Route::currentRouteName() == "blog.categories")
		<div class="text-center row justify-content-center"> 
			<h2 class="mt-0">		
				<span>{{ (isset($selected_category)) ? $selected_category : '' }}</span>
			</h2>
			<div style="width: 30px; height: 5px; background: #364b8e;"></div>
		</div>
        @endif
    </div>
</div>
<!-- End Page Title Section -->

<!--Sidebar Page Container-->
<div class="sidebar-page-container padding-top">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="our-blogs">
					<div class="row clearfix">
						<!-- News Block Three -->
						@foreach($posts as $key => $post)
						<div class="service-block style-two col-lg-4 col-md-6 col-12">
							<div class="inner-box p-0" style="border-radius: 15px">
								<a href="{{ route('blog.detail', [$post->slug]) }}"><img src="{{ asset('images/thumbnail/'.$post->thumbnail) }}" alt="" style="border-top-left-radius: 15px; border-top-right-radius: 15px; max-height: 200px; width: 100%; object-fit: cover"/></a>
								<div class="p-3">
									<h5 class="mt-0"><a href="{{ route('blog.detail', [$post->slug]) }}">{{ $post->title }}</a></h5>
									<small>{{ dateID($post->created_at) }} by <span>{{ $post->user->name }}</span></small>
								</div>
							</div>
						</div>
						@endforeach

						@if(count($posts) == 0)
						<h4>Post not found.</h4>
						@endif
						
					</div>


                </div>
                {{ $posts->links('includes.front.pagination') }}

            </div>

            <!--Sidebar Side-->
        </div>
    </div>
</div>
@endsection