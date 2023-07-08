<!-- Modal -->
<div class="modal fade" id="modal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail {{ $item->nama_suplemen }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="image-detail-product" style="text-align: center">
                    <img src="{{ url('images/product/'.$item->image) }}" alt="">
                </div>
                <div class="list-detail-product ms-4 mt-5">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <label for="first-name-column" class="fw-bold">Name Product</label>
                            <p>{{ $item->nama_suplemen }}</p>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="first-name-column" class="fw-bold">Price</label>
                            <p>{{ $item->harga }}</p>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="first-name-column" class="fw-bold">Weight</label>
                            <p>{{ $item->isi }}</p>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="first-name-column" class="fw-bold">Protein</label>
                            <p>{{ $item->protein }}</p>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="first-name-column" class="fw-bold">Sugar</label>
                            <p>{{ $item->gula }}</p>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="first-name-column" class="fw-bold">Calory</label>
                            <p>{{ $item->kalori }}</p>
                        </div>
                        <div class="col-12">
                            <label for="first-name-column" class="fw-bold">Information</label>
                            <p style="text-align: justify">{{ $item->info }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
