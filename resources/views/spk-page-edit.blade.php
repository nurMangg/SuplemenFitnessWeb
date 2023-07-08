<!-- Modal -->
<section>
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <form class="form" method="POST" action="{{ url('kriteria/update') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Bobot Kriteria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-content">
                            <div class="card-body">
                                <p style="font-style: italic">Total Bobot Harus Bernilai 1</p>
                                <table class="table mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="ps-3">Harga</th>
                                            <th>Isi</th>
                                            <th>Protein</th>
                                            <th>Gula</th>
                                            <th>Kalori</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data_bobot as $number=>$dBobot)
                                        
                                        <td><input type="text" name="data{{ $number }}" value="{{ $dBobot->bobot }}"></td>
                                        @endforeach
                                        
                                    </tbody>
                                </table>

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
</section>
