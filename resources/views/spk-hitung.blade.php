@extends('layouts/layout-admin')

@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Kriteria</h3>
            <p class="text-subtitle text-muted">Suplemen Fitness</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Decission Support S</li>
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
                        <h5 class="ps-3">Bobot Kriteria</h5>
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="ps-3">Harga</th>
                                        <th>Isi</th>
                                        <th>Protein</th>
                                        <th>Gula</th>
                                        <th>Kalori</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                            
                                    <tr>
                                        <td class="ps-3">{{ $widget1['kriterias'] }}</td>
                                        <td>{{ $widget2['kriterias'] }}</td>
                                        <td>{{ $widget3['kriterias'] }}</td>
                                        <td>{{ $widget4['kriterias'] }}</td>
                                        <td>{{ $widget5['kriterias'] }}</td>
                                        <td>{{ $widget1['kriterias'] + $widget2['kriterias'] + $widget3['kriterias'] + $widget4['kriterias'] + $widget5['kriterias'] }}
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<section class="table-data">
    <!-- Table head options start -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-content mt-3">
                        <h5 class="ps-3">Normalisasi</h5>
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="ps-3">Nama</th>
                                        <th>Harga</th>
                                        <th>Isi</th>
                                        <th>Protein</th>
                                        <th>Gula</th>
                                        <th>Kalori</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td class="ps-3">{{$item->nama_suplemen }}</td>
                                        <td>{{$C1min['fitness'] / $item->harga}}</td>
                                        <td>{{$item->isi / $C2max['fitness']}}</td>
                                        <td>{{$item->protein / $C3max['fitness']}}</td>
                                        <td>{{$C4min['fitness'] / $item->gula}}</td>
                                        <td>{{$item->kalori / $C5max['fitness']}}</td>

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

<section class="table-data">
    <!-- Table head options start -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-content mt-3">
                        <h5 class="ps-3">Hasil</h5>
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="ps-3">Suplemen Fitness Terbaik</th>
                                        <th>Hasil Perhitungan</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td class="ps-3">{{$item->nama_suplemen}}</td>
                                        <td>
                                            {{(($C1min['fitness'] / $item->harga)*$widget1['kriterias'])+
                                            (($item->isi / $C2max['fitness'])*$widget2['kriterias'])+
                                            (($item->protein / $C3max['fitness'])*$widget3['kriterias'])+
                                            (($C4min['fitness'] / $item->gula)*$widget4['kriterias'])+
                                            (($item->kalori / $C5max['fitness'])*$widget5['kriterias'])}}
                                        </td>
                                     
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
