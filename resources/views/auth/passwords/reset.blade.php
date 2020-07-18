@extends('layout.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="">
                <div class="">{{ __('Reset Password') }}</div>

                <div class="">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <div class="col-md-12 no-pdd">
                                <div class="sn-field">
                                    <input id="email" type="email" 
                                    class="px-5 form-control @error('email') is-invalid @enderror" 
                                    name="email" value="{{ $email ?? old('email') }}" 
                                    required autocomplete="email" autofocus
                                    placeholder="{{ __('E-Mail Address') }}">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 no-pdd">
                                <div class="sn-field">
                                    <input id="password" type="password" 
                                    class="px-5 form-control @error('password') is-invalid @enderror" 
                                    name="password" required autocomplete="new-password"
                                    placeholder="{{ __('Password') }}">
                                    <i class="la la-lock"></i>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 no-pdd">
                                <div class="sn-field">
                                    <input id="password-confirm" type="password" 
                                    class="px-5 form-control" name="password_confirmation" 
                                    required autocomplete="new-password"
                                    placeholder="{{ __('Confirm Password') }}" >
                                    <i class="la la-lock"></i>
                                </div>                                
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
