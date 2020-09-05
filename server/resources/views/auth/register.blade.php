@extends('layout.main')

@section('content')

    <div class="card-header">{{ __('Register') }}</div>


    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                   value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div>
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                   value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div>
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                   name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>
                    {{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div>
            <label for="password-confirm"
                   class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                       autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
        </div>
    </form>


@endsection
