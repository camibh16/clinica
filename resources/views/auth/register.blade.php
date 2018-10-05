@extends('layouts.apppaciente')
@section('content')
<div class="container">
    <div class="row about-content">
        <div class="card col-md-12">
            <div class="card-header" style="background: #67bc00; color:#fff">{{ __('Register')}}</div>
                <div class="card-body col-12">
                    <form method="POST" action="{{ route('register') }}">
                                    @csrf
                        <div class="row  justify-content-center">
                            <div class="col-md-6">     
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                                    @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                                                <div class="col-md-6">
                                                    <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                                    @if ($errors->has('lastname'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('lastname') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                </div>
                                            </div>                                                                       
                            </div>
                           
                            <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="occupation_id" class="col-md-4 col-form-label text-md-right">Occupation:</label>
                                                <div class="col-md-6">
                                                    <select class="form-control{{ $errors->has('occupation_id') ? ' is-invalid' : '' }}" id="occupation_id" value="{{ old('occupation_id') }}" name="occupation_id" required autofocus>
                                                        @foreach ($occupations as $occupation)
                                                            <option value="{{$occupation->id}}">{{$occupation->type}}
                                                            </option>                           
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('occupation_id'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('occupation_id') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="document_id" class="col-md-4 col-form-label text-md-right">Type document:</label>
                                                <div class="col-md-6">
                                                    <select class="form-control{{ $errors->has('document_id') ? ' is-invalid' : '' }}" id="document_id" value="{{ old('document_id') }}" name="document_id" required autofocus>
                                                        @foreach ($documents as $document)
                                                            <option value="{{$document->id}}">{{$document->type}}
                                                            </option>                           
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('document_id'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('document_id') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="document_number" class="col-md-4 col-form-label text-md-right">{{ __('Number document') }}</label>

                                                <div class="col-md-6">
                                                    <input id="document_number" type="number" class="form-control{{ $errors->has('document_number') ? ' is-invalid' : '' }}" name="document_number" value="{{ old('document_number') }}" required autofocus>

                                                    @if ($errors->has('document_number'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('document_number') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="gender_id" class="col-md-4 col-form-label text-md-right">Gender:</label>
                                                <div class="col-md-6">
                                                    <select class="form-control{{ $errors->has('gender_id') ? ' is-invalid' : '' }}" id="gender_id" value="{{ old('gender_id') }}" name="gender_id" required autofocus>
                                                        @foreach ($genders as $gender)
                                                            <option value="{{$gender->id}}">{{$gender->type}}
                                                            </option>                           
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('gender_id'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('gender_id') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="cellphone" class="col-md-4 col-form-label text-md-right">{{ __('Cellphone') }}</label>

                                                <div class="col-md-6">
                                                    <input id="cellphone" type="number" class="form-control{{ $errors->has('cellphone') ? ' is-invalid' : '' }}" name="cellphone" value="{{ old('cellphone') }}" required autofocus>

                                                    @if ($errors->has('cellphone'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('cellphone') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                            </div>

                            <div class="form-group row mb-2">
                                <div class="col-md-4 offset-md-0">
                                    <button type="submit" class="btn btn-primary" style="background: #67bc00; color:#fff">
                                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
        </div>
    </div>
</div>
@endsection
