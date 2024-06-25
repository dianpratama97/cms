<div class="modal fade" id="modal_add" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" method="POST" action="{{ url('/admin/categories') }}">
            @csrf
            <div class="modal-header bg-primary">
                <h5 class="text-capitalize text-white" id="modal_addTitle">categories</h5>
                <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" />
                        @error('name')
                            <span class='text-danger'>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">BATAL</button>
                <button type="submit" class="btn btn-outline-success">SIMPAN</button>
            </div>
        </form>
    </div>
</div>
