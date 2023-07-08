@extends('layouts.layout-page')



@section('content')

<section class="subheading">
    <div class="container text-center  text-light" style="padding-top: 250px; padding-bottom: 250px">
        <h2>Sistem Pendukung Keputusan</h2>
        <h5><a href="/" style="color: rgb(0, 115, 255); text-decoration: none">Home</a> &nbsp;|&nbsp; Recommendation</h5>
    </div>
</section>
<section>
    <div class="container text-center mt-5">
        <h2><strong >Pemilihan Suplemen Fitness Metode SAW</strong></h2>
        <p style="font-size: 20px">Pilihlah suplemen fitness untuk mendapatkan manfaat yang tak terbantahkan. Dukungan nutrisi yang tepat akan meningkatkan performa, pemulihan, dan pertumbuhan ototmu. Metode SAW membantu kamu mengidentifikasi suplemen fitness terbaik dengan memperhitungkan preferensi dan kebutuhan pribadimu. Pertimbangkan faktor-faktor yang penting, berikan bobot pada masing-masing faktor, dan pilihlah suplemen dengan skor total tertinggi.</p>
    </div>
</section>

@include('spk-page-edit') 
<section class="container mb-5 mt-5">
    <!-- Table head options start -->
    <section class="">
        <div class="row" id="table-head">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-content mt-3">
                        <h5 class="ps-3">Bobot Kriteria</h5>
                        <!-- table head dark -->
                        <div class="table-responsive-lg">
                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="ps-3">Harga</th>
                                        <th scope="col">Isi</th>
                                        <th scope="col">Protein</th>
                                        <th scope="col">Gula</th>
                                        <th scope="col">Kalori</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th class="ps-3">{{ $widget1['kriterias'] }}</th>
                                        <td>{{ $widget2['kriterias'] }}</td>
                                        <td>{{ $widget3['kriterias'] }}</td>
                                        <td>{{ $widget4['kriterias'] }}</td>
                                        <td>{{ $widget5['kriterias'] }}</td>
                                        <td>{{ $widget1['kriterias'] + $widget2['kriterias'] + $widget3['kriterias'] + $widget4['kriterias'] + $widget5['kriterias'] }}</td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modal1">Ubah</a>
                                            
                                        </td>
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


<section class="table-data container mb-5">
    <!-- Table head options start -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-content mt-3">
                        <h5 class="ps-3">Normalisasi</h5>
                        <!-- table head dark -->
                        <div class="table-responsive-lg">
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

<section class="table-data container mb-5">
    <!-- Table head options start -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-content mt-3">
                        <h5 class="ps-3">Hasil</h5>
                        <!-- table head dark -->
                        <div class="table-responsive-lg">
                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="ps-3">Suplemen Fitness Terbaik</th>
                                        <th>Hasil Perhitungan</th>
                                        <th>Deskripsi</th>
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
                                        <td>
                                            <a href="" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modal{{ $item->id }}">Lihat</a>
                                        </td>
                                    </tr>
                                    @include('product-details')
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

