@extends('layouts.main')
@section('content')
<div class="main_title">
        <h1 class="title">Pricing</h1>
        <h2 class="sub_title">Invest $100 or more and receive a free stock worth up to $50.</h2>
    </div>

    <div class="main_pricing">
        <div class="Pricing_1">
            <img src="{{ asset('assets/imgs/doller.png')}}" alt=""><br>
            <h3>Free equity delivery</h3>
            <h4>All equity delivery investments, are absolutely free — $ 0 brokerage.</h4>
        </div>
        <div class="Pricing_1">
            <img src="{{ asset('assets/imgs/handdoller.png')}}" alt="">
            <h3>Your Path to Wealth</h3>
            <h4>Don't Miss Out on Our Exciting Promotions!</h4>
        </div>
        <div class="Pricing_1">
            <img src="{{ asset('assets/imgs/increase.png')}}" alt="">
            <h3>Elevate Your Portfolio</h3>
            <h4>Get started with a $10 bonus on your first investment!</h4>
        </div>
    </div>

    <div class="sign_up">
        <h2 class="sub_title">Open a investIQ account</h2>
        <h4 class="P_title">Modern platforms and apps, $0 investments, and flat $20 intraday and F&O trades.</h4>
        <a  style="text-decoration: none;" href="/signUp">
            <button class="signup_button" type="button">Sign Up</button>
        </a>
        <a href="/login">Already joined</a>
    </div>

    <div class="tnc">
        <h4>Terms & Conditions</h4>
        <ul>
            <li>By using this app, you agree to abide by all applicable laws and regulations.</li>
            <li>Investment decisions are your responsibility; we do not provide financial advice.</li>
            <li>All investments carry risks, and past performance is not indicative of future results.</li>
            <li>You must provide accurate and up-to-date information for your account.</li>
            <li>We reserve the right to modify or terminate our services at any time.</li>
            <li>Your account security and password are your responsibility.</li>
            <li>We are not liable for any losses incurred due to market fluctuations.</li>
            <li>Your investments are not insured or guaranteed by the government.</li>

        </ul>
    </div>
@endsection