<div class="m-4">
    <!-- Search widget-->
    <div class="card mb-4 shadow-lg">
        <div class="card-header">Pencarian Artikel</div>
        <div class="card-body">
            <form action="{{ route('artikel.pencarian') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Cari Artikel..." name="keyword" />
                    <button class="btn btn-primary" id="button-search" type="submit">Cari</button>
                </div>
            </form>
            <a href="{{ url('/artikel') }}" class="btn btn-warning btn-sm mt-3 d-grid">Reset</a>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4 shadow-lg">
        <div class="card-header">Kategori</div>
        <div class="card-body">
            <div>
                @foreach ($categories as $item)
                    <span class="bg-primary badge text-white"># {{ $item->name }}</span>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4 shadow-lg">
        <div class="card-header">Widget</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to
            use, and feature the Bootstrap 5 card component!</div>
    </div>
    <!-- Side Artikel-->
    <div class="card mb-4 shadow-lg">
        <div class="card-header">Artikel</div>
        <div class="card-body">
            @foreach ($artikel as $item)
                    <li ><a href="{{ url('p/'.$item->slug) }}" class="unstyle">{{ $item->title }}</a></li>
            @endforeach

        </div>
    </div>
</div>
