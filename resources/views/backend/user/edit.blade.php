<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="{{ route('user.update', $data->id) }}" method="POST" id="form-edit">
        @csrf
        @method('PUT')
        <div class="modal-body">
            <div class="container">
                <div class="mt-3">
                    <label for="name" class="form-label">Nama Users</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ $data->name }}">
                </div>
                <div class="mt-3">
                    <label for="password" class="form-label">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" value="{{ $data->email }}">
                </div>
                <div class="mt-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password">
                </div>

                <div class="mt-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select @error('role') is-invalid @enderror" id="role" name="role">
                        <option value="">--pilih role--</option>
                        <option value="admin" {{ $data->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="operator" {{ $data->role == 'operator' ? 'selected' : '' }}>Operator</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-outline-success">Simpan</button>
        </div>
    </form>
</div>
