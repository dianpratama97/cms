@extends('backend.layouts.main')
{{-- @section('subTitle', '') --}}
@section('content')
    <div class="row">
        <div class="col-xl-6 mb-4 col-lg-5 col-12">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-7">
                        <div class="card-body">
                            <h4 class="card-title mb-4" style="color: rgb(0, 0, 0)">SISTEM INFORMASI AKADEMIK SEKOLAH</h4>
                        </div>
                    </div>
                    <div class="col-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('backend') }}/assets/img/illustrations/girl-with-laptop.png" height="140"
                                alt="view sales">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 mb-4 col-lg-5 col-12">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-7">
                        <div class="card-body text-nowrap">
                            <h5 class="card-title mb-0">
                                <div id="clock"></div>
                                <div id="tanggal">{{ date('d M Y') }}</div>
                            </h5>
                        </div>
                    </div>
                    <div class="col-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('backend') }}/assets/img/illustrations/card-advance-sale.png" height="140"
                                alt="view sales">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-12 mb-4 col-lg-12 col-12">
        <div class="card h-100">
            <div class="card-header">
                <div class="d-flex justify-content-between mb-3">
                    <h5 class="card-title mb-0">Statistics</h5>
                    <small class="text-muted">{{ date('d-m-Y') }}</small>
                </div>
            </div>
            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2">
                                <i class="ti ti-chart-pie-2 ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0" style="color: rgb(0, 0, 0)">{{ $user }}</h5>
                                <h4 style="color: rgb(0, 0, 0)">JUMLAH USERS</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-info me-3 p-2">
                                <i class="ti ti-users ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0" style="color: rgb(0, 0, 0)">{{ $pesan }}</h5>
                                <h4 style="color: rgb(0, 0, 0)">JUMLAH PESAN</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-danger me-3 p-2">
                                <i class="ti ti-shopping-cart ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0" style="color: rgb(0, 0, 0)">{{ $alumni }}</h5>
                                <h4 style="color: rgb(0, 0, 0)">JUMLAH ALUMNI</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-success me-3 p-2">
                                <i class="ti ti-currency-dollar ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0" style="color: rgb(0, 0, 0)">{{ $artikel }}</h5>
                                <h4 style="color: rgb(0, 0, 0)">JUMLAH ARTIKEL</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        #tanggal {
            font-size: 34px;
            /* margin-top: -75px; */
            text-align: center;
            color: rgb(0, 0, 0);
        }
        #clock {
            font-size: 34px;
            margin-top: -60px;
            margin-left: -20px;
            text-align: center;
            color: rgb(0, 0, 0);
        }
    </style>
@endpush
@push('js-ext')
    <script>
        // Calling showTime function at every second
        setInterval(showTime, 1000);

        // Defining showTime funcion
        function showTime() {
            // Getting current time and date
            let time = new Date();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();

         

            hour =
                hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;

            let currentTime =
                hour +
                ":" +
                min +
                ":" +
                sec;

            // Displaying the time
            document.getElementById(
                "clock"
            ).innerHTML = currentTime;
        }

        showTime();
    </script>
@endpush
