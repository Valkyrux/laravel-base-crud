@extends('layouts.admin_base')

@section('page_title')
    {{Route::currentRouteName()}}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-secondary">
                <h1 class="fs-4">
                    Welcome! <br>
                    Here you can view all comics and add a new one!
                </h1>
            </div>
        </div>
    </div>
@endsection