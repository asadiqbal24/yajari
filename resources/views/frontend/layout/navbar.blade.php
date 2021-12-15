<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="    background-color: white;
                box-shadow: 0px 2px 5px #acacac;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="{{asset('theme/icons/yajari-removebg-preview-1.png')}}" class="yajari-removebg-preview-1" alt="Yajiri">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-left:6%">
                <div class="navbar-nav">
                    <a style=" padding-top: 10px;color: #ff6e9a;font-weight: bold;" href="{{route('home')}}" class="nav-item nav-link @yield('sHome')">Home</a>
                    <a style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;" href="{{route('requests')}}" class="nav-item  requestnav @yield('sRequests')">Requests</a>
                    <a style=" padding-top: 10px;color: #3B3B3B;font-weight: bold" href="{{route('serviceproviders')}}" class="nav-item servicesnav @yield('sServiceProviders')">Service Providers</a>
                    <a style=" padding-top: 10px;color: white;font-weight: bold;" href="{{route('publishrequest')}}" class="nav-item nav-link navpublish publishnavbar @yield('sPublishRequest')">Publish a Request</a>
                </div>
                @if(Auth::check())
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;    padding-right: 40px;" class="nav-item nav-link">Logout</a>
                </div>

                @else
                <div class="navbar-nav ms-auto">
                    <a data-bs-toggle="modal" role="button" href="#LoginRegisterModal8" style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;padding-right: 20px;" class="nav-item nav-link">Sign in</a>
                    <a data-bs-toggle="modal" href="#LoginRegisterModal1" role="button" id="Register-MView" style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;    padding-right: 40px;" class="nav-item nav-link">Register</a>
                </div>
                @endif
            </div>
        </div>
    </nav>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
</form>
@include('frontend.layout.loadModal')