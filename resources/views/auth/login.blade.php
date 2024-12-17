@extends('master')

@section('homeContent')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<body class="pace-done" data-new-gr-c-s-check-loaded="14.1172.0" data-gr-ext-installed="" cz-shortcut-listen="true">
            <div class="container-fluid">
        <div class="row eq-height-row">
            <div class="col-md-12 col-sm-12 col-xs-12 right-col tw-pt-20 tw-pb-10 tw-px-5">
                <div class="row">
                    <div
                        class="lg:tw-w-16 md:tw-h-16 tw-w-12 tw-h-12 tw-flex tw-items-center tw-justify-center tw-mx-auto tw-overflow-hidden tw-bg-white tw-rounded-full tw-p-0.5 tw-mb-4">
                        <img src="img/logo-small.png" alt="lock" class="tw-rounded-full tw-object-fill" />
                    </div>

                    <div class="tw-absolute tw-top-2 md:tw-top-5 tw-left-4 md:tw-left-8 tw-flex tw-items-center tw-gap-4"
                        style="text-align: left">
                        <details class="tw-dw-dropdown" style="margin: 10px;">
    <summary class="tw-bg-transparent tw-text-white tw-font-medium tw-text-sm md:tw-text-base select-none">
        English
    </summary>
    <ul
        class="tw-p-2 tw-shadow tw-dw-menu tw-dw-dropdown-content tw-z-[1] tw-w-48 md:tw-w-56 tw-bg-white tw-rounded-xl tw-mt-3">
                    <li><a value="en" class="change_lang"> English</a>
            </li>
                    <li><a value="es" class="change_lang"> Spanish - Español</a>
            </li>
                    <li><a value="sq" class="change_lang"> Albanian - Shqip</a>
            </li>
                    <li><a value="hi" class="change_lang"> Hindi - हिंदी</a>
            </li>
                    <li><a value="nl" class="change_lang"> Dutch</a>
            </li>
                    <li><a value="fr" class="change_lang"> French - Français</a>
            </li>
                    <li><a value="de" class="change_lang"> German - Deutsch</a>
            </li>
                    <li><a value="ar" class="change_lang"> Arabic - العَرَبِيَّة</a>
            </li>
                    <li><a value="tr" class="change_lang"> Turkish - Türkçe</a>
            </li>
                    <li><a value="id" class="change_lang"> Indonesian</a>
            </li>
                    <li><a value="ps" class="change_lang"> Pashto</a>
            </li>
                    <li><a value="pt" class="change_lang"> Portuguese</a>
            </li>
                    <li><a value="vi" class="change_lang"> Vietnamese</a>
            </li>
                    <li><a value="ce" class="change_lang"> Chinese</a>
            </li>
                    <li><a value="ro" class="change_lang"> Romanian</a>
            </li>
                    <li><a value="lo" class="change_lang"> Lao</a>
            </li>
            </ul>
</details>

                                                    <a class="tw-text-white tw-font-medium tw-text-sm md:tw-text-base hover:tw-text-white"
                                href="repair-status">
                                Repair Status                            </a>
                                            </div>

                    <div class="tw-absolute tw-top-5 md:tw-top-8 tw-right-5 md:tw-right-10 tw-flex tw-items-center tw-gap-4"
                        style="text-align: left">
                                                    <!-- Register Url -->
                                                        

                            <div class="tw-border-2 tw-border-white tw-rounded-full tw-h-10 md:tw-h-12 tw-w-24 tw-flex tw-items-center tw-justify-center">
                             <a href="{{ route('register') }}"
                                    class="tw-text-white tw-font-medium tw-text-sm md:tw-text-base hover:tw-text-white">
                                    {{ __('Register') }}</a>
                            </div>

                                <!-- pricing url -->
                                                                    &nbsp; <a class="tw-text-white tw-font-medium tw-text-sm md:tw-text-base hover:tw-text-white"
                                        href="pricing">Pricing</a>
                                                                                                                                </div>
                    <div class="col-md-10 col-xs-8" style="text-align: right;">

                    </div>
                </div>
                        <div class="row">
        <div class="col-md-4">
                </div>
        <div class="col-md-4">
            <div
                class="tw-p-5 md:tw-p-6 tw-mb-4 tw-rounded-2xl tw-transition-all tw-duration-200 tw-bg-white tw-shadow-sm tw-ring-1 tw-ring-gray-200">
                <div class="tw-flex tw-flex-col tw-gap-4 tw-dw-rounded-box tw-dw-p-6 tw-dw-max-w-md">
                    <div class="tw-flex tw-items-center tw-flex-col">
                        <h1 class="tw-text-lg md:tw-text-xl tw-font-semibold tw-text-[#1e1e1e]">
                            Welcome Back                        </h1>
                        <h2 class="tw-text-sm tw-font-medium tw-text-gray-500">
                            Login to your POS Solution
                        </h2>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group has-feedback ">
                            <label class="tw-dw-form-control">
                                <div class="tw-dw-label">
                                    <span
                                        class="tw-text-xs md:tw-text-sm tw-font-medium tw-text-black">{{ __('Email Address') }}</span>
                                </div>
<input id="email" type="email" class="tw-border tw-border-[#D1D5DA] tw-outline-none tw-h-12 tw-bg-transparent tw-rounded-lg tw-px-3 tw-font-medium tw-text-black placeholder:tw-text-gray-500 placeholder:tw-font-medium" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                                            </label>
                        </div>

                        <div class="form-group has-feedback ">
                            <label class="tw-dw-form-control">
                                <div class="tw-dw-label">
                                    <span
                                        class="tw-text-xs md:tw-text-sm tw-font-medium tw-text-black">Password</span>
                                                                             @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                                                    </div>

                                <input
                                    class="tw-border tw-border-[#D1D5DA] tw-outline-none tw-h-12 tw-bg-transparent tw-rounded-lg tw-px-3 tw-font-medium tw-text-black placeholder:tw-text-gray-500 placeholder:tw-font-medium"
                                    id="password" type="password" name="password" value="" required
                                    placeholder="Password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button type="button" id="show_hide_icon" class="show_hide_icon"
                                    style="position: absolute; top:48px;right:5px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye tw-w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </button>
                            </label>
                                                    </div>


                        <div class="tw-dw-form-control">
                            <label class="tw-dw-cursor-pointer tw-dw-label tw-self-start tw-gap-2">
                                <input class="tw-dw-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><label class="tw-text-xs md:tw-text-sm tw-font-medium tw-text-black tw-mt-[0.2rem]" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                            </label>
                        </div>
                                                <button type="submit"
                            class="tw-bg-gradient-to-r tw-from-indigo-500 tw-to-blue-500 tw-h-12 tw-rounded-xl tw-text-sm md:tw-text-base tw-text-white tw-font-semibold tw-w-full tw-max-w-full mt-2 hover:tw-from-indigo-600 hover:tw-to-blue-600 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-blue-500 focus:tw-ring-offset-2 active:tw-from-indigo-700 active:tw-to-blue-700">
                            {{ __('Login') }}                        </button>
                    </form>

                    <div class="tw-flex tw-items-center tw-flex-col">
                        <!-- Register Url -->

                                                    <!-- Register Url -->
                                                            <a href="{{ route('register') }}"
                                    class="tw-text-sm tw-font-medium tw-text-gray-500 hover:tw-text-gray-500 tw-mt-2">Not yet registered?
                                    <span
                                        class="tw-text-sm tw-font-medium tw-bg-gradient-to-r tw-from-indigo-500 tw-to-blue-500 tw-inline-block tw-text-transparent tw-bg-clip-text hover:tw-text-[#467BF5] hover:tw-underline">Register Now</span></a>
                                                                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

            </div>
        </div>
    </div>



@endsection
