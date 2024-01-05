@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    @forelse ($viewData["orders"] as $order)
        <div class="card mb-4">
            <div class="card-header">
                Pesanan #{{ $order->getId() }}
            </div>
            <div class="card-body">
                <b>Tanggal : </b>{{ $order->getCreatedAt() }} <br>
                <b>Total : </b>Rp{{ $order->getTotal() }} <br>
                <table class="table table-bordered table-striped text-center mt-3">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->getItems() as $item)
                            <tr>
                                <td>{{ $item->getId() }}</td>
                                <td>
                                    <a href="{{ route('product.show', ['id'=>$item->getProduct()->getId()])}}" class="link-success">
                                        {{ $item->getProduct()->getName() }}
                                    </a>
                                </td>
                                <td>Rp{{ $item->getPrice() }}</td>
                                <td>{{ $item->getQuantity() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @empty
    <div class="alert alert-danger" role="alert">
        Sepertinya anda belum pernah belanja di toko kami. Ayo belanja ditoko kami dan dapatkan barang kualitas tinggi.
    </div>
    @endforelse
@endsection
