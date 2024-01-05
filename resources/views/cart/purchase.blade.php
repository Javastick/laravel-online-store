@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card">
        <div class="card-header">
            Pembayaran Selesai
        </div>
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Selamat, pembayaran telah selesai. Nomor pesanan: <b>#{{ $viewData["order"]->getId() }}</b>
            </div>
        </div>
    </div>
@endsection
