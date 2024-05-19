@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header text-center">{{ __("Welcome to MyArtisan") }}</h5>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="usertype" class="col-md-4 col-form-label text-md-end">{{ __('Account Type') }}</label>

                            <div class="col-md-6">
                                <label class="btn type btn-grad-Art">Artisan
                                    <input type="radio" name="usertype" required autocomplete="usertype" class="d-none" value="Artisan">
                                </label>

                                <label class="btn type btn-grad" >Client 
                                    <input type="radio"  name="usertype" required autocomplete="usertype" class="d-none" value="Client">
                                </label>
                            </div>
                            
                            
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark" style="width: 45%">
                                    {{ __('Register') }}
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
@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".col-md-6 .btn.type").forEach(function(label) {
            label.addEventListener("click", function() {
                document.querySelectorAll(".col-md-6 .btn.type").forEach(function(item) {
                    item.classList.add("active");
                });
                label.classList.remove("active");
            });
        });
    });
</script>

<style>
    .active{
        opacity: 80%;
        border: none;
    }
        
        .btn-grad {
            background-image: linear-gradient(to right, #000428 0%, #004e92  51%, #000428  100%);
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            width: 45%;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }           
         .btn-grad-Art {
            background-image: linear-gradient(to right, #e52d27 0%, #b31217  51%, #e52d27  100%);
            transition: 0.5s;
            background-size: 200% auto;
            color: white;       
            width: 45%;     
          }

          .btn-grad-Art:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
          
</style>
@endsection
