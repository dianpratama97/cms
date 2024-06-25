<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('backend/assets/img/logo.png') }}" alt="" width="75%">
            </span>
            <span class="app-brand-text demo menu-text fw-bold">SEKOLAH</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ url('/admin/dashboard') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div> dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ Request::routeIs('article*') ? 'active' : '' }}">
            <a href="{{ url('/admin/article') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div> articles</div>
            </a>
        </li>
        <li class="menu-item {{ Request::routeIs('categories*') ? 'active' : '' }}">
            <a href="{{ url('/admin/categories') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div>categories</div>
            </a>
        </li>
        <li class="menu-item {{ Request::routeIs('gallery*') ? 'active' : '' }}">
            <a href="{{ url('/admin/gallery') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div> Gallery</div>
            </a>
        </li>
        <li class="menu-item {{ Request::routeIs('video*') ? 'active' : '' }}">
            <a href="{{ url('/admin/video') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div> Video Web</div>
            </a>
        </li>

        <li class="menu-item {{ Request::routeIs('alumni*') ? 'active' : '' }}">
            <a href="{{ url('/admin/alumni') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div> Alumni</div>
            </a>
        </li>

        <li class="menu-item {{ Request::routeIs('magang*') ? 'active' : '' }}">
            <a href="{{ url('/admin/magang') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div> Magang</div>
            </a>
        </li>

        @if (auth()->user()->role == 'admin')
            <li class="menu-item {{ Request::routeIs('user*') ? 'active' : '' }}">
                <a href="/admin/user" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div>users</div>
                </a>
            </li>
            <li class="menu-item {{ Request::routeIs('admin.pesan') ? 'active' : '' }}">
                <a href="{{ route('admin.pesan') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div>pesan</div>
                </a>
            </li>
            <li class="menu-item {{ Request::routeIs('config*') ? 'active' : '' }}">
                <a href="{{ url('/admin/config') }}" class="menu-link ">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div> Setting Web</div>
                </a>
            </li>
        @endif

        <li class="menu-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="route('logout')" class="menu-link"
                    onclick="event.preventDefault();
                this.closest('form').submit();">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div>Logout</div>
                </a>
            </form>
        </li>
    </ul>
</aside>
