<div class="dash-Bar">

    <div class="dash-top">
        <div class="logo">
            <a href="javascript:;">
                <img src="{{ asset('/images/logo.png') }}" class="img-fluid" alt="">
            </a>
        </div>
        <div class="profile">
            <h3>LU</h3>
            <h4>{{ auth()->user()->name }}</h4>
        </div>
        <ul class="dashList">
            <li><a href="{{ route('front.properties') }}">Properties</a></li>
            <li><a href="{{ route('crowd.wallet') }}">Wallet</a></li>
            <li><a href="{{ route('crowd.portfolio') }}">Portfolio</a></li>
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