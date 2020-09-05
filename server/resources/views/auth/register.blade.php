@extends('layout.main')

@section('content')

    <div class="form">
        <h1 class="form_title">{{ __('Register') }}</h1>
        @csrf
        <div class="form_content">
            <div class="form_sub_content">
                <label for="name">{{ __('Name') }}</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
            </div>
            <div class="form_sub_content">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="form_sub_content">
                <label for="password">{{__('Password') }}</label>
                <input type="password" id="password" name="password" value="{{ old('name') }}">
            </div>
            <div class="form_sub_content">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
        </div>
    </div>

        @error('name')
        <span class="invalid-feedback" role="alert">
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
        @enderror
@endsection
