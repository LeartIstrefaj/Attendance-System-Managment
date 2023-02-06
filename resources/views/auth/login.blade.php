@extends('layouts.frontend')

@section('content')

<div class="bg-color w-full max-w-xs mx-auto">
    <form method="POST" action="{{ route('login') }}" class="bg-color shadow-nav-login rounded-2 px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="emailaddress">
                Email
            </label>
            <input class="input  @error('password')  @enderror  w-full py-2 px-3 text-gray-700 mb-3 leading-tight " type="email" name="email" id="emailaddress" placeholder="info@example.com">
            @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="input  @error('password')  @enderror  w-full py-2 px-3 text-gray-700 mb-3 leading-tight " type="password" name="password" id="password" placeholder="********">
            @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-500 font-bold">
                <input class="input mr-2 leading-tight" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="text-sm">
                    Remember Me
                </span>
            </label>
        </div>
        <div class="flex items-center justify-between">
            <button class=" btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Log in!
            </button>
        </div>
    </form>
</div>

@endsection
