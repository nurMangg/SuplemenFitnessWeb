@extends('layouts.layout-page')



@section('content')
<section class="subheading">
    <div class="container text-center  text-light" style="padding-top: 250px; padding-bottom: 250px">
        <h2>Kontak</h2>
        <h5><a href="/" style="color: rgb(0, 115, 255); text-decoration: none">Home</a> &nbsp;|&nbsp; Contact</h5>
    </div>
</section>
<section>
    <div class="container text-center mt-5 mb-5">
        <h2><strong >Kontak Kami</strong></h2>
        <p style="font-size: 20px">Kami menghargai setiap pertanyaan atau saran dan kritik yang masuk. Jangan sungkan untuk menghubungi kami melalui kontak yang tersedia. Kami berjanji untuk memberikan layanan yang baik.</p>
    </div>
</section>
<section class="container m-5">
        @include('component.message')
</section>
<section class="form-contact" style="margin-bottom: 200px">
    <div class="container">
        <form action="/contact" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" required></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>

    </div>
</section>

@endsection
