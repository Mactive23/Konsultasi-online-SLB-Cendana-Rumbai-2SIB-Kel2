<!-- resources/views/auth/login.blade.php -->

@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required autofocus>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Login</button>
    </form>
@endsection
