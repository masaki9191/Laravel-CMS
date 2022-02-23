@extends('layouts.app')

@section('content')

<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="hero-static">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">

                        <!-- Sign In Block -->
                        <div class="block block-rounded block-themed mb-0">

                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">{{ __('Login') }}</h3>
                                <div class="block-options">
                                    <!--                                    <a class="btn-block-option font-size-sm" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                                                        <a class="btn-block-option" href="op_auth_signup.html" data-toggle="tooltip" data-placement="left" title="New Account">
                                                                            <i class="fa fa-user-plus"></i>
                                                                        </a>-->
                                </div>
                            </div>

                            <div class="block-content">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="p-sm-3 px-lg-4 py-lg-5">

                                    <p class="text-muted">
                                        {{ __('Login') }}
                                    </p>

                                    <!-- Sign In Form -->
                                    <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form method="POST" action="{{ route('login') }}" class="js-validation-signin">
                                        @csrf

                                        <div class="py-3">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-alt form-control-lg" id="email" name="email" value="{{ old('email') }}" required placeholder="{{ __('E-Mail Address') }}" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input  id="password" type="password" class="form-control form-control-alt form-control-lg @error('password') is-invalid @enderror" name="password" required  placeholder="{{ __('Password') }}">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <!--                                            <div class="form-group">
                                                                                            <div class="custom-control custom-checkbox">
                                                                                                <label class="custom-control-label font-w400" for="login-remember"> {{ __('Remember Me') }}</label>
                                                                                                <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                                            </div>
                                                                                        </div>-->
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-xl-5">
                                                <button type="submit" class="btn btn-block btn-alt-primary">
                                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i>  {{ __('Login') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Sign In Form -->
                                </div>
                            </div>
                        </div>
                        <!-- END Sign In Block -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
@endsection
