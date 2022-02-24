@extends('admin.layouts.base')

@section('page_title')
    All Comics
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table bg-light rounded-3 overflow-hidden">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image URL</th>
                        <th scope="col">Edition</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{$comic->id}}</th>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->image}}</td>
                            <td>{{$comic->edition}}</td>
                            <td>{{date('d/M/Y H:i',strtotime('+1 hour',strtotime($comic->created_at)))}}</td>
                            <td>{{date('d/M/Y H:i',strtotime('+1 hour',strtotime($comic->updated_at)))}}</td>
                            <td>
                                <a href="{{route('comics.edit', $comic)}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('comics.show', $comic)}}" class="btn btn-primary">Show</a>
                            </td>
                         </tr>
                        @endforeach
                      </tbody>
                  </table>
            </div>
            {{$comics->links()}}
        </div>
    </div>
@endsection