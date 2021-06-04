@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center" style="margin: 14% auto;">
                <div class="card-header">
                    <h3 class="mt-4 mb-4">{{ __('Forget your password?') }}</h3>

                    <div class="text-center mt-3 mb-3">
                        Enter your email address and we will <br/>send you instructions to reset your password
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row mb-2">
                            <label for="email" class="col-md-6 offset-md-3 col-form-label text-md-left">{{ __('Email address') }}</label>

                            <div class="col-md-6 offset-md-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3 mb-3">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Continue') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="text-center mt-4">
                        <a href="">Back to sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
