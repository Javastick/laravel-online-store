@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">{!! $viewData["author"] !!}</p>
                <hr>
                <p class="lead mt-3 text-justify">{{ $viewData["description"] }}</p>
            </div>
            <div class="col-lg-4 ms-auto">
                <img src="/img/book.png" alt="" class="border border-dark">
            </div>
        </div>
    </div>
@endsection