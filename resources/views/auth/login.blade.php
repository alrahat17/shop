@extends('layouts.customer-layout')



    <!-- Title Page -->
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(shop_front/images/login-banner.jpg);">
        <h2 class="l-text2 t-center" style="color: orange;">
            Fashe.
        </h2>
    </section>

    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-b-30">
                    <div class="p-r-20 p-r-0-lg">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h4 class="m-text26 p-b-36 p-t-15">
                            Login
                        </h4>

                        
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" placeholder="Email Address">
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        
                        <div class="w-size25">
                            <!-- Button -->
                            <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                                Login
                            </button>
                        </div>
                        <div class="w-size25">
                            <!-- Button -->
                            <a class="forget-password" href="{{ route('password.request') }}">
                                Forget Password?
                            </a>
                        </div>
                    </form>
                        
                    </div>
                </div>

                <div class="col-md-6 p-b-30">
                    
                </div>
                
                
            </div>
        </div>
    </section>


    
<!--===============================================================================================-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    
    <script src="{{ asset('shop_front/js/map-custom.js') }}"></script>
<!--===============================================================================================-->
    