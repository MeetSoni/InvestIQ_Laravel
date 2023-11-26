@extends('layouts.main')
@section('content')
<div class="contact_container">
       
        <div class="left">

            <div class="left-top">
                <div class="l1">
                    <i class="fa-solid fa-location-dot fa-2x" style="color:#537895 " ></i>
                    <h2>Office Address</h2>
                    <p>141 Humberwood dr, M9X 6b8</p>
                    
                </div>
                <div class="l2">
                    <i class="fa-solid fa-phone fa-2x" style="color:#537895 "></i>
                    <h2>Phone</h2>
                    <p>647-387-3939</p>
                </div>
            </div>
            <div class="left-bottom">
                <div class="l3">
                    <i class="fa-solid fa-fax fa-2x" style="color:#537895 "></i>
                    <h2>Fax</h2> 
                    <p>647-387-3940</p>
                </div>
                <div class="l4">
                    <i class="fa-solid fa-envelope fa-2x"style="color: #537895 "></i>
                    <h2>Email</h2>
                    <p>inquiry@investiq.ca</p>
                </div>
            </div>
        </div>
        <div class="right">
            <h2>Contact Us</h2>
            <form action="#" method="post">
                <input type="text" placeholder="Full Name" id="name" name="name" required>

                <input type="email" placeholder="Your email" id="email" name="email" required>

                <textarea id="message" placeholder="Type Message" name="message" required></textarea>

                <input type="submit" value="Send Message">
            </form>
        </div>

    </div>
    @endsection
