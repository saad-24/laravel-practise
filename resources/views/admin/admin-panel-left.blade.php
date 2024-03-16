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
            <h3>LU</h3>
            <h4>{{ auth()->user()->name }}</h4>
        </a>
        <ul class="dashList">
            <li><a href="{{ route('admin.panel.users') }}">Users</a></li>
            <li><a href="{{ route('admin.panel.property') }}">Properties</a></li>
            <li><a href="{{ route('admin.panel.blog') }}">Blogs</a></li>
            <li><a href="{{ route('crowd.rewards') }}">Rewards</a></li>
            <li><a href="{{ route('crowd.cart') }}">Cart</a></li>
        </ul>
    </div>
    <div class="dash-bottom">
        <a href="javascript:;" class="boardHelp">Health & Support</a>
        <div class="store">
            <ul>
                <li><a href="javascript:;"><img src="assets/images/apstore.png" class="img-fluid" alt=""></a></li>
                <li><a href="javascript:;"><img src="assets/images/playstore.png" class="img-fluid" alt=""></a></li>
            </ul>
        </div>
    </div>
</div>
