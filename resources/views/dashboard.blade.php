@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        @if(!Auth::guest())
                            @if(Auth::user()->id == '11')
                        <a href="/posts/create" class="btn btn-primary">Create New Post</a>
                        <hr>    
                        @endif
                        @endif
                       @if(count($posts) > 0)
                            <table class="table table-striped">
                               
                                @foreach($posts as $post)
                                    <tr>                                  
                                        <div class="well">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <img style="width:100%" src="{{ URL::to('/')}}/cover_images/{{$post->cover_image}}">
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                                <small> {!! $post->body !!}  </small>
                                                    @if(!Auth::guest())
                                                    @if(Auth::user()->id == $post->user_id)
                                                    <a href='/posts/{{$post->id}}/edit' class="btn btn-primary"> Edit </a> 
                                                    {!! Form::open(['action' => ['PostsController@destroy' , $post->id], 'method'=>'POST', 'class' => 'btn btn-right pull-right']) !!}
                                                    {{ Form::hidden('_method','DELETE')}}
                                                    {{ Form::submit('Delete',['class' => 'btn btn-danger']) }}
                                                    {!!Form::close()!!}
                                                    @endif
                                                @endif
                                                <br><small> Written on {{$post->created_at}} by {{$post->user->name}}</small>          

                                                <hr>
                                            </div>
                                        </div>
                                        
                                        </div>
                                        
                                    </tr>
                                @endforeach
                            </table>
                            @else
                            <p>You have no Posts</p>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
