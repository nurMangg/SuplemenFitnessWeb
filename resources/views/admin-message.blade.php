@extends('layouts/layout-admin')

@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Message</h3>
            <p class="text-subtitle text-muted">Suplemen Fitness</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Message</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

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
                                        <th>EMAIL</th>
                                        <th>MESSAGE</th>
                                        <th>DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td class="text-bold-500 ps-3">{{ $item->id}}</td>
                                        <td>{{ $item->email }}</td>
                                        <td style="text-align: justify">{{ $item->pesan }}</td>
                                        <td>{{ $item->created_at}}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

    @endsection
