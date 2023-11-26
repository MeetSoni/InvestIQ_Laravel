@extends('layouts.main')
@section('content')
<div class="about_container">
       
        <div class="abt_team">
            <h2>Meet our Team</h2>
            <div class="abt_team_data">
                <div class="abt_t1">
                    <img src="{{ asset('assets/imgs/meet.jpeg')}}" alt="Meet's Picture">
                    <div class="t1_data">
                        <h3>Meet Soni</h3>
                        <p>MERN Stack Developer</p>
                        <p>Toronto,ON</p>
                    </div>
                </div>
                <div class="abt_t2">
                    <img src="{{ asset('assets/imgs/hardi.jpeg')}}" alt="Hardi's Picture">
                    <div class="t2_data">
                        <h3>Hardi Shastri</h3>
                        <p>Back-end Developer</p>
                        <p>Toronto,ON</p>
                    </div>
                </div>
                <div class="abt_t3">
                    <img src="{{ asset('assets/imgs/maitri.jpeg')}}" alt="Maitri's Picture" >
                    <div class="t3_data">
                        <h3>Mairi Patel</h3>
                        <p>Front-end Developer</p>
                        <p>Toronto,ON</p>
                    </div>
                </div>
                <div class="abt_t4">
                    <img src="{{ asset('assets/imgs/rushi.jpeg')}}" alt="Rushi's Picture">
                    <div class="t4_data">
                        <h3>Rushi Patel</h3>
                        <p>Full Stack Developer</p>
                        <p>Toronto,ON</p>
                    </div>
                </div>
                <div class="abt_t5">
                    <img src="{{ asset('assets/imgs/samip.jpeg')}}" alt="Samip's Picture">
                    <div class="t5_data">
                        <h3>Samip Vichare</h3>
                        <p>Full Stack Developer</p>
                        <p>Toronto,ON</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="abt_top">
            <h2>About us</h2>
            <p>We're a samall, tight-knit team. We are dedicated to empowering individuals and investors
            of all levels to navigate the world of financial markets with confidence and success. Established 
            with the mission of democratizing stock trading and investment opportunities, we provide a platform 
            that's accessible, informative, and innovative.</p>

            <h2>Our Vision</h2>
            <p>Our vision is simple yet profound: to make financial markets accessible to everyone. We believe that 
                financial empowerment should not be restricted to a select few. By offering a user-friendly and 
                comprehensive platform, we aim to level the playing field, enabling both beginners and experienced 
                traders to make informed decisions and achieve their financial goals.</p>
            

        </div>
    </div>
@endsection