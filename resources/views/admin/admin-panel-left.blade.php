<div class="dash-Bar">

    <div class="dash-top">
        <div class="logo">
            @if(Auth::check() && Auth::user()->is_admin)
                <a href="{{ route('admin.home')}}">
                    <img src="{{ asset('/images/logo.png') }}" class="img-fluid" alt="">
                </a>
            @endif
        </div>
        <a class="profile" href="{{ route('front.dashboard') }}">
            <h3>{{ substr(auth()->user()->name, 0, 2) }}</h3>
            <h4>{{ auth()->user()->name }}</h4>
        </a>
        <ul class="dashList">
            <li><a href="{{ route('admin.panel.users') }}">Users</a></li>
            <li><a href="{{ route('admin.panel.property') }}">Properties</a></li>
            <li><a href="{{ route('admin.panel.investment') }}">Investments</a></li>
            <li><a href="{{ route('admin.panel.blog') }}">Blogs</a></li>
            <li><a href="{{ route('admin.panel.blog-comments') }}">Blog Comments</a></li>
            <li><a href="{{ route('admin.panel.wallet') }}">Wallet</a></li>
            <li><a href="{{ route('admin.panel.ownership') }}">Ownership</a></li>
            <li><a href="{{ route('admin.panel.queries') }}">Customer Queries</a></li>
        </ul>
    </div>
    <div class="dash-bottom">
        <div class="store">
            <ul>
                <li><a href="javascript:;"><img src="{{ asset('/images/apstore.png') }}" class="img-fluid" alt=""></a></li>
                <li><a href="javascript:;"><img src="{{ asset('/images/playstore.png') }}" class="img-fluid" alt=""></a></li>
            </ul>
        </div>
    </div>
</div>
