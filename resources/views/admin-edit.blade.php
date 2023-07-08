<!-- Modal -->
<div class="modal fade" id="modal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <form class="form" method="POST" action="{{ url('admin/product/'.$item->id) }}">
            @csrf
            @method('PUT');
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Product {{ $item->nama_suplemen }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-content">
                        <div class="card-body">
                            
                            <div class="sepatu">
                                @if($item->image)
                                    <img src="{{ url('images/product/'.$item->image) }}" style="height: 250px;width:300px; align-content: center; padding-bottom: 15px" >
                                @else 
                                    <span>No image found!</span>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Name Product</label>
                                        <input type="text" id="name-product-column" class="form-control"
                                            placeholder="Name Product" value="{{ $item->nama_suplemen }}" name='name'>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Price</label>
                                        <input type="number" id="price-column" class="form-control" placeholder="Price"
                                            value="{{ $item->harga }}" name="price">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="isi-column">Weight</label>
                                        <input type="number" id="isi-column" class="form-control" placeholder="Isi"
                                            value="{{ $item->isi }}" name="isi">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="protein-floating">Protein</label>
                                        <input type="number" id="protein-floating" class="form-control"
                                            value="{{ $item->protein }}" name="protein" placeholder="Protein">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="gizi-column">Sugar</label>
                                        <input type="number" id="gizi-column" class="form-control"
                                            value="{{ $item->gula }}" name="gula" placeholder="gula">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="kalori-column">Calory</label>
                                        <input type="number" id="kalori-column" class="form-control"
                                            value="{{ $item->kalori }}" name="kalori" placeholder="kalori">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="info" class="form-label">Information</label>
                                    <textarea class="form-control" id="info" name="info"
                                        rows="3" value="">{{ $item->info }}</textarea>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

            </div>
        </form>
    </div>
</div>
