@extends('layouts.site')
@section('content')
<br><br>
<h1 style="color:white"><b>Comics List: </b></h1>
<br>

@if(count($comics)>0)
	@foreach($comics as $comic)
    <div class="container">
    <a href="/titles/{{{$comic->comic}}}">
	<div class="comDiv">
		
        <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
                <img src="\images\thumbnails\{{$comic->comic}}.jpg" width="333" height="400" class="img-fluid" alt="">
            </div>
            <div class="member-info">
                <h3 style="color: white">{{$comic->comic}}</h3>
                <span style="color: white">
                	<small>Artist: {{$comic->artist_name}}</small>
                	<p>Geners: <small>{{$comic->gener}}</small></p>
                </span>
            </div>
        </div>
  </div>
</a>
</div>
<hr>
	@endforeach
@endif




@endsection
