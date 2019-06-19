@extends('auth.layout')

@section('title') Login @endsection

@section('content')

    <section class="row flexbox-container">
        <div class="col-xl-8 col-11 d-flex justify-content-center">
            <div class="card bg-authentication rounded-0 mb-0">
                <div class="row m-0">
                    <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                        <img src="{{ asset('logo_crac.jpeg') }}"  height="auto" width="400"  alt="branding logo">
                    </div>
                    <div class="col-lg-6 col-12 p-0">
                        <div class="card rounded-0 mb-0 px-2">
                            <div class="card-header pb-1">
                                <div class="card-title">
                                    <h4 class="mb-0">{{ __('Se Connecter') }}</h4>
                                </div>
                            </div>
                            <p class="px-2">Bienvenue, veuillez vous connecter à votre compte.</p>
                            <div class="card-content">
                                <div class="card-body pt-1">

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            <div class="form-control-position">
                                                <i class="feather icon-user"></i>
                                            </div>
                                            <label for="email">{{ __('E-Mail Address') }}</label>
                                        </fieldset>


                                        <fieldset class="form-label-group position-relative has-icon-left">

                                            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                                            <div class="form-control-position">
                                                <i class="feather icon-lock"></i>
                                            </div>
                                            <label for="password">Mot de passe</label>
                                        </fieldset>

                                        <div class="form-group d-flex justify-content-between align-items-center">
                                            <div class="text-left">
                                                <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">{{ __('Se souvenir de moi') }}</span>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="text-right">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="card-link">{{ __('Forgot Password?') }}</a>
                                                @endif
                                            </div>

                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block float-right btn-inline">{{ __('Se loger') }}</button>
                                    </form>
                                </div>
                            </div>
                            <div class="login-footer">
                                <div class="divider">
                                    <div class="divider-text">OU</div>
                                </div>
                                <div class="footer-btn d-inline">
                                    <a href="#" class="btn btn-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="btn btn-twitter white"><span class="fa fa-twitter"></span></a>
                                    <a href="#" class="btn btn-google"><span class="fa fa-google"></span></a>
                                    <a href="#" class="btn btn-github"><span class="fa fa-github-alt"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

