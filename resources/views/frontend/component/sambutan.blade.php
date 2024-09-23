<div id="services" class="services section">
    <div class="container">
  
        <div class="row">
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-body">
                        <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_kepsek) }}"
                            style="width: 56%; height: 100%; margin-left: 25%; border-radius: 30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-body" style="text-align: justify;">
                        {!! $config->sambutan_kepsek !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
