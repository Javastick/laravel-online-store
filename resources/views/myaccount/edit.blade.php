@extends('myaccount.index')
@section('profile')

    <div class="card mb-4">
        <div class="card-header">
            Edit Profil
        </div>
        <div class="card-body pb-5">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('myaccount.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Foto</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input type="file" accept=".jpg, .jpeg, .png" name="image" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nama</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input type="text" name="name" value="{{ $viewData['account']->getName() }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">No. HP</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input type="number" name="phone" value="{{ $viewData['account']->getPhone() }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Alamat</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <textarea name="address" rows="3" class="form-control">{{ $viewData['account']->getAddress() }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row text-center ">
                    <div class="col">
                        <a href="{{ route('myaccount.index') }}" class="btn btn-warning my-3 mx-2">Batal</a>
                        <button type="submit" class="btn btn-primary my-3 mx-2">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
