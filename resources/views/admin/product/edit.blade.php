@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')

    <div class="card mb-4">
        <div class="card-header">
            Edit Produk
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('admin.product.update', ['id' => $viewData['product']->getId()]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nama</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input type="text" name="name" value="{{ $viewData['product']->getName() }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Harga</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input type="number" name="price" value="{{ $viewData['product']->getPrice() }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Gambar</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input type="file" accept=".jpg, .jpeg, .png" name="image" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <textarea name="description" rows="3" class="form-control">{{ $viewData['product']->getDescription() }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>


@endsection
