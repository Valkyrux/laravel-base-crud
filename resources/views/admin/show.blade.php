@extends('admin.layouts.base')

@section('title')
    {{$comic->title}}
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-4 offset-4">
      <div class="card">
        <img class="w-100" src="{{$comic->image}}" alt="{{$comic->title}}">
        <div class="card-body">
          <h5 class="card-title"><span class="text-primary">Title: </span>{{$comic->title}}</h5>
          <h6><span class="text-primary">Authors: </span>{{$comic->authors}}</h6>
          <h6><span class="text-primary">Artists: </span>{{$comic->artists}}</h6>
          <p class="card-text">{{$comic->description}}</p>
          <h6><span class="text-primary">Price: </span>{{$comic->price}}&dollar;</h6>
          <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection