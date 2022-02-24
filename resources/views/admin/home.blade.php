@extends('admin.layouts.base')

@section('page_title')
    {{Route::currentRouteName()}}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-secondary">
                <h1 class="fs-4">
                    Welcome! <br>
                    Here you can view all comics, edit an existing comic and add a new one!
                </h1>
            </div>
        </div>
    </div>
@endsection