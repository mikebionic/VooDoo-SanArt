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
                            <a href="#">Biz barada</a>
                        </li>
                        <li>
                            <a href="#">Bölümler <i class="fa fa-angle-down"></i> <span class="line"></span></a>
                            <ul class="sub-menu">
                                @foreach(\App\Models\Category::parents()->get() as $item)
                                    @if($loop->index < 10)
                                        <li>
                                            <a href="{{ route('app.product.list', ['category' => $item->id]) }}">{{ $item->title }}</a>
                                            @if(count($item->children) > 0)
                                                <ul class="sub-menu">
                                                    @foreach($item->children as $subItem)
                                                        <li>
                                                            <a href="{{ route('app.product.list', ['category' => $subItem->id]) }}">{{ $subItem->title }}</a>
                                                        </li>
                                                    @endforeach()
                                                </ul>
                                            @endif
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('app.product.list') }}">Dowamy..</a>
                                        </li>
                                        @break
                                    @endif
                                @endforeach()
                            </ul>
                        </li>
                        <li>
                            <a href="#">Habarlaşmak</a>
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
