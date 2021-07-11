<div class="profile_user">
    <div class="user_author d-flex align-items-center">
        <div class="author">
            <img src="{{ asset(auth()->user()->avatar_path) }}" alt="" width="60px">
        </div>
        <div class="user_content media-body">
            <h6 class="author_name">{{ auth()->user()->name }}</h6>
        </div>
    </div>
    <div class="user_list">
        <ul>
            <li><a class="@if(request()->route()->getName() == 'user.index')active @endif" href="{{ route('user.index') }}"><i class="fal fa-tachometer-alt-average"></i> Şahsy otag</a></li>
            <li><a class="@if(request()->route()->getName() == 'user.edit')active @endif" href="{{ route('user.edit') }}"><i class="fal fa-cog"></i> Men barada</a></li>
            <li><a class="@if(request()->route()->getName() == 'user.order_list')active @endif" href="{{ route('user.order_list') }}"><i class="fal fa-layer-group"></i> Sargytlarym</a></li>
            <li><a class="@if(request()->route()->getName() == 'user.product_list')active @endif" href="{{ route('user.product_list') }}"><i class="fal fa-magic"></i> Harytlarym</a></li>
            <li><a class="@if(request()->route()->getName() == 'user.client_order_list')active @endif" href="{{ route('user.client_order_list') }}"><i class="fal fa-wallet"></i> Satyşlarym</a></li>
            <li>
                <form action="{{ route('auth.logout') }}" method="post" style="display: none">
                    @csrf
                </form>
                <a href="javascript:void(0)" onclick="$(this).closest('form').submit()">
                    <i class="fal fa-sign-out"></i> Çykyş
                </a>
            </li>
        </ul>
    </div>
</div>
