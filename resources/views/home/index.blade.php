@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
    <div class="row home d-flex align-items-center text-center text-white">
        <div class="text">
            <p>Diskon sampe 100%, kan ga masuk akal ya?</p>
            <p>Cuma di toko gajelas ini doang kayaknya <small class="text-secondary">tapi boong</small>, mangkanya</p>
            <a href="{{ route('product.index')}}" class="btn border-light link-light p-2">Ayo Belanja</a>
        </div>
    </div>
@endsection