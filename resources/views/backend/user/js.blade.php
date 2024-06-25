@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
@endpush
@push('js-ext')
    <script>
        $('.hapus').on('click', function(e) {
            e.preventDefault();
            let data = $(this).data();
            let id = data.id;
            Swal.fire({
                title: "Anda Yakin ?",
                text: "Data Ini Akan Di Hapus.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#1a9bff",
                cancelButtonColor: "#e5c503",
                confirmButtonText: "HAPUS",
                cancelButtonText: "BATAL",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: 'DELETE',
                        url: `{{ url('admin/user') }}/${id}`,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(res) {
                            location.reload();
                        }
                    });
                }
            });
        });
    </script>
    <script>
        const modal = new bootstrap.Modal($('#modal-edit'));
        $('#users-table').on('click', '.action', function() {

            let data = $(this).data();
            let id = data.id;
            let jenis = data.jenis;

            $.ajax({
                method: 'get',
                url: `{{ url('admin/user/') }}/${id}/edit`,
                success: function(response) {
                    $('#modal-edit').find('.modal-edit').html(response);
                    modal.show();
                    simpan();
                }
            });

            function simpan() {
                $('#form-edit').on('submit', function(e) {
                    e.preventDefault()
                    const _form = this;
                    const formData = new FormData(_form);
                    $.ajax({
                        method: 'POST',
                        url: `{{ url('admin/user/') }}/${id}`,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            location.reload();
                            modal.hide();
                        },
                        error: function(res) {
                            let errors = res.responseJSON?.errors;
                            $(_form).find('.text-danger.text-small').remove()
                            if (errors) {
                                for (const [key, value] of Object.entries(errors)) {
                                    $(`[name='${key}']`).parent().append(
                                        `<span class="text-danger text-small">${value}</span>`
                                    )
                                }
                            }
                        }
                    });
                });
            }
        });
    </script>
@endpush
