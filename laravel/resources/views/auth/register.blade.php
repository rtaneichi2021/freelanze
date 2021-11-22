@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('panel.register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.name') }}</label>
                            <div class="col-md-6">
                                <input type="text" 
                                    class="form-control @error('name') is-invalid @enderror" 
                                    name="name" 
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.email') }}</label>
                            <div class="col-md-6">
                                <input type="text" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    name="email" 
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.password') }}</label>
                            <div class="col-md-6">
                                <input type="text" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    name="password" 
                                    value="{{ old('password') }}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.password_confirm') }}</label>
                            <div class="col-md-6">
                                <input type="text" 
                                    class="form-control @error('password_confirmation') is-invalid @enderror" 
                                    name="password_confirmation" 
                                    value="{{ old('password_confirmation') }}">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.tel') }}</label>
                            <div class="col-md-6">
                                <input type="text" 
                                    class="form-control @error('tel') is-invalid @enderror" 
                                    name="tel" 
                                    value="{{ old('tel') }}">
                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.birthday') }}</label>
                            <div class="col-md-6">
                                <input type="date" 
                                    class="form-control @error('birthday') is-invalid @enderror" 
                                    name="birthday" 
                                    value="{{ old('birthday') }}">
                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.post_code') }}</label>
                            <div class="col-md-6">
                                <input type="text" 
                                    class="form-control @error('post_code') is-invalid @enderror" 
                                    name="post_code" 
                                    value="{{ old('post_code') }}">
                                @error('post_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.prefecture') }}</label>
                            <div class="col-md-6">
                            <select name="prefectures_id" class="form-control @error('prefectures_id') is-invalid @enderror" >
                                <option value=""></option>
                                @foreach($prefectures as $prefecture)
                                    <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                                @endforeach
                            </select>
                                @error('prefectures_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.city') }}</label>
                            <div class="col-md-6">
                                <input type="text" 
                                    class="form-control @error('city') is-invalid @enderror" 
                                    name="city" 
                                    value="{{ old('city') }}">
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.address') }}</label>
                            <div class="col-md-6">
                                <input type="text" 
                                    class="form-control @error('address') is-invalid @enderror" 
                                    name="address" 
                                    value="{{ old('address') }}">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.building') }}</label>
                            <div class="col-md-6">
                                <input type="text" 
                                    class="form-control @error('building') is-invalid @enderror" 
                                    name="building" 
                                    value="{{ old('building') }}">
                                @error('building')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('panel.register_btn') }}
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
