@extends('layouts.app')  
@section('content')

<div class="container">
    <div class="row pt-5 pb-3">
        <div class="col blogs-header">
        <h5>LATEST BLOG POST</h5>
          <hr>
          </div>
    </div>
    <div class="row">
      <div class="col head">
      <a href="/single-blog">
         <div class="top-image top-blog d-flex flex-wrap align-content-end" style="background-image: linear-gradient(rgba(255,259,250,0.6), rgba(255,250,250,0.6)), url(/blog/blogs/image/header-blog.jpg)">
         <h6>Artist Mariah Dekkenga Uses a Board  <br>Game to Rethink Abstract Painting</h6>
         <p>In order to visit Mariah Dekkenga’s current show, “Non-Zero Sum,” at Situations on the Lower East Side of Manhattan, 
         <br>one has to make a series of choices. What time to leave to make it there? At the subway station, run to make the 
         train?<br> Wait for the walk sign at the crosswalk or jaywalk? Say hello to old friends on the sidewalk?</p>
       </div>
       </a>
    </div>
  </div>
</div>

<div class="container">
    <div class="row pt-5 pb-5">
        @foreach ($blogi as $item) 
          <div class="col-12 col-sm-6 col-lg-3 all-blogs">
             <img class="blog pt-3 pb-1" src="{{ $item->img }}" alt="">
                <p class="data">{{ $item->Autor }}</p>
                   <h6>{{ $item->title }}</h6>
                  <p>{{ $item->body }}</p>
            </div>
          @endforeach
     </div>
    </div>
@endsection



