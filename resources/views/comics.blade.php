@extends('layouts.main')

@section('title', 'DS Comics') 


@section('content')
    <!--card-->
    <section id="comics">
        <div class="container">
            <h2>Current series</h2>
            <div class="row">
                @foreach($comics as $comic)
                <a href="" class="col">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <h3>{{$comic['title']}}</h3>
                </a >
                @endforeach
            </div>
            <div  class="load-more">
                <a href="">LOAD MORE</a>
            </div>
            
            
        </div>
    </section>
    <!--products-->
    <section id="products">
        <div class="container">        
            <ul>
                <li><img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">DIGITAL COMICS</li>
                <li><img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">DC MERCHANDISE</li>
                <li><img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">SUBSCRIPTION</li>
                <li><img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">COMIC SHOP LOCATOR</li>
                <li><img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">DC POWER VISA</li>
            </ul>
        </div>
    </section>
@endsection

