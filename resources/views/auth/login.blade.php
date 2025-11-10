@extends('layouts.app') 

@section('content')
<div class="login-container">
    <div class="login-box">
        
        <h2 class="login-header">Silakan Login</h2>

        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            @if ($errors->any())
                <div class="alert-error">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-input">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="form-input">
            </div>

            <div class="form-group">
                <button type="submit" class="btn-login">Login</button>
            </div>
            
            </form>
    </div>
</div>
@endsection