<header class="header_area">
    <div class="header_navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('app.home') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo"
                         style="max-height: 8rem;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li>
                            <a class="active" href="categories.html">Categories <span class="line"></span></a>
                        </li>
                        <li>
                            <a href="categories.html#">Pages <i class="fa fa-angle-down"></i> <span class="line"></span></a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="{{ route('auth.register') }}">Sign Up</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="navbar_btn">
                    <ul>
                        @auth()
                            <li>
                                <a href="#" class="active">{{ auth()->user()->name }}</a>
                            </li>
                            <li>
                                <a  class="sign-up" href="javascript:void(0)" onclick="$('#logout_form').submit()">
                                    <i class="fal fa-sign-out"></i> Logout
                                </a>
                                <form action="{{route('auth.logout')}}" method="post" style="display: none" id="logout_form">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li><a class="sign-up" href="{{ route('auth.login') }}"> <i class="fal fa-sign-in"></i> Sign In</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
