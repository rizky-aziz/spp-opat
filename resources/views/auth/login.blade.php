@extends('layouts.app')

@section('page-name', 'Login')

@section('content')
<div class="container">
    <div class="row min-vh-100 align-items-center justify-content-center">
        <div class="col-md-5 col-xl-4">
            <div class="card shadow-lg">
                <div class="card-header text-center border-bottom-0" style="font-size: 24px">{{ __('Masuk') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="col-12 col-form-label">{{ __('Username atau Email') }}</label>

                            <div class="col-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-12 col-form-label">{{ __('Password') }}</label>

                            <div class="col-12">
                                <div class="input-group">
                                    <input type="password" id="pass_login" class="form-control pass border-right-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">                                    
                                    <button class="btn btn-default border border-left-0" type="button" toggle="#password-field"><i class="fa fa-fw fa-eye field_icon toggle-password"></i></button>
                                </div>
                                <!-- <input id="pass_login" type="password" name="pass" value="MySecretPass"> -->

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input bg-primary" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="custom-control-label text-muted" for="remember">
                                        <small>{{ __('Tetap Masuk') }}</small>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0 text-center">
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('Masuk') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                <div class="text-muted mt-3">Bleum punya akun ?
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #FE69A9">
                                        {{ __('Daftar disini') }}
                                    </a>
                                </div>
                                @endif -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).on('click', '.toggle-password', function() {

        $(this).toggleClass("fa-eye fa-eye-slash");

        var input = $("#pass_login");
        input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
    });
</script>

@endpush