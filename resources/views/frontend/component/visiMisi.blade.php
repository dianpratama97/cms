<div id="services" class="services section">
    <div class="container">


        <div class="row gy-4 pt-lg-3">
            <!-- visi Plan: Start -->
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            <img src="{{ asset('storage/gambar/backend/config/' . $config->foto) }}"
                                alt="paper airplane icon" class="mb-4 pb-2" />
                            <h4 class="mb-1">VISI</h4>

                        </div>
                    </div>
                    <div class="card-body">
                        {!! $config->visi !!}
                    </div>
                </div>
            </div>
            <!-- visi Plan: End -->

            <!-- misi Plan: Start -->
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            <img src="{{ asset('storage/gambar/backend/config/' . $config->foto) }}"
                                alt="paper airplane icon" class="mb-4 pb-2" />
                            <h4 class="mb-1">MISI</h4>

                        </div>
                    </div>
                    <div class="card-body">
                        {!! $config->misi !!}
                    </div>
                </div>
            </div>
            <!-- misi Plan: End -->

        </div>
    </div>
</div>
