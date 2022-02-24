@extends('admin.layouts.base')

@section('title')
    {{$comic->title}}
@endsection

@section('content')
<div class="card row flex-row">
    <img class="col-3" src="{{$comic->image}}" alt="{{$comic->title}}">
    <div class="card-body col-9">
      <h5 class="card-title"><span class="text-primary">Title: </span>{{$comic->title}}</h5>
      <h6><span class="text-primary">Authors: </span>{{$comic->authors}}</h6>
      <h6><span class="text-primary">Artists: </span>{{$comic->artists}}</h6>
      <p class="card-text">{{$comic->description}}</p>
      <h6><span class="text-primary">Price: </span>{{$comic->price}}&dollar;</h6>
      <a href="{{route('comics.index')}}" class="btn btn-primary">Back to All</a>
    </div>
  </div>
@endsection