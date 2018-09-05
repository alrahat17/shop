<!-- top noti -->
    <div class="flex-c-m size22 bg0 s-text21 pos-relative">
        20% off everything!
        <a href="product.html" class="s-text22 hov6 p-l-5">
            Shop Now
        </a>

        <button class="flex-c-m pos2 size23 colorwhite eff3 trans-0-4 btn-romove-top-noti">
            <i class="fa fa-remove fs-13" aria-hidden="true"></i>
        </button>
    </div>

    <!-- Header -->
    <header class="header2">
        <!-- Header desktop -->
        <div class="container-menu-header-v2 p-t-26">
            <div class="topbar2">
                <div class="topbar-social">
                    <a href="#" class="topbar-social-item fa fa-facebook"></a>
                    <a href="#" class="topbar-social-item fa fa-instagram"></a>
                    <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                    <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                    <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                </div>

                <!-- Logo2 -->
                <a href="index.html" class="logo2">
                    <img src="{{ asset('shop_front/images/icons/logo.png') }}" alt="IMG-LOGO">
                </a>

                <div class="topbar-child2">
                    <span class="topbar-email">
                        fashe@example.com
                    </span>

                    
                    



                    <!--  -->
                    @guest
                    <a href="{{ route('login') }}" class="header-wrapicon1 dis-block m-l-30">
                       {{ __('Login') }}
                    </a>
                    <a href="{{ route('register') }}" class="header-wrapicon1 dis-block m-l-30">
                       {{ __('Register') }}
                    </a>
                    @else
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
                    
                   
                    <span class="linedivide1"></span>

                    <div class="header-wrapicon2 m-r-13">
                        <img src="{{ asset('shop_front/images/icons/icon-header-02.png') }}" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti">{{Cart::count() }}</span>

                        @php
                         
                         $contents=Cart::content();          
                        
                        @endphp  

                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown">
                            <ul class="header-cart-wrapitem">
                                 @foreach ($contents as $content)
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{asset($content->options->image)}}" alt="IMG">
                                    </div>
                              
                               
                                    {{-- expr --}}
                                
                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            {{ $content->name }}
                                        </a>

                                        <span class="header-cart-item-info">
                                            {{$content->total}}
                                        </span>
                                    </div>
                                </li>

                                @endforeach

                                
                                
                            </ul>

                            <div class="header-cart-total">
                                {{Cart::total()}}
                            </div>

                            <div class="header-cart-buttons">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="/show_cart" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        View Cart
                                    </a>
                                </div>

                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        Check Out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrap_header">

                <!-- Menu -->
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="/">Home</a>
                                
                            </li>

                            <li>
                                <a href="/show_products">Shop</a>
                            </li>

                            

                            

                            <li>
                                <a href="blog">Blog</a>
                            </li>

                            <li>
                                <a href="about">About</a>
                            </li>

                            <li>
                                <a href="contact">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Header Icon -->
                <div class="header-icons">

                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap_header_mobile">
            <!-- Logo moblie -->
            <a href="index.html" class="logo-mobile">
                <img src="{{ asset('shop_front/images/icons/logo.png') }}" alt="IMG-LOGO">
            </a>

            <!-- Button show menu -->
            <div class="btn-show-menu">
                <!-- Header Icon mobile -->
                <div class="header-icons-mobile">
                    <a href="#" class="header-wrapicon1 dis-block">
                        <img src="{{ asset('shop_front/images/icons/icon-header-01.png') }}" class="header-icon1" alt="ICON">
                    </a>

                    <span class="linedivide2"></span>

                    <div class="header-wrapicon2">
                        <img src="{{ asset('shop_front/images/icons/icon-header-02.png') }}" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti">0</span>
    
                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown">
                             @foreach ($contents as $content)
                            <ul class="header-cart-wrapitem">
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{asset($content->options->image)}}" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            {{ $content->name }}
                                        </a>

                                        <span class="header-cart-item-info">
                                            {{ $content->total }}
                                        </span>
                                    </div>
                                </li>

                                @endforeach

                                

                                
                            </ul>

                            <div class="header-cart-total">
                                {{ Cart::total() }}
                            </div>

                            <div class="header-cart-buttons">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        View Cart
                                    </a>
                                </div>

                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        Check Out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="wrap-side-menu" >
            <nav class="side-menu">
                <ul class="main-menu">
                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <span class="topbar-child1">
                            Free shipping for standard order over $100
                        </span>
                    </li>

                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <div class="topbar-child2-mobile">
                            <span class="topbar-email">
                                fashe@example.com
                            </span>

                            <div class="topbar-language rs1-select2">
                                <select class="selection-1" name="time">
                                    <option>USD</option>
                                    <option>EUR</option>
                                </select>
                            </div>
                        </div>
                    </li>

                    <li class="item-topbar-mobile p-l-10">
                        <div class="topbar-social-mobile">
                            <a href="#" class="topbar-social-item fa fa-facebook"></a>
                            <a href="#" class="topbar-social-item fa fa-instagram"></a>
                            <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                            <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                            <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                        </div>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="/">Home</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="/show_products">Shop</a>
                    </li>

                    
                    <li class="item-menu-mobile">
                        <a href="blog">Blog</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="about">About</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- header fixed -->
    <div class="wrap_header fixed-header2 trans-0-4">
        <!-- Logo -->
        <a href="index.html" class="logo">
            <img src="{{ asset('shop_front/images/icons/logo.png') }}" alt="IMG-LOGO">
        </a>

        <!-- Menu -->
        <div class="wrap_menu">
            <nav class="menu">
                <ul class="main_menu">
                    <li>
                        <a href="/">Home</a>
                    </li>

                    <li>
                        <a href="/show_products">Shop</a>
                    </li>

                    <li>
                        <a href="blog">Blog</a>
                    </li>

                    <li>
                        <a href="about">About</a>
                    </li>

                    <li>
                        <a href="contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Header Icon -->
        <div class="header-icons">
            <a href="{{ URL::to('customer_login') }}" class="header-wrapicon1 dis-block">
                <img src="{{ asset('shop_front/images/icons/icon-header-01.png') }}" class="header-icon1" alt="ICON">
            </a>

            <span class="linedivide1"></span>

            <div class="header-wrapicon2">
                <img src="{{ asset('shop_front/images/icons/icon-header-02.png') }}" class="header-icon1 js-show-header-dropdown" alt="ICON">
                <span class="header-icons-noti">{{Cart::count() }}</span>

                <!-- Header cart noti -->
                <div class="header-cart header-dropdown">
                    <ul class="header-cart-wrapitem">
                        @foreach($contents as $content)
                        <li class="header-cart-item">
                            <div class="header-cart-item-img">
                                <img src="{{asset($content->options->image)}}" alt="IMG">
                            </div>

                            <div class="header-cart-item-txt">
                                <a href="#" class="header-cart-item-name">
                                    {{ $content->name }}
                                </a>

                                <span class="header-cart-item-info">
                                    {{ $content->total }}
                                </span>
                            </div>
                        </li>

                        @endforeach

                        
                           
                    </ul>

                    <div class="header-cart-total">
                        {{ Cart::total() }}
                    </div>

                    <div class="header-cart-buttons">
                        <div class="header-cart-wrapbtn">
                            <!-- Button -->
                            <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                View Cart
                            </a>
                        </div>

                        <div class="header-cart-wrapbtn">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                Check Out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>