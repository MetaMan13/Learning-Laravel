@extends('layout')

@section('content')
    <div class="bg-gray-100 flex align-items-center justify-content-center fa-star-half-full">
        <form class="bg-white p-6 rounded shadow-lg" method="POST" action="/contact">
            @csrf

            <div class="mb-5">
                <label for="email" class="block text-xs text-uppercase font-weight-bold mb-1">
                    Email Address
                </label>
                <input type="text" id="email" name="email" class="border px-2 text-small w-full">
            </div>
            <div class="text-red-500 text-small">
                @error('email')
                    {{ $message }}
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 py-2 rounded text-small w-50">Email Me</button>
        </form>
        <div>
            @if (session('message'))
                {{ session('message') }}
            @endif
        </div>
    </div>
@endsection