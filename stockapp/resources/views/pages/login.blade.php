@extends('layouts.main')
@section('content')
<div class="login-container">
        <form action="{{ route('login.post') }}" method="post" class="login-form">
            @csrf
            <h1>Login</h1>
            <div class="input-container">
                <label for="username">Email</label>
                <input  style="margin-left:-10px type="text" id="email" value=""  name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" id="password" value="" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" name="checkuser">Login</button>
        </form>
    </div>

@endsection