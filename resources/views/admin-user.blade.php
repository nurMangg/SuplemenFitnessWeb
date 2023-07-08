@extends('layouts.layout-admin')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>User</h3>
                <p class="text-subtitle text-muted">Suplemen Fitness</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User Authentication</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action=""
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Email</label>
                                        <input type="text" readonly id="name-product-column" class="form-control"
                                            value="admin@suplemenfitness.store">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Password</label>
                                        <input type="password" id="name-product-column" class="form-control"
                                            placeholder="change your password here..." name="password">
                                    </div>
                                </div>
                                <div class="mt-4 justify-content-end d-flex">                                  
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Change</button>                                 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Web Information</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ url('admin/user/update/0') }}">
                            @csrf
                            @foreach ( $data as $item)
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Address</label>
                                        <input type="text" id="name-product-column" class="form-control"
                                            name="address" value="{{ $item->alamat }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">email</label>
                                        <input type="email" id="name-product-column" class="form-control"
                                            name="email" value="{{ $item->email}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Number Whatsapp</label>
                                        <input type="text" id="name-product-column" class="form-control"
                                            name="nohp" placeholder="+62" value="{{ $item->nohp}}">
                                    </div>
                                </div>
                                <div class="mt-4 justify-content-end d-flex">                                  
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Change</button>                                 
                                </div>
                            </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
