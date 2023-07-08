@extends('layouts.layout-admin')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Product</h3>
                <p class="text-subtitle text-muted">Suplemen Fitness</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    @include('component.message')

    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Product</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="POST" action="{{ url('admin/product') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Name Product</label>
                                            <input type="text" id="name-product-column" class="form-control"
                                                placeholder="Name Product" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Price</label>
                                            <input type="number" id="price-column" class="form-control"
                                                placeholder="Price" name="price">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="isi-column">Weight</label>
                                            <input type="number" id="isi-column" class="form-control" placeholder="Isi"
                                                name="isi">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="protein-floating">Protein</label>
                                            <input type="number" id="protein-floating" class="form-control"
                                                name="protein" placeholder="Protein">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="gizi-column">Sugar</label>
                                            <input type="number" id="gula-column" class="form-control" name="gula"
                                                placeholder="gula">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kalori-column">Calory</label>
                                            <input type="number" id="kalori-column" class="form-control" name="kalori"
                                                placeholder="kalori">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="image-column">Upload Image</label>
                                            <input type="file" id="image-column" class="form-control" name="image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="info" class="form-label">Information</label>
                                        <textarea class="form-control" id="info" name="info"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->

    <section class="table-data">
        <!-- Table head options start -->
        <section class="section">
            <div class="row" id="table-head">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content mt-3">
                            <!-- table head dark -->
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="ps-3">NO</th>
                                            <th>NAME PRODUCT</th>
                                            <th>PRICE</th>
                                            <th>WEIGHT</th>
                                            <th>PROTEIN</th>
                                            <th>SUGAR</th>
                                            <th>CALORY</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $i => $item)
                                        <tr>
                                            <td class="text-bold-500 ps-3">{{ $i+1}}</td>
                                            <td>{{ $item->nama_suplemen }}</td>
                                            <td class="text-bold-500">{{ $item->harga }}</td>
                                            <td>{{ $item->isi }}</td>
                                            <td>{{ $item->protein }}</td>
                                            <td>{{ $item->gula }}</td>
                                            <td>{{ $item->kalori }}</td>
                                            <td>
                                                <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#modal{{ $item->id }}">Edit</a>
                                                <form action="{{ url('/admin/product/'.$item->id)}}" class="d-inline"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        name="submit">Delete</button>
                                                </form>

                                            </td>
                                        </tr>
                                        @include('admin-edit')
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Table head options end -->

    </section>
</div>


@endsection
