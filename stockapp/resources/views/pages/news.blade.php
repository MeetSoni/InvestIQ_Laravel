@extends('layouts.main')
@section('content')

<div class="news-box">
      
       

        <div class="other-news">
            <div class="latest-news">
                <h2>Rushi Is now in Canada</h2>
                <div class="latest-news-more">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Latest News #1
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Latest News #2
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Latest news #3
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="latest-news-pic">
                    <img src="{{ asset('assets/imgs/images.jfif')}}" alt="">
                </div>
            </div>
            <div class="headlines">
                <h1>Dollar is Increasing day by day</h1>
                <h3>September 17th 2023</h3>
                <img src="{{ asset('assets/imgs/news2.jfif')}}" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum dignissimos aut, modi ducimus laudantium non praesentium veniam alias recusandae aliquid mollitia rem quibusdam impedit suscipit provident repellendus ipsa nulla harum assumenda ullam soluta ad placeat. Aperiam, praesentium quam vitae ipsam perferendis aliquid ipsum! Vero necessitatibus possimus ab porro magni assumenda!</p>
            </div>
            <div class="most-popular">
                <h3>Samip is Here</h3>
                <img src="{{ asset('assets/imgs/news3.jfif')}}" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi sunt quis consectetur voluptas inventore rerum quia sit ab nulla odit molestias, quidem repellat nostrum veritatis maiores omnis ad atque. Tempora minima voluptate sed magnam qui repellendus iusto? Ratione, vero vitae.</p>
            </div>
        </div>

        
    </div>
        
@endsection
