@extends('layouts.main')
@section('content')

<div class="container">
        <h2>Sign Up</h2>
        <form action="{{ route('signUp.post') }}" method="post">
        @csrf

            <!-- <div class="form-group">
                <label for="fname">Username:</label>
                <input type="text" id="username" name="fname" value="{{ old('fname') }}" placeholder="Enter your firstname" required>
            </div> -->
            <div class="form-group">
                <label for="lname">Username:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="{{ old('password') }}"placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="addNewUser">Sign Up</button>
            </div>
        </form>
    </div>
@endsection