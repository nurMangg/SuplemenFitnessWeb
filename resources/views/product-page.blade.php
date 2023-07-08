@extends('layouts.layout-page')



@section('content')

<section class="subheading">
    <div class="container text-center  text-light" style="padding-top: 250px; padding-bottom: 250px">
        <h2>Produk</h2>
        <h5><a href="/" style="color: rgb(0, 115, 255); text-decoration: none">Home</a> &nbsp;|&nbsp; Product</h5>
    </div>
</section>
<section>
    <div class="container text-center mt-5">
        <h2><strong>Produk Kami</strong></h2>
        <p style="font-size: 20px">Kualitas dan keunggulan menjadi keutamaan dalam produk kami. Kami hadir dengan
            suplemen terbaik untuk memenuhi kebutuhan fitnessmu.</p>
    </div>
</section>
<section class="post">
    <div class="container mydiv">

        <div class="row">
            @foreach ($data as $item)
            <div class="col-md-4 mt-5">
                
                <div class="bbb_deals">
                    
                    <div class="bbb_deals_slider_container">
                        <div class=" bbb_deals_item">
                            <div class="bbb_deals_image"><img src="{{ url('images/product/'.$item->image) }}" alt="">
                            </div>
                            <div class="bbb_deals_content">
                                <div class="bbb_deals_info_line d-flex flex-row justify-content-between">
                                    <div class="bbb_deals_item_category"><a href="#">Suplemen Fitness</a></div>
                                </div>
                                <div class="bbb_deals_info_line d-flex justify-content-between">
                                    <div class="bbb_deals_item_name">{{ $item->nama_suplemen }}</div>
                                    <div class="bbb_deals_item_price" style="text-align: end">{{ $item->harga }}</div>
                                </div>
                                <div class="available">
                                    <div class="available_line d-flex flex-row justify-content-between">
                                    </div>
                                    <div class="available_bar"><span style="width:17%"></span></div>
                                </div>
                                <div class="button pb-5">
                                    <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modal{{ $item->id }}">View Details</a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @include('product-details')
            @endforeach

        </div>


    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endsection
