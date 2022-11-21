<div class="col-lg-3 col-md-12 mb-2">
    <div class="card">
        <ul class="list-group">
            <a href="{{ route('dashboard') }}" class="list-group-item {{ (Route::currentRouteName() == 'dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('posts.index') }}" class="list-group-item {{ (strpos(Route::currentRouteName(), 'posts') !== false) ? 'active' : '' }}">Master Data Post</a>
            <a href="{{ route('categories.index') }}" class="list-group-item {{ (strpos(Route::currentRouteName(), 'categories') !== false) ? 'active' : '' }}">Master Data Categories</a>
            <a href="{{ route('regulations.index') }}" class="list-group-item {{ (strpos(Route::currentRouteName(), 'regulations') !== false) ? 'active' : '' }}">Master Data Regulation</a>
            <a href="{{ url("admin/recruitment") }}" class="list-group-item {{ (strpos(Route::currentRouteName(), 'regulations') !== false) ? 'active' : '' }}">Master Data Recruitment</a>
            <a href="{{ route('settings') }}" class="list-group-item {{ (Route::currentRouteName() == 'settings') ? 'active' : '' }}">Settings</a>
            <a href="{{ route('logout') }}" class="list-group-item">Logout</a>
        </ul>
    </div>
</div>