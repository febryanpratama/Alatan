
            
            <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                <aside class="sidebar sticky-top margin-left">

                    <!-- Search -->
                    <div class="sidebar-widget search-box">
                        <div class="sidebar-title">
                            <h4>Search</h4>
                        </div>
                        <form method="get" action="{{ route('blog.search') }}">
                            <div class="form-group">
                                <input type="search" name="keywords" placeholder="Type & Hit Enter..." value="{{ (isset($_GET['keywords']) && $_GET['keywords'] !== null) ? $_GET['keywords'] : '' }}" required>
                                <button type="submit"><span class="icon fa fa-search"></span></button>
                            </div>
                            @csrf
                        </form>
                    </div>

                    <!--Category Blog-->
                    <div class="sidebar-widget categories-blog">
                        <div class="sidebar-title">
                            <h4>Categories</h4>
                        </div>
                        <ul>
                            
                            <li><a href="{{ route('blog.categories', ['all']) }}">All <span>{{ $total_post }}</span></a></li>
                            @foreach($categories as $key => $category)
								@if($category->slug !== 'projects')
                            	<li><a href="{{ route('blog.categories', [$category->slug]) }}">{{ $category->name }} <span>{{ $category->count }}</span></a></li>
								@endif
                            @endforeach
                        </ul>
                    </div>

                </aside>
            </div>