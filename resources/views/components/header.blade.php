<header>
    <nav class="flex_align _container">
        <a class="logo-link d-b" href="{{ route('home') }}"><img class="d-b" style="width:50%" src="{{ asset('img/logo.png') }}" alt="logo"></a>
        <form class="ml-auto one-form" action="{{ route('shop') }}" method="GET">
            <input type="search" name="search" placeholder="Busque por produtos..." value="{{ $search ?? '' }}">
            <button type="submit">
                <i class="material-icons">search</i>
            </button>
        </form>
        <ul class="flex_align">
            <li>
                <a style="font-family: Poppins,Helvetica Neue,Helvetica,Arial,sans-serif; width: 2rem" class="logo-link d-b" href="{{ route('login') }}">
                    @if (auth()->check())
                        <span class="material-icons">perm_identity</span>
                    @else
                        Login
                    @endif
                </a>
            </li>
            <li class="space-lr">
                <a class="notification-link" href="{{ route('cart') }}">
                    <span class="material-icons">shopping_cart</span>
                    @auth
                        @if ($product_count = auth()->user()->carts()->firstOrCreate(['status' => 'N'])->products->sum('pivot.quantity'))
                            <span class='badge'>{{ $product_count }}</span>
                        @endif
                    @endauth
                    @guest
                        {{-- if product is set and is not 0 --}}
                        @if(request()->cookie('products') && $product_count = array_sum(json_decode(request()->cookie('products'), true)))
                            <span class='badge'>{{ $product_count }}</span>
                        @endif
                    @endguest
                    
                </a>
            </li>
            @if (auth()->check() && auth()->user()->admin)
            <a class="notification-link" href="{{ route('admin.dashboard') }}">
            <span href="{{ route('admin.dashboard') }}" class="material-icons">dashboard</span>
            </a>
        @endif
        </ul>
    </nav>
</header>