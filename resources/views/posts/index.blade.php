<head>
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   </head>
@extends('layouts.app')
@section('content')
    <h1>Products</h1>
<hr>
    @if (count($posts)>0 )
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                <div class="col-md-4 col-sm-4">
                    {{--  <img style="width:100%" src="/cover_images/{{$post->cover_image}}">  --}}
                    <img style="width:100%" src="{{ URL::to('/')}}/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small> {!! $post->body !!}  
                        Written on {{$post->created_at}} by {{$post->user->name}}</small>         
                </div>
            </div>
            </div><hr>
                 @endforeach
                 <div class="h-50 d-flex justify-content-center">
                        <div class="my-auto" style="background:#6242f4;">
                        {{$posts->links()}}
                    </div>
                </div>
    @else
    <p>No post found</p>
    @endif
@endsection