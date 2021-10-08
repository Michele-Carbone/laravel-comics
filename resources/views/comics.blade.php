@extends('layouts.main')

@section('title', 'DS Comics') 


@section('content')
    <!--card-->
    <section id="comics">
        <div class="container">
            <h2>Current series</h2>
            <div class="row">
                @foreach($comics as $comic)
                <a href="{{route('comic', $id = $loop->index)}}" class="col">
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
@endsection

