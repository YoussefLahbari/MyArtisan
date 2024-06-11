@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold text-center text-gray-800">{{ __("Welcome to MyArtisan") }}</h2>

        <form method="POST" action="{{ route('register') }}" class="mt-8 space-y-4">
            @csrf

            <div class="flex items-center">
                <label for="name" class="w-1/3 text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                <div class="w-2/3">
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('name') border-red-500 @enderror">
                    @error('name')
                        <span class="text-red-500 text-sm mt-1">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="flex items-center">
                <label for="email" class="w-1/3 text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                <div class="w-2/3">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('email') border-red-500 @enderror">
                    @error('email')
                        <span class="text-red-500 text-sm mt-1">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="flex items-center">
                <label for="password" class="w-1/3 text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                <div class="w-2/3">
                    <input id="password" type="password" name="password" required autocomplete="new-password" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('password') border-red-500 @enderror">
                    @error('password')
                        <span class="text-red-500 text-sm mt-1">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="flex items-center">
                <label for="password-confirm" class="w-1/3 text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                <div class="w-2/3">
                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>

            <div class="flex items-center">
                <label for="usertype" class="w-1/3 text-sm font-medium text-gray-700">{{ __('Account Type') }}</label>
                <div class="w-2/3 flex space-x-2">
                    <label class="btn-grad-Art flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-md cursor-pointer">
                        Artisan
                        <input type="radio" name="usertype" value="Artisan" class="hidden" required>
                    </label>
                    <label class="btn-grad flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-md cursor-pointer">
                        Client
                        <input type="radio" name="usertype" value="Client" class="hidden" required>
                    </label>
                </div>
            </div>

            <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".btn-grad, .btn-grad-Art").forEach(function(label) {
            label.addEventListener("click", function() {
                document.querySelectorAll(".btn-grad, .btn-grad-Art").forEach(function(item) {
                    item.classList.remove("opacity-80");
                });
                label.classList.add("opacity-80");
            });
        });
    });
</script>

<style>
    .opacity-80 {
        opacity: 80%;
    }

    .btn-grad {
        background-image: linear-gradient(to right, #000428 0%, #004e92 51%, #000428 100%);
        transition: 0.5s;
        background-size: 200% auto;
    }

    .btn-grad:hover {
        background-position: right center;
    }

    .btn-grad-Art {
        background-image: linear-gradient(to right, #e52d27 0%, #b31217 51%, #e52d27 100%);
        transition: 0.5s;
        background-size: 200% auto;
    }

    .btn-grad-Art:hover {
        background-position: right center;
    }
</style>
@endsection

