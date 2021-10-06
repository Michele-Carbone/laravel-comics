@extends('layouts.main')

@section('title', 'TV SERIE')



@section('products')
    
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