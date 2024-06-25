@foreach ($data as $item)
    <div class="modal fade" id="modal_hapus{{ $item->id }}" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content" method="POST" action="{{ url('/admin/categories/' . $item->id) }}">
                @method('DELETE')
                @csrf
                <div class="modal-header bg-warning">
                    <h5 class=" text-capitalize text-white" id="modal_hapusTitle">categories</h5>
                    <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col mb-3 text-center">
                        <h3>Anda Yakin?</h3>
                        <h4>{{ $item->name }}</h4>
                        <h4>Data Akan di Hapus.</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-outline-success">HAPUS</button>
                </div>
            </form>
        </div>
    </div>
  
@endforeach
