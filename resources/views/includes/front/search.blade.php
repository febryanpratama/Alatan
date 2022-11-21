    <div class="search-popup">
        <button class="close-search style-two"><span class="icofont-brand-nexus"></span></button>
        <button class="close-search"><span class="icofont-arrow-up"></span></button>
        <form method="get" action="{{ route('blog.search') }}">
            <div class="form-group">
                <input type="search" name="keywords" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
            @csrf
        </form>
    </div>