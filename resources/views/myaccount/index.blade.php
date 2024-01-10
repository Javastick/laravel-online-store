@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="bg-light mb-3 p-2 rounded copyright">
        <div class="row g-0 d-flex justify-content-between">
            <div
                class="profile col-lg-4 col-sm-9 mb-2 pt-3 d-flex flex-column align-items-center rounded shadow border bg-light text-dark">
                <img src="/storage/img/{{ $viewData['account']->getImage() }}" alt="" class="rounded-circle"
                    width="75" height="75">
                <h4 class="mt-2 mb-0"><strong>{{ $viewData['account']->getName() }}</strong></h4>
                <small class=" text-secondary">{{ $viewData['account']->getEmail() }}</small>
                
                <hr>

                <div class="row border-top border-bottom w-100">
                    <div class="col w-100 p-2 d-flex flex-column align-items-center">
                        <div class="w-75">Jumlah Pesanan</div>
                        <div class="w-75">
                            <a href="" class="link-success link-underline-opacity-0">
                                <strong>
                                    {{ $viewData['account']->getOrders()->count() }}
                                </strong>
                            </a>
                        </div>
                    </div>
                    <div class="col w-100 p-2 d-flex flex-column align-items-center border-start">
                        <div class="w-75">Saldo</div>
                        <div class="w-75">
                            <a class="link-warning link-underline-opacity-0">
                                <strong>
                                    Rp{{ $viewData['account']->getBalance() }}
                                </strong>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row w-100 p-2 border-bottom">
                    <div class="col-6">Status:</div>
                    <div class="col-6">
                        <a class="link-primary link-underline-opacity-0">
                            <strong>
                                {{ $viewData['account']->getRole() }}
                            </strong>
                        </a>
                    </div>
                </div>
                <div class="row w-100 p-2 border-bottom">
                    <div class="col-6">No. HP</div>
                    <div class="col-6">
                        <a class="link-dark link-underline-opacity-0">
                            {{ $viewData['account']->getPhone() }}
                        </a>
                    </div>
                </div>
                <div class="row w-100 p-2 border-bottom mb-4">
                    <div class="col-6">Alamat</div>
                    <div class="col-6">
                        <a class="link-dark link-underline-opacity-0">
                            {{ $viewData['account']->getAddress() }}
                        </a>
                    </div>
                </div>
                <div class="row w-100 text-center border-bottom rounded d-flex justify-content-center align-items-center">
                    <a href="{{ route('myaccount.edit') }}" class="link-dark d-flex justify-content-center mb-3 w-50">
                        <p class="">Edit Profil</p><i class="bi-pencil ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-7 col-sm-9 shadow rounded p-2 bg-light border">
                @yield('profile')
            </div>
        </div>
    </div>
@endsection
