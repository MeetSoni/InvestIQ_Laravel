@extends('layouts.main')
@section('content')
<div class="home-heading">
<div class="home-heading-text">
<h1 class="heading1">InvestIQ</h1>
<h2 class="heading2">Strategic Investing, Elevated IQ: investIQ</h2>
<h3 class="heading3">Informed, strategic investing, and the amalgamation of intelligence with financial decisions, which align with the concept of "investIQ."</h3>

</div>
<div class="home-heading-pic">
    <img src="{{ asset('assets/imgs/stock_icon.jpg')}}" alt="">
</div>

</div>
<div></div>
        <table class="stock-table">
            <thead>
                <tr>
                    <th>Stock Symbol</th>
                    <th>Price</th>
                    <th>Change</th>
                    <th>Buy</th>
                    <th>Sell</th>
                </tr>
            </thead>
            <tbody id="stock-data">
                <!-- Stock data will be populated here -->
               
            </tbody>
        </table>
    </div>
    <script src="{{ asset('assets/js/home.js') }}" ></script>

@endsection